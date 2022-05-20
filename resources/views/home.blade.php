@extends('layouts.main')

@section('title', 'dashboard')

@include('layouts.header-mobile')

@include('layouts.sidebar')

@include('layouts.header-dekstop')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h1 class="title-1">Welcome <strong>"{{ auth()->user()->nama }}" </strong> </h1>
                        </div>
                        <br>
                        <div class="overview-wrap">
                            <h4 class="">"Selamat pagi,semoga aktivitas kamu berjalan lancar"</h4>
             </div>
                    </div>
                </div>
                <div class="row m-t-25">
                    <div class="col-sm-6 col-md-3">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{ $jumlah_customer }}</h2>
                                        <span>Total Customers</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{ $jumlah_paket }}</h2>
                                        <span>Total Product</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{ $jumlah_transaksi }}</h2>
                                        <span>Total Transaksi</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{ $total }}</h2>
                                        <span>total Pendapatan</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">Transaksi</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>ID Pesanan</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>Paket</th>
                                        <th>Tarif</th>
                                        <th>Berat</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                @foreach ($data_transaksi as $transaksi)
                                <tbody>
                                    <tr>
                                        <td>{{ $transaksi->kode_transaksi }}</td>
                                        <td>{{ date('m/d/Y',strtotime($transaksi->created_at)) }}</td>
                                        <td>{{ $transaksi->customers->nama }}</td>
                                        <td>{{ $transaksi->pakets->paket }}</td>
                                        <td>Rp. {{ number_format($transaksi->pakets->tarif) }}</td>
                                        <td>{{ $transaksi->berat }} Kg</td>
                                        <td>Rp. {{ number_format($transaksi->total) }}</td>
                                    </tr>
                                </tbody>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © Anhar Hadhitya 18111184 TIF RM 18 CIDA </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
@endsection
