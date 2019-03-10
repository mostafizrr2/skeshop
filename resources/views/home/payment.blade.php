@extends('app')
@section('title', 'Payment - SK-ENTERPRISE')
    
@push('css')
    
@endpush

@section('content')

<!-- Shop Checkout-->
<section class="section-98 section-md-110 novi-background">
    <h1 class="text-between">পেমেন্ট মেথোড</h1>
    <br><br>
    <div class="container">
        <div class="rd-material-tabs checkout-tabs">

            <div class="rd-material-tabs__container">
                <div class="rd-material-tabs__stage-outer">
                    <div class="rd-material-tabs__stage" style="transform: translate3d(0px, 0px, 0px); width: 3520px;">
                        
                        <div class="rd-material-tab" style="width: 1160px; margin-right: 10px;">
                            <div class="row justify-content-sm-center">
                                <div class="col-md-6 col-xl-4">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Operations</th>
                                                    <th>Result</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Cart Subtotal</th>
                                                    <td>$238.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping</th>
                                                    <td>Free Delivery</td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td class="font-weight-bold text-ku-crimson">$238.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <form class="text-left">
                                        <div class="custom-control custom-radio offset-top-41 offset-xl-top-24">
                                            <input class="custom-control-input" id="customRadio1" name="shop-checkout-radio" value="radio-2" type="radio">
                                            <label class="custom-control-label font-weight-bold" for="customRadio1">Direct Bank Transfer</label>
                                        </div>
                                        <div class="custom-control custom-radio offset-top-10">
                                            <input class="custom-control-input" id="customRadio2" name="shop-checkout-radio" value="radio-2" type="radio">
                                            <label class="custom-control-label font-weight-bold" for="customRadio2">Cheque Payment</label>
                                        </div>
                                        <div class="custom-control custom-radio offset-top-10">
                                            <input class="custom-control-input" id="customRadio3" name="shop-checkout-radio" value="radio-3" type="radio">
                                            <label class="custom-control-label font-weight-bold" for="customRadio3">Paypal</label>
                                        </div>
                                        <div class="offset-top-34"><a class="btn btn-icon btn-icon-left btn-primary" href="#"><span class="icon mdi mdi-lock novi-icon"></span>Place Order</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    
@endsection

@push('js')
    
@endpush