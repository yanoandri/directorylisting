<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - <?php echo Setting::get('site_settings.title') != '' ? Setting::get('site_settings.title') : 'MyListing' ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">
    	html {
 			font-size: 10px;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
   		}
		body {
		  	font-family: 'Source Sans Pro', 'Segoe UI', 'Droid Sans', Tahoma, Arial, sans-serif;
		  	font-size: 14px;
		  	line-height: 1.45;
		  	color: #616161;
		  	background-color: #f5f5f5;
		}

    	.pull-right{
    		float: right;
    		margin: 15px;
    	}
    	.pull-left{
    		float: left;
    		margin: 15px;
    	}
    	.row{
    		clear: both;
    	}
    	.list-unstyled li{
    		list-style: none;
    	}
    	.body{
    		padding-top: 50px;
    	}
    	table{
    		border-collapse: collapse;
    		margin: 15px;
    		float: left;
    		width:100%;
    	}
    	th, tr,td{
    		border: 1px black solid;
    		background-color: white;
    	}
    	th,td{
    		padding: 5px;
    	}
    	.footer{
    		float:right;
    		margin: 15px;
    	}
    	.panel{
    	}
    	.text-muted {
  			color: #bdbdbd;
		}
.table-hover > tbody > tr:hover {
  background-color: #fafafa;
}
table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #fafafa;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #ededed;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dcedc8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e7b5;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #b2ebf2;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #9ce5ee;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #ffecb3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #ffe69a;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f9bdbb;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #f7a6a4;
}
    </style>

</head>
<body class="animated-content">
	<div class="container-fluid">
		@if (Session::has('success'))
			<div class="alert alert-dismissable alert-success">
				<i class="ti ti-check"></i>&nbsp; <strong>Well done!</strong> {{ Session::get('success') }}.
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			</div>
		@endif

		@if (Session::has('error'))
			<div class="alert alert-dismissable alert-danger">
				<i class="ti ti-check"></i>&nbsp; <strong>Oh snap!</strong> {{ Session::get('error') }}.
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			</div>
		@endif

		@if ($errors->has())
			<div class="alert alert-dismissable alert-danger">
				<i class="ti ti-close"></i>&nbsp; <strong>Oh snap!</strong>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			</div>
		@endif

		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-transparent">
		            <div class="panel-body">
		            	<!--
		                <div class="clearfix">
		                    <div class="pull-left">
		                        <img src="assets/img/logo-big.png" class="mt-md mb-md" alt="Avenxo">
		                        <address class="mt-md mb-md">
		                            <strong>Avenxo, Inc.</strong><br>
		                            705 Folsom Ave, Suite 400<br>
		                            San Francisco, CA 94107<br>
		                        </address>
		                    </div>
		                    <div class="pull-right">
		                        <h1 class="text-primary text-right" style="font-weight: normal;">
		                            INVOICE
		                            <small style="display: block;">#10007819</small>
		                        </h1>
		                    </div>
		                </div>
		                <hr>
		                -->
		                <div class="row mb-xl">
		                    <!-- <div class="col-md-12">
		                        <h1 class="text-primary text-center" style="font-weight: normal;">INVOICE</h1>
		                    </div> -->
		                    <div class="col-md-12">
		                        <div class="pull-left">
		                            <h3 class="text-muted">To</h3>
		                            <address>
		                                <strong>
		                                	<?php echo $billing_customer_customer_name; ?>
		                                 </strong><br/>
		                                <?php $address = $billing_customer_address; ?>
		                                <?php echo $address_address_1 . '<br>'; ?>
		                                <?php echo $address_address_2 != '' ? $address_address_1 . '<br>' : null; ?>
		                                {{ $address_city }}, {{ $zone_name }}. {{ $address_postcode }}<br>
		                                {{ $country_name }}
		                            </address>
		                        </div>
		                        <div class="pull-right">
		                            <h3 class="text-muted">Info</h3>
		                            <ul class="text-left list-unstyled">
		                                <li><strong>Date:</strong> {{ date('d/M/Y', strtotime($billing_created_at)) }}</li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>

		                <div class="row mb-xl body">
		                    <div class="col-md-12">
		                        <div class="panel">
		                            <div class="panel-body no-padding">
		                                <div class="table-responsive">
		                                    <table class="table table-hover m-n">
		                                        <thead>
		                                            <tr>
		                                                <th>{{ ucfirst($billing_item_type) }} ID</th>
		                                                <th>Description</th>
		                                                <th>Item Type</th>
		                                                <th>Qty</th>
		                                                <th>Unit Cost</th>
		                                                <th>Discount</th>
		                                                <th class="text-right">Total</th>
		                                            </tr>
		                                        </thead>
		                                        <tbody>
		                                            <tr>
		                                            	<?php if ($billing_item_type == 'ads'): ?>
		                                                	<td><?php echo $billing_item_ad_id ?></td>
		                                                <?php else: ?>
		                                                	<td><?php echo $billing_item_listing_id ?></td>
		                                            	<?php endif ?>

		                                                <?php if ($billing_item_type == 'ads'): ?>
	                                                		<td><?php echo $note ?></td>
	                                                	<?php else: ?>
		                                                	<td><?php echo $billing_item_package_name ?></td>
		                                                <?php endif ?>

		                                                <td><?php echo $billing_item_type ?></td>
		                                                <td>1</td>
		                                                <?php if ($billing_item_type == 'ads'): ?>	
		                                                	<?php
		                                                	$price_total = $price * intval($billing_item_days);
		                                                	?>

		                                                	<td>Rp {{ number_format($price_total, 0, '.',',') }}</td>
		                                                	<td>{{ $billing_customer }}%</td>
	                                                	<?php else: ?>
			                                                <td>Rp {{ number_format($billing_item_package_price, 0, '.',',') }}</td>
			                                                <td>{{ $billing_item_package_discount }}%</td>
		                                                <?php endif ?>
	                                                	<td class="text-right">Rp <?php echo number_format($billing_amount, 0, '.', ',') ?></td>
		                                            </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="col-md-12 footer">
		                        <div class="row" style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;">
		                            <div class="col-md-3 col-md-offset-9">
		                            	<?php $price_disc = $billing_customer ? Setting::get('ads.price_discount') : Setting::get('ads.noncust.price_discount') ?>
		                            	<?php if ($billing_item_type == 'ads'): ?>
			                                <p class="text-right"><strong>SUB TOTAL: Rp {{ number_format($price_disc * $billing_item_days, 0, '.',',') }}</strong></p>
			                                <p class="text-right">DISCOUNT: {{ $price_disc }}%</p>
		                                <?php else: ?>
			                                <p class="text-right"><strong>SUB TOTAL: Rp {{ number_format($billing_item_package_price, 0, '.',',') }}</strong></p>
			                                <p class="text-right">DISCOUNT: {{ $billing_item_package_discount }}%</p>
		                            	<?php endif ?>
		                                <p class="text-right">VAT: 0%</p>
		                                <hr>
		                                <h3 class="text-right text-danger" style="font-weight: bold;">IDR <?php echo number_format($billing_amount, 0, ',', '.') ?></h3>
		                            </div>
		                        </div>
		                    </div>
		                </div>             

		            </div>

		        </div>
			</div>
		</div>
	</div>
</body>
</html>