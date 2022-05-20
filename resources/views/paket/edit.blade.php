@extends('layouts.main')

@section('title', 'Update Paket ')

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
                                    <h2 class="title-1"><strong>Ubah</strong> Paket</h2>
                                </div>
                                <div class="card-body card-block">
                                    <form action="/paket/{{ $paket->id }}/update" method="post" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="card-body card-block">
                                            <div class="form-group">
                                                <label for="company" class=" form-control-label">Jenis Layanan</label>
                                                <select id="disabledSelect" class="form-select" name="jenis_layanan">
                                                    @foreach ($jenis_layanan as $jenis)
                                                        <option value="{{ $jenis->id }}" @if ($jenis->jenis_layanan == $paket->jenis_layanan) selected @endif>
                                                            {{ $jenis->jenis_layanan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="vat" class=" form-control-label">Deskripsi</label>
                                                <input name="paket" type="text" id="vat" placeholder=""
                                                    class="form-control" value="{{ $paket->paket }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="vat" class=" form-control-label">Berat</label>
                                                <input name="berat" type="text" id="vat" placeholder="" class="form-control"
                                                    value="{{ $paket->berat }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="vat" class=" form-control-label">Tarif</label>
                                                <input name="tarif" type="text" id="vat" placeholder="" class="form-control"
                                                    value="{{ $paket->tarif }}">
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
