
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->


    <title>Hospital</title>

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">




    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500&amp;subset=arabic" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.1/slick-theme.css "/>
    <link rel="stylesheet" type="text/css" href="https://eservice.sba.gov.sa/assets/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css?v=3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css?v=3">


    <!-- Your custom styles (optional) -->
    <link href="https://eservice.sba.gov.sa/assets/css/style.css" rel="stylesheet">

          <link href="https://eservice.sba.gov.sa/assets/css/sba-skins/origin.css" rel="stylesheet">
            <style type="text/css">
        section {
          display: block;
        }
        .bmd-form-group .bmd-label-static, .bmd-form-group.is-filled .bmd-label-floating, .bmd-form-group .is-filled .bmd-label-floating, .bmd-form-group.is-focused .bmd-label-floating, .bmd-form-group .is-focused .bmd-label-floating
        {
            right: 0;
            left: auto;
        }
        .btn-contact {
            background: #14447a;
            color: #fff;
        }
        .btn-contact:hover {
            color: #ffffff;
            background-color: #14447a !important;
        }
        :root {
            --primary: #14447a;
            --secondary: #4eaaa0;
        }
    </style>


</head>

<body>
  <header class="navBar">
    <div class="container">
        <div class="d-flex flex-row align-items-center justify-content-between">
            <div>
                                            <a href="">
                            <img src="" class="img-fluid" style="width: 220px;">
                        </a>
                                </div>


  <div class="bmd-layout-container bmd-drawer-f-l " style="display: inline-block;">
    <style type="text/css">
    #dw-s1 .submenu-item {
        width: 100%
    }
    #dw-s1 .list-group .dropdown-toggle {
        justify-content: flex-start;
    }
    #dw-s1 .menu-text {
        margin: 0;
    }
    #dw-s1 .list-group-item .material-icons {
        margin: 0;
        font-size: 18px;
    }
    #dw-s1 .list-group-item.active {
        background-color: #a8c6d8ba;
    }

        #dw-s1 .dropdown-toggle::after {
            margin-left: auto;
        }
        #dw-s1 .list-group-item.submenu-item {
            padding: 10px;
            padding-left: 40px;
            padding-right: 5px;
        }
        #dw-s1 .list-group-item.thirdmenu-item {
            padding: 10px;
            padding-left: 72px;
            padding-right: 5px;
        }
        #dw-s1 .list-group-item {
        flex-wrap: nowrap;
        padding-left: 12px;
    }


    .btn-main-primary {
    background-color: #ffa21f;
    color: #fff;
}

}

.secondry-color-text {
    color:#c4c2be;
}


.custom-file-control:invalid, .form-control:invalid {
    background-image: linear-gradient(0deg, #ffa21f 2px,rgba(213,0,0,0) 0),linear-gradient(0deg,rgba(0,0,0,.26) 1px,transparent 0);
}


.custom-file-control, .form-control, .is-focused .custom-file-control, .is-focused .form-control {
    background-image: linear-gradient(0deg, #ffa21f 2px,rgba(0,150,136,0) 0),linear-gradient(0deg,rgba(0,0,0,.26) 1px,transparent 0);
}





.checkbox label input[type=checkbox]:checked+.checkbox-decorator .check:before, label.checkbox-inline input[type=checkbox]:checked+.checkbox-decorator .check:before {
    color: #ffa21f;
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
    animation: b .3s forwards;
}


</style>



                                    <section class="pre-section my-5">

<section class="form-elegant my-md-5 mx-md-3" style="width: 100%">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12">

      <!--Form without header-->
      <div class="card h-100 radius-border">

      	<div class="row" style="height: 100%">
      		<div class="col-md-8">

                
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                            {{ __('Register ?') }}
                                        </a>
                                </div>
                            </div>
                        </form>


      		</div>


      			<!--Header-->

      <!--/Form without header-->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>


                    </section>




        </div>

</div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>

<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js" integrity="sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH" crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="https://eservice.sba.gov.sa/assets/js/moment-with-local.js"></script>
<script type="text/javascript" src="https://eservice.sba.gov.sa/assets/js/moment.js"></script>
<script type="text/javascript" src="https://eservice.sba.gov.sa/assets/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">

</script>
</body>

</html>