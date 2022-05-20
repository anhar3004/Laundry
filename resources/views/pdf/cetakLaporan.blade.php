<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style type="text/css">
        #outtable {
            padding: 20px;
            border: 1px solid #e3e3e3;
            width: 100%;
            border-radius: 5px;
        }

        h1{
            text-align: center;
            font-weight: bold;
        }

        .short {
            width: 50px;
        }

        .normal {
            width: 150px;
        }

        table {
            border-collapse: collapse;
            font-family: arial;
            color: #5E5B5C;
        }

        thead th {
            text-align: left;
            padding: 10px;
        }

        tbody td {
            border-top: 1px solid #e3e3e3;
            padding: 10px;
        }

        tbody tr:nth-child(even) {
            background: #F6F5FA;
        }

        tbody tr:hover {
            background: #EAE9F5
        }

    </style>
</head>

<body>
    <div id="outtable">
        <h1 >Transaksi</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Tanggal</th>
                    <th>Customer</th>
                    <th>Paket</th>
                    <th>Tarif</th>
                    <th>Status Pembayaran</th>
                    <th>Berat</th>
                    <th>Total</th>

                </tr>
            <tbody>
                @foreach ($transaksi as $trx)
                    <tr class="details">
                        <td width="100px">{{ $trx->kode_transaksi }}</td>
                        <td width="100px">{{ date('m/d/Y', strtotime($trx->created_at)) }}</td>
                        <td width="100px">{{ $trx->customers->nama }}</td>
                        <td width="150px">{{ $trx->pakets->paket }}</td>
                        <td width="100px">Rp. {{ number_format($trx->pakets->tarif) }}</td>
                        <td width="100px">{{ $trx->statusPembayarans->status_pembayaran }}</td>
                        <td width="50px">{{ $trx->berat }} Kg</td>
                        <td width="100px">Rp. {{ number_format($trx->total) }}</td>
                    </tr>
                    @endforeach
            </tbody>
            <tbody>

                <tr>
                    <td colspan="6"></td>
                    <td><strong>Total</strong> </td>
                    <td><strong>Rp. {{ number_format($total) }}</strong> </td>
                </tr>


            </tbody>



            </thead>
        </table>


    </div>
</body>

</html>
