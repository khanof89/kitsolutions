<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
    <meta name="msapplication-tap-highlight" content="no">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Milestone">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Milestone">

    <meta name="theme-color" content="#4C7FF0">

    <title>KIT Solutions - Admin Panel</title>

    <!-- page stylesheets -->
    <!-- end page stylesheets -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="/administrator/vendor/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="/administrator/vendor/pace/themes/blue/pace-theme-minimal.css"/>
    <link rel="stylesheet" href="/administrator/vendor/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="/administrator/vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="/administrator/styles/app.css" id="load_styles_before"/>
    <link rel="stylesheet" href="/administrator/styles/app.skins.css"/>
    <!-- endbuild -->
</head>
<body>

<div class="app no-padding no-footer layout-static">
    <div class="session-panel">
        <div class="session">
            <div class="session-content">
                <div class="card card-block form-layout">
                        {!! Form::open(['role' => 'form', 'id' => 'validate']) !!}
                        <div class="text-xs-center m-b-3">
                            <img src="/administrator/images/logo-icon.png" height="80" alt="" class="m-b-1"/>
                            <h5>
                                Welcome back!
                            </h5>
                            <p class="text-muted">
                                Sign in with your app id to continue.
                            </p>
                            @if(Session::has('message'))
                            <p>
                                <div class="alert alert-danger">Incorrect details</div>
                            </p>
                                @endif
                        </div>
                        <fieldset class="form-group">
                            <label for="username">
                                Enter your email
                            </label>
                            <input type="text" class="form-control form-control-lg" id="username" placeholder="username" name="email" required/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="password">
                                Enter your password
                            </label>
                            <input type="password" class="form-control form-control-lg" id="password" placeholder="********" name="password" required/>
                        </fieldset>
                        <label class="custom-control custom-checkbox m-b-1">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Stay logged in</span>
                        </label>
                        <button class="btn btn-primary btn-block btn-lg" type="submit">
                            Login
                        </button>
                    {!! Form::close() !!}
                </div>
            </div>
            <footer class="text-xs-center p-y-1">
                <p>
                    <a href="#">
                        Forgot password?
                    </a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                </p>
            </footer>
        </div>

    </div>
</div>

<script type="text/javascript">
    window.paceOptions = {
        document: true,
        eventLag: true,
        restartOnPushState: true,
        restartOnRequestAfter: true,
        ajax: {
            trackMethods: [ 'POST','GET']
        }
    };
</script>

<!-- build:js({.tmp,app}) scripts/app.min.js -->
<script src="/administrator/vendor/jquery/dist/jquery.js"></script>
<script src="/administrator/vendor/pace/pace.js"></script>
<script src="/administrator/vendor/tether/dist/js/tether.js"></script>
<script src="/administrator/vendor/bootstrap/dist/js/bootstrap.js"></script>
<script src="/administrator/vendor/fastclick/lib/fastclick.js"></script>
<script src="/administrator/scripts/constants.js"></script>
<script src="/administrator/scripts/main.js"></script>
<!-- endbuild -->

<!-- page scripts -->
<script src="/administrator/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- end page scripts -->

<!-- initialize page scripts -->
<script type="text/javascript">
    $('#validate').validate();
</script>
<!-- end initialize page scripts -->

</body>
</html>