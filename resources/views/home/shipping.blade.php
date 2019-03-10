@extends('app')
@section('title', 'Shipping - SK-ENTERPRISE')
    
@push('css')
    
@endpush

@section('content')
<!-- Shop Checkout-->
<section class="section-98 section-md-110 novi-background">
    <h1 class="text-between">পন্য পাঠানোর ঠিকানা</h1>
    <br><br>
    <div class="container">
        <div class="rd-material-tabs checkout-tabs">

            <div class="rd-material-tabs__container">
                <div class="rd-material-tabs__stage-outer">
                    <div class="rd-material-tabs__stage" style="transform: translate3d(0px, 0px, 0px); width: 3520px;">
                
                        <div class="rd-material-tab" style="width: 1160px; margin-right: 10px;">
                            <div class="row justify-content-sm-center">
                                <div class="col-md-8">
                                    <form class="text-left" method="post">
                                        <div class="row offset-top-0 novi-excluded">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label form-label-outside form-label-sm rd-input-label" for="shop-shipping-checkout-first-name">First Name</label>
                                                    <input class="form-control form-control-impressed input-sm form-control-has-validation form-control-last-child" id="shop-shipping-checkout-first-name" type="text" name="first-name" data-constraints="@Required"><span class="form-validation"></span><span class="form-validation"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-top-0">
                                                <div class="form-group offset-top-24 offset-md-top-0">
                                                    <label class="form-label form-label-outside form-label-sm rd-input-label" for="shop-shipping-checkout-last-name">Last Name</label>
                                                    <input class="form-control form-control-impressed input-sm form-control-has-validation form-control-last-child" id="shop-shipping-checkout-last-name" type="text" name="last-name" data-constraints="@Required"><span class="form-validation"></span><span class="form-validation"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row offset-top-0">
                                            <div class="col-md-6">
                                                <div class="form-group offset-top-24">
                                                    <label class="form-label form-label-outside form-label-sm rd-input-label" for="shop-shipping-checkout-company">Company</label>
                                                    <input class="form-control form-control-impressed input-sm form-control-has-validation form-control-last-child" id="shop-shipping-checkout-company" type="text" name="company" data-constraints="@Required"><span class="form-validation"></span><span class="form-validation"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-top-0">
                                                <div class="form-group offset-top-24">
                                                    <label class="form-label form-label-outside form-label-sm rd-input-label" for="shop-shipping-checkout-city-town">City / Town</label>
                                                    <input class="form-control form-control-impressed input-sm form-control-has-validation form-control-last-child" id="shop-shipping-checkout-city-town" type="text" name="city-town" data-constraints="@Required"><span class="form-validation"></span><span class="form-validation"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row offset-top-0">
                                            <div class="col-md-12">
                                                <div class="form-group offset-top-24">
                                                    <label class="form-label form-label-outside form-label-sm rd-input-label" for="shop-shipping-checkout-address-first">Address</label>
                                                    <input class="form-control form-control-impressed input-sm form-control-has-validation form-control-last-child" id="shop-shipping-checkout-address-first" type="text" name="address-first" data-constraints="@Required"><span class="form-validation"></span><span class="form-validation"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row offset-top-0">
                                            <div class="col-md-6">
                                                <div class="form-group offset-top-24">
                                                    <label class="form-label form-label-outside form-label-sm rd-input-label" for="shop-shipping-checkout-email">E-Mail</label>
                                                    <input class="form-control form-control-impressed input-sm form-control-has-validation form-control-last-child" id="shop-shipping-checkout-email" type="email" name="email" data-constraints="@Required @Email"><span class="form-validation"></span><span class="form-validation"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-top-0">
                                                <div class="form-group offset-top-24">
                                                    <label class="form-label form-label-outside form-label-sm rd-input-label" for="shop-shipping-checkout-phone">Phone</label>
                                                    <input class="form-control form-control-impressed input-sm form-control-has-validation form-control-last-child" id="shop-shipping-checkout-phone" type="text" name="phone" data-constraints="@Required"><span class="form-validation"></span><span class="form-validation"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="offset-top-24 text-right">
                                    <p>
                                        <span class="font-weight-bold">Shipping:
                                        </span>Free Delivery
                                    </p>
                                        <a class="btn btn-primary btn-icon btn-icon-right offset-top-24 "
                                            href="payment">
                                            <span class="icon mdi mdi-chevron-double-right novi-icon">
                                                </span>Payment Method
                                        </a>
                                    </div>
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