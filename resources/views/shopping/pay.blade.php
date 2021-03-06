@extends('layouts.app')
@section('content')
    <div class="container wrapper">
        <div class="row cart-head">
            <div class="container">
                <div class="row">
                    <p></p>
                </div>
                <div class="row">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row cart-body">
            <form class="form-horizontal" method="post" action="">
                @csrf
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Review Order <div class="pull-right"><small><a class="afix-1" href="{{route('get.list.shopping.cart')}}">Edit Cart</a></small></div>
                        </div>
                        <div class="panel-body">
                            @if(isset($products))
                                <?php $i =1?>
                                @foreach($products as $stt => $product)
                                    <div class="form-group">
                                        <div class="col-sm-3 col-xs-3">
                                            <img class="img-responsive" src="{{pare_url_file($product->options->pro_avatar)}}" />
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="col-xs-12">{{$product->name}}</div>
                                            <div class="col-xs-12"><small>Số lượng:<span>{{$product->qty}}</span></small></div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3 text-right">
                                            <h6>{{number_format(($product->price*$product->qty))}} VNĐ</h6>
                                        </div>
                                    </div>
                                    <div class="form-group"><hr /></div>
                                <?php $i++?>
                                @endforeach
                            @endif

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Tổng cộng</strong>
                                    <div class="pull-right"><span>{{ \Cart::subtotal(0,0) }} VNĐ</span></div>
                                </div>
                                <div class="col-xs-12">
                                    <small>Shipping</small>
                                    <div class="pull-right"><span>-</span></div>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>$</span><span>150.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Địa chỉ</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Địa chỉ giao hàng</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Họ tên:</strong>
                                    <input type="text" name="first_name" class="form-control" value="{{get_data_user('web','name')}}" />
                                </div>
                                <div class="span1"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="{{get_data_user('web','address')}}" />
                                    @if($errors->has('address'))
                                        <div style="color: red; font-size: small">
                                            {{$errors->first('address')}}
                                        </div>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Ghi chú:</strong></div>
                                <div class="col-md-12">
                                    <textarea name="note" id="" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <div class="col-md-12"><strong>State:</strong></div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <input type="text" name="state" class="form-control" value="" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <input type="text" name="zip_code" class="form-control" value="" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="{{get_data_user('web','phone')}}" />
                                    @if($errors->has('phone_number'))
                                        <div style="color: red; font-size: small">
                                            {{$errors->first('phone_number')}}
                                        </div>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email:</strong></div>
                                <div class="col-md-12"><input disabled type="email" name="email_address" class="form-control" value="{{get_data_user('web','email')}}" required /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><label for="language">Loại hàng hóa:</label></div>
                                <div class="col-md-12">
                                    <select name="order_type" id="order_type" class="form-control">
                                        <option value="topup">Nạp tiền điện thoại</option>
                                        <option value="billpayment">Thanh toán hóa đơn</option>
                                        <option value="fashion">Thời trang</option>
                                        <option value="other">Khác - Xem thêm tại VNPAY</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><label  for="order_id">Mã hóa đơn:</label></div>
                                <div class="col-md-12">
                                    <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo date("YmdHis") ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><label for="amount">Số tiền</label></div>
                                <div class="col-md-12">
                                    <input type="text" name="amount" class="form-control" value="{{str_replace(',','', \Cart::subtotal(0,0))}}" required disabled="disabled" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><label for="order_desc">Nội dung thanh toán</label></div>
                                <div class="col-md-12">
                                    <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Noi dung thanh toan</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><label for="bank_code">Ngân hàng</label></div>
                                <div class="col-md-12">
                                    <select name="bank_code" id="bank_code" class="form-control">
                                    <option value="">Không chọn</option>
                                    <option value="NCB"> Ngan hang NCB</option>
                                    <option value="AGRIBANK"> Ngan hang Agribank</option>
                                    <option value="SCB"> Ngan hang SCB</option>
                                    <option value="SACOMBANK">Ngan hang SacomBank</option>
                                    <option value="EXIMBANK"> Ngan hang EximBank</option>
                                    <option value="MSBANK"> Ngan hang MSBANK</option>
                                    <option value="NAMABANK"> Ngan hang NamABank</option>
                                    <option value="VNMART"> Vi dien tu VnMart</option>
                                    <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                    <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                    <option value="HDBANK">Ngan hang HDBank</option>
                                    <option value="DONGABANK"> Ngan hang Dong A</option>
                                    <option value="TPBANK"> Ngân hàng TPBank</option>
                                    <option value="OJB"> Ngân hàng OceanBank</option>
                                    <option value="BIDV"> Ngân hàng BIDV</option>
                                    <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                    <option value="VPBANK"> Ngan hang VPBank</option>
                                    <option value="MBBANK"> Ngan hang MBBank</option>
                                    <option value="ACB"> Ngan hang ACB</option>
                                    <option value="OCB"> Ngan hang OCB</option>
                                    <option value="IVB"> Ngan hang IVB</option>
                                    <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><label for="language">Ngôn ngữ</label></div>
                                <div class="col-md-12">
                                    <select name="language" id="language" class="form-control">
                                    <option value="vn">Tiếng Việt</option>
                                    <option value="en">English</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Phương thức thanh toán:</strong></div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="payment" value="cod" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Thanh toán khi nhận hàng</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="payment" value="paypal" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Thanh toán Paypal</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="payment" value="vnpay" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Thanh toán VNPay</label>
                                    </div>
                                    @if($errors->has('payment'))
                                        <div style="color: red; font-size: small">
                                            {{$errors->first('payment')}}
                                        </div>
                                    @endif
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary btn-submit-fix">Xác nhận đơn hàng</button>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                    <!--CREDIT CART PAYMENT-->

                    <!--CREDIT CART PAYMENT END-->
                </div>

            </form>
        </div>
        <div class="row cart-footer">

        </div>
    </div>


@stop
