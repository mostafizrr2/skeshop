@extends('app')
@section('title', 'Checkout - SK-ENTERPRISE')
    
@push('css')
    
@endpush

@section('content')
<!-- Shop Checkout-->
<section class="section-98 section-md-110 novi-background">
    <h1 class="text-between mt-২০">ঝুড়ি</h1>
    <br><br>
    <div class="container">
        <div class="rd-material-tabs checkout-tabs">

            <div class="rd-material-tabs__container">
                <div class="rd-material-tabs__stage-outer">
                    <div class="rd-material-tabs__stage" style="transform: translate3d(0px, 0px, 0px); width: 3520px;">
                        <div class="rd-material-tab rd-material-tab-active" style="width: 1160px; margin-right: 10px;">
                            <div class="row justify-content-sm-center">
                                <div class="col-md-10 col-xl-8">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <div class="bg-lighter">
                                                            <a href="product-single">
                                                                <img src="images/product-03-70x70.png" alt="" width="70" height="70">
                                                            </a>
                                                        </div>
                                                    </th>
                                                    <td class="big text-middle">
                                                      <a href="product-single">
                                                          Castle Art Supplies Acrylic Paint Set Pack of 12 Colors
                                                      </a>
                                                    </td>
                                                    <td class="text-middle">1</td>
                                                    <td class="text-middle">$39.00</td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <div class="bg-lighter">
                                                            <a href="product-single">
                                                                <img src="images/product-02-70x70.png" alt="" width="70" height="70">
                                                            </a>
                                                        </div>
                                                    </th>
                                                    <td class="big text-middle">
                                                        <a href="product-single">
                                                            Artist Paint Brush Set Nylon Hair Watercolor Acrylic Oil Painting Supplies
                                                        </a>
                                                    </td>
                                                    <td class="text-middle">2</td>
                                                    <td class="text-middle">$199.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="offset-top-10 text-right">
                                        <p class="font-weight-bold">Cart Subtotal: $238.00</p>
                                        <a class="btn btn-primary btn-icon btn-icon-right offset-top-41 checkout-step-btn"
                                         href="shipping">
                                          <span class="icon mdi mdi-chevron-double-right novi-icon"></span>Shipping info</a>
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