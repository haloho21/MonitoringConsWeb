@extends('index')

@section('content')
    
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Users</h3>
                <p class="text-right">
                        <button href="#" class="btn btn-sm btn-success text-decoration-none" type="button" data-toggle="modal" data-target="#addDataLop">ADD USER</button>
                    </p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
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
                            <button href="#" class="btn btn-primary btn-sm text-decoration-none" type="button" data-toggle="modal" data-target="#addDataLop">Edit</button>&nbsp;
                            <button href="#" class="btn btn-danger btn-sm text-decoration-none" type="button" data-toggle="modal" data-target="#addDataLop">Delete</button>           
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Vendors</h3>
                <p class="text-right">
                        <button href="#" class="btn btn-sm btn-success text-decoration-none" type="button" data-toggle="modal" data-target="#addDataLop">ADD VENDOR</button>
                    </p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
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
                      <td>{{$vndr->vendor_name}}</td>
                      <td>
                        <div class="d-flex flex-nowrap">
                            <button href="#" class="btn btn-primary btn-sm text-decoration-none" type="button" data-toggle="modal" data-target="#addDataLop">Edit</button>&nbsp;
                            <button href="#" class="btn btn-danger btn-sm text-decoration-none" type="button" data-toggle="modal" data-target="#addDataLop">Delete</button>           
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    



@endsection