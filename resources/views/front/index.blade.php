@extends('front.layout.master')

@section('title','Home')

@section('body')
        <!--Hero Section Begin-->
        <section class="hero-section">
            <div class="hero-items owl-carousel">
                <div class="single-hero-items set-bg " data-setbg="front/img/hero-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lf-5">
                                <span> Bag, Kids</span>
                                <h1> Black friday</h1>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere cumque fuga alias
                                    reprehenderit perferendis dolorum incidunt vero molestiae aliquam praesentium. Esse
                                    officia suscipit quaerat cum? Voluptatum sequi corrupti animi facere!</p>
                                <a href="#" class="primary-btn">Shop now </a>
                            </div>
                        </div>
                        <div class="off-card">
                            <h2>Sale<span>50%</span></h2>
                        </div>
                    </div>
                </div>
                <div class="single-hero-items set-bg " data-setbg="front/img/hero-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lf-5">
                                <span> Bag, Kids</span>
                                <h1> Black friday</h1>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere cumque fuga alias
                                    reprehenderit perferendis dolorum incidunt vero molestiae aliquam praesentium. Esse
                                    officia suscipit quaerat cum? Voluptatum sequi corrupti animi facere!</p>
                                <a href="#" class="primary-btn">Shop now </a>
                            </div>
                        </div>
                        <div class="off-card">
                            <h2>Sale<span>50%</span></h2>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--Hero Section End-->
        <!--Banner Section Begin-->
        <div class="banner-section spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="front/img/banner-1.jpg" alt="">
                            <div class="inner-text">
                                <h4>Men's</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="front/img/banner-2.jpg" alt="">
                            <div class="inner-text">
                                <h4>Women's</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="front/img/banner-3.jpg" alt="">
                            <div class="inner-text">
                                <h4>Kid's</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Banner Section End-->

         <!--Women Banner Section Begin-->
         <section class="women-banner spad">
            <div class="container-fluid">
             <div class="row">
               <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                <h2>Women's</h2>
                <a href="#"> Discover More</a>
             </div>

             </div>
             <div class="col-lg-8 offset-lg-1">
               <div class="filter-control">
                   <ul>
                       <li class="item active" data-tag="*" data-category="women"> All</li>
                       <li class="item" data-tag=".Clothing" data-category="women"> Clothing</li>
                       <li class="item" data-tag=".HandBag" data-category="women"> HandBag</li>
                       <li class="item" data-tag=".Shoes" data-category="women"> Shoes</li>
                       <li class="item" data-tag=".Accessories" data-category="women">Accessories</li>
                   </ul>
               </div>
               <div class="product-slider owl-carousel women" >
                   @foreach($womenProducts as $womenProduct)
                        @include('front.components.product-item',['product' => $womenProduct])
                   @endforeach
               </div>
                </div>
             </div>
            </div>
         </section>
         <!--Women Banner Section End-->
         <!--Deal Of the Week Section Begin-->
         <!--Parter Logo Section Begin-->
        <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
        <div class="container">
         <div class="col-lg-6 text-center">
          <div class="section-title">
             <h2>Deal Of The Week</h2>
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis quis ipsum deleniti nam atque in exercitationem placeat ducimus rerum corporis necessitatibus, est perspiciatis alias quisquam accusamus vero quibusdam delectus! Fuga.</p>
           <div class="product-price">
                $35.00
                <span>/ HandBag</span>
           </div>
           </div>
           <div class="countdown-timer" id="countdown">
              <div class="cd-item">
                 <span>66</span>
                 <p>Days</p>
              </div>
              <div class="cd-item">
               <span>11</span>
               <p>Hrs</p>
            </div>
            <div class="cd-item">
               <span>16</span>
               <p>Mins</p>
            </div>
            <div class="cd-item">
               <span>16</span>
               <p>Secs</p>
            </div>
           </div>

           <a href="" class="primary-btn">Shop Now</a>
         </div>
        </div>
       </section>
         <!--Parter Logo Section End-->
         <!--Deal Of the Week Section End-->
         <!--Man Banner Section Begin-->
         <section class="man-banner spad">
            <div class="container-fluid">
             <div class="row">

             <div class="col-lg-8 offset-lg-1">
               <div class="filter-control">
                 <ul>
{{--                     khi thay clothing = '*' =>  van hien thi danh sach--}}
                     <li class="item active" data-tag='*' data-category="men">All</li>
                     <li class="item" data-tag=".Clothing" data-category="men">Clothing</li>
                     <li class="item" data-tag=".HandBag" data-category="men">HandBag</li>
                     <li class="item" data-tag=".Shoes" data-category="men">Shoes</li>
                     <li class="item" data-tag=".Accessories" data-category="men">Accessories</li>
                 </ul>
               </div>
               <div class="product-slider owl-carousel men">
                   @foreach($menProducts as $menProduct)
                       @include('front.components.product-item',['product' => $menProduct])
{{--                       <div class="product-item item{{$menProduct->tag}}">--}}
{{--                           <div class="pi-pic">--}}
{{--                               <img src="front/img/products/{{$menProduct->productImages[0]->path}}" alt="">--}}
{{--                               @if($menProduct->discount != null)--}}
{{--                                   <div class="sale"> Sale</div>--}}
{{--                               @endif--}}
{{--                               <div class="icon">--}}
{{--                                   <i class="icon_heart_alt"></i>--}}
{{--                               </div>--}}
{{--                               <ul>--}}
{{--                                   <li class="w-icon active"><a href="./cart/add{{$menProduct->id}}">--}}
{{--                                           <i class="icon_bag_alt"></i></a></li>--}}
{{--                                   <li class="quick-view"><a href="shop/product/{{$menProduct->id}}">+ Quick View</a></li>--}}
{{--                                   <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>--}}
{{--                               </ul>--}}
{{--                           </div>--}}
{{--                           <div class="pi-text">--}}
{{--                               <div class="catagory-name">{{$menProduct->tag}}</div>--}}
{{--                               <a href="shop/product/{{$menProduct->id}}">--}}
{{--                                   <h5> {{$menProduct->name}}</h5>--}}
{{--                               </a>--}}
{{--                               <div class="product-price">--}}
{{--                                   @if($menProduct->discount != null)--}}
{{--                                       ${{$menProduct->discount}}--}}
{{--                                       <span> ${{$menProduct->price}}</span>--}}
{{--                                   @else--}}
{{--                                       ${{$menProduct->price}}--}}
{{--                                   @endif--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                       </div>--}}

                   @endforeach
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                    <h2>Men's</h2>
                    <a href="#"> Discover More</a>
                 </div>

                 </div>
             </div>
            </div>
         </section>
          <!--Man Banner Section End-->
          <!-- Insta Section Begin-->
          <div class="instagram-photo">
              <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#"> Picture 1</a></h5>
                </div>
              </div>
              <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#"> Picture 2</a></h5>
                </div>
              </div>
              <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#"> Picture 3</a></h5>
                </div>
              </div>
              <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#"> Picture 4</a></h5>
                </div>
              </div>
              <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#"> Picture 5</a></h5>
                </div>
              </div>
              <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#"> Picture 6</a></h5>
                </div>
              </div>

          </div>
          <!-- Insta Section End-->

           <!--Latest Blog Section Begin-->
           <section class="latest-blog spad">
        <div class="container">
           <div class="row">
            <div class="col-lg-12">
              <div class="section-title">
                <h2>From The Blog</h2>
              </div>
            </div>
           </div>
            <div class="row">

                @foreach($blogs as $blog)
                  <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                      <img src="front/img/blog/{{$blog->image}}" >
                      <div class="latest-text">
                        <div class="tag-list">
                          <div class="tag-item">
                             <i class="fa fa-calendar-o"></i>
                              {{  date('M d,Y ',strtotime($blog->created_at) )}}
{{--                               dinh dang theo trinh tu Thang ngay nam--}}
                          </div>
                          <div class="tag-item">
                            <i class="fa fa-calendar-o"></i>
                              {{ count($blog->blogComments) }}

                          </div>
                        </div>
                        <a href="">
                           <h4> {{$blog->title}}</h4>
                        </a>
                        <p>{{$blog->subtitle}}</p>
                      </div>
                    </div>
                  </div>

                @endforeach
            </div>
            <div class="benefit-items">
               <div class="row">
                 <div class="col-lg-4">
                    <div class="single-benefit">
                       <div class="sb-icon">
                           <img src="front/img/icon-1.png">
                       </div>
                       <div class="sb-text">
                              <h6>Free Ship</h6>
                              <p>For All Order Over 99$</p>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="single-benefit">
                       <div class="sb-icon">
                           <img src="front/img/icon-2.png">
                       </div>
                       <div class="sb-text">
                              <h6>Delivery On Time</h6>
                              <p>If good have prolems</p>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="single-benefit">
                       <div class="sb-icon">
                           <img src="front/img/icon-3.png">
                       </div>
                       <div class="sb-text">
                              <h6>Secure PayMent</h6>
                              <p>100% secure payment</p>
                       </div>
                    </div>
                 </div>
               </div>
            </div>

        </div>
           </section>
           <!--Latest Blog Section End-->

@endsection
