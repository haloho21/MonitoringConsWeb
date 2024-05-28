<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\users;
use App\vendor;
use App\tematiks;
use App\designator;
use Validator;
use Session;
use Alert;

class administratorController extends Controller
{
    public function index(){
        $users = users::all();
        $vendors = vendor::all();
        $designators = designator::all();
        $tematiks = tematiks::all();

        return view('pages.administrator', compact('users', 'vendors', 'designators', 'tematiks'));
    }

    public function store(Request $request){

            $validator = Validator::make($request->all(), [
            'NIK' => 'required',
            'Username' => 'required',
            'Email' => 'required',
            'Alamat' =>'required',
            'Kontak' => 'required',
            'User_type' => 'required'
        ]);
        
        // dd($validator);

        if($validator->fails()):
            Alert::error('error', 'Harap semua data terisi dengan valid!');
            return back();
        endif;

         DB::table('users')->insert([
             'user_id' => $request->NIK,
             'username' => strtolower($request->Username),
             'password' => bcrypt(Session::get('userpass').strtolower($request->Username)),
             'email' => $request->Email,
             'kontak' => $request->Kontak,
             'alamat' => $request->Alamat,
             'user_type' => $request->User_type,
         ]);
        
        Alert::success('success', 'Data User berhasil ditambah');
        return back();
    }

    public function edit(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'Username' => 'required',
            'Email' => 'required',
            'Alamat' =>'required',
            'Kontak' => 'required',
            'User_type' => 'required'
        ]);

        if($validator->fails()):
            Alert::error('error', 'Harap semua data terisi dengan valid!');
        endif;

        users::where('user_id', $request->user_id)
        ->update([
            'username' => $request->Username,
            'email' => $request->Email,
            'kontak' => $request->Kontak,
            'alamat' => $request->Alamat,
            'user_type' => $request->User_type,
        ]);
        
        Alert::success('success', 'Data user berhasil di update');
        return redirect('/administrator');
    }

    public function destroy(Request $request){
        $userID = $request->user;

        users::where('user_id', '=', $userID)->delete();

        Alert::success('success', 'Data user berhasil dihapus');
        return back();

    }

    public function store_designator(Request $request){
        //dd($request->request);

        $validator = Validator::make($request->all(), [
            'designators_name' => 'required',
            'designators_unit' => 'required',
            'designators_material' => 'required',
            'designators_jasa' => 'required',
            'designators_uraian' => 'required',
        ]);
            
        if($validator->fails()):
            Alert::error('error', 'Harap semua data terisi dengan valid!');
        endif;

        DB::table('designators')->insert([
            'designators_name' => $request->designators_name,
            'designators_unit' => $request->designators_unit,
            'designators_material' => $request->designators_material,
            'designators_jasa' => $request->designators_jasa,
            'designators_uraian' => $request->designators_uraian,
        ]);

        Alert::success('success', 'Data designator berhasil di tambah');
        return back();
    }

    public function edit_designator(Request $request){
        
        $valid = Validator::make($request->all(), [
            'designators_name' => 'required',
            'designators_unit' => 'required',
            'designators_material' => 'required',
            'designators_jasa' => 'required',
            'designators_uraian' => 'required'
        ]);
        
        if($valid->fails()):
            Alert::error('error', 'Harap semua data terisi dengan valid!');
        endif;

        //dd($request->request);
        designator::where('designators_id', $request->designators_id)
        ->update([
            'designators_name' => $request->designators_name,
            'designators_unit' => $request->designators_unit,
            'designators_material' => $request->designators_material,
            'designators_jasa' => $request->designators_jasa,
            'designators_uraian' => $request->designators_uraian,
        ]);
        
        Alert::success('success', 'Data designator berhasil di ubah');
        return back();
    }

    public function destroy_designator(Request $request){
        
        $DesignatorID = $request->delDesignator;
        // dd($DesignatorID);
        designator::where('designators_id', '=', $DesignatorID)->delete();

        Alert::success('success', 'Data designator berhasil dihapus');
        return back();
    }

    // VENDOR CONTROLLER
    public function store_vendor(Request $request){
        
        $validator = Validator::make($request->all(), [
            'vendors_name' => 'required',
            'vendors_address' => 'required'
        ]);
        
        if($validator->fails()):
            Alert::error('error', 'Harap semua data terisi dengan valid!');
        endif;

        DB::table('vendors')->insert([
            'vendors_name' => $request->vendors_name,
            'vendors_address' => $request->vendors_address,
        ]);
        
        Alert::success('success', 'Data vendor berhasil ditambah');
        return back();
    }

    public function editVendor(Request $request){


        $data = Validator::make($request->all(), [
            'vendors_name' => 'required',
            'vendors_address' => 'required'
        ]);
        
        if($data->fails()):
            Alert::error('error', 'Harap semua data terisi dengan valid!');
        endif;

        vendor::where('vendors_id', $request->vendors_id)
        ->update([
            'vendors_name' => $request->vendors_name,
            'vendors_address' => $request->vendors_address
        ]);
        
        Alert::success('success', 'Data vendor berhasil diubah');
        return back();

    }

    public function destroy_vendor(Request $request){

        $vendorID = $request->delVendor;

        vendor::where('vendors_id', '=', $vendorID)->delete();

        Alert::success('success', 'Data vendor berhasil dihapus');
        return back();

    }

}
