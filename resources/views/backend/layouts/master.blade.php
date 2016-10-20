<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>@yield('title','Backend | Dashboard Home')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    @include('includes.stylesheets')
    <!-- The styles -->
    <link rel="shortcut icon" href="img/favicon.ico">

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('admin/dashboard')}}"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Admin</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->
            <!-- theme selector starts -->
            <!-- theme selector ends -->

            

        </div>
    </div>
    <!-- topbar ends -->
@include('backend.includes.sidebar')
@yield('dashboard-menu')
@yield('main-content')
    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Ravi Sharma</a> 2016</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Laravel Engine</a></p>
    </footer>

</div>
@include('includes.script')