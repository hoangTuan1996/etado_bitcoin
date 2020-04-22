@extends('admin.master')
@section('title')
    Trang chủ
@endsection
@section('page-header')
    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">Trang chủ</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-primary img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">23,536</h2>
                            <p class="text-white mb-0">Total Requests </p>
                        </div>
                        <div class="ml-auto"> <i class="fa fa-send-o text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-secondary img-card box-secondary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">45,789</h2>
                            <p class="text-white mb-0">Total Revenue</p>
                        </div>
                        <div class="ml-auto"> <i class="fa fa-bar-chart text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card  bg-success img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">89,786</h2>
                            <p class="text-white mb-0">Total Profit</p>
                        </div>
                        <div class="ml-auto"> <i class="fa fa-dollar text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-info img-card box-info-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">43,336</h2>
                            <p class="text-white mb-0">Monthly Sales</p>
                        </div>
                        <div class="ml-auto"> <i class="fa fa-cart-plus text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 ">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">Price</h3>
                            <div class="card-options">
                                <a class="btn btn-sm btn-primary" href="#">View</a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <h5 class="mb-1">Total Price</h5>
                            <h3 class="text-dark count mt-0 number-font">4,657</h3>
                            <div class="progress progress-sm mt-0 mb-2">
                                <div class="progress-bar bg-primary w-75" role="progressbar"></div>
                            </div>
                            <div class=""><i class="fa fa-caret-up text-green"></i>10% increases</div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-6 col-lg-6">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">Stock</h3>
                            <div class="card-options">
                                <a class="btn btn-sm btn-secondary" href="#">View</a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <h5 class="mb-1">Total Stock</h5>
                            <h3 class="text-dark count mt-0 number-font">2,592</h3>
                            <div class="progress progress-sm mt-0 mb-2">
                                <div class="progress-bar bg-secondary w-45" role="progressbar"></div>
                            </div>
                            <div class=""><i class="fa fa-caret-down text-danger"></i>12% decrease</div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-6 col-lg-6">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">Revenue</h3>
                            <div class="card-options">
                                <a class="btn btn-sm btn-success" href="#">View</a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <h5 class="mb-1">Total Revenue</h5>
                            <h3 class="text-dark count mt-0 number-font">3,517</h3>
                            <div class="progress progress-sm mt-0 mb-2">
                                <div class="progress-bar bg-success w-50" role="progressbar"></div>
                            </div>
                            <div class=""><i class="fa fa-caret-down text-danger"></i>5% decrease</div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-6  col-lg-6 ">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">Investment</h3>
                            <div class="card-options">
                                <a class="btn btn-sm btn-info" href="#">View</a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <h5 class="mb-1">Total Investment</h5>
                            <h3 class="text-dark count mt-0 font-30 number-font">5,759</h3>
                            <div class="progress progress-sm mt-0 mb-2">
                                <div class="progress-bar bg-info w-25" role="progressbar"></div>
                            </div>
                            <div class=""><i class="fa fa-caret-up text-success"></i>15% increase</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

