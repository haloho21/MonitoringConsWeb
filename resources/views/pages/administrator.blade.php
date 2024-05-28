@extends('index')

@section('content')
    
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
            <h1>Administrator Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Administrator Menu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            
          {{-- ############################################################# TABLE USER ############################################################# --}}  
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Users</h3>
                  <p class="text-right">
                    <button href="#" class="btn btn-sm btn-success text-decoration-none" type="button" data-toggle="modal" data-target="#addDataUser">ADD USER</button>
                  </p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="TableIDUser" class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $usr)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$usr->username}}</td>
                      <td>{{$usr->user_type}}</td>
                      <td>
                        <div class="d-flex flex-nowrap">
                        <button href="#" class="btn btn-primary btn-sm text-decoration-none edit{{ $usr->user_id }}" type="button" data-pk="{{ $usr->user_id }}" data-toggle="modal" data-target="#editDataUser{{ $usr->user_id }}"><i class="far fa-edit"></i></button>&nbsp;
                            <button href="#" class="btn btn-danger btn-sm text-decoration-none delete{{ $usr->user_id }}" type="button" data-pk="{{ $usr->user_id }}" data-toggle="modal" data-target="#deleteDataUser"><i class="far fa-trash-alt"></i></button>           
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          {{-- ############################################################# TABLE VENDOR ##################################################### --}}   
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Vendors</h3>
                <p class="text-right">
                  <button href="#" class="btn btn-sm btn-success text-decoration-none" type="button" data-toggle="modal" data-target="#addDataVendor">ADD VENDOR</button>
                </p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" id="TableIDVendor">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($vendors as $vndr)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$vndr->vendors_name}}</td>
                      <td>
                        <div class="d-flex flex-nowrap">
                            <button class="btn btn-primary btn-sm text-decoration-none editVndr{{ $vndr->vendors_id }}" type="button" data-pk="{{ $vndr->vendors_id }}" data-toggle="modal" data-target="#editDataVendor{{ $vndr->vendors_id }}"><i class="far fa-edit"></i></button>&nbsp;
                            <button class="btn btn-danger btn-sm text-decoration-none deleteVndr{{ $vndr->vendors_id }}" type="button" data-pk="{{ $vndr->vendors_id }}" data-toggle="modal" data-target="#deleteDataVendor"><i class="far fa-trash-alt"></i></button>           
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div> <!-- /.card -->
          </div>
        </div>
      <div class="container-fluid">
      <div class="row">
     
     
        {{-- ############################################################# TABLE DESIGNATOR ############################################################# --}}  
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Designator</h3>
                  <p class="text-right">
                    <button href="#" class="btn btn-sm btn-success text-decoration-none" type="button" data-toggle="modal" data-target="#addDataDesignator">ADD DESIGNATOR</button>
                  </p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" id="TableIDDesignator">
                  <thead>                  
                    <tr>
                      <th>Designator</th>
                      <th>Unit</th>
                      <th>Material</th>
                      <th>Jasa</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($designators as $dsgntr)
                    <tr>
                      <td>{{$dsgntr->designators_name}}</td>
                      <td>{{$dsgntr->designators_unit}}</td>
                      <td>{{$dsgntr->designators_material}}</td>
                      <td>{{$dsgntr->designators_jasa}}</td>
                      <td>
                        <div class="d-flex flex-nowrap">
                          <button href="#" class="btn btn-success btn-sm" type="button" data-toggle="modal"  data-target="#detailDataDesignator{{ $dsgntr->designators_id }}"><i class="fas fa-info-circle"></i></button>&nbsp;
                          <button href="#" class="btn btn-primary btn-sm text-decoration-none" type="button" data-toggle="modal" data-target="#editDataDesignator{{ $dsgntr->designators_id }}"><i class="far fa-edit"></i></button>&nbsp;
                          <button href="#" class="btn btn-danger btn-sm text-decoration-none" type="button" data-toggle="modal" data-target="#deleteDataDesignator"><i class="far fa-trash-alt"></i></button>           
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          {{-- ############################################################# END TABLE DESIGNATOR ############################################################# --}}  


          {{-- ############################################################# TABLE TEMATIK ############################################################# --}}  
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Tematik</h3>
                <p class="text-right">
                  <button href="#" class="btn btn-sm btn-success text-decoration-none" type="button" data-toggle="modal" data-target="#addDataTematik">ADD TEMATIK</button>
                </p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" id="TableIDTematik">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tematiks as $tmtk)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$tmtk->tematik_name}}</td>
                      <td>
                        <div class="d-flex flex-nowrap">
                            <button class="btn btn-primary btn-sm text-decoration-none editVndr{{ $tmtk->tematik_id }}" type="button" data-pk="{{ $tmtk->tematik_id }}" data-toggle="modal" data-target="#editDataVendor{{ $tmtk->tematik_id }}"><i class="far fa-edit"></i></button>&nbsp;
                            <button class="btn btn-danger btn-sm text-decoration-none deleteVndr{{ $tmtk->tematik_id }}" type="button" data-pk="{{ $tmtk->tematik_id }}" data-toggle="modal" data-target="#deleteDataVendor"><i class="far fa-trash-alt"></i></button>           
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div> <!-- /.card -->
          </div>
          {{-- ############################################################# END TABLE TEMATIK ############################################################# --}}  


        </div> <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    {{-- ############################################################# MODAL DETAIL DESIGNATOR ############################################################# --}}    
    @foreach ($designators as $dsgntr)
      <div class="modal fade" id="detailDataDesignator{{$dsgntr->designators_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <th>DESIGNATOR</th>
                      <th>UNIT</th>
                      <th>URAIAN PEKERJAAN</th>
                      <th>Material</th>
                      <th>Jasa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$dsgntr->designators_name}}</td>
                        <td>{{$dsgntr->designators_unit}}</td>
                        <td>{{$dsgntr->designators_uraian}}</td>
                        <td>{{$dsgntr->designators_material}}</td>
                        <td>{{$dsgntr->designators_jasa}}</td>
                    </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      {{-- ############################################################# END MODAL DETAIL DESIGNATOR ############################################################# --}}    
 

      {{-- ############################################################# MODAL ADD DESIGNATOR ############################################################# --}}
      @foreach ($designators as $dsgntr)
        <div class="modal fade" id="addDataDesignator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Designator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{ route('addDesignator') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                      <label for="designators_name">Designator</label>
                      <input type="text" class="form-control form-control-sm" id="designators_name" name="designators_name" placeholder="Enter Designator">
                    </div>
                    <div class="form-group">
                      <label for="designators_unit">Unit</label>
                      <select class="form-control select2" style="width:100%;" required name="designators_unit">
                        <option selected disabled value="">Choose...</option>
                        <option value="Pcs">Pcs</option>
                        <option value="Meter">Meter</option>
                        <option value="Core">Core</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="designators_material">Material</label>
                      <input type="text" class="form-control form-control-sm" id="designators_material" name="designators_material" placeholder="Enter Material">
                    </div>
                    <div class="form-group">
                      <label for="designators_jasa">Jasa</label>
                      <input type="text" class="form-control form-control-sm" id="designators_jasa" name="designators_jasa" placeholder="Enter Jasa">
                    </div>
                    <div class="form-group">
                      <label for="designators_jasa">Uraian</label>
                      <textarea type="text" class="form-control form-control-sm" id="designators_uraian" name="designators_uraian" placeholder="Enter Uraian"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Save</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      @endforeach
      {{-- ############################################################# END MODAL ADD DESIGNATOR ############################################################# --}}


      {{-- ############################################################# MODAL EDIT DESIGNATOR ############################################################# --}}
      @foreach ($designators as $dsgntr)
        <div class="modal fade" id="editDataDesignator{{ $dsgntr->designators_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Designator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{ route('editDesignator') }}" method="POST">
                @method ('patch')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                      <label for="designators_name">Designator</label>
                      <input type="hidden" name="designators_id" value="{{ $dsgntr->designators_id}}">
                      <input type="text" class="form-control form-control-sm" id="designators_name" name="designators_name" value="{{ $dsgntr->designators_name }}">
                    </div>
                    <div class="form-group">
                      <label for="designators_unit">Unit</label>
                      <select class="form-control select2" style="width:100%;" required name="designators_unit" value="{{ $dsgntr->designators_unit }}">
                        <option selected value="{{ $dsgntr->designators_unit }}">{{ $dsgntr->designators_unit }}</option>
                        <option value="Pcs">Pcs</option>
                        <option value="Meter">Meter</option>
                        <option value="Core">Core</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="designators_material">Material</label>
                      <input type="text" class="form-control form-control-sm" id="designators_material" name="designators_material" value="{{ $dsgntr->designators_material }}">
                    </div>
                    <div class="form-group">
                      <label for="designators_jasa">Jasa</label>
                      <input type="text" class="form-control form-control-sm" id="designators_jasa" name="designators_jasa" value="{{ $dsgntr->designators_jasa }}">
                    </div>
                    <div class="form-group">
                      <label for="designators_jasa">Uraian</label>
                      <textarea type="text" class="form-control form-control-sm" id="designators_uraian" name="designators_uraian" value="{{ $dsgntr->designators_uraian }}">{{ $dsgntr->designators_uraian }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Save</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      @endforeach
      {{-- ############################################################# END MODAL EDIT DESIGNATOR ############################################################# --}}


    {{-- ############################################################# MODAL ADD USER ############################################################# --}}
    <div class="modal fade" id="addDataUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('addUser') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="text" class="form-control form-control-sm" id="inputNIK" name="NIK" placeholder="Enter nik">
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control form-control-sm" id="inputNama" name="Username" placeholder="Enter nama">
                </div>
                <div class="form-group">
                  <label for="nama">Email</label>
                  <input type="text" class="form-control form-control-sm" id="inputNama" name="Email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control form-control-sm" id="inputAlamat" name="Alamat" placeholder="Enter Alamat">
                </div>
                <div class="form-group">
                  <label for="kontak">Kontak</label>
                  <input type="text" class="form-control form-control-sm" id="inputKontak" name="Kontak" placeholder="Enter Kontak">
                </div>
                <div class="form-group">
                  <label for="kontak">User Type</label>
                  <select class="form-control select2" style="width:100%;" required name="User_type">
                    <option selected disabled value="">Choose...</option>
                    <option value="Pengawas Lapangan">Pengawas Lapangan</option>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                  </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Simpan</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    {{-- ############################################################# MODAL EDIT USER ############################################################# --}}
    @foreach ($users as $usr)
    <div class="modal fade" id="editDataUser{{ $usr->user_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('editUser') }}" method="POST">
            @method('patch')
            @csrf
            <div class="modal-body">
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="hidden" name="user_id" value="{{ $usr->user_id }}">
                  <input disabled type="text" class="form-control form-control-sm" id="inputNIK" name="user_id" placeholder="Enter nik" value="{{ $usr->user_id }}">
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control form-control-sm" id="inputNama" name="Username" placeholder="Enter nama" value="{{ $usr->username }}">
                </div>
                <div class="form-group">
                  <label for="nama">Email</label>
                  <input type="text" class="form-control form-control-sm" id="inputNama" name="Email" placeholder="Enter Email" value="{{ $usr->email }}">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control form-control-sm" id="inputAlamat" name="Alamat" placeholder="Enter Alamat" value="{{ $usr->alamat }}">
                </div>
                <div class="form-group">
                  <label for="kontak">Kontak</label>
                  <input type="text" class="form-control form-control-sm" id="inputKontak" name="Kontak" placeholder="Enter Kontak" value="{{ $usr->kontak }}">
                </div>
                <div class="form-group">
                  <label for="kontak">User Type</label>
                  <select class="form-control select2" style="width:100%;" required name="User_type" >
                    <option selected value="{{ $usr->user_type }}">{{ $usr->user_type }}</option>
                    <option value="Pengawas Lapangan">Pengawas Lapangan</option>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                  </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Simpan</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach

    {{-- ############################################################# MODAL DELETE USER ############################################################# --}}
    {{-- MODAL DELETE DATA USER --}}
    <div class="modal fade" id="deleteDataUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Data User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('deleteUser') }}" method="POST">
            @method('delete')
            @csrf
            <div class="modal-body">
              <h5>Apakah anda yakin ingin menghapus User Ini?</h5>
              <input type="hidden" name="user" id="userIdDel">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Hapus</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    {{-- ############################################################# END MODAL USER ############################################################# --}}


    {{-- ############################################################# MODAL DATA VENDOR ############################################################# --}}
    {{-- MODAL ADD DATA VENDOR --}}
    <div class="modal fade" id="addDataVendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Vendor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('addVendor') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                  <label for="vendors_name">Vendor Name</label>
                  <input type="text" class="form-control form-control-sm" id="inputNamaMitra" name="vendors_name" placeholder="Enter Mitra">
                </div>
                <div class="form-group">
                  <label for="vendors_address">Address</label>
                  <input type="text" class="form-control form-control-sm" id="inputAlamat" name="vendors_address" placeholder="Enter Alamat mitra">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Simpan</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    {{-- ############################################################# MODAL EDIT VENDOR ############################################################# --}}
    {{-- MODAL EDIT DATA VENDOR --}}
    @foreach ($vendors as $vndr)
      <div class="modal fade" id="editDataVendor{{ $vndr->vendors_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Data Vendor</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              
            <form action="{{ route('editVendor') }}" method="POST">
              @method ('patch')
              @csrf
              <div class="modal-body">
                  <div class="form-group">
                    <label for="vendors_name">Vendor Name</label>
                    <input type="hidden" name="vendors_id" value="{{ $vndr->vendors_id }}">
                    <input type="text" class="form-control form-control-sm" id="inputNameVendor" name="vendors_name" value="{{ $vndr->vendors_name }}">
                  </div>
                  <div class="form-group">
                    <label for="vendors_address">Address</label>
                    <input type="text" class="form-control form-control-sm" id="inputAddress" name="vendors_address" value="{{ $vndr->vendors_address }}">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Batal</button>
              </div>
            </form>
    
          </div>
        </div>
      </div>
    @endforeach
    
    {{-- ############################################################# MODAL DELETE VENDOR ############################################################# --}}
    {{-- MODAL DELETE DATA VENDOR --}}
    <div class="modal fade" id="deleteDataVendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Data Vendor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('deleteVendor') }}" method="POST">
            @method('delete')
            @csrf
            <div class="modal-body">
              <h5>Apakah anda yakin ingin menghapusnya Vendor ini?</h5>
              <input type="hidden" name="delVendor" id="delVID">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Hapus</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    {{-- ############################################################# END MODAL DELETE VENDOR ############################################################# --}}

    {{-- ############################################################# MODAL DELETE DESIGNATOR ############################################################# --}}
    {{-- MODAL DELETE DATA VENDOR --}}
    <div class="modal fade" id="deleteDataDesignator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Data Designator</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('deleteDesignator') }}" method="POST">
            @method('delete')
            @csrf
            <div class="modal-body">
              <h5>Apakah anda yakin ingin menghapusnya Designator Ini ?</h5>
              @foreach ($designators as $dsgntr)
                <input type="hidden" name="delVendor" value="{{$dsgntr->designators_id}}">
              @endforeach
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Hapus</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i>&nbsp;Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    {{-- ############################################################# END MODAL DELETE DESIGNATOR ############################################################# --}}


    <script>
      $(document).ready(function() {
          $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
          });
              $('#TableIDUser').DataTable({
                  "paging": true,
                  "pageLength": 5,
                  "lengthMenu": [ [5, 10, 20, -1], [5, 10, 20, "All"] ],
                  "lengthChange": true,
                  "searching": true,
                  "ordering": true,
                  "order": [[ 0, 'asc' ], [ 1, 'asc' ]],
                  "info": true,
                  "autoWidth": true,
                  "responsive": true,
              });

              $('#TableIDVendor').DataTable({
                  "paging": true,
                  "pageLength": 5,
                  "lengthMenu": [ [5, 10, 20, -1], [5, 10, 20, "All"] ],
                  "lengthChange": true,
                  "searching": true,
                  "ordering": true,
                  "info": true,
                  "autoWidth": true,
                  "responsive": true,
              });

              $('#TableIDDesignator').DataTable({
                  "paging": true,
                  "pageLength": 5,
                  "lengthMenu": [ [5, 10, 20, -1], [5, 10, 20, "All"] ],
                  "lengthChange": true,
                  "searching": true,
                  "ordering": true,
                  "info": true,
                  "autoWidth": true,
                  "responsive": true,
              });

              $('#tableDummy').DataTable();
          });

      // to get id into modal delete user
      @php
        foreach($users as $usr):
          echo'$(".delete'.$usr->user_id.'").click(function(e) {';
            echo'e.preventDefault();';
            echo"var id   = $(this).attr('data-pk');";
            echo'var test = $("#userIdDel").val(id);';
          echo'});';
        endforeach;
      @endphp
    
     // to get id into modal delete vendor
     @php
        foreach($vendors as $vndr):
          echo'$(".deleteVndr'.$vndr->vendors_id.'").click(function(e) {';
            echo'e.preventDefault();';
            echo"var id   = $(this).attr('data-pk');";
            echo'var test = $("#delVID").val(id);';
          echo'});';
        endforeach;
      @endphp

      
    
    </script>
    
    
@endsection