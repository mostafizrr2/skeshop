@extends('app')
@section('title', 'Home - SK-ENTERPRISE')
    
@push('css')
    
@endpush

@section('content')
   

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
      @foreach ($sliders as $key => $slider)   
      <li data-target="#carouselExampleIndicators" data-slide-to="0" 
      class=" {{ ($key+1 == 1 ) ? 'active' : '' }}"></li>
      @endforeach
    </ol>


   <div class="carousel-inner">

   @foreach ($sliders as $key => $slider)         
      <div class="carousel-item {{ ($key+1 == 1) ? 'active' : '' }}" 
      style="background-image: url({{ url('storage/slider_images/'. $slider->slider_image) }});
      background-size: cover cover; ">
          <div class="carousel-content">
                <h1>{{ $slider->slider_title }}</h1>
                <p>{{ $slider->slider_subtitle }}</p>
                <div class="slider-buttons">

                  @if ($slider->button_one == 1)
                     <a href="{{ $slider->button_one_link }}" 
                        class="btn slider-btn"
                        style="background-color: {{ $slider->button_one_color }}; 
                        color:{{ $slider->button_one_text_color }}" >

                        {{ $slider->button_one_text }}
                     </a>           
                  @endif

                  @if ($slider->button_two == 1)
                     <a href=" {{ $slider->button_two_link }}" 
                        class="btn slider-btn" 
                        style="background-color: {{ $slider->button_two_color }}; 
                        color:{{ $slider->button_two_text_color }}">
                        {{ $slider->button_two_text }}
                     </a>          
                  @endif

                </div> 
          </div>
      </div>
    @endforeach
      
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>


<!-- Our Shop-->
<section class="section-98 section-md-top-110 section-md-bottom-124 novi-background" data-preset="{title:Content block 1,category:content,reload:true,id:content-block-1}">
 <div class="container">
    <h1 class="text-between">স্টেশনারীজ পন্য সমূহ</h1>
    <hr>
    <div class="offset-top-30">
       <!-- Tabs Classic-->
       <div class="row">
          <!-- Owl First Slide-->

          <div class="col-md-6 col-lg-3">
             <!-- Product-->
             <div class="product product-grid product-grid-type-2">
                <!-- Product Image-->
                <div class="product-image">
                   <img class="img-fluid product-image-area" src="images/product-01-210x210.png" alt="">
                   <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-danger">Sale</span>
                </div>
                <!-- Product Rating-->
                <div class="product-rating offset-top-20"><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star"></span><span class="mdi novi-icon mdi-star-half"></span><span class="mdi novi-icon mdi-star-outline"></span></div>
                <!-- Product Title-->
                <div class="product-title offset-top-4 text-primary"><a class="big" href="product-single">Wood Box Paining Set 12 Oil Colors</a></div>
                <!-- Product price-->
                <div class="product-price font-weight-bold offset-top-20"><span class="h5 product-price-new">$254.00</span><span class="product-price-old text-dark">$319.00</span>
                </div>
                <div class="product-block-hover">
                   <!-- Product Add To cart--><a class="btn btn-icon btn-icon-left btn-primary product-btn btn-ellipse offset-top-20" href="product-single"><span class="icon mdi mdi-cart novi-icon"></span>Add to Cart</a>
                </div>
             </div>
          </div>

          <div class="col-md-6 col-lg-3 offset-top-41 offset-md-top-0">
             <!-- Product-->
             <div class="product product-grid product-grid-type-2">
                <!-- Product Image-->
                <div class="product-image">
                   <img class="img-fluid product-image-area" src="images/product-02-232x229.png" alt="">
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

          <div class="col-md-6 col-lg-3 offset-top-41 offset-lg-top-0">
             <!-- Product-->
             <div class="product product-grid product-grid-type-2">
                <!-- Product Image-->
                <div class="product-image">
                   <img class="img-fluid product-image-area" src="images/product-03-217x215.png" alt="">
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

          <div class="col-md-6 col-lg-3 offset-top-41 offset-lg-top-0">
             <!-- Product-->
             <div class="product product-grid product-grid-type-2">
                <!-- Product Image-->
                <div class="product-image">
                   <img class="img-fluid product-image-area" src="images/product-04-229x223.png" alt="">
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
       </div>
    </div>
 </div>
</section>

<!-- Upcoming Workshops-->
<section class="context-dark">
 <div class="parallax-container">
    <div class="material-parallax parallax"><img src="images/home-04-1920x1230.jpg" alt="" style="display: block; transform: translate3d(-50%, 13px, 0px);"></div>
    <div class="parallax-content">
       <div class="bg-overlay-gray-darkest">
          <div class="container section-98 section-md-110">
             <h1 class="text-between text-white">খাদ্য দ্রব্য সমূহ</h1>
             <div class="row justify-content-sm-center">
                <div class="col-md-6 col-lg-5 col-xl-3">
                   <!-- Post Event-->
                   <article class="post post-event-type-2">
                      <!-- Post media-->
                      <header class="post-media novi-excluded">
                         <a href="#"><img src="images/home-05-270x310.jpg" alt="" width="270" height="310">
                            <span class="icon fa fa-info-circle novi-icon"></span>
                         </a>
                      </header>
                      <!-- Post content-->
                      <section class="post-content text-left novi-excluded offset-top-10">
                         <!-- Post Body-->
                         <div class="post-body text-center">
                            <!-- Post Title-->
                            <div class="product-title offset-top-4 text-primary">
                               <a class="big" href="product-single">
                                     Castle Art Supplies Acrylic Paint Set Pack of 12 Colors
                               </a>
                            </div>
                            <div class="product-price font-weight-bold offset-top-20">
                               <span class="h5 product-price-new">$124.00</span>
                               <span class="product-price-old text-dark">$219.00</span>
                            </div>
                            <br>
                            <a href="#" class="btn btn-danger btn-sm">
                               <span style="color:white">Add to cart</span>
                            </a>
                         </div>
                      </section>
                   </article>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-3 offset-top-41 offset-md-top-0">
                   <!-- Post Event-->
                   <article class="post post-event-type-2">
                      <!-- Post media-->
                      <header class="post-media novi-excluded"><a href="#"><img src="images/home-06-270x310.jpg" alt="" width="270" height="310"><span class="icon fa fa-info-circle novi-icon"></span></a>
                      </header>
                      <!-- Post content-->
                      <section class="post-content text-left novi-excluded offset-top-10">
                         <!-- Post Body-->
                         <div class="post-body text-center">
                            <!-- Post Title-->
                            <div class="product-title offset-top-4 text-primary">
                               <a class="big" href="product-single">
                                     Castle Art Supplies Acrylic Paint Set Pack of 12 Colors
                               </a>
                            </div>
                            <div class="product-price font-weight-bold offset-top-20">
                               <span class="h5 product-price-new">$124.00</span>
                               <span class="product-price-old text-dark">$219.00</span>
                            </div>
                            <br>
                            <a href="#" class="btn btn-danger btn-sm">
                               <span style="color:white">Add to cart</span>
                            </a>
                         </div>
                      </section>
                   </article>
                </div>
                <div class="row-spacer d-none d-md-block d-xl-none offset-top-41"></div>
                <div class="col-md-6 col-lg-5 col-xl-3 offset-top-41 offset-md-top-0">
                   <!-- Post Event-->
                   <article class="post post-event-type-2">
                      <!-- Post media-->
                      <header class="post-media novi-excluded"><a href="#"><img src="images/home-07-270x310.jpg" alt="" width="270" height="310"><span class="icon fa fa-info-circle novi-icon"></span></a>
                      </header>
                      <!-- Post content-->
                      <section class="post-content text-left novi-excluded offset-top-10">
                         <!-- Post Body-->
                         <div class="post-body text-center">
                            <!-- Post Title-->
                            <div class="product-title offset-top-4 text-primary">
                               <a class="big" href="product-single">
                                     Castle Art Supplies Acrylic Paint Set Pack of 12 Colors
                               </a>
                            </div>
                            <div class="product-price font-weight-bold offset-top-20">
                               <span class="h5 product-price-new">$124.00</span>
                               <span class="product-price-old text-dark">$219.00</span>
                            </div>
                            <br>
                            <a href="#" class="btn btn-danger btn-sm">
                               <span style="color:white">Add to cart</span>
                            </a>
                         </div>
                      </section>
                   </article>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-3 offset-top-41 offset-md-top-0">
                   <!-- Post Event-->
                   <article class="post post-event-type-2">
                      <!-- Post media-->
                      <header class="post-media novi-excluded"><a href="#"><img src="images/home-08-270x310.jpg" alt="" width="270" height="310"><span class="icon fa fa-info-circle novi-icon"></span></a>
                      </header>
                      <!-- Post content-->
                      <section class="post-content text-left novi-excluded offset-top-10">
                         <!-- Post Body-->
                         <div class="post-body text-center">
                            <!-- Post Title-->
                            <div class="product-title offset-top-4 text-primary">
                               <a class="big" href="product-single">
                                   Castle Art Supplies Acrylic Paint Set Pack of 12 Colors
                               </a>
                            </div>
                            <div class="product-price font-weight-bold offset-top-20">
                               <span class="h5 product-price-new">$124.00</span>
                               <span class="product-price-old text-dark">$219.00</span>
                            </div>
                            <br>
                            <a href="#" class="btn btn-danger btn-sm">
                               <span style="color:white">Add to cart</span>
                            </a>
                         </div>
                      </section>
                   </article>
                </div>
             </div>
             <div class="row justify-content-sm-center offset-top-66">
                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 inset-left-50 inset-sm-left-80 inset-right-50 inset-sm-right-80"><a class="btn btn-block btn-default btn-ellipse" href="#">view all workshops</a></div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- Latest Blog Posts-->
<section class="section-98 section-md-110 novi-background" data-preset="{title:Blog 1,category:content, blog,reload:false,id:blog-1}">
 <div class="container">
    <h1 class="text-between">Latest Blog Posts</h1>
    <div class="row justify-content-sm-center">
       <div class="col-md-10 col-lg-6">
          <!-- Post Boxed-->
          <a class="d-block" href="https://livedemo00.template-help.com/wt_58888_v15/child/intense-handmade/blog-single-post.html">
             <div class="post post-boxed">
                <!-- Post media-->
                <header class="post-media novi-excluded"><img class="img-fluid" src="images/post-01-570x321.jpg" alt="" width="570" height="321"></header>
                <!-- Post content-->
                <section class="post-content text-left novi-excluded">
                   <div class="post-tags group-xs"><span class="label-custom label-lg-custom label-primary">Handmade</span><span class="label-custom label-lg-custom label-primary">Scrapbooking</span>
                   </div>
                   <div class="post-body">
                      <!-- Post Title-->
                      <div class="post-title">
                         <h4 class="text-regular">How To Grow Your Creative Business from Scratch</h4>
                      </div>
                      <div class="post-meta small">
                         <ul class="list-inline list-inline-sm p">
                            <li class="list-inline-item font-italic text-middle">by&nbsp;<span class="text-warning">Cheryl Crawford</span></li>
                            <li class="list-inline-item"><span class="text-middle icon-xxs mdi mdi-clock novi-icon"></span>
                               <time class="font-italic text-warning text-middle" datetime="2018-01-01">2 days ago</time>
                            </li>
                         </ul>
                      </div>
                   </div>
                </section>
             </div>
          </a>
       </div>
       <div class="col-md-10 col-lg-6 offset-top-66 offset-md-top-30 offset-lg-top-0">
          <!-- Post Boxed-->
          <a class="d-block" href="https://livedemo00.template-help.com/wt_58888_v15/child/intense-handmade/blog-single-post.html">
             <div class="post post-boxed">
                <!-- Post media-->
                <header class="post-media novi-excluded"><img class="img-fluid" src="images/post-02-570x321.jpg" alt="" width="570" height="321"></header>
                <!-- Post content-->
                <section class="post-content text-left novi-excluded">
                   <div class="post-tags group-xs"><span class="label-custom label-lg-custom label-primary">Handmade</span><span class="label-custom label-lg-custom label-primary">Scrapbooking</span>
                   </div>
                   <div class="post-body">
                      <!-- Post Title-->
                      <div class="post-title">
                         <h4 class="text-regular">How To Prepare For a Creative Conference</h4>
                      </div>
                      <div class="post-meta small">
                         <ul class="list-inline list-inline-sm p">
                            <li class="list-inline-item font-italic text-middle">by&nbsp;<span class="text-warning">Cheryl Crawford</span></li>
                            <li class="list-inline-item"><span class="text-middle icon-xxs mdi mdi-clock novi-icon"></span>
                               <time class="font-italic text-warning text-middle" datetime="2018-01-01">2 days ago</time>
                            </li>
                         </ul>
                      </div>
                   </div>
                </section>
             </div>
          </a>
       </div>
       <div class="row-spacer d-none d-lg-block offset-top-30"></div>
       <div class="col-md-10 col-lg-6 offset-top-66 offset-md-top-30 offset-lg-top-0">
          <!-- Post Boxed-->
          <a class="d-block" href="https://livedemo00.template-help.com/wt_58888_v15/child/intense-handmade/blog-single-post.html">
             <div class="post post-boxed">
                <!-- Post media-->
                <header class="post-media novi-excluded"><img class="img-fluid" src="images/post-03-570x321.jpg" alt="" width="570" height="321"></header>
                <!-- Post content-->
                <section class="post-content text-left novi-excluded">
                   <div class="post-tags group-xs"><span class="label-custom label-lg-custom label-primary">Handmade</span><span class="label-custom label-lg-custom label-primary">Scrapbooking</span>
                   </div>
                   <div class="post-body">
                      <!-- Post Title-->
                      <div class="post-title">
                         <h4 class="text-regular">Wooden Toys For Learning and Play</h4>
                      </div>
                      <div class="post-meta small">
                         <ul class="list-inline list-inline-sm p">
                            <li class="list-inline-item font-italic text-middle">by&nbsp;<span class="text-warning">Jack George</span></li>
                            <li class="list-inline-item"><span class="text-middle icon-xxs mdi mdi-clock novi-icon"></span>
                               <time class="font-italic text-warning text-middle" datetime="2018-01-01">2 days ago</time>
                            </li>
                         </ul>
                      </div>
                   </div>
                </section>
             </div>
          </a>
       </div>
       <div class="col-md-10 col-lg-6 offset-top-66 offset-md-top-30 offset-lg-top-0">
          <!-- Post Boxed-->
          <a class="d-block" href="https://livedemo00.template-help.com/wt_58888_v15/child/intense-handmade/blog-single-post.html">
             <div class="post post-boxed">
                <!-- Post media-->
                <header class="post-media novi-excluded"><img class="img-fluid" src="images/post-04-570x321.jpg" alt="" width="570" height="321"></header>
                <!-- Post content-->
                <section class="post-content text-left novi-excluded">
                   <div class="post-tags group-xs"><span class="label-custom label-lg-custom label-primary">Handmade</span><span class="label-custom label-lg-custom label-primary">Textile</span>
                   </div>
                   <div class="post-body">
                      <!-- Post Title-->
                      <div class="post-title">
                         <h4 class="text-regular">Alpha Custom Rugs' Ashram</h4>
                      </div>
                      <div class="post-meta small">
                         <ul class="list-inline list-inline-sm p">
                            <li class="list-inline-item font-italic text-middle">by&nbsp;<span class="text-warning">Barbara Hunt</span></li>
                            <li class="list-inline-item"><span class="text-middle icon-xxs mdi mdi-clock novi-icon"></span>
                               <time class="font-italic text-warning text-middle" datetime="2018-01-01">2 days ago</time>
                            </li>
                         </ul>
                      </div>
                   </div>
                </section>
             </div>
          </a>
       </div>
       <div class="col-12 offset-top-66"><a class="btn btn-primary btn-ellipse" href="https://livedemo00.template-help.com/wt_58888_v15/child/intense-handmade/blog.html">view all blog posts</a></div>
    </div>
 </div>
</section>

@endsection


@push('js')
    
@endpush