@extends('master.index')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>List Salesman</h2>
    </div>

    <!-- list card -->
    @foreach($datasales as $datasale)
    <div class="row clearfix">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2>Supervisor 
                        <small>Sales Group Lead</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{ __('sales-detail') }}">Detail</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- profile sales supervisor -->
                <div class="body">
                    Nama : {{$datasale-> Nama_Personil }}<br>
                    Nama : {{$datasale-> Kode_Personil }}
                </div>
                <!-- ## profile sales supervisor -->
            </div>
        </div>

    </div>
   @endforeach
    <!-- ##list card -->
</div>
@endsection