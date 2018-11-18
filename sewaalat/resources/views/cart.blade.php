
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ITS RENT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/themify/themify-icons.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/elegant-font/html-css/style.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/slick/slick.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/noui/nouislider.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css"/>
</head>
<body class="animsition">
	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="{{ url('/') }}" class="logo">
					<img src="{{asset('images/icons/logo.png') }}" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
					</li>
					<li class="nav-item">
						@if (Route::has('register'))
						<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						@endif
					</li>
					@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							<img src="{{asset('images/icons/icon-header-01.png') }}" class="header-icon1" alt="ICON">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
				@endguest

				<span class="linedivide1"></span>

				<div class="header-wrapicon2">
					<img src="{{asset('images/icons/icon-header-02.png') }}" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<span class="header-icons-noti">{{count(session('cart'))}}</span>

					<!-- Header cart noti -->
					<div class="header-cart header-dropdown">

						@if(session('cart'))
						@foreach(session('cart') as $id => $details)

						<ul class="header-cart-wrapitem">
							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="{{$details['image']}}" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										{{$details['nama']}}
									</a>

									<span class="header-cart-item-info">
										{{$details['jumlah']}} * {{$details['harga']}}
									</span>
								</div>
							</li>
						</ul>
						@endforeach
						@endif

						<?php $total = 0 ?>
						@if(session('cart'))
						@foreach(session('cart') as $id => $details)
						<?php $total += $details['harga'] * $details['jumlah'] ?>
						@endforeach
						@endif
						<div class="header-cart-total">
							{{$total}}
						</div>


						<div class="header-cart-buttons">
							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="{{ url('/cart') }}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									View Cart
								</a>
							</div>

							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="{{ url('/cart') }}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Check Out
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap_header_mobile">
		<!-- Logo moblie -->
		<a href="index.html" class="logo-mobile">
			<img src="images/icons/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Button show menu -->
		<div class="btn-show-menu">
			<!-- Header Icon mobile -->
			<div class="header-icons-mobile">
				<a href="#" class="header-wrapicon1 dis-block">
					<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
				</a>

				<span class="linedivide2"></span>

				<div class="header-wrapicon2">
					<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<span class="header-icons-noti">0</span>

					<!-- Header cart noti -->
					<div class="header-cart header-dropdown">
						<ul class="header-cart-wrapitem">
							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="images/item-cart-01.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										White Shirt With Pleat Detail Back
									</a>

									<span class="header-cart-item-info">
										1 x $19.00
									</span>
								</div>
							</li>

							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="images/item-cart-02.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										Converse All Star Hi Black Canvas
									</a>

									<span class="header-cart-item-info">
										1 x $39.00
									</span>
								</div>
							</li>

							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="images/item-cart-03.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										Nixon Porter Leather Watch In Tan
									</a>

									<span class="header-cart-item-info">
										1 x $17.00
									</span>
								</div>
							</li>
						</ul>

						<div class="header-cart-total">
							Total: $75.00
						</div>

						<div class="header-cart-buttons">
							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									View Cart
								</a>
							</div>

							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Check Out
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>
	</div>

	<!-- Menu Mobile -->
	<div class="wrap-side-menu" >
		<nav class="side-menu">
			<ul class="main-menu">
				<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
					<span class="topbar-child1">
						Free shipping for standard order over $100
					</span>
				</li>

				<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
					<div class="topbar-child2-mobile">
						<span class="topbar-email">
							fashe@example.com
						</span>

						<div class="topbar-language rs1-select2">
							<select class="selection-1" name="time">
								<option>USD</option>
								<option>EUR</option>
							</select>
						</div>
					</div>
				</li>

				<li class="item-topbar-mobile p-l-10">
					<div class="topbar-social-mobile">
						<a href="#" class="topbar-social-item fa fa-facebook"></a>
						<a href="#" class="topbar-social-item fa fa-instagram"></a>
						<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
						<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
						<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
					</div>
				</li>

				<li class="item-menu-mobile">
					<a href="index.html">Home</a>
					<ul class="sub-menu">
						<li><a href="index.html">Homepage V1</a></li>
						<li><a href="home-02.html">Homepage V2</a></li>
						<li><a href="home-03.html">Homepage V3</a></li>
					</ul>
					<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
				</li>

				<li class="item-menu-mobile">
					<a href="product.html">Shop</a>
				</li>

				<li class="item-menu-mobile">
					<a href="product.html">Sale</a>
				</li>

				<li class="item-menu-mobile">
					<a href="cart.html">Features</a>
				</li>

				<li class="item-menu-mobile">
					<a href="blog.html">Blog</a>
				</li>

				<li class="item-menu-mobile">
					<a href="about.html">About</a>
				</li>

				<li class="item-menu-mobile">
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</nav>
	</div>
</header>

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/headercart.jpg);">
	<h2 class="l-text2 t-center">
		Cart
	</h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<table class="table-shopping-cart">
					<thead>
						<tr class="table-head">
							<th class="column-1" style="width: 20%"></th>
							<th class="column-2" style="width: 20%">Barang</th>
							<th class="column-3" style="width: 20%">Harga</th>
							<th class="column-4" style="width: 20%"></th>
							<th class="column-5" style="width: 20%">Jumlah</th>
							<th class="column-6" style="width: 20%">Total</th>
						</tr>
					</thead>

					<tbody>
						<?php $total = 0 ?>
						@if(session('cart'))
						@foreach(session('cart') as $id => $details)
						<?php $total += $details['harga'] * $details['jumlah'] ?>
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="{{$details['image']}}" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">{{$details['nama']}}</td>
							<td class="column-3">Rp.{{$details['harga']}},00<td>
								<td class="column-4">
									<div class="flex-w bo5 of-hidden w-size17">
										<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
											<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
										</button>

										<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="{{$details['jumlah']}}">

										<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
											<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
										</button>
									</div>
								</td>
								<td class="column-5">Rp.{{$details['harga'] * $details['jumlah']}},00</td>
							</tr>
							@endforeach
							@endif
						</tbody>

					</table>
				</div>
			</div>
			@csrf
			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="row">
					<div class="form-group">
						<label>Tanggal Mulai</label>
						<div class="input-group date" id="tgl1">
							<input type="text" class="form-control" />	
							<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<label>Tanggal Berakhir</label>
						<div class="input-group date" id="tgl2">
							<input type="text" class="form-control"/>	
							<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Selisih Hari</label>
					<form action="" id="harii" method= "get">
						<input type="text" class="form-control" name="selisih" id="selisih"/>
					</form>
				</div>
				@csrf
				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 update-cart" data-id="{{$id}}">
						
						Update Cart
						
					</button>
				</div>
			</div>
			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				@if(session('cart'))
				@foreach(session('cart') as $id => $details)
				@endforeach
				@endif

				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Total:
					</span>
					<span class="m-text21 w-size20 w-full-sm" id="total">
						
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" data-target="#myModal" data-toggle="modal">
						Pembayaran
					</button>
				</div>
			</div>
		</div>
	</section>



	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">

		<div class="t-center p-l-15 p-r-15">
			<div class="t-center s-text8 p-t-20">
				Created by KUATdanLIAR Productions INFORMATIKA ITS
			</div>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>


	<div class="container">
		<form method="get" action="{{url('home')}}" id="form">
			@csrf
			<!-- Modal -->
			<div class="modal" tabindex="-1" role="dialog" id="myModal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="alert alert-danger" style="display:none"></div>
						<div class="modal-header">
							
							<h5 class="modal-title">Booking</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="" >
							<div class="modal-body">
								<div class="row">
									<div class="form-group col-md-6">
										<label for="Country">Nama Pemesan: </label>
										<input type="text" class="form-control" name="name" id="name" value="{{(Auth::user()->name) }}">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="Country">Alamat Pemesan: </label>
										<input type="text" class="form-control" name="alamat" id="alamat" value="{{(Auth::user()->alamat) }}">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="Country">Nomor Pemesan: </label>
										<input type="text" class="form-control" name="nomor" id="nomor" value="{{(Auth::user()->phone) }}">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="Country">Tanggal Pemesanan: </label>
										<input type="date" class="form-control" name="tanggalpesan" id="tanggalpesan" disabled>

									</div>
									<div class="form-group col-md-6">
										<label for="Country">Tanggal Kembali: </label>
										<input type="date" class="form-control" name="tanggalkembali" id="tanggalkembali" disabled>

									</div>
								</div>
								<div class="row">

									<div class="form-group col-md-6">
										<label for="Nama">Nama:</label>
										@if(session('cart'))
										@foreach(session('cart') as $id => $details)
										<ul>
											<li id="harga">{{$details['nama']}}</li>
										</ul>
										@endforeach
										@endif
									</div>
									<div class="form-group col-md-6">
										<label for="Harga">Harga:</label>
										@if(session('cart'))
										@foreach(session('cart') as $id => $details)
										<ul>
											<li id="harga">Rp .{{$details['harga'] * $details['jumlah']}} , 00</li>
										</ul>
										@endforeach
										@endif
									</div>
								</div>


								<div class="row">
									<div class="form-group col-md-6">
										<label for="Country">Total: </label>
										<input type="text" class="form-control" name="total1" id="total1" disabled>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<button  class="btn btn-success btn-addcart" id="ajaxSubmit" >Pesan</button>
							</div>
						</form>
						
						
					</div>
				</div>
			</div>
		</form>
	</div>


	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/moment-with-locales.js"></script>
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.js"></script>

	<script type="text/javascript">

		$(".update-cart").click(function (e) {
			e.preventDefault();

			var ele = $(this);

			$.ajax({
				url: '{{ url('update-cart') }}',
				method: "patch",
				data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".jumlah").val()},
				success: function (response) {
					window.location.reload();
				}
			});
		});
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		jQuery(document).ready(function(){
			jQuery('#ajaxSubmit').click(function(e){
				e.preventDefault();
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
					}
				});
				jQuery.ajax(
					url: "{{ url('/home') }}",
					method: 'get',
					data: {s
						nama: jQuery('#nama').val(),
						harga: jQuery('#harga').val(),
						country: jQuery('#country').val(),
						score: jQuery('#score').val(),
					},
					success: function(result){
						if(result.errors)
						{
							jQuery('.alert-danger').html('');

							jQuery.each(result.errors, function(key, value){
								jQuery('.alert-danger').show();
								jQuery('.alert-danger').append('<li>'+value+'</li>');
							});
						}
						else
						{
							jQuery('.alert-danger').hide();
							$('#open').hide();
							$('#myModal').modal('hide');
						}
					}});
			});
		});
	</script>
	<script>
		$(function() { 
			$('#tgl1').datetimepicker({
				locale:'id',
				format:'DD/MMMM/YYYY'
			});

			$('#tgl2').datetimepicker({
				useCurrent: false,
				locale:'id',
				format:'DD/MMMM/YYYY'
			});

			$('#tgl1').on("dp.change", function(e) {
				$('#tgl2').data("DateTimePicker").minDate(e.date);
				CalcDiff()
			});

			$('#tgl2').on("dp.change", function(e) {
				$('#tgl1').data("DateTimePicker").maxDate(e.date);
				CalcDiff()
			});

		});
		function formatDate(date) {
			var d = new Date(date),
			month = '' + (d.getMonth() + 1),
			day = '' + d.getDate(),
			year = d.getFullYear();

			if (month.length < 2) month = '0' + month;
			if (day.length < 2) day = '0' + day;

			return [year, month, day].join('-');
		}
		function CalcDiff(){
			var a=$('#tgl1').data("DateTimePicker").date();
			var b=$('#tgl2').data("DateTimePicker").date();
			console.log(a,b);
			var timeDiff=0
			if (a & b) {
				timeDiff = (b - a) / 1000;
			}
			console.log(timeDiff);
			var total= {{$total}};
			var selesihHari=Math.floor(timeDiff/(86400));
			var hari = $('#selisih').val(selesihHari);
			var pesan = a;
			var kembali = b;
			$('#selisih').val(selesihHari)
			var hasil= "Rp. "+(total*selesihHari)+" ,00"
	// console.log(hasil)
	$('#total').html(hasil)
	$('#tanggalpesan').attr('value',formatDate(pesan))
	$('#tanggalkembali').attr('value',formatDate(kembali))
	$('#total1').attr('value',hasil)
	//$('#bayartotal').val($hitungtotal)   
}
</script>	


</body>
</html>
