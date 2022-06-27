@extends('layouts/admin/admin')

@section('header')
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Master
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">
                    </ul>
                </div>
            </nav>
        </div>
    </div>
@endsection
@section('main-content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Master Data</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Peternak</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-3 col-xxl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#add-category"
                                    class="btn btn-primary btn-event w-100">
                                    <span class="align-middle"><i class="ti-plus"></i></span> Peternak
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8">
                    <div class="card">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <!-- Modal Add Category -->
                @include('admin/peternak/modal-add')
            </div>

        </div>
    </div>
@endsection
