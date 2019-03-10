@extends('app')
@section('title', 'Shop - SK-ENTERPRISE')
    
@push('css')
    
@endpush

@section('content')
<section>
    <!-- Modern Breadcrumbs-->
    <div class="parallax-container breadcrumb-modern bg-gray-darkest context-dark" data-parallax-img="images/background-1-1920x651.jpg"><div class="material-parallax parallax"><img src="images/background-1-1920x651.jpg" alt="" style="display: block; transform: translate3d(-50%, 116px, 0px);"></div>
      <div class="parallax-content">
        <div class="bg-overlay-gray-darkest">
          <div class="container section-34 section-md-50 section-lg-110">
            <div class="text-extra-big font-accent d-none d-lg-block"><span class="big">Shop</span></div>
            <ul class="list-inline list-inline-dashed p offset-top-0">
              <li class="list-inline-item"><a class="small" href="index.html">Home</a></li>
              <li class="list-inline-item">Shop
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-98 section-md-124 novi-background">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <!-- Shop Grid View-->
          <div class="toolbar-shop">
            <div class="toolbar-shop-sorter"><a class="toolbar-shop-icon active" href="#"><span class="icon-xxs mdi mdi-view-module novi-icon"></span></a><a class="toolbar-shop-icon" href="#"><span class="icon-xxs mdi mdi-view-list novi-icon"></span></a></div>
            <div class="toolbar-shop-pager"><span class="toolbar-shop-current text-primary">1-6 of 15</span>
              <div class="form-group">
                <label>Show:</label>
                <select class="form-control select-filter toolbar-shop-pager-select select2-hidden-accessible" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                  <option selected="selected">6</option>
                  <option>12</option>
                  <option>18</option>
                  <option>24</option>
                </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 234.217px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-leml-container"><span class="select2-selection__rendered" id="select2-leml-container" title="6">6</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
            </div>
          </div>
          <div class="row justify-content-sm-center">
            <div class="col-sm-8 col-md-6 col-xl-4">
              <!-- Product-->
              <div class="product product-grid product-grid-type-2">
                <!-- Product Image-->
                <div class="product-image"><img class="img-fluid product-image-area" src="images/product-02-232x229.png" alt="">
                  <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-info">New</span>
                </div>
                <!-- Product Rating-->
                <div class="product-rating offset-top-20"><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star-half"></span><span class="mdi novi-icon mdi-star-outline"></span></div>
                <!-- Product Title-->
                <div class="product-title offset-top-4 text-primary"><a class="big" href="product-single">Artist Paint Brush Set Nylon Hair Oil Painting Supplies</a></div>
                <!-- Product price-->
                <div class="product-price font-weight-bold offset-top-20"><span class="h5 product-price-new">$124.00</span><span class="product-price-old text-dark">$219.00</span>
                </div>
                <div class="product-block-hover">
                  <!-- Product Add To cart--><a class="btn btn-icon btn-icon-left btn-primary product-btn btn-ellipse offset-top-20" href="product-single"><span class="icon mdi mdi-cart novi-icon"></span>Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="col-sm-8 col-md-6 col-xl-4 offset-top-41 offset-md-top-0">
              <!-- Product-->
              <div class="product product-grid product-grid-type-2">
                <!-- Product Image-->
                <div class="product-image"><img class="img-fluid product-image-area" src="images/product-03-217x215.png" alt="">
                  <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-danger">Sale</span>
                </div>
                <!-- Product Rating-->
                <div class="product-rating offset-top-20"><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star-half"></span><span class="mdi novi-icon mdi-star-outline"></span></div>
                <!-- Product Title-->
                <div class="product-title offset-top-4 text-primary"><a class="big" href="product-single">Castle Art Supplies Acrylic Paint Set Pack of 12 Colors</a></div>
                <!-- Product price-->
                <div class="product-price font-weight-bold offset-top-20"><span class="h5">$289.00</span>
                </div>
                <div class="product-block-hover">
                  <!-- Product Add To cart--><a class="btn btn-icon btn-icon-left btn-primary product-btn btn-ellipse offset-top-20" href="product-single"><span class="icon mdi mdi-cart novi-icon"></span>Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="col-sm-8 col-md-6 col-xl-4 offset-top-41 offset-xl-top-0">
              <!-- Product-->
              <div class="product product-grid product-grid-type-2">
                <!-- Product Image-->
                <div class="product-image"><img class="img-fluid product-image-area" src="images/product-04-229x223.png" alt="">
                  <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-info">New</span>
                </div>
                <!-- Product Rating-->
                <div class="product-rating offset-top-20"><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star-half"></span><span class="mdi novi-icon mdi-star-outline"></span></div>
                <!-- Product Title-->
                <div class="product-title offset-top-4 text-primary"><a class="big" href="product-single">Color Set Marco Renoir Fine Art Drawing Oil Base Pencils</a></div>
                <!-- Product price-->
                <div class="product-price font-weight-bold offset-top-20"><span class="h5 product-price-new">$189.00</span><span class="product-price-old text-dark">$219.00</span>
                </div>
                <div class="product-block-hover">
                  <!-- Product Add To cart--><a class="btn btn-icon btn-icon-left btn-primary product-btn btn-ellipse offset-top-20" href="product-single"><span class="icon mdi mdi-cart novi-icon"></span>Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="col-sm-8 col-md-6 col-xl-4 offset-top-41">
              <!-- Product-->
              <div class="product product-grid product-grid-type-2">
                <!-- Product Image-->
                <div class="product-image"><img class="img-fluid product-image-area" src="images/product-04-212x221.png" alt="">
                  <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-danger">Sale</span>
                </div>
                <!-- Product Rating-->
                <div class="product-rating offset-top-20"><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star-half"></span><span class="mdi novi-icon mdi-star-outline"></span></div>
                <!-- Product Title-->
                <div class="product-title offset-top-4 text-primary"><a class="big" href="product-single">95 Piece Wood Box Easel Painting Set 12 tubes</a></div>
                <!-- Product price-->
                <div class="product-price font-weight-bold offset-top-20"><span class="h5 product-price-new">$124.00</span><span class="product-price-old text-dark">$219.00</span>
                </div>
                <div class="product-block-hover">
                  <!-- Product Add To cart--><a class="btn btn-icon btn-icon-left btn-primary product-btn btn-ellipse offset-top-20" href="product-single"><span class="icon mdi mdi-cart novi-icon"></span>Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="col-sm-8 col-md-6 col-xl-4 offset-top-41 offset-lg-top-50">
              <!-- Product-->
              <div class="product product-grid product-grid-type-2">
                <!-- Product Image-->
                <div class="product-image"><img class="img-fluid product-image-area" src="images/product-06-226x227.png" alt="">
                  <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-info">New</span>
                </div>
                <!-- Product Rating-->
                <div class="product-rating offset-top-20"><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star-half"></span><span class="mdi novi-icon mdi-star-outline"></span></div>
                <!-- Product Title-->
                <div class="product-title offset-top-4 text-primary"><a class="big" href="product-single">Art Supplies Value Pack Includes 12 Acrylic Paints</a></div>
                <!-- Product price-->
                <div class="product-price font-weight-bold offset-top-20"><span class="h5">$289.00</span>
                </div>
                <div class="product-block-hover">
                  <!-- Product Add To cart--><a class="btn btn-icon btn-icon-left btn-primary product-btn btn-ellipse offset-top-20" href="product-single"><span class="icon mdi mdi-cart novi-icon"></span>Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="col-sm-8 col-md-6 col-xl-4 offset-top-41 offset-lg-top-50">
              <!-- Product-->
              <div class="product product-grid product-grid-type-2">
                <!-- Product Image-->
                <div class="product-image"><img class="img-fluid product-image-area" src="images/product-07-231x230.png" alt="">
                  <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-danger">Sale</span>
                </div>
                <!-- Product Rating-->
                <div class="product-rating offset-top-20"><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star-half"></span><span class="mdi novi-icon mdi-star-outline"></span></div>
                <!-- Product Title-->
                <div class="product-title offset-top-4 text-primary"><a class="big" href="product-single">Marco 72 Colors Art Drawing Oil Base Pencils-Set</a></div>
                <!-- Product price-->
                <div class="product-price font-weight-bold offset-top-20"><span class="h5 product-price-new">$189.00</span><span class="product-price-old text-dark">$219.00</span>
                </div>
                <div class="product-block-hover">
                  <!-- Product Add To cart--><a class="btn btn-icon btn-icon-left btn-primary product-btn btn-ellipse offset-top-20" href="product-single"><span class="icon mdi mdi-cart novi-icon"></span>Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="offset-top-66">
            <!-- Classic Pagination-->
            <nav>
              <ul class="pagination-classic">
                <li><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-lg-3 offset-top-66 offset-lg-top-0">
          <!-- Section Shop Sidebar-->
          <aside class="text-left">
            <div class="row">
              <div class="col-sm-6 col-lg-12">
                <!-- Categories-->
                <h6 class="text-uppercase text-spacing-60">Categories</h6>
                <div class="text-subline"></div>
                <div class="custom-control custom-checkbox offset-top-20">
                  <input class="custom-control-input" id="customCheck1" name="input-group-category" value="woman" type="checkbox">
                  <label class="custom-control-label" for="customCheck1">Handmade <span class="text-dark">(37)</span></label>
                </div>
                <div class="custom-control custom-checkbox offset-top-4">
                  <input class="custom-control-input" id="customCheck2" name="input-group-category" value="dresses" type="checkbox">
                  <label class="custom-control-label" for="customCheck2">Scrapbooking <span class="text-dark">(211)</span></label>
                </div>
                <div class="custom-control custom-checkbox offset-top-4">
                  <input class="custom-control-input" id="customCheck3" name="input-group-category" value="skirts" type="checkbox">
                  <label class="custom-control-label" for="customCheck3">Woodwork <span class="text-dark">(12)</span></label>
                </div>
                <div class="custom-control custom-checkbox offset-top-4">
                  <input class="custom-control-input" id="customCheck4" name="input-group-category" value="coats" type="checkbox">
                  <label class="custom-control-label" for="customCheck4">Textile <span class="text-dark">(7)</span></label>
                </div>
                <div class="custom-control custom-checkbox offset-top-4">
                  <input class="custom-control-input" id="customCheck5" name="input-group-category" value="top" type="checkbox">
                  <label class="custom-control-label" for="customCheck5">Tools and Materials <span class="text-dark">(15)</span></label>
                </div>
              </div>
              <div class="col-sm-6 col-lg-12">
                <!-- Brands-->
                <h6 class="offset-top-41 offset-sm-top-0 offset-lg-top-41 text-uppercase text-spacing-60">Brands</h6>
                <div class="text-subline"></div>
                <div class="custom-control custom-checkbox offset-top-20">
                  <input class="custom-control-input" id="customCheck6" name="input-group-brands" value="apc" type="checkbox">
                  <label class="custom-control-label" for="customCheck6">Koh-i-Noor <span class="text-dark">(37)</span></label>
                </div>
                <div class="custom-control custom-checkbox offset-top-4">
                  <input class="custom-control-input" id="customCheck7" name="input-group-brands" value="armani" type="checkbox">
                  <label class="custom-control-label" for="customCheck7">Pilot <span class="text-dark">(211)</span></label>
                </div>
                <div class="custom-control custom-checkbox offset-top-4">
                  <input class="custom-control-input" id="customCheck8" name="input-group-brands" value="loro" type="checkbox">
                  <label class="custom-control-label" for="customCheck8">Pentel <span class="text-dark">(12)</span></label>
                </div>
                <div class="custom-control custom-checkbox offset-top-4">
                  <input class="custom-control-input" id="customCheck9" name="input-group-brands" value="coat" type="checkbox">
                  <label class="custom-control-label" for="customCheck9">Platinum <span class="text-dark">(7)</span></label>
                </div>
                <div class="custom-control custom-checkbox offset-top-4">
                  <input class="custom-control-input" id="customCheck10" name="input-group-brands" value="topiro" type="checkbox">
                  <label class="custom-control-label" for="customCheck10">Sakura <span class="text-dark">(15)</span></label>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>    
@endsection

@push('js')
    
@endpush