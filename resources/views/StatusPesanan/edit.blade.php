@extends('layouts.main')

@section('title', 'Update Status Pesanan ')

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
                                    <h2 class="title-1"><strong>Ubah</strong> Status Pesanan</h2>
                                </div>
                                <div class="card-body card-block">
                                    <form action="/statusPesanan/{{ $status_pesanan->id }}/update" method="post" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="card-body card-block">
                                            <div class="form-group">
                                                <label for="company" class=" form-control-label">Status Pesanan</label>
                                                <input name="status_pesanan" type="text" id="company" placeholder=""
                                                    class="form-control" value="{{ $status_pesanan->status_pesanan }}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
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
