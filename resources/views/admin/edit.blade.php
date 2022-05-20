@extends('layouts.main')

@section('title', 'Admin Laundry')

    @include('layouts.header-mobile')

    @include('layouts.sidebar')

    @include('layouts.header-dekstop')


    @section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-30">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="title-1"><strong>Ubah</strong> Admin</h2>
                                </div>
                                <div class="card-body card-block">
                                    <form action="/admin/{{ $admin->id }}/update" method="post" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="card-body card-block">
                                            <div class="form-group">
                                                <label for="vat" class=" form-control-label">Kode admin</label>
                                                <input name="kode_admin" type="text" id="vat" placeholder="" class="form-control" value="{{ $admin->kode_admin }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="vat" class=" form-control-label">Email</label>
                                                <input name="email" type="text" id="vat" placeholder="" class="form-control" value="{{ $admin->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="vat" class=" form-control-label">Nama</label>
                                                <input name="nama" type="text" id="vat" placeholder="" class="form-control"  value="{{ $admin->nama }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="vat" class=" form-control-label">No Handphone</label>
                                                <input name="no_hp" type="text" id="vat" placeholder="" class="form-control"  value="{{ $admin->no_hp }}">
                                            </div>
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                                                    <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="password"  value="{{ $admin->password }}" >
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
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

    @endsection
