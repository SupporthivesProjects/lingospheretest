@extends('frontend.layouts.app')
<style>
    /*.product-desc {
    display: block;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    }*/
    .navbar {
        color: #fff !important;
        background: #1E284B !important;
    }
    .productdetail-title {
        font-family: Circular Std;
        font-style: normal;
        font-weight: bold;
        font-size: 48px;
        line-height: 60px;
        color: #12394A;
    }
    .btn-addto-cart {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 48px;
        border-radius: 73px;
        border: none;
        color: #ffffff;
    }
    .btn-back {
        font-family: 'Soleil Regular';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 20px;
        padding: 8px 8px;
        display: flex;
        align-items: center;
        text-transform: capitalize;
        color: #FFFFFF;
        justify-content: center;
        text-align: center;
        background: #12394A;
        border-radius: 73px;
        height: 48px;
    }
    .product-des p {
        font-family: Circular Std;
        font-style: normal;
        font-weight: 450;
        font-size: 16px;
        line-height: 160%;
        color: #797A7A;
    }
    .product-des h4 {
        font-family: Circular Std;
        font-style: normal;
        font-weight: 500;
        font-size: 30px;
        line-height: 120%;
        color: #12394A;
    }
    .product-des ul {
        font-family: Circular Std;
        font-style: normal;
        font-weight: 450;
        font-size: 16px;
        line-height: 160%;
        color: #797A7A;
    }
    .product-des p, .product-des ul,
    .product-des span
    {
        color: #797A7A;
    }
  .product-box-container .product-box .product-content {
    text-align: center;
    height: 200px;
    max-height: 200px;
    min-height: 200px;
    overflow: hidden;
   }
  .catergorylanguage {
      width: 35% !important;
  }
   
   /*.slick-arrow:before {
    top: -327px! important;
    
   }*/
    
.slick-arrow {
    
    top: 256px !important;
}
  
 @media only screen and (max-width: 1349px){
    .product-box-container .product-box .product-content {
    text-align: center;
    height: 180px;
    max-height: 180px;
    min-height: 180px;
    overflow: hidden;
   }
   
   

 
   
   
  }
  
  
  @media only screen and (max-width: 1440px){
    
   /*.slick-arrow:before {
    top: -318px !important;
    
    }
    
   .slick-arrow>img {
    margin-top: -165px;
	}
    
    .slick-arrow {
    	top: 30% !important;
  }
    */
  }
  @media only screen and (max-width: 600px){
    
   .container {
       padding-right: 12px !important;
        padding-left: 12px !important;
   }
   .catergorylanguage {
          width: 55% !important;
      }
  }
  .navbar {
    border-bottom: 1px solid rgb(18 56 74) !important;
    width: 100%;
}

.readmore a span i {
    display: none;
}
.card {
    background: #F6F6F6 !important;
    border: 0px solid #F6F6F6 !important;
    border-radius: 0 !important;
}

#addtocartbtn {
    border: 1px solid #F48825;
    box-sizing: border-box;
    background-color: #fff !important;
    background: #fff !important;
    color: #F48825 !important;
}
.service-sec-cards {
    padding: 1.5rem !important;
}
.list-group-item {
    font-family: Circular Std;
    font-style: normal;
    font-weight: 450;
    font-size: 16px;
    line-height: 160%;
    color: #797A7A;
    background-color: transparent !important;
    border: 0px solid #dee2e6 !important;
}
#product-detail-price {
    font-family: Circular Std;
    font-style: normal;
    font-weight: bold;
    font-size: 30px;
    line-height: 130%;
    text-align: right;
    color: #12394A;
}
#quantity {
    font-family: Circular Std;
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 130%;
    color: #12394A;
    background: #FDFDFD;
    border: 1px solid #E8EAED;
    box-sizing: border-box;
    border-radius: 10px !important;
}

.related-products {
    font-family: Circular Std;
    font-style: normal;
    font-weight: 500;
    font-size: 32px;
    line-height: 40px;
    color: #12394A;
}

.border-bottom-service {
    border-bottom: 1px solid #dee2e6!important;
}

.product-box {
    padding: 24px 24px !important;
}
@media only screen and (max-width: 1500px) and (min-width: 1280px)  {
    .product-price-box .btn-addtocart {
        font-size: 18px !important;
    }
    .product-price-box .pro-price {
        font-size: 18px !important;
    }
}
@media only screen and (max-width: 1240px) and (min-width: 1100px)  {
    .product-price-boxm .btn-addtocart {
        font-size: 16px !important;
    }
    .product-price-box .pro-price {
        font-size: 12px !important;
    }
}
@media only screen and (max-width: 1024px) and (min-width: 768px){
    .product-price-box .btn-addtocart {
        font-size: 14px !important;
        min-width: 135px;
    }
    
    .product-price-box .pro-price {
        font-size: 14px !important;
    }
}
@media only screen and (max-width: 600px){
    .related-products {
        font-family: Circular Std;
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 40px;
        color: #12394A;
    }
    .product-price-box .btn-addtocart {
        font-size: 18px !important;
    }
    .product-price-box .pro-price {
        font-size: 18px !important;
    }
    .productdetail-title {
        font-family: Circular Std;
        font-style: normal;
        font-weight: bold;
        font-size: 28px;
        line-height: 40px;
        color: #12394A;
    }
    .card {
        background: #ffffff !important;
        border: 0px solid #ffffff !important;
        border-radius: 0 !important;
    }
    .service-sec-cards {
        padding: 0rem !important;
    }
    .border-bottom-service {
        border-bottom: 0px solid #dee2e6!important;
    }
    
    .pro-name {
        font-size: 20px !important;
    }
    
    .product-box-div {
        margin: 10px 0;
    }
}
</style>
@section('content')
    
    <section class="productdetail-page-banner pt-6 pt-lg-7 pb-0 pb-lg-5 border-bottom-service">
        <div class="container">
            <div class="row pt-lg-2 mt-6 mt-lg-7 justify-content-between">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ asset(json_decode($detailedProduct->photos)[0]) }}" alt="{{ __($detailedProduct->name) }}" class="rounded-0 d-lg-none">
                    <h2 class="productdetail-title mt-4 mt-lg-0 text-left text-lg-left">{{ __($detailedProduct->name) }}</h2>
                    <p class="catergorylanguage mx-lg-0">
                        <span class="product-category-tag float-left">
                            @if(__(\App\Category::find($detailedProduct->category_id)->name) == 'Video')
                                <img src="{{ asset('frontend/dist/img/video_category.svg') }}" alt="img" class="img-fluid mr-2">
                            @elseif(__(\App\Category::find($detailedProduct->category_id)->name) == 'E-books')
                                <img src="{{ asset('frontend/dist/img/ebooks_category.svg') }}" alt="img" class="img-fluid mr-2">
                            @elseif(__(\App\Category::find($detailedProduct->category_id)->name) == 'Software')
                                <img src="{{ asset('frontend/dist/img/software_category.svg') }}" alt="img" class="img-fluid mr-2">
                            @elseif(__(\App\Category::find($detailedProduct->category_id)->name) == 'Templates')
                                <img src="{{ asset('frontend/dist/img/template_category.svg') }}" alt="img" class="img-fluid mr-2">
                            @elseif(__(\App\Category::find($detailedProduct->category_id)->name) == 'Audio Book')
                                <img src="{{ asset('frontend/dist/img/audiobook_category.svg') }}" alt="img" class="img-fluid mr-2">
                            @endif
                        {{ __(\App\Category::find($detailedProduct->category_id)->name) }}
                        </span> 
                        <span class="product-language-tag float-right">
                        <img src="{{ asset('frontend/dist/img/language.svg') }}" alt="img" class="img-fluid mr-2">
                        English</span></p>
                        <div class="product-des mt-6 comment"> 
                            @php 
                              echo  $value = preg_replace('/(<[^>]*) style=("[^"]+"|\'[^\']+\')([^>]*>)/i', '$1$3', $detailedProduct->description);
                            @endphp
                        </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset(json_decode($detailedProduct->photos)[0]) }}" alt="{{ __($detailedProduct->name) }}" class="card-img-top rounded-0 d-none d-lg-block">
                        </a>
                        <div class="card-body align-items-start text-left text-lg-center service-sec-cards">
                            <ul class="list-group list-group-flush">
                                    <form id="option-choice-form">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $detailedProduct->id }}">
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            Quantity
                                            <span class="w-40"><input type="number"  placeholder="1" id="quantity" name="quantity" class="qty-box form-control-lg" min="1" max="10" value="1"/></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            Price
                                            <span id="product-detail-price">{{ home_price($detailedProduct->id) }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 ">
                                            <button id="addtocartbtn" type="button" class="btn w-100" onclick="addToCart()">
                                                <span>Add to Cart</span>
                                            
                                        </button></li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center  px-0  ">
                                            <button type="button" class="btn btn-green w-100" onclick="buyNow()">
                                                <span>Buy Now</span>
                                            
                                        </button></li>
                                    </form>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="product-cards pb-0 mb-lg-4 pb-lg-7 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="related-products text-left mb-4">Related products</h2>
                </div>
            </div>
            <div class="row">
                @foreach (filter_products(\App\Product::where('subcategory_id', $detailedProduct->subcategory_id)->where('id', '!=', $detailedProduct->id))->limit(3)->get() as $key => $related_product)
                @php 
                //var_dump($related_product->description);
                @endphp
                <div class="col-lg-4 col-md-4">
                    <div class="product-box-div">
                        <div class="product-box ">
                            <div class="product-image">
                                <img src="{{ asset($related_product->thumbnail_img) }}" alt="{{ __($related_product->name) }}">
                            </div>
                            <div class="product-content text-center">
                                <h5 class="pro-name text-left mb-1">{{ __($related_product->name) }}</h5>
                                 <small class="pro-tag text-left mb-2">Type: {{ __(\App\Category::find($related_product->category_id)->name) }}</small>
                                {{--<p class="text-truncate product-description">{{ __(strip_tags($related_product->description)) }}</p>--}}
                            </div>
                            <div class="d-flex product-price-box justify-content-between">
                                <h4 class="py-2 pro-price ">{{ home_base_price($related_product->id) }}</h4>
                                <button type="button" class="btn btn-green btn-addtocart px-3" onclick="addToCart1Step({{ $related_product->id }})"> Add to cart </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
@endsection

@section('script')
    <script language="javascript">
        $(document).ready(function() {
        	$(".comment").shorten();
         });
    </script>
     <script>
        $.fn.accordion = function () {
            const trigger = $(this).find('.accordion-trigger');
            const collapse = $(this).find('.accordion-collapse');

            $(trigger).first().addClass('accordion-open');
            $(collapse).first().show();

            $(trigger).each(function () {
                $(this).on('click', function () {
                    $(this).find('.plus-to-minus').toggleClass('minus');
                    $(this).siblings('.accordion-collapse').slideToggle();
                    $(this).toggleClass('accordion-open');
                    $(this).parent().siblings('.accordion-item').find('.accordion-trigger')
                        .removeClass('accordion-open');
                    $(this).parent().siblings('.accordion-item').find('.accordion-collapse')
                        .slideUp();
                });
            });
        }

        $('.accordion').accordion();
    </script>
     <script>
        $(document).ready(function() {
            $(".readmore a").addClass("btn btn-orange mt-4");
            $(".readmore a span i").addClass("d-none");
        });
    </script>
    
    <script>
    $(document).ready(function() {
        /*$(function () { 
            $(window).scroll(function () {
                if ($(this).scrollTop() >50) { 
                    $('.logo').attr('src',"{{ asset('frontend/dist/img/logo.svg') }}");
                }
                if ($(this).scrollTop() < 1000) { 
                    $('.logo').attr('src',"{{ asset('frontend/dist/img/logo.svg') }}");
                }
            })
        });*/
    });
    </script>
    
@endsection
