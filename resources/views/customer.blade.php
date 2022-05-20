@extends('layouts.main')

@section('title', 'Data Customer')

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
                            <h2 class="title-1 fw-bold">Data Customer</h2>
                        </div>
                        <hr style="height:10px;border:none;color:#333;background-color:#333;" />
                        <div class="table-data__tool">

                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-refresh"></i>Refresh</button>
                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small" data-toggle="modal" data-target="#modalTambah">
                                    <i class="zmdi zmdi-plus"></i>Add Customer</button>
                            </div>
                        </div>

                        @if (session('sukses'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('sukses') }}
                        </div>
                         @endif

                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3 table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>kode Customer</th>
                                        <th>Email</th>
                                        <th>Nama</th>
                                        <th>No Hp</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($customer as $c)
                                        <tbody>
                                            <tr>
                                                <td>{{ $c->id }}</td>
                                                <td>{{ $c->kode_customer }}</td>
                                                <td>{{ $c->email }}</td>
                                                <td>{{ $c->nama }}</td>
                                                <td>{{ $c->no_hp }}</td>
                                                <td>{{ $c->alamat }}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item bg-warning" href="/customer/{{ $c->id }}/edit">
                                                            <i class="zmdi zmdi-edit text-white"></i>
                                                        </a>
                                                        <a class="item bg-danger" href="/customer/{{ $c->id }}/delete" onclick="return confirm('apakah yakin akan di hapus ?')">
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
                        <h2 class="title-1"><strong>Tambah</strong> Customer</h2>
                    </h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body card-block">
                        <form action="customer/tambah" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Kode Customer</label>
                                    <input name="kode_customer" type="text" id="vat" placeholder="" class="form-control" value="{{ $noUrutAkhir }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Email</label>
                                    <input name="email" type="text" id="vat" placeholder="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Nama</label>
                                    <input name="nama" type="text" id="vat" placeholder="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">No Handphone</label>
                                    <input name="no_hp" type="text" id="vat" placeholder="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" ></textarea>
                                      </div>
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

@endsection
