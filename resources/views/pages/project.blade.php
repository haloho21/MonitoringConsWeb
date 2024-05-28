@extends('index')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>LIST OF PROJECT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Of Project</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

    <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h2 class="card-title"></h2>
                    <p class="text-right">
                        <button href="#" class="btn btn-sm btn-success text-decoration-none" type="button" data-toggle="modal" data-target="#createDataProject">TAMBAH DATA LOP</button>
                    </p>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                            <th scope="col">Nilai DRM</th> 
                            <th scope="col">Start</th>    
                            <th scope="col">End</th> 
                            <th scope="col">Description</th>                     
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
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar progress-bar-primary" style="width: {{$prj->persentase}}%">{{$prj->persentase}}</div>
                                </div>
                            </td>
                            <td scope="row">{{$prj->username}}</td>
                            <td scope="row">{{$prj->vendor_name}}</td>
                            <td scope="row">
                                <div class="d-flex flex-nowrap">
                                    <button href="#" class="btn btn-primary btn-sm text-decoration-none" type="button" data-toggle="modal" data-target="#updateDataProject">Update</button>&nbsp;
                                    <button href="#" class="btn btn-success btn-sm text-decoration-none" type="button" data-toggle="modal" data-target="#detailDataProject">Detail</button>           
                                </div>
                            </td>
                            <td scope="row">{{$prj->nilai_drm}}</td>
                            <td scope="row">{{$prj->project_start}}</td>
                            <td scope="row">{{$prj->project_end}}</td>
                            <td scope="row">{{$prj->description}}</td>
                        @endforeach
                        </tr>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

      {{-- MODAL ADD DATA --}}
      <div class="modal fade" id="createDataProject" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Tambah Data Project</h3>
              <button style="color:red;" type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="fa fa-remove"></i>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="/projects">
                            @csrf
                            <div class="form-group">
                                <label for="pid">Project Code</label>
                                <input type="text" class="form-control input-sm @error('project_code') is-invalid @enderror @error('project_code') is-invalid @enderror" value="{{ old('project_code') }}" value="{{ old('project_code') }}" id="project_code" placeholder="Masukkan Project ID" name="project_code">
                                @error('project_code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Lop Name</label>
                                <input type="text" class="form-control @error('name_location') is-invalid @enderror" value="{{ old('name_location') }}" id="name_location" placeholder="Masukkan Nama Lokasi" name="name_location">
                                @error('name_location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="witel">WITEL</label>
                                <input type="text" class="form-control @error('witel') is-invalid @enderror" value="{{ old('witel') }}" id="witel" placeholder="Masukkan witel" name="witel">
                                @error('witel')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sto">STO</label>
                                <input type="text" class="form-control @error('sto') is-invalid @enderror" value="{{ old('sto') }}" id="sto" placeholder="Masukkan sto" name="sto">
                                @error('sto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="material">Nilai DRM</label>
                                <input type="text" class="form-control @error('nilai_drm') is-invalid @enderror" value="{{ old('nilai_drm') }}" id="nilai_drm" placeholder="Masukkan material" name="nilai_drm">
                                @error('nilai_drm')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="user_id">Pilih Waspang</label>
                                <select class="form-control select2" style="width: 100%;" required name="user_id"> 
                                <option selected disabled value="">Choose...</option>
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
                            <select class="form-control select2" style="width: 100%;" required name="vendor_id"> 
                                <option selected disabled value="">Choose...</option>
                                @foreach ($vendors as $vndr)
                                    <option value="{{$vndr->vendor_id}}">{{$vndr->vendor_name}}</option>
                                @endforeach
                            </select>
                            @error('mitra')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            </form>        
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                <button type="button" class="btn btn-secondary">Batal</button>
                </div>
            </div>
            </div>
        </div>


      {{-- MODAL UPDATE DATA PROJECT --}}
      <div class="modal fade" id="updateDataProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Data Project</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table id="tableDummy" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                    </tr>
                    <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                    </tr>
                    <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                    </tr>
                    <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                    </tr>
                    <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
              <button type="button" class="btn btn-danger">Batal</button>
            </div>
          </div>
        </div>
      </div>

      {{-- MODAL DETAIL DATA PROJECT --}}
      <div class="modal fade" id="detailDataProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Data Project</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- TAB DETAIL PROJECT-->
              <ul class="nav nav-tabs" id="DetailProjectTabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="Detail-tab" data-toggle="tab" href="#Detail" role="tab" aria-controls="Detail" aria-selected="true">Detail</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Timeline-tab" data-toggle="tab" href="#Timeline" role="tab" aria-controls="Timeline" aria-selected="false">Timeline</a>
                </li>
              </ul>

              <!-- TAB DETAIL PROCJECT CONTENT-->
              <div class="tab-content" id="detailProjectTabContent">
                <div class="tab-pane fade show active" id="Detail" role="tabpanel" aria-labelledby="Detail-tab">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="tab-pane fade" id="Timeline" role="tabpanel" aria-labelledby="Timeline-tab">
                  RIUS ABG JAGOK.
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
              <button type="button" class="btn btn-danger">Batal</button>
            </div>
          </div>
        </div>
      </div>


      <!-- <style>
        .pull-left{float:left!important;}
      </style> -->

      <script>
          $(document).ready(function() {
                $('#addDataLop').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "responsive": true,
                    // "dom": '<"pull-left"f><"pull-right"l>tip'
                });

                $('#tableDummy').DataTable();
            } );
</script>
@endsection