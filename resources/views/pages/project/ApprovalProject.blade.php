@extends('index')

@section('content')

{{-- Get session user --}}
@php
  $user_id  = Session::get('userID');
  $user     = DB::table('wp.users')->where('user_id', '=', $user_id)->first();     
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

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>LIST NEED APPROVAL PROGRESS</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">List Of Project</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h2 class="card-title"></h2>
                @if($user->user_type == 'Admin')
                <p class="text-right">
                    <button href="#" class="btn btn-sm btn-success text-decoration-none" type="button" data-toggle="modal" data-target="#createDataProject">TAMBAH DATA LOP</button>
                </p>
                @endif
            </div>
            <!-- /.card-header -->
            <div class="card-body font-size">
                <table id="addDataLop" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Code</th>
                        <th scope="col">Lop Name</th>
                        <th scope="col">Status Progres</th>
                        <th scope="col">TOC</th>
                        <th scope="col">Completion%</th>
                        <th scope="col">Waspang</th>
                        <th scope="col">Mitra</th> 
                        <th scope="col">Action</th>                  
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $prj )
                    <tr>
                        
                        <td scope="row">{{$loop->iteration}}</td>
                        <td scope="row">{{$prj->project_code}}</td>
                        <td scope="row">{{$prj->name_location}}</td>
                        <td scope="row">{{$prj->status_project}}</td>
                        <td scope="row"><span class="badge bg-blue">{{$prj->toc}}</span></td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-volumenow="{{$prj->persentase}}" aria-volumemin="0" aria-volumemax="100" style="width: {{$prj->persentase}}%">
                                </div>
                            </div>
                            <small>
                              {{$prj->persentase}}% Complete
                            </small>
                        </td>
                        <td scope="row">{{$prj->username}}</td>
                        <td scope="row">{{$prj->vendors_name}}</td>
                        <td scope="row">
                            <div class="d-flex flex-nowrap">
                                <!-- <button type="button" class="btn btn-success editProject{{ $prj->project_id }}" data-pk="{{ $prj->project_id }}" data-toggle="modal" data-target="#EditDataProject{{$prj->project_id}}"><i class="fas fa-info-circle"></i></button>
                                &nbsp; -->
                                <a href="{{ route('viewUpdateProject', $prj->project_id) }}" type="button" class="btn btn-primary" data-pk="{{ $prj->project_id }}"><i class="fas fa-check-square"></i></a>
                                <!-- &nbsp;
                                <button type="submit" class="btn btn-danger delete{{ $prj->project_id }}" data-pk="{{ $prj->project_id }}" id="delete" data-toggle="modal" data-target="#deleteDataProject"><i class="far fa-window-close"></i></button> -->
                            </div>
                        </td>
                    @endforeach
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
      </div>
    </div>

      {{--################################################################ MODAL VIEW DATA UPDATE PROJECT ################################################################# --}}
      @foreach ($projects as $prj)
        <div class="modal fade" id="EditDataProject{{$prj->project_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Document's Approval</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" action="{{ route('editProject') }}">
                @csrf
                @method('patch')
                <div class="modal-body">
                  <div class="form-group">
                    <label for="project_code">Project Code</label>
                    <input type="hidden" value="{{ $prj->project_id }}" name="project_id">
                    <input type="text" class="form-control @error('project_code') is-invalid @enderror" value="{{ $prj->project_code }}" id="project_code" placeholder="project_code" name="project_code">
                    @error('project_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label for="name_location">Lop Name</label>
                      <input type="text" class="form-control @error('name_location') is-invalid @enderror" value="{{ $prj->name_location }}" id="name_location" placeholder="Masukkan Nama Lokasi" name="name_location">
                      @error('name_location')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="witel">WITEL</label>
                      <input type="text" class="form-control @error('witel') is-invalid @enderror" value="{{ $prj->witel }}" id="witel" placeholder="Masukkan witel" name="witel">
                      @error('witel')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="sto">STO</label>
                      <input type="text" class="form-control @error('sto') is-invalid @enderror" value="{{ $prj->sto }}" id="sto" placeholder="Masukkan sto" name="sto">
                      @error('sto')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="material">Nilai DRM</label>
                      <input type="text" class="form-control @error('nilai_drm') is-invalid @enderror" value="{{ $prj->nilai_drm }}" id="nilai_drm" placeholder="Masukkan material" name="nilai_drm">
                      @error('nilai_drm')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="user_id">Pilih Waspang</label>
                      <select class="form-control select2" style="width: 100%;" required name="user_id"> 
                        <option selected value="{{$prj->user_id}}">{{$prj->username}}</option>
                        @foreach ($users as $usr)
                          <option value="{{$usr->user_id}}">{{$usr->username}}</option>
                        @endforeach
                      </select>
                        @error('user_id')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label>MITRA</label>
                    <select class="form-control select2" style="width: 100%;" required name="vendors_id"> 
                    <option selected value="{{$prj->vendors_id}}">{{$prj->vendors_name}}</option>
                      @foreach ($vendors as $vndr)
                        <option value="{{$vndr->vendors_id}}">{{$vndr->vendors_name}}</option>
                      @endforeach
                    </select>
                      @error('mitra')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>      
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary"><i class="far fa-save"></i>&nbsp;Simpan</button>
                  <button type="submit" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Batal</button>
                </div> 
              </form>  
            </div>
          </div>
        </div>
      @endforeach
      {{-- ############################################################# END MODAL VIEW DATA UPDATE PROJECT ############################################################## --}}
 
      {{-- ############################################################# MODAL DELETE DATA PROJECT ############################################################## --}}
      <div class="modal fade" id="deleteDataProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Data Project</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('project_delete') }}" method="post">
              @method('delete')
              @csrf
              <div class="modal-body">
                Apakah anda yakin ingin menghapusnya?
                <input type="hidden" name="projectsID" id="projectsID">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Hapus</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Batal</button>
              </div>
          </form>
          </div>
        </div>
      </div>

      <style>
        .font-size{
          font-size: 14px;
        }
      </style>

      <script>
        $(document).ready(function() {
          $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
          });
              $('#addDataLop').DataTable({
                  "paging": true,
                  "pageLength": 10,
                  "lengthMenu": [ [5, 10, 20, 30, 40, 50, -1], [5, 10, 20, 30, 40, 50, "All"] ],
                  "lengthChange": true,
                  "searching": true,
                  "ordering": true,
                  "order": [[ 0, 'asc' ], [ 1, 'asc' ]],
                  "info": true,
                  "autoWidth": false,
                  "responsive": true,
              });
              $('#tableDummy').DataTable();
          });
          
        // to get id into modal delete
        @php
          foreach($projects as $prj):
            echo'$(".delete'.$prj->project_id.'").click(function(e) {';
              echo'e.preventDefault();';
              echo"var id   = $(this).attr('data-pk');";
              echo'var test = $("#projectsID").val(id);';
            echo'});';
          endforeach;
        @endphp


      
          // // Sales graph chart - FOR CHART KURVA S
          // var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d');
          // //$('#revenue-chart').get(0).getContext('2d');

          // var salesGraphChartData = {
          //   labels  : ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4', '2013 Q1', '2013 Q2'],
          //   datasets: [
          //     {
          //       label               : 'Digital Goods',
          //       fill                : false,
          //       borderWidth         : 2,
          //       lineTension         : 0,
          //       spanGaps : true,
          //       borderColor         : '#0046FF',
          //       pointRadius         : 3,
          //       pointHoverRadius    : 7,
          //       pointColor          : '#0046FF',
          //       pointBackgroundColor: '#0046FF',
          //       data                : [10, 15, 20, 30, 45, 60, 75, 85, 90, 100]
          //     },
          //     {
          //       label               : 'Goods',
          //       fill                : false,
          //       borderWidth         : 2,
          //       lineTension         : 0,
          //       spanGaps : true,
          //       borderColor         : '#FF0000',
          //       pointRadius         : 3,
          //       pointHoverRadius    : 7,
          //       pointColor          : '#FF0000',
          //       pointBackgroundColor: '#FF0000',
          //       data                : [5, 10, 15, 20, 35, 45, 55, 65, 75, 85]
          //     }
          //   ]
          // }

          // var salesGraphChartOptions = {
          //   maintainAspectRatio : false,
          //   responsive : true,
          //   legend: {
          //     display: false,
          //   },
          //   scales: {
          //     xAxes: [{
          //       ticks : {
          //         fontColor: '#000000',
          //       },
          //       gridLines : {
          //         display : false,
          //         color: '#0046FF',
          //         drawBorder: false,
          //       }
          //     }],
          //     yAxes: [{
          //       ticks : {
          //         stepSize: 10,
          //         fontColor: '#000000',
          //       },
          //       gridLines : {
          //         display : true,
          //         color: '#000000',
          //         drawBorder: false,
          //       }
          //     }]
          //   }
          // }

          // // This will get the first returned node in the jQuery collection.
          // var salesGraphChart = new Chart(salesGraphChartCanvas, { 
          //     type: 'line', 
          //     data: salesGraphChartData, 
          //     options: salesGraphChartOptions
          //   }
          // )

      </script>
@endsection