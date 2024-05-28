@extends('index')

@section('content')

{{-- <!-- @if (Session::has('success'))
<div class="alert alert-success">
  <p>{{Session::get('success')}}</p>
</div>
@endif

@if (Session::has('alert'))
<div class="alert alert-danger">
  <p>{{Session::get('alert')}}</p>
</div>
@endif --> --}}

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>AANWIJZING</h1>
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
          <div class="card card-outline card-danger">
                <div class="card-header">
                    <h3 class="card-title">Update Data Aanwijzing</h3>
                </div>
                <div class="card-body">
                    <span>
                        Cara penginputan :<br>
                        <ul>
                                <li>Harap mengisi semua field yang ada, tidak ada yang kosong</li>
                                <li>Lampiran file evident permintaan harus di upload</li>
                                <li>Untuk list barang yang di input , harap tidak memilih barang yang sama, silahkan di komulatifkan saja jumlahnya</li>
                                <li>Volume tidak boleh kosong, jika satu kosong, maka semua list tidak akan terinsert ke database</li>
                                <li>Yakinkan kalau inputan anda sudah benar, karena tidak bisa di edit lagi</li>
                        </ul>
                    </span>
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
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>  

                    <hr> 

                    <!-- text input multyple -->
                    <div class="form-group">
                      <form name="add_Data" id="add_Data">  
                        @csrf
                        {{-- <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                        </div>

                        <div class="alert alert-success print-success-msg" style="display:none">
                        <ul></ul>
                        </div> --}}
                        <h4 class="form-section"><i class="fas fa-clipboard-list"></i>Update Progress - {{$Dataproject->name_location}}</h4>
                        <hr>
                        <div style="text-align:right">
                          <button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus-square"></i>&nbsp;Add</button>
                        </div>
                        <hr>
                        <div class="table-responsive">  
                            <table class="table table-borderless" id="dynamic_field">
                            <thead class="thead-dark">
                              <tr>
                                <td>DESIGNATOR</td>
                                <td>UNIT</td>
                                <td>URAIAN PEKERJAAN</td>
                                <td>JUMLAH</td>
                                <td>ACTION</td>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>  
                                  <td>
                                    <input type="hidden" name="project_id" value="{{ $project_id }}">
                                    <input type="hidden" name="status_update" value="{{$collect_status_update->get('status_update')}}">
                                    <input type="hidden" name="nilai_drm" value="{{$Dataproject->nilai_drm}}">
                                    <input type="text" readonly="readonly" name="name[]" placeholder="Enter Designator" id="namedesign1" class="form-control name_list" />
                                  </td>
                                  <td>
                                    <input type="text" readonly="readonly" name="satuan[]" placeholder="Satuan" id="unitdesign1" class="form-control unit_list">
                                    <input type="hidden" readonly="readonly" name="tot_material[]" id="totMaterdesign1" class="form-control totMater_list">
                                  </td> 
                                  <td>
                                    <input type="text" readonly="readonly" name="deskripsi[]" placeholder="Deskripsi" id="descdesign1" class="form-control desc_list">
                                    <input type="hidden" readonly="readonly" name="tot_jasa[]" id="totJasadesign1" class="form-control totJasa_list">
                                  </td>
                                  <td>
                                    <input type="text" name="budget[]" placeholder="Enter Budget" class="form-control budget_list" required>
                                  </td>
                                  <td>
                                    <button href="#" class="btn btn-success btn-searchdata" data-namedesign="namedesign1" data-desc="descdesign1" data-units="unitdesign1" data-material="totMaterdesign1" data-jasa="totJasadesign1"  type="button" data-toggle="modal" data-target="#SearchDesignator"><i class="fas fa-search"></i></button>
                                    <!-- <button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus-square"></i></button> -->
                                  </td>
                                </tr>
                              </tbody> 
                            </table> 
                            <hr>
                            <div style="text-align:right">
                              <button type="button" name="submit" id="submit" class="btn btn-info" value="Submit">Submit</button>  
                            </div> 
                        </div>
                      </form>  
                    </div> 
                    <!-- END text input multyple -->


                </div>
              <!-- /.card-body -->
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

        $('#ListHistory').DataTable({
            "paging": true,
            "pageLength": 5,
            "lengthMenu": [ [5, 10, 20, 30, 40, 50, -1], [5, 10, 20, 30, 40, 50, "All"] ],
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "order": [[ 0, 'asc' ], [ 1, 'asc' ]],
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });

     // dynamic add colom to input designator
      var postURL = "{{ route('addData') }}";
      var i=1;  

      //add column input
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" id="namedesign'+i+'" readonly="readonly" placeholder="Enter Designator" class="form-control name_list" /></td>'+'<td><input type="text" name="satuan[]" placeholder="Satuan" id="unitdesign'+i+'" readonly="readonly" class="form-control unit_list"></td>'+'<td><input type="text" name="deskripsi[]" placeholder="Deskripsi" id="descdesign'+i+'" readonly="readonly" class="form-control desc_list"></td>'+'<td><input type="text" name="budget[]" placeholder="Enter budget" class="form-control budget_list" required/></td><td><input type="hidden" readonly="readonly" name="tot_material[]" id="totMaterdesign'+i+'" class="form-control totMater_list"></td><td><input type="hidden" readonly="readonly" name="tot_jasa[]" id="totJasadesign'+i+'" class="form-control totJasa_list"></td>'+'<td><button class="btn-searchdata btn btn-success" data-namedesign="namedesign'+i+'" data-desc="descdesign'+i+'" data-units="unitdesign'+i+'" data-material="totMaterdesign'+i+'" data-jasa="totJasadesign'+i+'" type="button" data-toggle="modal" data-target="#SearchDesignator"><i class="fas fa-search"></i></button></td>'+'<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fas fa-window-close"></i></button></td></tr>');  
      });

      // dynamic remove colom
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      }); 

      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      
      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                method:"post",  
                data:$('#add_Data').serialize(),
                type:'json',
                success:function(data)  
                {

                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_Data')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        console.log('==================')
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                        $(".print-success-msg").fadeTo(1000, 500).slideUp(500, function(){
                          $(".print-success-msg").slideUp(500);
                        });
                        window.location = data.url;
                    }
                }  
           });  
      });  

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
                borderWidth         : 2,
                lineTension         : 0,
                spanGaps : true,
                borderColor         : '#0046FF', // BIRU
                pointRadius         : 3,
                pointHoverRadius    : 7,
                pointColor          : '#0046FF',
                pointBackgroundColor: '#0046FF',
                data                : [
                                        @php  
                                          for ($x = 0; $x <= 101; $x+=$linePlanning) {
                                            echo "$x,";
                                          }
                                        @endphp
                                      ]
              },
              {
                label               : 'REALISASI',
                fill                : false,
                borderWidth         : 2,
                lineTension         : 0,
                spanGaps : true,
                borderColor         : '#FF0000', // MERAH
                pointRadius         : 3,
                pointHoverRadius    : 7,
                pointColor          : '#FF0000',
                pointBackgroundColor: '#FF0000',
                data                : [
                                        @php  
                                          for ($x = 0; $x <= 101; $x+=$linePlanning) {
                                            echo "$x,";
                                          }
                                        @endphp
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
                ticks : {
                  fontColor: '#000000',
                },
                gridLines : {
                  display : false,
                  color: '#0046FF',
                  drawBorder: false,
                }
              }],
              yAxes: [{
                ticks : {
                  stepSize: 10,
                  fontColor: '#000000',
                },
                gridLines : {
                  display : true,
                  color: '#000000',
                  drawBorder: true,
                }
              }]
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