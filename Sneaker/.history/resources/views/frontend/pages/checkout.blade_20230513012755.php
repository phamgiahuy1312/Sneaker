@extends('frontend.layouts.master')

@section('title','Thanh Toán')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Trang Chủ<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Thanh Toán</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
                <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row"> 

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2 style="margin-bottom: 20px;">Điền thông tin nhận hàng</h2>
                                {{-- <p>Please register in order to checkout more quickly</p> --}}
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Họ<span>*</span></label>
                                            <input type="text" name="first_name" placeholder="" required value="{{old('first_name')}}" value="{{old('first_name')}}">
                                            @error('first_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Tên<span>*</span></label>
                                            <input type="text" name="last_name" placeholder="" required value="{{old('lat_name')}}">
                                            @error('last_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email<span>*</span></label>
                                            <input type="email" name="email" placeholder="" required value="{{old('email')}}">
                                            @error('email')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Số điện thoại <span>*</span></label>
                                            <input type="number" name="phone" placeholder="" required value="{{old('phone')}}">
                                            @error('phone')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Thành phố<span>*</span></label>
                                            <select name="country" id="country">
                                                <option value="01">Thành phố Hà Nội</option>
                                                <option value="02">Tỉnh Hà Giang</option>
                                                <option value="04">Tỉnh Cao Bằng</option>
                                                <option value="06">Tỉnh Bắc Kạn</option>
                                                <option value="08">Tỉnh Tuyên Quang</option>
                                                <option value="10">Tỉnh Lào Cai</option>
                                                <option value="11">Tỉnh Điện Biên</option>
                                                <option value="12">Tỉnh Lai Châu</option>
                                                <option value="14">Tỉnh Sơn La</option>
                                                <option value="15">Tỉnh Yên Bái</option>
                                                <option value="17">Tỉnh Hoà Bình</option>
                                                <option value="19">Tỉnh Thái Nguyên</option>
                                                <option value="20">Tỉnh Lạng Sơn</option>
                                                <option value="22">Tỉnh Quảng Ninh</option>
                                                <option value="24">Tỉnh Bắc Giang</option>
                                                <option value="25">Tỉnh Phú Thọ</option>
                                                <option value="26">Tỉnh Vĩnh Phúc</option>
                                                <option value="27">Tỉnh Bắc Ninh</option>
                                                <option value="30">Tỉnh Hải Dương</option>
                                                <option value="31">Thành phố Hải Phòng</option>
                                                <option value="33">Tỉnh Hưng Yên</option>
                                                <option value="34">Tỉnh Thái Bình</option>
                                                <option value="35">Tỉnh Hà Nam</option>
                                                <option value="36">Tỉnh Nam Định</option>
                                                <option value="37">Tỉnh Ninh Bình</option>
                                                <option value="38">Tỉnh Thanh Hóa</option>
                                                <option value="40">Tỉnh Nghệ An</option>
                                                <option value="42">Tỉnh Hà Tĩnh</option>
                                                <option value="44">Tỉnh Quảng Bình</option>
                                                <option value="45">Tỉnh Quảng Trị</option>
                                                <option value="46">Tỉnh Thừa Thiên Huế</option>
                                                <option value="48">Thành phố Đà Nẵng</option>
                                                <option value="49">Tỉnh Quảng Nam</option>
                                                <option value="51">Tỉnh Quảng Ngãi</option>
                                                <option value="52">Tỉnh Bình Định</option>
                                                <option value="54">Tỉnh Phú Yên</option>
                                                <option value="56">Tỉnh Khánh Hòa</option>
                                                <option value="58">Tỉnh Ninh Thuận</option>
                                                <option value="60">Tỉnh Bình Thuận</option>
                                                <option value="62">Tỉnh Kon Tum</option>
                                                <option value="64">Tỉnh Gia Lai</option>
                                                <option value="66">Tỉnh Đắk Lắk</option>
                                                <option value="67">Tỉnh Đắk Nông</option>
                                                <option value="68">Tỉnh Lâm Đồng</option>
                                                <option value="70">Tỉnh Bình Phước</option>
                                                <option value="72">Tỉnh Tây Ninh</option>
                                                <option value="74">Tỉnh Bình Dương</option>
                                                <option value="75">Tỉnh Đồng Nai</option>
                                                <option value="77">Tỉnh Bà Rịa - Vũng Tàu</option>
                                                <option value="79">Thành phố Hồ Chí Minh</option>
                                                <option value="80">Tỉnh Long An</option>
                                                <option value="82">Tỉnh Tiền Giang</option>
                                                <option value="83">Tỉnh Bến Tre</option>
                                                <option value="84">Tỉnh Trà Vinh</option>
                                                <option value="86">Tỉnh Vĩnh Long</option>
                                                <option value="87">Tỉnh Đồng Tháp</option>
                                                <option value="89">Tỉnh An Giang</option>
                                                <option value="91">Tỉnh Kiên Giang</option>
                                                <option value="92">Thành phố Cần Thơ</option>
                                                <option value="93">Tỉnh Hậu Giang</option>
                                                <option value="94">Tỉnh Sóc Trăng</option>
                                                <option value="95">Tỉnh Bạc Liêu</option>
                                                <option value="96">Tỉnh Cà Mau</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Địa chỉ 1<span>*</span></label>
                                            <input type="text" name="address1" placeholder="" required value="{{old('address1')}}">
                                            @error('address1')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Địa chỉ 2</label>
                                            <input type="text" name="address2" placeholder="" value="{{old('address2')}}">
                                            @error('address2')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Mã bưu điện</label>
                                            <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                            @error('post_code')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--/ End Form -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Thanh toán</h2>
                                    <div class="content">
                                        <ul>
										    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Tổng tiền<span>${{number_format(Helper::totalCartPrice(),2)}}</span></li>
                                            <li class="shipping">
                                                Phí ship
                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                                    <select name="shipping" class="nice-select">
                                                        {{-- <option value="">Dịch vụ giao hàng</option> --}}
                                                        @foreach(Helper::shipping() as $shipping)
                                                        <option value="{{$shipping->id}}" required class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: ${{$shipping->price}}</option>
                                                        @endforeach
                                                    </select>

                                                @endif
                                            </li>
                                            
                                            @if(session('coupon'))
                                            <li class="coupon_price" data-price="{{session('coupon')['value']}}">You Save<span>${{number_format(session('coupon')['value'],2)}}</span></li>
                                            @endif
                                            @php
                                                $total_amount=Helper::totalCartPrice();
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            @endphp
                                            @if(session('coupon'))
                                                <li class="last"  id="order_total_price">Tổng cộng<span>${{number_format($total_amount,2)}}</span></li>
                                            @else
                                                <li class="last"  id="order_total_price">Tổng cộng<span>${{number_format($total_amount,2)}}</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Thanh toán</h2>
                                    <div class="content">
                                        <div class="checkbox" >
                                            {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                                            <form-group>
                                                <input name="payment_method"  type="radio" name="pay" value="cod"> <label>Thanh toán khi nhận hàng</label><br>
                                                <input name="payment_method"  type="radio" name="pay" value="paypal"> <label>Chuyển khoản</label> 
                                            </form-group>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Payment Method Widget -->
                                <div class="single-widget payement">
                                    <div class="content">
                                        <img src="{{('backend/img/payment-method.png')}}" alt="#">
                                    </div>
                                </div>
                                <!--/ End Payment Method Widget -->
                                <!-- Button Widget -->
                                <div class="single-widget get-button">
                                    <div class="content">
                                        <div class="button">
                                            <button type="submit" class="btn">Đặt hàng</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Button Widget -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->
    
    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-check-box"></i>
                        <h4>Cam Kết Chính Hãng</h4>
                        <p>100% Authentic</p>
                        <p class="service-vn">Cam kết sản phẩm chính hãng từ Châu Âu, Châu Mỹ...</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-time"></i>
                        <h4>Hỗ Trợ 24/7</h4>
                        <p>Supporting 24/7</p>
                        <p class="service-vn">Gọi ngay</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Giao Hàng Hỏa Tốc</h4>
                        <p>Express delivery</p>
                        <p class="service-vn">SHIP hỏa tốc 1h nhận hàng trong nội thành ĐN</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services -->
    
    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>
    //validate phương thức thanh toán 
    <script>
        function validateForm() {
            var radios = document.getElementsByName("pay");
            var formValid = false;

            var i = 0;
            while (!formValid && i < radios.length) {
                if (radios[i].checked) formValid = true;
                i++;        
            }
            if (!formValid){
                alert("Vui lòng chọn phương thức thanh toán!");
            }else{
                formValid == true;
            }
            return formValid;
        }
    </script>
    <script> 
        function validateEmail(emailId)
        {
            var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if(emailId.value.match(mailformat))
            {
            document.form1.text1.focus();
            return true;
            }
            else
            {
            alert("Địa chỉ email không hợp lệ.");
            document.form1.text1.focus();
            return false;
            }
        }    
        </script> 
@endpush