@extends('index')

@section('content')

{{-- Get session user --}}
@php
  $user_id = Session::get('userID');
  $user    = DB::table('wp.users')->where('user_id', '=', $user_id)->first();
@endphp

{{-- @if (Session::has('success'))
<div class="alert alert-success">
  <p>{{Session::get('success')}}</p>
</div>
@endif

@if (Session::has('alert'))
<div class="alert alert-danger">
  <p>{{Session::get('alert')}}</p>
</div>
@endif --}}

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Update detail project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update detail project</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="alert alert-danger print-error-msg" style="display:none">
      <ul></ul>
    </div>
    <div class="alert alert-success print-success-msg" style="display:none">
      <ul></ul>
    </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-danger card-outline card-tabs">
              
              <!-- HEADER TABS -->
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active {{$collect_status_update->get('class_tabs')}}" id="custom-tabs-three-home-tab" data-toggle="{{$collect_status_update->get('data-toggle')}}" href="{{$collect_status_update->get('href_tabs1')}}" role="tab" aria-controls="custom-tabs-three-home" aria-selected="false">Project Data</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{$collect_status_update->get('class_tabs')}}" id="custom-tabs-three-profile-tab" data-toggle="{{$collect_status_update->get('data-toggle')}}" href="{{$collect_status_update->get('href_tabs2')}}" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Curve S</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{$collect_status_update->get('class_tabs')}}" id="custom-tabs-three-messages-tab" data-toggle="{{$collect_status_update->get('data-toggle')}}" href="{{$collect_status_update->get('href_tabs3')}}" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Record Evaluasi</a>
                  </li>
                  @if($user->user_type == 'Pengawas Lapangan')
                    <li class="nav-item">
                      <a class="nav-link {{$collect_status_update->get('class_tabs')}}" id="custom-tabs-three-settings-tab" data-toggle="{{$collect_status_update->get('data-toggle')}}" href="{{$collect_status_update->get('href_tabs4')}}" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Update Progres</a>
                    </li>
                  @endif
                  
                </ul>
              </div>

              <!-- CONTENT TABS -->
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">

                  <!-- TABS 1 (PROJECT DATA) -->
                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                      @if ($collect_status_update->get('status_update') == 0)
                        <div class="row">
                          <div class="col-md-12">
                            <div class="callout callout-danger">
                              <h5>Project Information !!!</h5>
                              <p>Pekerjaan di lokasi <b>{{$Dataproject->name_location}}</b> Belum di lakukan Update data Aanwijzing, Silahkan lakukan lengkapi data pekerjaan aanwijzing pada lokasi ini.  </p>
                              <div style="text-align:right">
                                <a type="button" href="{{ route('viewUpdateAanwijzing', $Dataproject->project_id) }}" class="btn btn-danger">Update Aanwijzing</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endif

                      <div class="row">
                        <div class="col-md-6">
                          <div class="card">
                            <div class="card-body p-0">
                              <table class="table table-borderless">
                                <thead style="width:35%;">
                                  <tr>
                                    <th>Project Code</th>
                                    <th>{{$Dataproject->project_code}}</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Lop Name</td>
                                    <td>{{$Dataproject->name_location}}</td>
                                  </tr>
                                  <tr>
                                    <td>WITEL</td>
                                    <td>{{$Dataproject->witel}}</td>
                                  </tr>
                                  <tr>
                                    <td>STO</td>
                                    <td>{{$Dataproject->sto}}</td>
                                  </tr>
                                  <tr>
                                    <td>Waspang</td>
                                    <td>{{$Dataproject->username}}</td>
                                  </tr>
                                  <tr>
                                    <td>Vendor</td>
                                    <td>{{$Dataproject->vendors_name}}</td>
                                  </tr>
                                  <tr>
                                    <td>INSERTED BY</td>
                                    <td>{{$Dataproject->inserted_by}}</td>
                                  </tr>
                                  <tr>
                                    <td>NILAI DRM</td>
                                    <td>{{$Dataproject->nilai_drm}}</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="card">
                            <div class="card-body p-0">
                              <table class="table table-borderless">
                                <tbody>
                                  <tr>
                                    <td>Tahap Proyek</td>
                                    <td>{{$Dataproject->status_project}}</td>
                                  </tr>
                                  <tr>
                                    <td>Completion %</td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="{{$Dataproject->persentase}}" aria-volumemin="0" aria-volumemax="100" style="width: {{$Dataproject->persentase}}%">
                                            </div>
                                        </div>
                                        <small>
                                          {{$Dataproject->persentase}}% Complete
                                        </small>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Nilai Material</td>
                                    <td>{{$Dataproject->nilai_material}}</td>
                                  </tr>
                                  <tr>
                                    <td>Nilai Jasa</td>
                                    <td>{{$Dataproject->nilai_jasa}}</td>
                                  </tr>
                                  <tr>
                                    <td>TOC (Time Of Contract)</td>
                                    <td>{{$Dataproject->toc}}</td>
                                  </tr>
                                  <tr>
                                    <td>Project Start</td>
                                    <td>{{$Dataproject->project_start}}</td>
                                  </tr>
                                  <tr>
                                    <td>Project End</td>
                                    <td>{{$Dataproject->project_end}}</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div> <!-- /.card -->
                          </div><!-- /.col -->
                          </div>
                          <!-- BUTTON REPORT PDF -->
                          <div class="card">
                            <div class="card-body">
                              @csrf
                                  <div style="text-align:right">
                                    <a href="{{ route('viewProject_PrintPDF', $Dataproject->project_id) }}" type="button" class="btn btn-success" data-pk="{{ $Dataproject->project_id }}">Report PDF <i class="fas fa-file-pdf"></i></a>
                                  </div> 
                            </div>
                          </div>
                       <!-- END BUTTON REPORT PDF -->  
                    </div>
                  <!-- END TABS 1 -->

                  <!-- TABS 2 (KURVA S) -->
                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">

                      <!-- solid sales graph -->
                      <div class="card">
                        <div class="card-header border-0">
                          <h3 class="card-title">
                            <i class="fas fa-th mr-1"></i>
                            KURVA - S <b>{{$Dataproject->name_location}}</b>
                          </h3>
                        </div>
                        <div class="card-body">
                          <canvas class="chart" id="line-chart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                        </div>
                        
                        @foreach ($sumPercent as $sumPer)
                            {{ $sumPer->count }}
                        @endforeach
                        
                      </div>

                       <!-- TABLE HISTORY PROGRESS -->
                       <div class="card">
                        <div class="card-header border-0">
                          <h3 class="card-title">
                            TABLE HISTORY UPDATE - <b>{{$Dataproject->name_location}}</b>
                          </h3>
                        </div>
                            <div class="card-body font-size">
                            
                              <table id="ListHistory" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                      <th style="font-size: 15px;">#</th>
                                      <th style="font-size: 15px;">Designator</th>   
                                      @foreach ($priod as $priods)             
                                        <th style="font-size: 15px;">{{$priods->format('Y/m/d')}}</th> 
                                      @endforeach      
                                    </tr>
                                </thead>
                                <tbody>
                                  @php
                                    $number = 1;

                                  @endphp
                                  @foreach ($hps as $hpss)
                                    <tr>
                                      <td>{{ $number }}</td>
                                      <td>{{ $hpss->hp_des }}</td>
                                        @foreach ($priod as $priods)
                                          @if($priods->format('Y-m-d') === $hpss->date)
                                            <!-- td>{{ round((float)$hpss->counts * 100) . '%' }}</!-->
                                            <td>{{ round((float)$hpss->counts) }}</td>
                                          @else 
                                            <td></td>
                                          @endif
                                        @endforeach
                                    </tr>
                                    @php
                                      $number++;    
                                    @endphp
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                      </div>
                      <!-- END table history progres -->



                      <!-- TABLE HISTORY UPDATE -->
                      <div class="card">
                        <div class="card-header border-0">
                          <h3 class="card-title">
                            TABLE TOTAL HISTORY UPDATE - <b>{{$Dataproject->name_location}}</b>
                          </h3>
                        </div>
                            <div class="card-body font-size">
                            
                              <table id="ListHistory" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                      <th style="font-size: 15px;">#</th>
                                      <th style="font-size: 15px;">DESIGNATOR</th>  
                                      <th style="font-size: 15px;">VOL AANWIJZING</th>
                                      <th style="font-size: 15px;">VOL REALISASI</th>
                                      <th style="font-size: 15px;">SELISIH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php
                                    $number = 1;
                                  @endphp
                                  @foreach ($thu as $thus)
                                    <tr>
                                      <td>{{ $number }}</td>
                                      <td>{{ $thus->hp_designator_plan }}</td>
                                      <td>{{ $thus->hp_volume_plan }}</td>
                                      <td>{{ $thus->hp_volume_real }}</td>
                                      <td>{{ $thus->hp_volume_plan - $thus->hp_volume_real }}</td>
                                    </tr>
                                    @php
                                      $number++;    
                                    @endphp
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                      </div>
                      <!-- END table history progres -->
                      
                    </div> 
                  <!-- END TABS 2 -->

                  <!-- TABS 3 -->
                    <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                     
                      @foreach ($evaluasi as $evals)
                        <div class="card card-primary card-outline">
                          <div class="card-header text-center">
                            Evaluasi - {{$evals->created_at}}
                          </div>
                          <div class="card-body">
                            <!--h5 class="card-title">Special title treatment</h5 -->
                            <p class="card-text">{{$evals->text}}.</p>
                          </div>
                          <div class="card-footer text-muted text-center">
                            ...
                          </div>
                        </div>
                      @endforeach
                      <hr>
                      @if($user->user_type == 'Manager')
                          <div class="card">
                            <div class="card-body">
                              <form name="input_eval" method="post" action="{{ route('submitApprovalProject') }}">
                              @csrf
                                <input type="hidden" name="project_id" value="{{ $project_id }}">
                                <textarea type="text" name="text_evaluasi" placeholder="Masukkan Hasil Evaluasi" class="form-control" required></textarea>
                                <hr>
                                <div style="text-align:right">
                                  <button type="submit" name="submit" class="btn btn-info" value="Submit">Submit</button> 
                                  <button class="btn btn-danger text-decoration-none deleteProgress{{ $project_id }}" type="button" data-pk="{{ $project_id }}" data-toggle="modal" data-target="#CancelUpdateProgress">CANCEL</button> 
                                </div> 
                              </form>
                            </div>
                          </div>

                          {{-- ############################################################# MODAL CANCEL APPROVAL PROJECT ############################################################# --}}
                          {{-- MODAL DELETE DATA VENDOR --}}
                          <div class="modal fade" id="CancelUpdateProgress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Delete Data Vendor</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                <form action="{{ route('CancelApprovalProject') }}" method="POST">
                                  @method('delete')
                                  @csrf
                                  <div class="modal-body">
                                    <h5>Apakah anda yakin akan melakukan cancel project ini?</h5>
                                    <input type="hidden" name="project_id" value="{{ $project_id }}">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Hapus</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Batal</button>
                                  </div>
                                </form>
                                
                              </div>
                            </div>
                          </div>
                          {{-- ############################################################# END MODAL CANCEL APPROVAL PROJECT ############################################################# --}}
                      @endif






                    </div>
                  <!-- END TABS 3 -->               
                  
                  <!-- TABS 4 (UPDATE PROGRES) -->
                    <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab"> 
                      <!-- text input multyple -->
                      <div class="form-group">
                        <form name="add_Data" id="add_Data" action="{{ route('submitUpdateProgress') }}" method="post" enctype="multipart/form-data">  
                          @csrf
                          {{-- <div class="alert alert-danger print-error-msg" style="display:none">
                          <ul></ul>
                          </div>

                          <div class="alert alert-success print-success-msg" style="display:none">
                          <ul></ul>
                          </div> --}}
                          <h4 class="form-section"><i class="fas fa-clipboard-list"></i>Update Progress - {{$Dataproject->name_location}}</h4>
                          <div class="table-responsive">  
                              <table class="table table-borderless" id="dynamic_field">
                              <thead class="thead-dark">
                                <tr>
                                  <td>NO</td>
                                  <td>DESIGNATOR</td>
                                  <td>UNIT</td>
                                  <td>VOL AANWIJ</td>
                                  <td>VOL REAL</td>
                                  <td>SELISIH</td>
                                  <td>INPUT UPDATE</td>
                                </tr>
                              </thead>
                              <tbody>
                                @php
                                  $number = 1;
                                @endphp
                                @foreach ($thu as $thus)
                                  <tr>
                                    <td>{{ $number }}</td>  
                                    <td>
                                      <input type="hidden" name="project_id" value="{{ $project_id }}">
                                      <input type="hidden" name="status_update" value="{{$collect_status_update->get('status_update')}}">
                                      <!-- <input type="hidden" name="nilai_drm[]"  value="{{$Dataproject->nilai_drm}}"> -->

                                      <input type="hidden" readonly="readonly" name="hp_grand_tot[]"  value="{{ $thus->hp_grand_tot_plan }}">
                                      <input type="hidden" readonly="readonly" name="tot_jasa[]" value="{{ $thus->hp_jasa_plan }}"  class="form-control totJasa_list">
                                      <input type="hidden" readonly="readonly" name="tot_material[]" value="{{ $thus->hp_material_plan }}" class="form-control totMater_list">
                                      <input type="hidden" readonly="readonly" name="deskripsi[]" value="{{ $thus->hp_deskripsi_plan }}" class="form-control totJasa_list">
                                      <input type="text" readonly="readonly" name="designator[]" value="{{ $thus->hp_designator_plan }}" class="form-control name_list" />
                                    </td>
                                    <td>
                                      <input type="text" readonly="readonly" name="hp_unit_plan[]" value="{{ $thus->hp_unit_plan}}" class="form-control unit_list">
                                      
                                    </td> 
                                    <td>
                                      <input type="text" readonly="readonly" name="hp_volume_plan[]" value="{{ $thus->hp_volume_plan }}" class="form-control desc_list">
                                      
                                    </td>
                                    <td>
                                      <input type="text" readonly="readonly" name="hp_volume_real[]" value="{{ $thus->hp_volume_real }}" class="form-control desc_list">
                                      
                                    </td>
                                    <td>
                                      <input type="text" readonly="readonly" name="selisih[]" value="{{$thus->hp_volume_plan-$thus->hp_volume_real}}" class="form-control desc_list">
                                    </td>
                                    <td>
                                      <input type="text" name="budget[]" placeholder="Enter Update" class="form-control budget_list" required>
                                    </td>
                                  </tr>
                                  @php
                                    $number++;    
                                  @endphp
                                @endforeach
                                </tbody> 
                              </table> 
                              <hr>
                              <div style="text-align:right">
                                <button type="submit" name="submit" class="btn btn-info" value="Submit">Submit</button>  
                              </div> 
                          </div>
                        </form>  
                      </div> 
                      <!-- END text input multyple -->
                    </div>
                  <!-- END TABS 4 -->

                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->

    {{-- ############################################################# MODAL DETAIL DESIGNATOR ############################################################# --}}     
      <div class="modal fade" id="SearchDesignator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">DETAIL DESIGNATORS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table" style="width:100%">
                <thead class="thead-dark">
                  <tr>
                    <td>DESIGNATOR</td>
                    <td>UNIT</td>
                    <td>URAIAN PEKERJAAN</td>
                    <td>Material</td>
                    <td>Jasa</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($designators as $dsgn)
                  <tr>
                    <td>{{ $dsgn->designators_name }}</td>
                    <td>{{ $dsgn->designators_unit }}</td>
                    <td>{{ $dsgn->designators_uraian }}</td>
                    <td>{{ $dsgn->designators_material }}</td>
                    <td>{{ $dsgn->designators_jasa }}</td>
                    <td>
                      <button class="btn btn-success btnChoose" data-namedesign="" data-desc="" data-units="" data-material="" data-jasa="" data-pk="{{ $dsgn->designators_name }}" data-unit="{{ $dsgn->designators_unit }}" data-uraian="{{ $dsgn->designators_uraian }}" data-mater="{{ $dsgn->designators_material }}" data-servis="{{ $dsgn->designators_jasa }}">Pilih</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
    
          </div>
        </div>
      </div>
    {{-- ############################################################# END MODAL DETAIL DESIGNATOR ############################################################# --}}    



<script type="text/javascript">

    $(document).ready(function(){

     // dynamic add colom to input designator
      var postURL = "{{ route('addData') }}";
      var i=1;  

      //add column input
      // $('#add').click(function(){ 
      //      i++;   
      //      $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" id="namedesign'+i+'" readonly="readonly" placeholder="Enter Designator" class="form-control name_list" /></td>'+'<td><input type="text" name="satuan[]" placeholder="Satuan" id="unitdesign'+i+'" readonly="readonly" class="form-control unit_list"></td>'+'<td><input type="text" name="deskripsi[]" placeholder="Deskripsi" id="descdesign'+i+'" readonly="readonly" class="form-control desc_list"></td>'+'<td><input type="text" name="budget[]" placeholder="Enter budget" class="form-control budget_list" required/></td><td><input type="hidden" readonly="readonly" name="tot_material[]" id="totMaterdesign'+i+'" class="form-control totMater_list"></td><td><input type="hidden" readonly="readonly" name="tot_jasa[]" id="totJasadesign'+i+'" class="form-control totJasa_list"></td>'+'<td><button class="btn-searchdata btn btn-success" data-namedesign="namedesign'+i+'" data-desc="descdesign'+i+'" data-units="unitdesign'+i+'" data-material="totMaterdesign'+i+'" data-jasa="totJasadesign'+i+'" type="button" data-toggle="modal" data-target="#SearchDesignator"><i class="fas fa-search"></i></button></td>'+'<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fas fa-window-close"></i></button></td></tr>');  
      // });

      // dynamic remove colom
      // $(document).on('click', '.btn_remove', function(){  
      //      var button_id = $(this).attr("id");   
      //      $('#row'+button_id+'').remove();  
      // }); 
      
      $('#ListHistory').removeAttr('width').DataTable({
            "paging": true,
            // "pageLength": 5,
            // "lengthMenu": [ [5, 10, 20, 30, 40, 50, -1], [5, 10, 20, 30, 40, 50, "All"] ],
            // "order": [[ 0, 'asc' ], [ 1, 'asc' ]],
            "sort": false,
            "info": true,
            "searching": false,
            "autoWidth": true,
            "responsive": false,
            "scrollY": 400,
            "scrollX": true,
            "scrollCollapse": true,
            "columnDefs": [
                { "width": 500, "targets": 0 }
            ],
            "fixedColumns": true
        });

      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      
      // $('#submit').click(function(){            
      //      $.ajax({  
      //           url: postURL,  
      //           method:"post",  
      //           data:$('#add_Data').serialize(),
      //           type: 'json',
      //           success:function(data)  
      //           {

      //               if(data.error){
      //                   printErrorMsg(data.error);
      //               }else{
      //                   i=1;
      //                   $('.dynamic-added').remove();
      //                   $('#add_Data')[0].reset();
      //                   $(".print-success-msg").find("ul").html('');
      //                   $(".print-success-msg").css('display','block');
      //                   $(".print-error-msg").css('display','none');
      //                   console.log('==================')
      //                   $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
      //                   $(".print-success-msg").fadeTo(1000, 500).slideUp(500, function(){
      //                     $(".print-success-msg").slideUp(500);
      //                   });
      //                   // window.location = data.url;
      //                   // location.href = "{{ route('project') }}";
      //               }
      //           }  
      //      });
      //      console.log($.ajax)  
      // });  

      function printErrorMsg (msg) {
          $(".print-error-msg").find("ul").html('');
          $(".print-error-msg").css('display','block');
          $(".print-success-msg").css('display','none');
          console.log('testerror');
          console.log('=============');
          $.each( msg, function( key, value ) {
              $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
          });
          $(".print-error-msg").fadeTo(1000, 500).slideUp(500, function(){
              $(".print-error-msg").slideUp(500);
          });
        }

      
    });

      //designator
      $('.btnChoose').on("click", function(e) {
        e.preventDefault();
        var namemodal = $(this).attr("data-pk");
        var uraianmodal = $(this).attr("data-uraian");
        var unitmodal = $(this).attr("data-unit");
        var materialModal = $(this).attr("data-mater");
        var jasamodal = $(this).attr("data-servis");

        var classname = $(this).attr("data-namedesign");
        var classdesc = $(this).attr("data-desc");
        var classunit = $(this).attr("data-units");
        var classmater = $(this).attr("data-material");
        var classservis= $(this).attr("data-jasa");

        $('#'+classname).val(namemodal);
        $('#'+classdesc).val(uraianmodal);
        $('#'+classunit).val(unitmodal);
        $('#'+classmater).val(materialModal);
        $('#'+classservis).val(jasamodal);
        $('#SearchDesignator').modal('hide');
      });

      $(document).on('click', '.btn-searchdata', function(){  
        var classname = $(this).attr("data-namedesign");
        var classdesc = $(this).attr("data-desc"); 
        var classunit = $(this).attr("data-units");
        var classmater= $(this).attr("data-material");
        var classservis= $(this).attr("data-jasa"); 
        
        console.log(classname);
        console.log(classdesc);
        console.log(classunit);
        console.log(classmater);

        $('.btnChoose').attr('data-namedesign', classname);
        $('.btnChoose').attr('data-desc', classdesc);
        $('.btnChoose').attr('data-units', classunit);
        $('.btnChoose').attr('data-material', classmater);
        $('.btnChoose').attr('data-jasa', classservis);
        // $('#namedesign').val(namemodal);
        // $('#SearchDesignator').modal('hide');
      });
      //end designator



      // Sales graph chart - FOR CHART KURVA S
          var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d');
          //$('#revenue-chart').get(0).getContext('2d');
          var salesGraphChartData = {
            labels  : [
                        @foreach ($priod as $priods)
                          '{{$priods->format('Y-m-d')}}',
                        @endforeach
                      ],
            datasets: [
              {
                label               : 'PLANNING',
                fill                : false,
                // lineTension         : 0,
                spanGaps            : true,
                borderColor         : '#0046FF', // BIRU
                pointBorderWidth    : 3,
                data                : [  
                                          @for ($x = 0; $x <= 101; $x+=$linePlanning) 
                                            {{ $x }},
                                          @endfor
                                      ]
              },
              {
                label               : 'REALISASI',
                fill                : false,
                lineTension         : 0,
                bezierCurve         : false,
                spanGaps            : true,
                borderColor         : '#FF0000', // MERAH
                pointBorderWidth    : 3,
                data                : [
                                        {{ $percentagestring }},
                                      ]
              }
            ]
            
          }
          var salesGraphChartOptions = {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
              display: false,
            },
            scales: {
              xAxes: [{
                gridLines : {
                  display : true,
                  // color: '#0046FF',
                  drawBorder: false,
                }
              }],
              yAxes: [{
                ticks : {
                  stepSize: 10,
                  min: 0,
                  max: 110,
                  callback: function(value){return value+ "%"}    
                },
                scaleLabel: {
                   display: true,
                   labelString: "Percentage Achievements"
                }
                // gridLines : {
                //   display : true,
                //   color: '#000000',
                //   drawBorder: true,
                // }
              }]
            },

            tooltips: {
              enabled: true,
              mode: 'single',
              callbacks: {
                afterLabel: function(tooltipItem, data){
                  var sum = data.datasets.reduce((sum, dataset) => {
                    return sum + dataset.data[tooltipItem.index] + '%';
                  }, 0);
                  // var percent = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] / sum * 100;
                  // percent = percent.toFixed(2);
                  // return data.datasets[tooltipItem.datasetIndex].label + ': ' + percent + '%';
                }
              }
            }
          }

          // This will get the first returned node in the jQuery collection.
          var salesGraphChart = new Chart(salesGraphChartCanvas, { 
              type: 'line', 
              data: salesGraphChartData, 
              options: salesGraphChartOptions
            }
          )

  // ERROR MESSAGE     
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: '<h5>Data Aanwijzing Belum di Input, Lengkapi data Aanwijzing Terlebih dahulu.</h5>'
      })
    });
  });

</script>
@endsection