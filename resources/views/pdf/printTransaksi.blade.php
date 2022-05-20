<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A simple, clean, and responsive HTML invoice template</title>

		<style>
			.invoice-box {
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
                font-size: 25px;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;

			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
                font-size: 20px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
                text-align: center;
                font-size: 20px;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
                font-size: 18px;
                text-align: center;
                border-bottom: none;

			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {

				font-weight: bold;
                font-size: 20px;
			}

			@media only screen and (max-width: 100%) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}




		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table >
                <tr>
                    <td class="title" width="300px">
                        <h1>Jaya Laundry</h1>
                    </td>

                    <td width="300px">
                        Invoice : {{ $transaksi->kode_transaksi }}<br />
                        Created: {{ $transaksi->created_at }}<br />
                        Due: September 6, 2021
                    </td>
                </tr>
				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									Jaya Laundry.<br />
									Jalan CIrangang Timur No.26<br />
									081324544445 <br>
                                    jayalaundry@gmail.com
								</td>

								<td>
									{{ $transaksi->customers->nama }}.<br />
									{{ $transaksi->customers->alamat }}<br />
									{{ $transaksi->customers->no_hp }} <br>
                                    {{ $transaksi->customers->email }}
								</td>
							</tr>
						</table>
					</td>
				</tr>


			</table>
            <table>
                <tr class="heading">
					<td width="100px">Customer</td>
                    <td width="150px">Paket</td>
                    <td width="100px">Tarif Per Kg</td>
                    <td width="75px">Berat</td>
                    <td width="100px">Status Pesanan</td>
                    <td width="100px">Status Pembayaran</td>
                    <td width="100px">Total</td>
				</tr>

				<tr class="details">
					<td>{{ $transaksi->customers->nama }}</td>
					<td>{{ $transaksi->pakets->paket }}</td>
                    <td>Rp. {{ number_format($transaksi->pakets->tarif) }}</td>
                    <td>{{ $transaksi->berat }}Kg</td>
                    <td>{{ $transaksi->statusPesanans->status_pesanan }}</td>
                    <td>{{ $transaksi->statusPembayarans->status_pembayaran }}</td>
                    <td>Rp. {{ number_format($transaksi->total) }}</td>

				</tr>

				<tr class="total">
					<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>Total:  </strong> </td>
					<td><strong>Rp.{{ number_format($transaksi->total) }}</strong> </td>
				</tr>
            </table>
		</div>
	</body>
</html>
