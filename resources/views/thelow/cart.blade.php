@extends('layouts.app')
@section('content')
<div class="container">
    <!-- row -->
    <div class="row">
        <form id="checkout-form" class="clearfix">
            <div class="col-md-6">
                <div class="billing-details">
                    <p>Already a customer ? <a href="#">Login</a></p>
                    <div class="section-title">
                        <h3 class="title">Billing Details</h3>
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="first-name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="last-name" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input class="input" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="country" placeholder="Country">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                    </div>
                    <div class="form-group">
                        <input class="input" type="tel" name="tel" placeholder="Telephone">
                    </div>
                    <div class="form-group">
                        <div class="input-checkbox">
                            <input type="checkbox" id="register">
                            <label class="font-weak" for="register">Create Account?</label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                    <p>
                                        <input class="input" type="password" name="password" placeholder="Enter Your Password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="shiping-methods">
                    <div class="section-title">
                        <h4 class="title">Shiping Methods</h4>
                    </div>
                    <div class="input-checkbox">
                        <input type="radio" name="shipping" id="shipping-1" checked>
                        <label for="shipping-1">Free Shiping -  $0.00</label>
                        <div class="caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <p>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="radio" name="shipping" id="shipping-2">
                        <label for="shipping-2">Standard - $4.00</label>
                        <div class="caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <p>
                        </div>
                    </div>
                </div>

                <div class="payments-methods">
                    <div class="section-title">
                        <h4 class="title">Payments Methods</h4>
                    </div>
                    <div class="input-checkbox">
                        <input type="radio" name="payments" id="payments-1" checked>
                        <label for="payments-1">Direct Bank Transfer</label>
                        <div class="caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <p>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="radio" name="payments" id="payments-2">
                        <label for="payments-2">Cheque Payment</label>
                        <div class="caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <p>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="radio" name="payments" id="payments-3">
                        <label for="payments-3">Paypal System</label>
                        <div class="caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h3 class="title">Order Review</h3>
                    </div>
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th></th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Total</th>
                                <th class="text-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0 ?>
                            @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>

                            <tr>
                                <td class="thumb"><img src="{{ $details['image'] }}" alt=""></td>
                                <td class="details">
                                    <a href="#">{{ $details['title'] }}</a>
                                    <ul>
                                        <li><span>Size: XL</span></li>
                                        <li><span>Color: Camelot</span></li>
                                    </ul>
                                </td>
                                <td class="price text-center"><strong>{{ $details['price'] }}</strong><br><del class="font-weak"><small>{{ $details['regular_price'] }}</small></del></td>
                                <td class="qty text-center">
                                    <input type="number" value="{{ $details['quantity'] }}" class="input" />
                                </td>
                                <td class="total text-center"><strong class="primary-color">{{ $details['price'] * $details['quantity'] }}</strong></td>
                                <td class="text-right"><button class="main-btn icon-btn" data-id="<?php echo $id;?>"><i class="fa fa-close"></i></button></td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <div class="cupon">
                                    <input type="text" id="coupon" name="voucer" placeholder="Enter Voucer Code">
                                    <span onclick="getMessage()" class="apply btn btn-primary">Apply</span>
                                </div>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>SUBTOTAL</th>
                                <th colspan="2" class="sub-total">{{ $total }}</th>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>SHIPING</th>
                                <td colspan="2">Free Shipping</td>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>TOTAL</th>
                                <th colspan="2" class="total">{{ $total }}</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="pull-right">
                        <button class="primary-btn">Place Order</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <!-- /row -->
</div>

<script>
    function getMessage() {
       var coupon = document.getElementById("coupon").value;

       $.ajax({
          type:'get',
          url:'update-voucer',
         data: {_token: '{{ csrf_token() }}',coupon},
          success:function(name) {
              if(name.length<5){
                  document.getElementById("discount").innerHTML=name[0]['discount'];

                  document.getElementById("discountinput").value=name[0]['discount'];
                  document.getElementById("totalinput").value={{$total}}-name[0]['discount'];
                  document.getElementById("total").innerHTML={{$total}}-name[0]['discount'];
              }
              else{
                  document.getElementById("discount").innerHTML=name;
                  document.getElementById("discountinput").value=000;


              }

          }
       });
    }
 </script>

 <script type="text/javascript">

    $(".update-cart").click(function (e) {
       e.preventDefault();
       var ele = $(this);
        $.ajax({
           url: '{{ url('update-cart') }}',
           method: "patch",
           data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
           success: function (response) {
               window.location.reload();
           }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
</script>
@endsection
