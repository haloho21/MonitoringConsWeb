<!DOCTYPE html>
<html lang="en">
<head>
	<title>WAPS</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
    {{-- <meta HTTP-EQUIV="Expires" CONTENT="-1"> --}}
    {{-- <meta http-equiv="refresh" content="1"/> --}}
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

    @include('sweetalert::alert')
    {{-- @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) --}}
{{-- @if(\Session::has('error'))
<script>
  alert("{{Session::get('error')}}");
</script>
@endif
@if(\Session::has('success'))
<script>
  alert("{{Session::get('success')}}");
<script>
@endif --}}
    
    <div class="container">
        <div class="myCard">
            <div class="row">

                <div class="col-md-6">
                    <div class="myLeftCtn">
                       
                            <div class="col">
                                <div class="logo border border-light" style="text-align: center">
                                    <img src="{{ url('/AdminLTE/dist/img/logo_ta2.png') }}" alt="TALogo">
                                </div>
                            </div>
          
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="myRightCtn">
                        
                    <form method="post" action="{{ route('login') }}" class="myForm text-center needs-validation" style="margin-right: 23px;">
                        @csrf
                        <header>Sign in</header>
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input class="myInput" type="text" name="userNIK" placeholder="User ID" id="" value="{{ Session::get('data') }}">
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input class="myInput" type="password" name="password" id="password" placeholder="Password" required>
                            <i id="pass-status" class="fa fa-eye eye mata" aria-hidden="true" onClick="viewPassword()"></i>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        
    
                        <input type="submit" class="butt" value="Log In">
                        
                    </form>
                    </div>
                </div>

            </div>
        </div>
</div>

    
    <style>
    body{
        background: #fbf3ff;
    }


    .container{
        position: absolute;
        max-width: 800px;
        height: 500px;
        margin: auto;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }

    .myLeftCtn{
        position: relative;
        background-image: linear-gradient(-45deg, #fff );
        border-radius: 25px;
        height: 100%;
        padding: 25px;
        color: rgb(192, 192, 192);
        font-size: 12px;
    

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .myRightCtn{
        position: relative;
        background: rgb(226, 43, 43);
        border-radius: 25px;
        height: 100%;
        padding: 25px;
        padding-left: 50px;
    }

    .myRightCtn header{
        color: rgb(255,255,255);
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .row{
        height: 100%;
    }

    .myCard{
        position: relative;
        background: #fff;
        height: 100%;
        border-radius: 25px;
        -webkit-box-shadow: 0px 10px 40px -10px rgba(0,0,0,0.7);
        -moz-box-shadow: 0px 10px 40px -10px rgba(0,0,0,0.7);
        box-shadow: 0px 10px 40px -10px rgba(0,0,0,0.7);
    }


    .myLeftCtn header{
        color: #fff;
        font-size: 44px;
    }

    .box{
        position: relative;
        margin: 20px;
        margin-bottom: 100px;
    
    }

    .myRightCtn .myInput{
        width: 230px;
        border-radius: 25px;
        padding: 10px;
        padding-left: 50px;
        border: none;
        margin-right: 20px;
        -webkit-box-shadow: 0px 10px 49px -14px rgba(0,0,0,0.7);
        -moz-box-shadow: 0px 10px 49px -14px rgba(0,0,0,0.7);
        box-shadow: 0px 10px 49px -14px rgba(0,0,0,0.7);
    }

    .myRightCtn .myInput:focus
    {
        outline: none;
    }

    .myForm
    {
        position: relative;
        margin-top: 30%;

    }


    .myRightCtn .butt
    {
        background: #1a77e2;
        color: #fff;
        width: 230px;
        border: none;
        border-radius: 25px;
        padding: 10px;
        -webkit-box-shadow: 0px 10px 41px -11px rgba(0,0,0,0.7);
        -moz-box-shadow: 0px 10px 41px -11px rgba(0,0,0,0.7);
        box-shadow: 0px 10px 41px -11px rgba(0,0,0,0.7);
    }

    .myRightCtn .butt:hover
    {
        background:  linear-gradient(45deg, #ff5b5b, #ff2626 );

    }

    .myRightCtn .butt:focus
    {
        outline: none;
    }


    .myRightCtn .fa
    {
        position: relative;
        color: #fd3636;
        left: 36px;
    }

    .butt_out
    {
        background:  transparent;
        color: #fff;
        width: 120px;
        border: 2px solid#fff;
        border-radius: 25px;
        padding: 10px;
        -webkit-box-shadow: 0px 10px 49px -14px rgba(0,0,0,0.7);
        -moz-box-shadow: 0px 10px 49px -14px rgba(0,0,0,0.7);
        box-shadow: 0px 10px 49px -14px rgba(0,0,0,0.7);
    }

    .butt_out:hover
    {
        border: 2px solid#eecbff;
    }


    .butt_out:focus
    {
        outline: none;
    }

    .logo{
            background-color: white;
            border-radius: 10px;
            /* height: 300px; */
            width: 100%;
            margin: auto;
            display: block;
    }
@media(min-width:240px){
    .mata{
        float:right;
        margin-left: -75px;
        margin-top: -9px;
        margin-right:260px;
        position: relative !important;
        z-index: 2;
    }
}

@media(min-width:768px) {
    .mata{
        float:right;
        margin-left: 5px;
        margin-top:-33px;
        margin-right:40px;
        position: relative !important;
        z-index: 2;
    }
}

/* ======================================================================= */

        /* .bungkus{
            width: 1000px;
            height: 600px;
            border-radius: 100px;
            background-color: #f00101;
            background: linear-gradient(-160deg, rgba(240,1,1,100) 0%, rgba(198, 0, 0,100) 35%, rgb(73, 0, 0) 100%);
        }

        img{
            display: block;
            margin: 80px auto 40px;
            width: 90%;
            text-align: center;
        } */
    </style>
    
    <script type="text/javascript">

        // (function()
        // {
        // if( window.localStorage )
        // {
        //     if( !localStorage.getItem('firstLoad') )
        //     {
        //     localStorage['firstLoad'] = true;
        //     window.location.reload();
        //     }  
        //     else{
        //         localStorage.removeItem('firstLoad');
        //     }
            
        // }
        // })();

    </script>

    <script>
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();

        function viewPassword()
        {
            var passwordInput = document.getElementById('password');
            var passStatus = document.getElementById('pass-status');
            
            if (passwordInput.type == 'password'){
                passwordInput.type='text';
                passStatus.className='fa fa-eye-slash mata'; 
            }
            else{
                passwordInput.type='password';
                passStatus.className='fa fa-eye mata';
            }
        }
    </script>
    
    
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>