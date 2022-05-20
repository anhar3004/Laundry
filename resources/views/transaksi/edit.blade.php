@extends('layouts.main')

@section('title', 'Update Transaksi ')

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
                                    <h2 class="title-1"><strong>Ubah</strong> Transaksi</h2>
                                </div>
                                <div class="card-body card-block">
                                    <form action="/transaksi/{{ $transaksi->id }}/update" method="post" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="card-body card-block">
                                            <div class="form-group " >
                                                <label for="vat" class=" form-control-label">Kode Pesanan</label>
                                                <input name="kode_transaksi" type="text" id="vat" placeholder="" class="form-control" value="{{ $transaksi->kode_transaksi }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="company" class=" form-control-label">Customer</label>
                                                <select id="disabledSelect" class="form-select" name="customer" >
                                                    @foreach ($customer as $c )
                                                    <option value="{{ $c->id  }}" @if ($c->nama == $c->nama) selected @endif>{{ $c->nama }}</option>
                                                    @endforeach
                                                  </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="company" class=" form-control-label">Paket</label>
                                                <select id="disabledSelect" class="form-select" name="paket">
                                                    @foreach ($paket as $p )
                                                    <option value="{{ $p->id }}" @if ($p->paket == $p->paket) selected @endif>{{ $p->paket }}</option>
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
                                                    <option value="{{ $pesanan->id  }}" @if ($pesanan->status_pesanan == $pesanan->status_pesanan) selected @endif>{{ $pesanan->status_pesanan }}</option>
                                                    @endforeach
                                                  </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="company" class=" form-control-label">Status Pembayaran</label>
                                                <select id="disabledSelect" class="form-select" name="status_pembayaran">
                                                    @foreach ($status_pembayaran as $pembayaran )
                                                    <option value="{{ $pembayaran->id }}" @if ($pembayaran->status_pembayaran == $pembayaran->status_pembayaran) selected @endif>{{ $pembayaran->status_pembayaran }}</option>
                                                    @endforeach
                                                  </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="vat" class=" form-control-label">Berat</label>
                                                <input name="berat" type="text" id="vat" placeholder="" class="form-control" value="{{ $transaksi->berat }}">
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="vat" class=" form-control-label">Total</label>
                                                <input name="total" type="text" id="vat" placeholder="" class="form-control">
                                            </div> --}}
                                            <div class="form-group">
                                                <label for="company" class=" form-control-label">Admin</label>
                                                <select id="disabledSelect" class="form-select" name="admin">
                                                    @foreach ($user as $u )
                                                    <option value="{{ $u->id }}" @if ($u->nama == $u->nama) selected @endif>{{ $u->nama }}</option>
                                                    @endforeach
                                                  </select>
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
