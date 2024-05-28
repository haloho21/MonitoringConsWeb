<?php

namespace App\Http\Controllers;

use DB;
use App\project;
use App\vendor;
use App\users;
use App\history_progress;
use App\evals;
use App\designator;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;
use Alert;
use Session;

class projectController extends Controller
{
    public function index(){

        $userID = Session::get('userID');
        $useronline = users::where('user_id', '=', $userID)->first();

        $users = users::where('user_type', '=', 'Pengawas Lapangan')->get();
        $vendors = vendor::all();
        

        if($useronline->user_type == 'Pengawas Lapangan'):
            $projects = DB::table('projects')
                ->join('vendors', 'projects.vendors_id', '=', 'vendors.vendors_id')
                ->join('users', 'projects.user_id', '=', 'users.user_id')
                ->join('tematiks', 'projects.tematik_id', '=', 'tematiks.tematik_id')
                ->select('projects.*', 'vendors.vendors_name', 'users.username', 'tematiks.tematik_name')
                ->where('projects.user_id', '=', $userID)
                ->orderBy('projects.project_id', 'desc')
                ->get();
            
            return view('pages.project.project', compact('projects', 'users', 'vendors'));

        else:
            $projects = DB::table('projects')
                ->join('vendors', 'projects.vendors_id', '=', 'vendors.vendors_id')
                ->join('users', 'projects.user_id', '=', 'users.user_id')
                ->join('tematiks', 'projects.tematik_id', '=', 'tematiks.tematik_id')
                ->select('projects.*', 'vendors.vendors_name', 'users.username', 'tematiks.tematik_name')
                ->orderBy('projects.project_id', 'desc')
                ->get();

            return view('pages.project.project', compact('projects', 'users', 'vendors'));
        endif;
        
    }
    
    public function store(Request $request)
    {
        $user_id = Session::get('userID');
        $user    = DB::table('wp.users')->where('user_id', '=', $user_id)->first();

        $request->validate([
            'project_code'  => 'required',
            'name_location' => 'required',
            'witel'         => 'required',
            'sto'           => 'required',
            'nilai_drm'     => 'required',
            'user_id'       => 'required',
            'toc'           => 'required',
            'project_start' => 'required',
            'vendors_id'    => 'required'
        ]);

        DB::table('projects')->insert([
            'project_code'  => strtoupper($request->project_code),
            'name_location' => strtoupper($request->name_location),
            'inserted_by'   => $user->user_id,
            'witel'         => strtoupper($request->witel),
            'sto'           => strtoupper($request->sto),
            'nilai_drm'     => $request->nilai_drm,
            'nilai_material'=> null,
            'nilai_jasa'    => null,
            'user_id'       => $request->user_id,
            'status_project'=> 'AANWIJZING & PERIZINAN',
            'persentase'    => 0,
            'project_approval'    => 1,
            'vendors_id'    => $request->vendors_id,
            'toc'           => $request->toc,
            'project_start' => null,
            'project_end'   => null,
            'description'   => null,
            'created_at'    => Carbon::now('GMT+7'),
            'project_start' => date('Y-m-d', strtotime($request->project_start)),
        ]);
        
        Alert::success('Success', 'Data LOP berhasil ditambah');
        return back();
    }

    public function edit(Request $request)
    {
        $request->validate([
            'project_code'  => 'required',
            'name_location' => 'required',
            'witel'         => 'required',
            'sto'           => 'required',
            'nilai_drm'     => 'required',
            'user_id'       => 'required',
            'vendors_id'    => 'required'
        ]);

        project::where('project_id', $request->project_id)
            ->update([
                'project_code'  => $request->project_code,
                'name_location' => $request->name_location,
                'witel'         => $request->witel,
                'sto'           => $request->sto,
                'nilai_drm'     => $request->nilai_drm,
                'user_id'       => $request->user_id,
                'vendors_id'    => $request->vendors_id,
                'created_at'    => Carbon::now('GMT+7')
        ]);

        Alert::success('success', 'Data project berhasil di ubah');
        return back();
    }

    public function destroy(Request $request)
    {   
        $projectID = $request->projectsID;

        project::where('project_id', '=', $projectID)->delete();

        Alert::success('success', 'Data berhasil dihapus');
        return back(); 
    }

    public function viewProject_PrintPDF($project_id)
    {
        $designators = designator::all();
        
        // SELECT DATA PROJECT
        $Dataproject = DB::table('projects')
            ->join('vendors', 'projects.vendors_id', '=', 'vendors.vendors_id')
            ->join('users', 'projects.user_id', '=', 'users.user_id')
            ->select('projects.*', 'vendors.vendors_name', 'users.username')
            ->where('projects.project_id', '=', $project_id)
            ->first();

        //SELECT DATA HISTORY PROGRES
        $history_progress = history_progress::where('project_id', $project_id)->get();

        //SELECT DATA EVALUASI
        $evaluasi = evals::where('project_id', $project_id)->get();
       

        $datefirst  = history_progress::select(DB::raw('date(hp_created_at) as date_create'))->orderBy('hp_created_at', 'asc')->first();

        // DATE - ADD DATE TO +TOC
        $date = Carbon::createFromFormat('Y-m-d', $Dataproject->project_start);

        $daysToAdd = $Dataproject->toc+1;
        $dates = $date->addDays($daysToAdd);
        $priod = CarbonPeriod::create($Dataproject->project_start, $dates);

        // CALCULATE REALISASI
        $percenarray = array();
        $datenow = Carbon::now('GMT+7')->toDateString();
        foreach($priod as $pd ): 
            if($pd->format('Y-m-d') <= $datenow):
                $rangecountphp = history_progress::select('hp_percent', DB::raw('date(hp_created_at) as date'))
                                //->where('project_id', $project_id)
                                ->where([
                                    ['project_id', $project_id],
                                    ['hp_status', '=', '1'],
                                ])
                                ->whereBetween(DB::raw('date(hp_created_at)'), [$datefirst, $pd->format('Y-m-d')])
                                ->get();

                $percenarray[] .= $rangecountphp->sum('hp_percent');  
            endif;
        endforeach;
        $percentagestring = implode(',', $percenarray);


        // dd($percentagestring);

        $sumPercent = history_progress::select(
                                            DB::raw('sum(hp_percent) as countpercent'),
                                            DB::raw('date(hp_created_at) as date'))
                                        ->where('project_id', $project_id)
                                        ->groupBy(DB::raw('date(hp_created_at)'))
                                        ->get();

        // merge duplicate/similar records in an object

        $hps = history_progress::select(
                                DB::raw('sum(hp_volume) as counts'),
                                DB::raw('hp_designator as hp_des'),
                                DB::raw('DATE(hp_created_at) as date')
                                )
                            //->where('project_id', $project_id)
                            ->where([
                                        ['project_id', $project_id],
                                        ['hp_status', '=', '1'],
                                        
                                    ])
                            ->groupBy('date')
                            ->groupBy('hp_des')
                            ->get();
        


        $thu = DB::table('view_hp_plan')
        ->leftjoin('view_hp_real', 'view_hp_plan.hp_designator_plan', '=', 'view_hp_real.hp_designator_real')
        ->select('view_hp_plan.*', 'view_hp_real.*')
        ->where('view_hp_plan.project_id', '=', $project_id)
        ->groupBy('view_hp_plan.hp_designator_plan')
        ->get();

        // dd($thu);

      
/*
        $table1 = DB::table('view_hp_plan')
        ->rightJoin('view_hp_real', 'view_hp_plan.hp_designator_plan', '=', 'view_hp_real.hp_designator')
        ->where('view_hp_plan.project_id', '=', $project_id);

        $thu = DB::table('view_hp_real')
       ->leftJoin('view_hp_plan', 'view_hp_real.hp_designator', '=', 'view_hp_plan.hp_designator_plan')
       ->select('view_hp_plan.*', 'view_hp_real.*')
       ->where('view_hp_real.project_id', '=', $project_id)
       ->union($table1)
       ->groupBy('view_hp_real.hp_designator')
       ->get();
*/  


        // dd($thu);
        
        // LINE PLANNING KURVA-S
        $linePlanning = 100 / $Dataproject->toc;

        // CHECK KATEGORY UPDATE
        $check_status_update = history_progress::where('project_id', $project_id)->first();
        // 0 =  BELUM UPDATE BOQ AANWIJZING
        // 1 =  SUDAH UPDATE BOQ AANWIJZING
        if ($check_status_update == null){
            $collect_status_update = collect([
                'status_update' => 0,
                'class_tabs'    => 'swalDefaultError',
                'data-toggle'   => '',
                'href_tabs1'    => '#custom-tabs-three-home',
                'href_tabs2'    => '#custom-tabs-three-home',
                'href_tabs3'    => '#custom-tabs-three-home',
                'href_tabs4'    => '#custom-tabs-three-home',
            ]);
        } 
        else {
            $collect_status_update = collect([
                'status_update' => 1,
                'class_tabs'    => '',
                'data-toggle'   => 'pill',
                'href_tabs1'    => '#custom-tabs-three-home',
                'href_tabs2'    => '#custom-tabs-three-profile',
                'href_tabs3'    => '#custom-tabs-three-messages',
                'href_tabs4'    => '#custom-tabs-three-settings',
            ]);
        }

        return view('pages.project.viewProject_PrintPDF', compact('thu','sumPercent', 'Dataproject', 'project_id', 'designators', 'hps', 'priod', 'linePlanning', 'collect_status_update', 'history_progress', 'percentagestring','evaluasi'));
    }


    public function view_update($project_id)
    {
        $designators = designator::all();
        
        // SELECT DATA PROJECT
        $Dataproject = DB::table('projects')
            ->join('vendors', 'projects.vendors_id', '=', 'vendors.vendors_id')
            ->join('users', 'projects.user_id', '=', 'users.user_id')
            ->select('projects.*', 'vendors.vendors_name', 'users.username')
            ->where('projects.project_id', '=', $project_id)
            ->first();

        //SELECT DATA HISTORY PROGRES
        $history_progress = history_progress::where('project_id', $project_id)->get();

        //SELECT DATA EVALUASI
        $evaluasi = evals::where('project_id', $project_id)->get();
       

        $datefirst  = history_progress::select(DB::raw('date(hp_created_at) as date_create'))->orderBy('hp_created_at', 'asc')->first();

        // DATE - ADD DATE TO +TOC
        $date = Carbon::createFromFormat('Y-m-d', $Dataproject->project_start);

        $daysToAdd = $Dataproject->toc+1;
        $dates = $date->addDays($daysToAdd);
        $priod = CarbonPeriod::create($Dataproject->project_start, $dates);

        // CALCULATE REALISASI
        $percenarray = array();
        $datenow = Carbon::now('GMT+7')->toDateString();
        foreach($priod as $pd ): 
            if($pd->format('Y-m-d') <= $datenow):
                $rangecountphp = history_progress::select('hp_percent', DB::raw('date(hp_created_at) as date'))
                                //->where('project_id', $project_id)
                                ->where([
                                    ['project_id', $project_id],
                                    ['hp_status', '=', '1'],
                                ])
                                ->whereBetween(DB::raw('date(hp_created_at)'), [$datefirst, $pd->format('Y-m-d')])
                                ->get();

                $percenarray[] .= $rangecountphp->sum('hp_percent');  
            endif;
        endforeach;
        $percentagestring = implode(',', $percenarray);


        // dd($percentagestring);

        $sumPercent = history_progress::select(
                                            DB::raw('sum(hp_percent) as countpercent'),
                                            DB::raw('date(hp_created_at) as date'))
                                        ->where('project_id', $project_id)
                                        ->groupBy(DB::raw('date(hp_created_at)'))
                                        ->get();

        // merge duplicate/similar records in an object

        $hps = history_progress::select(
                                DB::raw('sum(hp_volume) as counts'),
                                DB::raw('hp_designator as hp_des'),
                                DB::raw('DATE(hp_created_at) as date')
                                )
                            //->where('project_id', $project_id)
                            ->where([
                                        ['project_id', $project_id],
                                        ['hp_status', '=', '1'],
                                        
                                    ])
                            ->groupBy('date')
                            ->groupBy('hp_des')
                            ->get();
        


        $thu = DB::table('view_hp_plan')
        ->leftjoin('view_hp_real', 'view_hp_plan.hp_designator_plan', '=', 'view_hp_real.hp_designator_real')
        ->select('view_hp_plan.*', 'view_hp_real.*')
        ->where('view_hp_plan.project_id', '=', $project_id)
        ->groupBy('view_hp_plan.hp_designator_plan')
        ->get();

        // dd($thu);

      
/*
        $table1 = DB::table('view_hp_plan')
        ->rightJoin('view_hp_real', 'view_hp_plan.hp_designator_plan', '=', 'view_hp_real.hp_designator')
        ->where('view_hp_plan.project_id', '=', $project_id);

        $thu = DB::table('view_hp_real')
       ->leftJoin('view_hp_plan', 'view_hp_real.hp_designator', '=', 'view_hp_plan.hp_designator_plan')
       ->select('view_hp_plan.*', 'view_hp_real.*')
       ->where('view_hp_real.project_id', '=', $project_id)
       ->union($table1)
       ->groupBy('view_hp_real.hp_designator')
       ->get();
*/  


        // dd($thu);
        
        // LINE PLANNING KURVA-S
        $linePlanning = 100 / $Dataproject->toc;

        // CHECK KATEGORY UPDATE
        $check_status_update = history_progress::where('project_id', $project_id)->first();
        // 0 =  BELUM UPDATE BOQ AANWIJZING
        // 1 =  SUDAH UPDATE BOQ AANWIJZING
        if ($check_status_update == null){
            $collect_status_update = collect([
                'status_update' => 0,
                'class_tabs'    => 'swalDefaultError',
                'data-toggle'   => 'tabs',
                'href_tabs1'    => '#custom-tabs-three-home',
                'href_tabs2'    => '#custom-tabs-three-home',
                'href_tabs3'    => '#custom-tabs-three-home',
                'href_tabs4'    => '#custom-tabs-three-home',
            ]);
        } 
        else {
            $collect_status_update = collect([
                'status_update' => 1,
                'class_tabs'    => '',
                'data-toggle'   => 'pill',
                'href_tabs1'    => '#custom-tabs-three-home',
                'href_tabs2'    => '#custom-tabs-three-profile',
                'href_tabs3'    => '#custom-tabs-three-messages',
                'href_tabs4'    => '#custom-tabs-three-settings',
            ]);
        }

        return view('pages.project.updateProject', compact('thu','sumPercent', 'Dataproject', 'project_id', 'designators', 'hps', 'priod', 'linePlanning', 'collect_status_update', 'history_progress', 'percentagestring','evaluasi'));
    }
    
    public function view_aanwijzing($project_id)
    {
        $designators = designator::all();

        $Dataproject = DB::table('projects')
            ->join('vendors', 'projects.vendors_id', '=', 'vendors.vendors_id')
            ->join('users', 'projects.user_id', '=', 'users.user_id')
            ->select('projects.*', 'vendors.vendors_name', 'users.username')
            ->where('projects.project_id', '=', $project_id)
            ->first();

        $history_progress = history_progress::where('project_id', $project_id)->get();
        
        // merge duplicate/similar records in an object
        $hps = history_progress::where('project_id', $project_id)
            ->select(DB::raw('Date(hp_created_at) as date'), DB::raw('sum(hp_grand_tot) as count'))
            ->groupBy('hp_created_at')
            ->get();

                // SUM TOTAL NILAI AANWIJZING
        $sumgrandaanwij = history_progress::select(
                                DB::raw('sum(hp_grand_tot) as counts'),
                                DB::raw('DATE(hp_created_at) as date')
                                )
                            //->where('project_id', $project_id)
                            ->where([
                                        ['project_id', $project_id],
                                        ['hp_status', '=', '0'],
                                    ])
                            ->groupBy(DB::raw('DATE(hp_created_at)'))
                         //   ->groupBy(DB::raw('hp_designator'))
                            ->get();

                              //  dd($sumgrandaanwij);
        
        // DATE - ADD DATE TO +TOC
        $date = Carbon::createFromFormat('Y-m-d', $Dataproject->project_start);
        
        $daysToAdd = $Dataproject->toc;
        $date = $date->addDays($daysToAdd);
        $priod = CarbonPeriod::create($Dataproject->project_start, $date);

        // LINE PLANNING KURVA-S
        $linePlanning = 100 / $Dataproject->toc;

        // CHECK KATEGORY UPDATE
        $check_status_update = history_progress::where('project_id', $project_id)->first();
        // 0 =  BELUM UPDATE BOQ AANWIJZING
        // 1 =  SUDAH UPDATE BOQ AANWIJZING
        
        if ($check_status_update == null){
            $collect_status_update = collect([
                'status_update' => 0,
                'class_tabs'    => 'swalDefaultError',
                'data-toggle'   => 'tabs',
                'href_tabs1'    => '#custom-tabs-three-home',
                'href_tabs2'    => '#custom-tabs-three-home',
                'href_tabs3'    => '#custom-tabs-three-home',
                'href_tabs4'    => '#custom-tabs-three-home',
            ]);
        } 
        else {
            $collect_status_update = collect([
                'status_update' => 1,
                'class_tabs'    => '',
                'data-toggle'   => 'pill',
                'href_tabs1'    => '#custom-tabs-three-home',
                'href_tabs2'    => '#custom-tabs-three-profile',
                'href_tabs3'    => '#custom-tabs-three-messages',
                'href_tabs4'    => '#custom-tabs-three-settings',
            ]);
        }

        return view('pages.project.updateAanwijzing', compact('Dataproject', 'project_id', 'designators', 'hps', 'priod', 'linePlanning', 'collect_status_update', 'history_progress'));
    }

    public function ApprovalProject()
    {

        $userID = Session::get('userID');
        $useronline = users::where('user_id', '=', $userID)->first();

        $users = users::where('user_type', '=', 'Manager')->get();
        $vendors = vendor::all();
        $designators = designator::all();

        $projects = DB::table('projects')
        ->join('vendors', 'projects.vendors_id', '=', 'vendors.vendors_id')
        ->join('users', 'projects.user_id', '=', 'users.user_id')
        ->select('projects.*', 'vendors.vendors_name', 'users.username')
        ->where('project_approval','=' ,0)
        ->orderBy('projects.project_id', 'desc')
        ->get();

        return view('pages.project.ApprovalProject', compact('projects', 'users', 'vendors', 'designators'));
       // return view('underconstruct');
    }

    public function addMorePost(Request $request)
    {
        $rules = [];

        // dd($request);
        
        foreach($request->input('name') as $key => $value):
            $rules["name.{$key}"] = 'required';
        endforeach;

        $validator = Validator::make($request->all(), $rules);
            if ($validator->passes()):
                $a = 0;
                foreach($request->input('name') as $key => $value):
                     DB::table('history_progress')->insert([
                        'project_id' => $request->project_id, 
                        'hp_designator'=> $value,
                        'hp_deskripsi' => $request->deskripsi[$a],
                        'hp_volume' => $request->budget[$a],
                        'hp_unit' => $request->satuan[$a],
                        'hp_tot_material' => $request->tot_material[$a] * $request->budget[$a],
                        'hp_tot_jasa' => $request->tot_jasa[$a] * $request->budget[$a],
                        'hp_grand_tot' => ($request->tot_material[$a] * $request->budget[$a]) + ($request->tot_jasa[$a] * $request->budget[$a]), 
                        'hp_status' => $request->status_update,   //dummy
                        'hp_percent' => (($request->tot_material[$a] * $request->budget[$a]) + ($request->tot_jasa[$a] * $request->budget[$a]))/($request->nilai_drm),
                        'hp_approval' => 0, //dummy
                        'hp_created_at' => Carbon::now('GMT+7'),
                    ]);
                    $a++;
                endforeach;
                Alert::success('success', 'Data berhasil ditambah');
                return response()->json(['success'=>'done', 'url'=>url('/project')]);
            endif;

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function submitUpdateProgress(Request $request)
    {
        $data = json_encode($request->all());
        $arrayData = json_decode($data, true);
        //   dd($request->project_id);
            
            foreach($arrayData['designator'] as $key => $value):
                // dd($value);
                    DB::table('history_progress')->insert([
                    'project_id' => $request->project_id, 
                    'hp_designator'=> $value,
                    'hp_deskripsi' => $request->deskripsi[$key],
                    'hp_volume' => $request->budget[$key],
                    'hp_unit' => $request->hp_unit_plan[$key],
                    'hp_tot_material' => $request->tot_material[$key] * $request->budget[$key],
                    'hp_tot_jasa' => $request->tot_jasa[$key] * $request->budget[$key],
                    'hp_grand_tot' => ($request->tot_material[$key] * $request->budget[$key]) +($request->tot_jasa[$key] * $request->budget[$key]), 
                    'hp_status' => 1, 
                    'hp_percent' => (($request->tot_material[$key] * $request->budget[$key]) + ($request->tot_jasa[$key] * $request->budget[$key]))/($request->hp_grand_tot[$key])*100,
                    'hp_approval' => 0, //dummy
                    'hp_created_at' => Carbon::now('GMT+7'),
                ]);
            endforeach;
            $titles = DB::table('projects')
                ->where('project_id','=' ,$request->project_id)
                // ->pluck('project_approval')
                ->update(['project_approval' => 0]);
            Alert::success('success', 'Data berhasil ditambah');
            //return view('pages.project.project');
            return redirect(route('project'));
            
            
    }


    public function submitApprovalProject(Request $request)
    {   
        $data = json_encode($request->all());
        $arrayData = json_decode($data, true);
        // dd($arrayData['project_id']);

            $update_eval = DB::table('eval')->insert([
                    'project_id' => $arrayData['project_id'], 
                    'text'=> $arrayData['text_evaluasi'],
                ]);

            // UPDATE STATUS PROJECT APPROVAL JADI 1
            $titles = DB::table('projects')
                ->where('project_id','=' ,$request->project_id)
                // ->pluck('project_approval')
                ->update(['project_approval' => 1]);
            Alert::success('success', 'Data berhasil di Approve');
            // return view('pages.project.ApprovalProject');
            return redirect(route('ApprovalProject'));
    }

    public function CancelApprovalProject(Request $request)
    {   
        $data = json_encode($request->all());
        $arrayData = json_decode($data, true);
        //  dd($arrayData['project_id']);

            // $update_eval = DB::table('eval')->insert([
            //         'project_id' => $arrayData['project_id'], 
            //          'text'=> $arrayData['text_evaluasi'],
            //     ]);

            // UPDATE STATUS PROJECT APPROVAL JADI 1
            $titles = DB::table('projects')
                ->where('project_id','=' ,$request->project_id)
                // ->pluck('project_approval')
                ->update(['project_approval' => 1]);
           

            $whereArray = array('project_id' => $arrayData['project_id'], 'hp_status' => 1, 'hp_approval' => 0);
        
            $query = DB::table('history_progress');

            foreach($whereArray as $key => $value):
                $query->where($key, $value);
            endforeach;
            $query->delete();

        Alert::success('success', 'Data berhasil di Approve');
        //return view('pages.project.project');
        return redirect(route('ApprovalProject'));
    }
}
