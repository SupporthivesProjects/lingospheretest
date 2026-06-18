@extends('frontend.layouts.app')
<style>
    .navbar {
        color: #fff !important;
        background: #1E284B !important;
    }
    .product-box-container .product-box .product-content {
        text-align: center;
        height: 200px;
        max-height: 200px;
        min-height: 200px;
        overflow: hidden;
    }
    
    .shop-box .filter-box {
      
        max-height: 820px !important;
    }
    
    .pagination {
        justify-content: center;
        display: flex !important;
    }
    
    .page-prev.disabled {
        display: flex;
        align-items: center;
    }
    
    .page-prev {
        display: flex;
        align-items: center; 
    }
    .page-prev .prev{
        color: #12394A; 
    }
    
    .page-next.disabled {
        display: flex;
        align-items: center; 
    }
    
    .page-next {
        display: flex;
        align-items: center;
    }
    
    .page-next .next{
        color: #12394A;
    }
    
    .page-prev .prev {
        font-family: Circular Std !important;
        font-style: normal;
        font-weight: 450;
        font-size: 14px;
        line-height: 22px;
        text-align: center;
        letter-spacing: 2px;
        text-transform: uppercase;
        position: relative;
        display: block;
        padding: 0.8rem 1.1rem;
        margin-left: 15px !important;
        line-height: 1.25;
        color: #FFFFFF;
        background: rgba(244, 136, 37, 0.005) !important;
        border: 0.3px solid #F48825 !important;
        border-radius: 50px !important;
    }
    .page-next .next {
        font-family: Circular Std !important;
        font-style: normal;
        font-weight: 450;
        font-size: 14px;
        line-height: 22px;
        text-align: center;
        letter-spacing: 2px;
        text-transform: uppercase;
        position: relative;
        display: block;
        padding: 0.8rem 1.1rem;
        margin-left: 15px !important;
        line-height: 1.25;
        color: #FFFFFF;
        background: rgba(244, 136, 37, 0.005) !important;
        border: 0.3px solid #F48825 !important;
        border-radius: 50px !important;
    }
    
    .page-link {
        font-family: Circular Std !important;
        font-style: normal;
        font-weight: 450;
        font-size: 14px;
        line-height: 22px;
        text-align: center;
        letter-spacing: 2px;
        text-transform: uppercase;
        position: relative !important;
        display: block !important;
        padding: 0.8rem 1.1rem !important;
        margin-left: 15px !important;
        line-height: 1.25 !important;
        color: #F48825 !important;
        background: rgba(244, 136, 37, 0.005) !important;
        border: 0.3px solid #F48825 !important;
        border-radius: 50px !important;
    }
    
    .page-number.active a {
        font-family: Circular Std !important;
        font-style: normal;
        font-weight: 450;
        font-size: 14px;
        line-height: 22px;
        text-align: center;
        letter-spacing: 2px;
        text-transform: uppercase;
        position: relative;
        display: block;
        padding: 0.8rem 1.1rem;
        margin-left: 15px !important;
        line-height: 1.25;
        color: #FFFFFF;
        background: #F48825 !important;
        border: 0.3px solid #F48825 !important;
        border-radius: 50px !important;
    }
  
  
  #product_name figcaption a{
    display: block;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  
.product-listing-head {
    font-family: Circular Std;
    font-style: normal;
    font-weight: 500;
    font-size: 32px;
    line-height: 120.5%;
    color: #12394A;
}  
  
@media only screen and (max-width: 768px){
  
    .shop-product-m .product-box-container .product-box .product-content {
      width: calc(100% - 174px) !important;
      margin-left: auto !important;
      text-align: left;
	}
  
  .product-box-container .product-box .product-btn {
      width: calc(100% - 1px) !important;
      margin-left: auto !important;
	}
  
}

@media only screen and (max-width: 1500px) and (min-width: 1280px)  {
    #search-form .btn-addtocart {
        font-size: 18px !important;
    }
    #search-form .product-price {
        font-size: 18px !important;
    }
    
    .product-listing-head {
        font-size: 30px !important;
    }
}
@media only screen and (max-width: 1240px) and (min-width: 1100px)  {
    #search-form .btn-addtocart {
        font-size: 16px !important;
    }
    #search-form .product-price {
        font-size: 12px !important;
    }
}
@media only screen and (max-width: 1024px) and (min-width: 768px){
    #search-form .btn-addtocart {
        font-size: 14px !important;
        min-width: 135px;
    }
    
    #search-form .product-price {
        font-size: 14px !important;
    }
}
 
@media only screen and (max-width: 600px) {
    .product-pagination {
        width: 100%;
    }
    .product-pagination .pagination{
        overflow-x: auto;
    }
    #search-form .btn-addtocart {
        font-size: 18px !important;
    }
    #search-form .product-price {
        font-size: 20px !important;
    }
    .product-listing-head {
        font-family: Circular Std;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 26px;
        color: #12394A;
    }
    .pagination {
        justify-content: center;
        display: -webkit-box !important;
    }
    
    .pro-name {
        font-size: 20px !important;
        line-height: 25px !important;
    }
    #search-form .product-content {
        height: 70px !important;
        max-height: 130px !important;
    }
    
    #search-form .product-box-div {
        margin: 18px 0 !important;
    }
}
  
  
  
</style>
@section('content')
@php
    //dump($products);
    //$selected_categories_ids1 = $selected_categories_ids[0];
    //dump($selected_categories_ids1);
@endphp
<form class="mb-0" id="search-form" action="{{ route('search') }}" method="GET">      
    {{--<section class="fl-fix pos-r ov-h breadcrumbs shop-breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <h1 class="display-text">Shop</h1>
                <h4>Browse by category or topic to find the right design services and content for you.</h4>
            </div>
        </div>
    </section>
    <section class="fl-fix pos-r shop-product">
            <div class="container clearfix ">
                <div class="filter-container clearfix marT30">
                    <div class="filter-result filter-m">
                        <button type="button" class="btn btn-ocean-blue filter-result-btn">
                            <span class="filter-hide">Filter results <img src="{{ asset('frontend/dist/images/filter.svg') }}"
                                    alt="filter icon"></span>
                            <span class="filter-show">Hide Filter <img src="{{ asset('frontend/dist/images/filter-min.svg') }}"
                                    alt="filter icon"></span>
                        </button>
                    </div>
                    <div class="dn-m">
                        <div class="pro-filter">
                            <select name="sort_by_alphabet" id="sort_by_alphabet" onchange="filter();">
                                <option value="0" disabled selected>Order By:</option>
                                <option value="1" @isset($sort_by_alphabet) @if ($sort_by_alphabet == '1') selected @endif @endisset>Ascending A-Z</option>
                                <option value="2" @isset($sort_by_alphabet) @if ($sort_by_alphabet == '2') selected @endif @endisset>Descending Z-A</option>
                            </select>

                            <select name="sort_by_price" id="sort_by_price" onchange="filter();">
                                <option value="0" disabled selected>Sort By:</option>
                                <option value="1" @isset($sort_by_price) @if ($sort_by_price == '1') selected @endif @endisset>Best Sellers</option>
                                <option value="2" @isset($sort_by_price) @if ($sort_by_price == '2') selected @endif @endisset>Price (low - high)</option>
                                <option value="3" @isset($sort_by_price) @if ($sort_by_price == '3') selected @endif @endisset>Price (high - low)</option>
                            </select>
                            
                        </div>
                    </div> <!-- display none in mobile -->
                    <div class="db-m">
                        <div class="pro-filter">
                            <select name="sort_by_alphabet" id="sort_by_alphabet" onchange="filter();">
                                <option value="0" disabled selected>Order By:</option>
                                <option value="1" @isset($sort_by_alphabet) @if ($sort_by_alphabet == '1') selected @endif @endisset>Ascending A-Z</option>
                                <option value="2" @isset($sort_by_alphabet) @if ($sort_by_alphabet == '2') selected @endif @endisset>Descending Z-A</option>
                            </select>

                            <select name="sort_by_price" id="sort_by_price" onchange="filter();">
                                <option value="0" disabled selected>Sort By:</option>
                                <option value="1" @isset($sort_by_price) @if ($sort_by_price == '1') selected @endif @endisset>Best Sellers</option>
                                <option value="2" @isset($sort_by_price) @if ($sort_by_price == '2') selected @endif @endisset>Price (low - high)</option>
                                <option value="3" @isset($sort_by_price) @if ($sort_by_price == '3') selected @endif @endisset>Price (high - low)</option>
                            </select>
                        </div>
                    </div> <!-- display none in web-->
                </div> <!-- filter container end -->
            </div>
                <div class="filter-data-container marT20 bg-ocean-blue filter-data-m">
                    <div class="container">
                        <ul class="filter-main bblock-3 accordion">
                            <li class="filter-categorys accordion-item  filter-type-main">
                                <h6 class="accordion-trigger">Filter by type</h6>
                                <div class="icon plus-to-minus "></div>
                                <ul class="filter-cat filter-type accordion-collapse">
                                    @foreach(\App\Category::all() as $category)
                                         @php
                                            $flag = false;
                                            if(isset($selected_categories_ids[0])){
                                                if(in_array($category->id, $selected_categories_ids[0])){
                                                    $flag = true;
                                                }
                                            }
                                        @endphp
                                        <li class="filter-cat-list">
                                            <div class="filter-select">
                                                <div class=" c-checkbox">
                                                    <label class="d-f fxd-r">
                                                        <input type="checkbox" name="categories[]" value="{{ __($category->id) }}" data-groupid="{{ __($category->name) }}" @if ($flag) checked @endif >
                                                        <label></label>
                                                        <small class=""> {{ __($category->name) }}</small>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="filter-select-data">
                                                <small>({{ count($category->products) }})</small>
                                            </div>
                                        </li> <!-- filter cart list -->
                                    @endforeach
                                </ul> <!-- filter cart end -->
                            </li> <!-- filter categorys end -->
                            <li class="filter-categorys filter-topic-m accordion-item ">
                                <h6 class="accordion-trigger"> Filter by topic</h6>
                                <div class="icon plus-to-minus"></div>
                                <ul class="filter-cat filter-topic accordion-collapse">
                                    @foreach ($all_tags as $tag)
                                        @php
                                            $flag = false;
                                            if(isset($selected_tags[0])){
                                                if(in_array($tag, $selected_tags[0])){
                                                    $flag = true;
                                                }
                                            }
                                        @endphp
                                        <li class="filter-cat-list">
                                            <div class="filter-select">
                                                <div class=" c-checkbox">
                                                    <label class="d-f fxd-r">
                                                        <input type="checkbox" name="topics[]" value="{{ $tag }}" data-groupid="{{ $tag }}" @if ($flag) checked @endif >
                                                        <label></label>
                                                        <small class=""> {{ $tag }}</small>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="filter-select-data">
                                                <small>({{ \App\Http\Controllers\HomeController::tags_count($tag) }})</small>
                                            </div>
                                        </li> <!-- filter cart list -->
                                    @endforeach 
                                </ul> <!-- filter cart end -->
                            </li> <!-- filter categorys end -->
                            <li class="filter-categorys filter-btn-main">
                                <div class="filter-btn">
                                    <a href="{{ route('products') }}" class="btn btn-ocean-blue clear-btn" type="button"> Clear <img
                                            src="{{ asset('frontend/dist/images/clear-icon.svg') }}" alt="clear icon"> </a>
                                    <button class="btn btn-white" type="submit"> Apply <img src="{{ asset('frontend/dist/images/apply-icon.svg') }}"
                                            alt="apply icon"> </button>
                                </div>
                            </li> <!-- filter categorys end -->
                        </ul> <!-- filter main end -->
                    </div>
                  
                </div> <!-- filter data container end -->
               
               <div class="container">
                <div class="selected-filter dn-m">
                    <ul class="d-f selected-lists">
                        
                        @if(isset($selected_categories_ids[0]))
                          @foreach($selected_categories_ids[0] as $cat_id)
                            <li class="filter-select">
                                <button type="button" class="btn btn-white" onclick="removeFilter('{{ __(\App\Category::find($cat_id)->name) }}')">
                                         {{ __(\App\Category::find($cat_id)->name) }}  
                                        <img src="{{ asset('frontend/dist/images/clearb-icon.svg') }}"
                                        alt="clear icon"></button>
                            </li>
                          @endforeach
                        @endif
                        
                        @if(isset($selected_tags[0]))
                          @foreach($selected_tags[0] as $tag_names)
                            <li class="filter-select">
                                <button class="btn btn-white" onclick="removeFilter('{{ $tag_names }}')">
                                      {{ $tag_names }} <img src="{{ asset('frontend/dist/images/clearb-icon.svg') }}"
                                        alt="clear icon"></button>
                            </li>
                          @endforeach
                        @endif
                        
                    </ul>
                    <div class="clear-select-filter">
                        <a href="{{ route('products') }}" class="btn btn-ocean-blue"> Clear All <img src="{{ asset('frontend/dist/images/clear-icon.svg') }}"
                                alt="clear icon"></a>
                    </div>
                </div>
                <div class="shop-product-container">
                    @if($products)
                    <ul class="product-main block-4 shop-product-m">
                       
                        @foreach ($products as $key => $product)
                            <li class="product-box-container">
                                <div class="product-box">
                                    <figure class="product-image">
                                        <img src="{{ asset($product->thumbnail_img) }}"  alt="{{ __($product->name) }}">
                                    </figure>
                                    <figcaption class="product-content">
                                        <small>{{ __(\App\Category::find($product->category_id)->name) }}</small><br/>
                                        <!--<h4>{{ __($product->name) }}</h4>-->
                                        <a href="{{ route('product', $product->slug) }}" class="h4">{{ __($product->name) }}</a>
                                        <p>{{ __(strip_tags($product->description)) }}</p>
                                    </figcaption>
                                    <div class="product-price">
                                        <h5>Price:</h5>
                                        <span>{{ home_discounted_base_price($product->id) }}</span>
                                    </div>
                                    <div class="product-btn">
                                        <button type="button" class="btn btn-white" onclick="showAddToCartModal({{ $product->id }})" > Add to cart <img src="{{ asset('frontend/dist/images/cart-icon.svg') }}"
                                                alt="cart icon"> </button>
                                    </div>
                                </div>
                            </li>
                        @endforeach    
                        
                    </ul> <!-- product ul end -->
                    <div class="product-pagination">
                        {{ $products->links() }}  
                    </div>
                    @else
                    <div>
                        <h4> No product Found! Please Try other filter options. </h4> 
                    </div>
                    @endif
                </div> <!-- shop-product-container end -->
               </div>
            
            
        </section>--}}
        
    {{--<div class="main fl-fix">
        <section class="fl-fix pos-r ov-h breadcrumbs shop-breadcrumb"
            style="background-image: url('{{ asset('frontend/dist/images/shop-breadcrumb.png') }}');">
            <div class="container">
                <div class="breadcrumb-content">
                    <h1>Everything you need to know about design!</h1>
                    <!--<h4> Browse by category or topic to find the right design services and content for you.</h4>-->
                    <h4> We have a wide range of products available.
                        There are many topics to choose from, and most are available in a variety of formats.
                        These include, but are not limited to video, ebooks and audiobooks.</h4>
                </div>
            </div>
        </section>

        <section class="fl-fix pos-r shop-product">
            <div class="container clearfix ">
                <div class="filter-container clearfix marT20">
                    <div class="d-f jc-fe ai-c fxw-w">
                        <span class="marR20">Sort by</span>
                        <div class="pro-filter">
                            <select name="sort_by_price" id="sort_by_price" onchange="filter();">
                                <option value="0" disabled selected>Sort By:</option>
                                <option value="1" @isset($sort_by_price) @if ($sort_by_price == '1') selected @endif @endisset>Best Sellers</option>
                                <option value="2" @isset($sort_by_price) @if ($sort_by_price == '2') selected @endif @endisset>Price (low - high)</option>
                                <option value="3" @isset($sort_by_price) @if ($sort_by_price == '3') selected @endif @endisset>Price (high - low)</option>
                            </select>
                        </div>
                    </div>
                    <div class="filter-result filter-m db-m">
                        <button class="btn btn-red filter-result-btn" type="button">
                            <span class="filter-hide">Filter Results <img src="{{ asset('frontend/dist/images/filter.svg') }}" alt="filter icon"></span>
                            <span class="filter-show">Hide Filter <img src="{{ asset('frontend/dist/images/filter-min.svg') }}" alt="filter icon"></span>
                        </button>
                    </div>
                </div> <!-- filter container end -->

                <div class="shop-box">
                    <div class="filter-box">
                        <div class="filter-data-container  filter-data-m">
                            <ul class="filter-main ">
                                <li class="filter-categorys">
                                    <h6 class="c-white">Filter by</h6>
                                </li>
                                <li class="filter-categorys ">
                                  <h3 class="c-white">Category</h3>
                                    <ul class="filter-cat filter-type  ">
                                        @foreach(\App\Category::all() as $category)
                                      	@if( $category->id != 6) <!-- for skiping software category -->
                                        @php
                                            $flag = false;
                                            if(isset($selected_categories_ids[0])){
                                                if(in_array($category->id, $selected_categories_ids[0])){
                                                    $flag = true;
                                                }
                                            }
                                        @endphp
                                        <li class="filter-cat-list">  
                                            <div class="filter-select">
                                                <div class=" c-checkbox">
                                                    <label class="d-f fxd-r">
                                                        <input type="checkbox" name="categories[]" value="{{ __($category->id) }}" data-groupid="{{ __($category->name) }}" @if ($flag) checked @endif >
                                                        <label></label>
                                                        <small class=""> {{ __($category->name) }}</small>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="filter-select-data">
                                                <small>({{ count($category->products) }})</small>
                                            </div>
                                        </li> <!-- filter cart list -->
                                      	@endif
                                        @endforeach
                                    </ul> <!-- filter cart end -->
                                </li> <!-- filter categorys end -->
                                <li class="filter-categorys ">
                                    <h3 class="c-white">Topic</h3>
                                      <ul class="filter-cat filter-type  ">
                                          @foreach ($all_tags as $tag)
                                            @php
                                                $flag = false;
                                                if(isset($selected_tags[0])){
                                                    if(in_array($tag, $selected_tags[0])){
                                                        $flag = true;
                                                    }
                                                }
                                            @endphp
                                          <li class="filter-cat-list">  
                                              <div class="filter-select">
                                                  <div class=" c-checkbox">
                                                      <label class="d-f fxd-r">
                                                          <input type="checkbox" name="topics[]" value="{{ $tag }}" data-groupid="{{ $tag }}" @if ($flag) checked @endif >
                                                          <label></label>
                                                          <small class="">  {{ $tag }}</small>
                                                      </label>
                                                  </div>
                                              </div>
                                              <div class="filter-select-data">
                                                  <small>({{ \App\Http\Controllers\HomeController::tags_count($tag) }})</small>
                                              </div>
                                          </li> <!-- filter cart list -->
                                          @endforeach
                                      </ul> <!-- filter cart end -->
                                  </li> <!-- filter categorys end --> 

                                <li class="filter-categorys filter-btn-main">
                                    <a href="{{ route('products') }}" class="btn btn-black mart15" style="min-width: 100% !important;">Clear</a>
                                    <button class="btn btn-red mart15" type="submit"> Apply</button>
                                </li> <!-- filter categorys end -->
                            </ul> <!-- filter main end -->
                        </div> <!-- filter data container end -->
                    </div> <!-- filter box -->
                    <div class="shop-data-box">
                        <div class="shop-product-container">
                            @if($products)
                            <ul class="product-main block-3 shop-product-m">
                                @foreach ($products as $key => $product)
                                <li class="product-box-container">
                                    <div class="product-box" id="product_name">
                                        <figure class="product-image">
                                            <img src="{{ asset($product->thumbnail_img) }}" style="height: 155px; width: 155px;" alt="{{ __($product->name) }}">
                                        </figure>
                                        <figcaption class="product-content">
                                            <small>{{ __(\App\Category::find($product->category_id)->name) }}</small><br>
                                            <a href="{{ route('product', $product->slug) }}" class="h4">{{ __($product->name) }}</a>
                                            <h6>{{ home_discounted_base_price($product->id) }}</h6>
                                            <p>{{ __(strip_tags($product->description)) }}</p>
                                        </figcaption>
                                        <div class="product-btn">
                                            <button class="btn btn-red w10" onclick="showAddToCartModal({{ $product->id }})" type="button"> Add to cart </button>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul> <!-- product ul end -->
                            <div class="product-pagination">
                                {{ $products->links() }}  
                            </div>
                            @else
                                <div>
                                    <h4> No product Found! Please Try other filter options. </h4> 
                                </div>
                            @endif
                        </div> <!-- shop-product-container end -->
                    </div>
                </div>
            </div>
        </section>

    </div> <!-- Main Section -->--}}
    
    
    <section class="product-listing-page pt-3 pt-lg-6 mt-7 pb-3">
        @isset($category_id)
            <input type="hidden" name="category" value="{{ \App\Category::find($category_id)->slug }}">
        @endisset
        @isset($subcategory_id)
            <input type="hidden" name="subcategory" value="{{ \App\SubCategory::find($subcategory_id)->slug }}">
        @endisset
        @isset($subsubcategory_id)
            <input type="hidden" name="subsubcategory" value="{{ \App\SubSubCategory::find($subsubcategory_id)->slug }}">
        @endisset
        <div class="container">
            <!--<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 align-self-center">
                    <div class="check-out-head text-center mb-5">
                        <h2 class="h2-desktop-black">Store</h2>
                        <p class="para-red">Browse our curated learning resources below or get in touch with one of our designers<br> to discuss a tailored learning package using our bespoke service. </p>
                    </div>
                </div>
            </div>-->
            <div class="row mt-2">
                <div class="col-lg-6">
                    <h2 class="product-listing-head d-none ">Besign Resources & Bespoke Packages</h2>
                    <h2 class="product-listing-head d-none mb-4">Besign Resources & Bespoke<br> Packages</h2>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 align-self-center mb-4 mb-lg-0">
                            {{--<div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-12 align-self-center">
                                    <lable class="legend">Search</lable>
                                    <select class="form-control-lg" name="sort_by_price" id="sort_by_price" onchange="filter();">
                                        <option value="1" @isset($sort_by_price) @if ($sort_by_price == '1') selected @endif @endisset>Best Sellers</option>
                                        <option value="2" @isset($sort_by_price) @if ($sort_by_price == '2') selected @endif @endisset>Price (low - high)</option>
                                        <option value="3" @isset($sort_by_price) @if ($sort_by_price == '3') selected @endif @endisset>Price (high - low)</option>
                                    </select>
                                </div>
                            </div>--}}
                            <select class="form-control-lg"  id="sort_by_category" onchange="window.location = this.options[this.selectedIndex].value">
                                <option value="{{ route('products') }}">All</option>
                                @foreach(\App\Category::all() as $category)
                                
                                @if($category_id  == $category->id)
                                    <option value="{{ route('products.category', $category->slug) }}" @if ($category_id  == $category->id) selected @endif>{{ __($category->name) }}</option>
                                @else
                                    <option value="{{ route('products.category', $category->slug) }}">{{ __($category->name) }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 align-self-center mb-4 mb-lg-0">
                            {{--<div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 align-self-center">
                                    <lable class="legend">Filter by Category</lable>
                                    <select class="form-control-lg" name="sort_by_price" id="sort_by_price" onchange="filter();">
                                        <option value="1" @isset($sort_by_price) @if ($sort_by_price == '1') selected @endif @endisset>All</option>
                                        <option value="2" @isset($sort_by_price) @if ($sort_by_price == '2') selected @endif @endisset>Price (low - high)</option>
                                        <option value="3" @isset($sort_by_price) @if ($sort_by_price == '3') selected @endif @endisset>Price (high - low)</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 align-self-center">
                                    <lable class="legend">Filter by Topic</lable>
                                    <select class="form-control-lg" name="sort_by_price" id="sort_by_price" onchange="filter();">
                                        <option value="1" @isset($sort_by_price) @if ($sort_by_price == '1') selected @endif @endisset>All</option>
                                        <option value="2" @isset($sort_by_price) @if ($sort_by_price == '2') selected @endif @endisset>Price (low - high)</option>
                                        <option value="3" @isset($sort_by_price) @if ($sort_by_price == '3') selected @endif @endisset>Price (high - low)</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 align-self-center">
                                    <lable class="legend">Sort By</lable>
                                    <select class="form-control-lg" name="sort_by_price" id="sort_by_price" onchange="filter();">
                                        <option value="1" @isset($sort_by_price) @if ($sort_by_price == '1') selected @endif @endisset>Best Sellers</option>
                                        <option value="2" @isset($sort_by_price) @if ($sort_by_price == '2') selected @endif @endisset>Price (low - high)</option>
                                        <option value="3" @isset($sort_by_price) @if ($sort_by_price == '3') selected @endif @endisset>Price (high - low)</option>
                                    </select>
                                </div>
                            </div>--}}
                            @php 
                                $topics = array('Plugin','Wordpress','Tips & Tricks','Development','Design','HTML');
                                $current_topic = urldecode(app('request')->input('q'));
                            @endphp 
                            <select class="form-control-lg"  id="sort_by_topic" onchange="window.location = this.options[this.selectedIndex].value">
                                <option value="{{ route('products') }}">All</option>
                                @foreach ($topics as $topic)
                                @if( $current_topic == $topic )
                                <option value="{{ route('suggestion.search', urlencode($topic)) }}" @if ($current_topic == $topic) selected @endif>{{ urldecode($topic) }}</option>
                                @else
                                <option value="{{ route('suggestion.search', urlencode($topic)) }}">{{ urldecode($topic) }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 align-self-center mb-4 mb-lg-0">
                            <select class="form-control-lg" name="sort_by" id="sort_by" onchange="filter()">
                                <option value="1" @isset($sort_by) @if ($sort_by == '1') selected @endif @endisset>Best Sellers</option>
                                <option value="2" @isset($sort_by) @if ($sort_by == '2') selected @endif @endisset>Price (low - high)</option>
                                <option value="3" @isset($sort_by) @if ($sort_by == '3') selected @endif @endisset>Price (high - low)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="product-cards pt-0 pb-3 pb-lg-7">
        <div class="container">
            @if($products)
            <div class="row">
                  @foreach ($products as $key => $product)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-box-div">
                        <div class="product-box ">
                            <div class="product-image pt-3">
                                <img src="{{ asset($product->thumbnail_img) }}" alt="{{ __($product->name) }}" style="">
                            </div>
                            <div class="product-content text-center">
                                <h5 class="pro-name text-left"><a href="{{ route('product', $product->slug) }}">{{ __($product->name) }}</a></h5>
                                 <small class="pro-tag text-center mb-2">Type: {{ __(\App\Category::find($product->category_id)->name) }}</small>
                                {{--<p class="text-truncate product-description">{{ __(strip_tags($product->description)) }}</p>--}}
                            </div>
                            <div class="d-flex justify-content-between mt-3 p-2 align-items-center" style="background: #FFFFFF;">
                                <h4 class="product-price mb-0">{{ home_discounted_base_price($product->id) }}</h4>
                                <button type="button" class="btn btn-addtocart" onclick="showAddToCartModal({{ $product->id }})"> Add to cart </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="product-pagination mt-4">
                {{ $products->links() }}  
            </div>
            @else
                <div class="row">
                    <div class="col-12">
                        <h4> No product Found! Please Try other filter options. </h4>
                    </div>
                </div>
            @endif
        </div>
    </section>
    
</form>   
@endsection

@section('script')
    <script type="text/javascript">
        function filter(){
            $('#search-form').submit();
        }
        function rangefilter(arg){
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            filter();
        }
    </script>
    <script>
        $( document ).ready(function() {

            $.fn.accordion = function () {
           
            const trigger = $(this).find('.accordion-trigger');
            const collapse = $(this).find('.accordion-collapse');
            $(trigger).first().next().addClass('minus');
            $(trigger).first().addClass('accordion-open');
            $(collapse).first().show();

                $(trigger).each(function () {
                    $(this).on('click', function () { 
                        $(this).next('.plus-to-minus').toggleClass('minus');  
                        $(this).siblings('.accordion-collapse').slideToggle();
                        $(this).toggleClass('accordion-open');
                        $(this).parent().siblings('.accordion-item').find('.accordion-trigger')
                            .removeClass('accordion-open');
                        $(this).parent().siblings('.accordion-item').find('.accordion-collapse')
                            .slideUp();
                    });
                });
            }
            
            if ($(window).width() < 768) {
                $('.accordion').accordion();
            } else{
                $('.filter-data-container').find('.filter-categorys').removeClass('accordion-item');
                $('.filter-data-container').find('.filter-cat').removeClass('accordion-collapse');
            }
          
            $( window ).resize(function() {
                if ($(window).width() < 768) {
                    $('.filter-data-container').find('.filter-categorys').addClass('accordion-item');
                   $('.filter-data-container').find('.filter-cat').addClass('accordion-collapse');
                   $('.accordion').accordion();
                } else{ 
                    $('.filter-data-container').find('.filter-categorys').removeClass('accordion-item');
                    $('.filter-data-container').find('.filter-cat').removeClass('accordion-collapse');
                }
            });
        });

    </script>
    
    <script>
        function removeFilter(name) {
            $('body').find("[data-groupid='" + name + "']").prop('checked',false);
            filter();
        }
    </script>
    <script>
        /*$(document).ready(function() {
            $(".logo").attr('src',"{{ asset('frontend/dist/img/change-logo.svg') }}");
        });*/
    </script>
    
    <script>
    /*$(document).ready(function() {
        $(function () { 
            $(window).scroll(function () {
                if ($(this).scrollTop() >50) { 
                    $('.logo').attr('src',"{{ asset('frontend/dist/img/logo.svg') }}");
                }
                if ($(this).scrollTop() < 1000) { 
                    $('.logo').attr('src',"{{ asset('frontend/dist/img/logo.svg') }}");
                }
            })
        });
    });*/
    </script>
    

@endsection
