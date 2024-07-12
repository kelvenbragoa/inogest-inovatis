<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Quotation</title>

		<style>
			.invoice-box {
				max-width: 800px;
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
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
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

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="2" cellspacing="0">
				<tr class="top">
					<td colspan="4">
						<table>
							<tr>
								<td class="title">
									<img src="storage/img/sys/logo.png" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									Quotation #: {{$quotation->id}}<br />
									Created:{{$quotation->created_at->format('d-m-Y')}}<br />
									Due:{{$quotation->created_at->format('d-m-Y')}}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="4">
						<table>
							<tr>
								<td>
									{{$config->company_name}}<br/>
									NUIT: {{$config->company_nuit}}<br/>
									Mob.: {{$config->company_mobile}}<br/>
									Emaill: {{$config->company_email}}<br/>
									
									{{$config->company_city}} - {{$config->company_country}}
								</td>

								<td>
									{{$quotation->customer->name ?? ''}}<br />
									{{$quotation->representative ?? ''}}<br />
									{{$quotation->customer->mobile ?? ''}}<br />
									{{$quotation->customer->email ?? ''}}<br />
									{{$quotation->customer->address ?? ''}}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td colspan="4">Service</td>
				</tr>

				<tr class="details">
					<td colspan="4">{{$quotation->service}}</td>
				</tr>

				<tr class="heading">
					<td>Item</td>
					<td>Quantity</td>
					<td>Price</td>
					<td>Price Total</td>
				</tr>
				<?php $sum_total = 0 ?>
				@foreach ($quotation->quotation_detail as $item)
				<tr class="item">
					<td>{{$item->name}}</td>
					<td>{{$item->quatity}}</td>
					<td>{{number_format($item->price,2)}}</td>
					<td>{{number_format($item->price * $item->quatity,2)}}</td>
				</tr>
				<?php $sum_total =$sum_total + ($item->price * $item->quatity) ?>
				@endforeach
				
				<tr class="total">
					

					<td colspan="4"></td>
				</tr>

				<tr class="total">
					

					<td colspan="4">Total (Sem IVA incluído): {{number_format($sum_total,2)}}MT</td>
				</tr>
				<tr class="total">
					

					<td colspan="4">IVA({{$config->company_tax}}%): {{number_format($sum_total*($config->company_tax/100),2)}}MT</td>
				</tr>

				<tr class="total">
					

					<td colspan="4">Total(Com IVA incluído): {{number_format($sum_total+($sum_total*($config->company_tax/100)),2)}}MT</td>
				</tr>
				<tr class="total">
					

					<td colspan="4">Obs.:{{$quotation->obs}}</td>
				</tr>
				
			</table>
		</div>
		<div class="invoice-box">
			<table cellpadding="2" cellspacing="0">
				<tr class="total">
					

					<tr class="heading">
						<td colspan="4">Metodos de Pagamento</td>
					</tr>
					
				{{-- <tr class="item">
					<td>{{$config->company_bank_name1}}</td>
					<td></td>
					<td></td>
					<td>{{$config->company_bank_account1}}</td>
					
				</tr> --}}
				<tr class="item">
					<td>{{$config->company_bank_name2}}</td>
					<td></td>
					<td></td>
					<td>{{$config->company_bank_account2}}</td>
					
				</tr>
				<tr class="item">
					<td>{{$config->company_bank_name3}}</td>
					<td></td>
					<td></td>
					<td>{{$config->company_bank_account3}}</td>
				
				</tr>
				
				</tr>
			</table>
		</div>
	</body>
</html>