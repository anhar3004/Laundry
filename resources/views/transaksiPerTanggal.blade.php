@extends('layouts.main')

@section('title', 'Data Transaksi')

@include('layouts.header-mobile')

@include('layouts.sidebar')

@include('layouts.header-dekstop')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-lg-12">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1 fw-bold">Data Transaksi</h2>
                        </div>
                        <hr style="height:10px;border:none;color:#333;background-color:#333;" />
                        <div class="table-data__tool">

                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-refresh"></i>Refresh</button>
                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small" data-toggle="modal" data-target="#modalTambah">
                                    <i class="zmdi zmdi-plus"></i>Add Transaksi</button>
                                <button class="au-btn au-btn-icon btn-warning au-btn--small" data-toggle="modal" data-target="#modalFilter">
                                    <i class="zmdi zmdi-plus"></i>Filter Tanggal</button>
                            </div>
                        </div>

                        @if (session('sukses'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('sukses') }}
                        </div>
                         @endif

                        <div class="table-responsive m-b-40 ">
                            <table class="table table-borderless table-data3 table-hover">
                                <thead>
                                    <tr>
                                        <th>ID Pesanan</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>Paket</th>
                                        <th>Tarif</th>
                                        <th>Status Pesanan</th>
                                        <th>Status Pembayaran</th>
                                        <th>Berat</th>
                                        <th>Total</th>
                                        <th>Admin</th>
                                        <th>Action Status Pesanan</th>
                                        <th>Invoice</th>
                                        <th>Action</th>
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
                                                <td>{{ $transaksi->statusPesanans->status_pesanan }}</td>
                                                <td>{{ $transaksi->statusPembayarans->status_pembayaran }}</td>
                                                <td>{{ $transaksi->berat }} Kg</td>
                                                <td>Rp. {{ number_format($transaksi->total) }}</td>
                                                <td>{{ $transaksi->Users->nama }}</td>
                                                <td>
                                                    <div class="table-data-feature ">
                                                        <a class="item bg-success mx-auto" href="/transaksi/up_status/{{ $transaksi->id  }}">
                                                            <i class="zmdi zmdi-plus text-white"></i>
                                                        </a>
                                                        <a class="item bg-warning mx-auto" href="/transaksi/down_status/{{ $transaksi->id  }}">
                                                            <i class="zmdi zmdi-minus text-white"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item bg-primary mx-auto" href="/transaksi/print/{{  $transaksi->id}}">
                                                            <i class="zmdi zmdi-print text-white"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item bg-warning mx-auto" href="/transaksi/{{ $transaksi->id }}/edit">
                                                            <i class="zmdi zmdi-edit text-white"></i>
                                                        </a>
                                                        <a class="item bg-danger mx-auto" href="/transaksi/{{ $transaksi->id }}/delete" onclick="return confirm('apakah yakin akan di hapus ?')">
                                                            <i class="zmdi zmdi-delete text-white"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                            </table>
                        </div>
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


    <!-- MODAL TAMBAH-->
    <div class="modal" id="modalTambah" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <h2 class="title-1"><strong>Tambah</strong> Transaksi</h2>
                    </h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body card-block">
                        <form action="transaksi/tambah" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="card-body card-block">
                                <div class="form-group " >
                                    <label for="vat" class=" form-control-label">Kode Pesanan</label>
                                    <input name="kode_transaksi" type="text" id="vat" placeholder="" class="form-control" value="{{ $noUrutAkhir }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Customer</label>
                                    <select id="disabledSelect" class="form-select" name="customer" >
                                        @foreach ($customer as $c )
                                        <option value="{{ $c->id  }}">{{ $c->nama }}</option>
                                        @endforeach
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Paket</label>
                                    <select id="disabledSelect" class="form-select" name="paket">
                                        @foreach ($paket as $p )
                                        <option value="{{ $p->id }}">{{ $p->paket }}</option>
                                        @endforeach
                                      </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="vat" class=" form-control-label">Tarif per Kg (Rp)</label>
                                    <input name="tarif" type="text" id="vat" placeholder="" class="form-control" value="{{ $harga_paket }}">
                                </div> --}}
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Status Pesanan</label>
                                    <select id="disabledSelect" class="form-select" name="status_pesanan">
                                        @foreach ($status_pesanan as $pesanan )
                                        <option value="{{ $pesanan->id  }}">{{ $pesanan->status_pesanan }}</option>
                                        @endforeach
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Status Pembayaran</label>
                                    <select id="disabledSelect" class="form-select" name="status_pembayaran">
                                        @foreach ($status_pembayaran as $pembayaran )
                                        <option value="{{ $pembayaran->id }}">{{ $pembayaran->status_pembayaran }}</option>
                                        @endforeach
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Berat</label>
                                    <input name="berat" type="text" id="vat" placeholder="" class="form-control">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="vat" class=" form-control-label">Total</label>
                                    <input name="total" type="text" id="vat" placeholder="" class="form-control">
                                </div> --}}
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Admin</label>
                                    <select id="disabledSelect" class="form-select" name="admin">
                                        @foreach ($user as $u )
                                        <option value="{{ $u->id }}">{{ $u->nama }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL TAMBAH-->


    <!-- MODAL Filter Tanggal-->
    <div class="modal" id="modalFilter" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <h2 class="title-1"><strong>Filter </strong> Transaksi</h2>
                    </h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body card-block">
                        <form action="transaksi/filterTanggal" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label " >Tanggal awal</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar "></i>
                                        </div>
                                        <input name="tanggal_awal" class="form-control datepicker" id="date" name="date" placeholder="MM/DD/YYYY" type="text" value="{{ date('m/d/Y') }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label " >Tanggal Akhir</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar "></i>
                                        </div>
                                        <input name="tanggal_akhir" class="form-control datepicker" id="date" name="date" placeholder="MM/DD/YYYY" type="text" value="{{ date('m/d/Y') }}"/>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL Filter Tanggal-->

@endsection
