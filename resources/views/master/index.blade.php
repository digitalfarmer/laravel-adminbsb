<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salmon Home</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

     <!-- Custom Css -->
     <link href="{{ mix('/css/app.css')}}" rel="stylesheet">

</head>
<body class="theme-indigo">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Loading ...</p>
        </div>
    </div>
     <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Search ...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- TOP Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{__('sales')}}">Salmon (sales monitoring)</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                     <!-- Call Search -->
                     <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #TOP Bar -->
    <section>
        <!-- left sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- user info -->
            <!-- menu -->
            <div class="menu">
            <ul class="list">
                <li class="header">Main Menu</li>
                <li class="active">
                    <a href="{{ __('sales') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="##">
                        <i class="material-icons">local_offer</i>
                        <span>Product</span>
                    </a>
                </li>
                <li>
                    <a href="##">
                    <i class="material-icons">local_mall</i>
                    <span>Sales</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">streetview</i>
                    <span>Maps</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="#">Distribution</a></li>
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">Product</a></li>
                    </ul>
                </li>
            </ul>
            </div>
            <!-- #menu -->
            <!-- legal -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">Salmon - AdesDev</a>.
                </div>
                <div class="version">
                    <b>Beta Version: </b> 0.0.5
                </div>
            </div>
            <!-- #legal -->
        </aside>
        <!-- END left sidebar -->
        <!-- right sidebar -->
        <aside id="rightsidebar" class="right-sidebar">

        </aside>
    </section>

    <section class="content">
    @yield('content')
    </section>
<!-- Custom Js -->
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>