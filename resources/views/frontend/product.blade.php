@extends('layouts.site')
@section('title','Tất cả sản phẩm')
@section('content')
</nav>
<!--Banner-->
<div>
  <div>
    <img src="images/collection_banner.jpg" alt="Products">
  </div>
</div>
<div class="breadcrumb-shop">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
        <ol class="breadcrumb breadcrumb-arrows">
          <li>
            <a href="index.html">
              <span>Trang chủ</span>
            </a>
          </li>
          <li>
            <a href="Product.html">
              <span>Danh mục</span>
            </a>
          </li>
          <li>
            <span><span style="color: #777777">Tất cả sản phẩm</span></span>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--List Prodct-->
<div class="container" style="margin-top: 50px;">
  <div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12 sidebar-fix">
      <div class="wrap-filter">
        <div class="box_sidebar">
          <div class="block left-module">
            <div class=" filter_xs">
              <div class="group-menu">
                <div class="title_block d-block d-sm-none d-none d-sm-block d-md-none" data-toggle="collapse"
                href="#collapseExample1" role="button" aria-expanded="false"
                aria-controls="collapseExample1">
                  Danh mục sản phẩm
                  <span><i class="fa fa-angle-down" data-toggle="collapse"
                    href="#collapseExample1" role="button" aria-expanded="false"
                    aria-controls="collapseExample1"></i></span>
                </div>
                <div class="block_content layered-category collapse" id="collapseExample1">
                  <div class="layered-content card card-body"  style="border:0;padding:0">
                    <ul class="menuList-links">
                      <li class=""><a href="home.html" title="Trang chủ"><span>Trang chủ</span></a></li>
                      <li class=" active "><a href="product.html" title="Bộ sưu tập"><span>Bộ sưu tập</span></a>
                      </li>
                      <li class="has-submenu level0 ">
                        <a title="Sản phẩm" >Sản phẩm<span class="icon-plus-submenu" data-toggle="collapse"
                            href="#collapseExample" role="button" aria-expanded="false"
                            aria-controls="collapseExample"></span></a>
                        <div class="collapse" id="collapseExample">
                          <div class="card card-body" style="border:0;padding-top:0;">
                            <ul class="menu-product">
                              <li><a href="detailproduct.html" title="Sản phẩm - Style 1">Sản phẩm - Style 1</a></li>
                              <li><a href="detailproduct.html" title="Sản phẩm - Style 2">Sản phẩm - Style 2</a></li>
                              <li><a href="detailproduct.html" title="Sản phẩm - Style 3">Sản phẩm - Style 3</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class=""><a href="introduce.html" title="Giới thiệu"><span>Giới thiệu</span></a></li>
                      <li class=""><a href="blog.html" title="Blog"><span>Blog</span></a></li>
                      <li class=""><a href="contact.html" title="Liên hệ"><span>Liên hệ</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="layered">
                <p class="title_block d-block d-sm-none d-none d-sm-block d-md-none" data-toggle="collapse"
                href="#collapseExample2" role="button" aria-expanded="false"
                aria-controls="collapseExample2">
                  Bộ lọc sản phẩm
                  <span><i class="fa fa-angle-down" data-toggle="collapse"
                    href="#collapseExample2" role="button" aria-expanded="false"
                    aria-controls="collapseExample2"></i></span>
                </p>
                <div class="block_content collapse" id="collapseExample2">
                  <div class="group-filter card card-body" style="border:0;padding:0" aria-expanded="true">
                    <div class="layered_subtitle dropdown-filter"><span>Thương hiệu</span><span
                        class="icon-control"><i class="fa fa-minus"></i></span></div>
                    <div class="layered-content bl-filter filter-brand">
                      <ul class="check-box-list">
                        <li>
                          <input type="checkbox" id="data-brand-p1" value="Khác">
                          <label for="data-brand-p1">Khác</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="group-filter" aria-expanded="true">
                    <div class="layered_subtitle dropdown-filter"><span>Giá sản phẩm</span><span
                        class="icon-control"><i class="fa fa-minus"></i></span></div>
                    <div class="layered-content bl-filter filter-price">
                      <ul class="check-box-list">
                        <li>
                          <input type="checkbox" id="p1">
                          <label for="p1">
                            <span>Dưới</span> 500,000₫
                          </label>
                        </li>
                        <li>
                          <input type="checkbox" id="p2">
                          <label for="p2">
                            500,000₫ - 1,000,000₫
                          </label>
                        </li>
                        <li>
                          <input type="checkbox" id="p3">
                          <label for="p3">
                            1,000,000₫ - 1,500,000₫
                          </label>
                        </li>
                        <li>
                          <input type="checkbox" id="p4">
                          <label for="p4">
                            2,000,000₫ - 5,000,000₫
                          </label>
                        </li>
                        <li>
                          <input type="checkbox" id="p5">
                          <label for="p5">
                            <span>Trên</span> 5,000,000₫
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="group-filter" aria-expanded="true">
                    <div class="layered_subtitle dropdown-filter"><span>Màu sắc</span><span class="icon-control"><i
                          class="fa fa-minus"></i></span></div>
                    <div class="layered-content filter-color s-filter">
                      <ul class="check-box-list">
                        <li>
                          <input type="checkbox" id="data-color-p1">
                          <label for="data-color-p1" style="background-color: #fb4727"></label>
                        </li>
                        <li>
                          <input type="checkbox" id="data-color-p2">
                          <label for="data-color-p2" style="background-color: #fdfaef"></label>
                        </li>
                        <li>
                          <input type="checkbox" id="data-color-p3">
                          <label for="data-color-p3" style="background-color: #3e3473"></label>
                        </li>
                        <li>
                          <input type="checkbox" id="data-color-p4">
                          <label for="data-color-p4" style="background-color: #ffffff"></label>
                        </li>
                        <li>
                          <input type="checkbox" id="data-color-p5">
                          <label for="data-color-p5" style="background-color: #75e2fb"></label>
                        </li>
                        <li>
                          <input type="checkbox" id="data-color-p6">
                          <label for="data-color-p6" style="background-color: #cecec8"></label>
                        </li>
                        <li>
                          <input type="checkbox" id="data-color-p7">
                          <label for="data-color-p7" style="background-color: #6daef4"></label>
                        </li>
                        <li>
                          <input type="checkbox" id="data-color-p8">
                          <label for="data-color-p8" style="background-color: #000000"></label>
                        </li>
                        <li>
                          <input type="checkbox" id="data-color-p9">
                          <label for="data-color-p9" style="background-color: #e2262a"></label>
                        </li>
                        <li>
                          <input type="checkbox" id="data-color-p10">
                          <label for="data-color-p10" style="background-color: #ee8aa1"></label>
                        </li>
                        <li>
                          <input type="checkbox" id="data-color-p11">
                          <label for="data-color-p11" style="background-color: #4a5250"></label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="group-filter" aria-expanded="true">
                    <div class="layered_subtitle dropdown-filter"><span>Kích thước</span><span class="icon-control"><i
                          class="fa fa-minus"></i></span></div>
                    <div class="layered-content filter-size s-filter">

                      <ul class="check-box-list clearfix">

                        <li>
                          <input type="checkbox" id="data-size-p1">
                          <label for="data-size-p1">35</label>
                        </li>

                        <li>
                          <input type="checkbox" id="data-size-p2">
                          <label for="data-size-p2">36</label>
                        </li>

                        <li>
                          <input type="checkbox" id="data-size-p3">
                          <label for="data-size-p3">37</label>
                        </li>

                        <li>
                          <input type="checkbox" id="data-size-p4">
                          <label for="data-size-p4">38</label>
                        </li>

                        <li>
                          <input type="checkbox" id="data-size-p5">
                          <label for="data-size-p5">39</label>
                        </li>

                        <li>
                          <input type="checkbox" id="data-size-p6">
                          <label for="data-size-p6">40</label>
                        </li>

                      </ul>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9 col-sm-12 col-xs-12">
      <div class="wrap-collection-title row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <h1 class="title" >
            Tất cả sản phẩm
          </h1>
          <div class="alert-no-filter"></div>
        </div>
        <div class="col-md-4 d-sm-none d-md-block d-none d-sm-block" style="float: left">
          <div class="option browse-tags">
            <span class="custom-dropdown custom-dropdown--grey">
              <select class="sort-by custom-dropdown__select">
                <option value="price-ascending">Giá: Tăng dần</option>
                <option value="price-descending">Giá: Giảm dần
                </option>
                <option value="title-ascending">Tên: A-Z</option>
                <option value="title-descending">Tên: Z-A</option>
                <option value="created-ascending">Cũ nhất
                </option>
                <option value="created-descending">Mới nhất
                </option>
                <option value="best-selling">Bán chạy nhất
                </option>
                <option value="quantity-descending">Tồn kho: Giảm dần</option>
              </select>
            </span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/1.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/1-1.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
              
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                        font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/2.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/2-2.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                        font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/3.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/3-3.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
            
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                        font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/4.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/4-4.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                      font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/5.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/5-5.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                    font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/6.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/6-6.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
            
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                  font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/7.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/7-7.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
            
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                  font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/8.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/8-8.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/201493_1_017364c87c3e4802a8cda5259e3d5a95_grande.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/shoes fade 2.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/800502_01_e92c3b2bb8764b52a791846d84a3a360_grande.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/shoes fade 5.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/801432_01_b16d089f8bda434bacfe4620e8480be1_grande.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/shoes fade 4.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                              font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/801740_1_e4adfa6d09b7468a8c9fb21bf8e02bd4_medium (1).jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/shoes fade 1.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                              font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/802501_01_eccb69b5bcdf4ef5b209557ec6547774_grande.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/shoes fade 6.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                              font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/805266_02_b8b2cdd1782246febf8879a44a7e5021_grande.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/shoes fade 3.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                              font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/805338_01_eb7365e97d3f471d872159918a8526a9_grande.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/shoes fade 8.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                              font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/806859_01_1ad7dd36e7b5403286b95a253e00718d_grande.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/shoes fade 7.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                              font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/9.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/9-9.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
            
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                              font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/10.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/10-10.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
            
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                              font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/11.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/11-11.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
             
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                              font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="#" title="Adidas EQT Cushion ADV" class="img-resize">
                <img
                  src="images/shoes/12.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
                <img
                  src="images/shoes/12-12.jpg"
                  alt="Adidas EQT Cushion ADV" class="lazyloaded">
              </a>
              <div class="button-add">
                <button type=submit title="Mua ngay" class="action">Mua ngay</button>
                <button type="submit" title="Thêm vào giỏ" class="action add-to-cart">Thêm vào giỏ</button>
              </div>
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                              font-size: 14px;text-decoration: none;" href="#"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  Adidas EQT Cushion ADV "North America"
                </a>
              </div>
              <div class="pro-price">
                <p class="">7,000,000₫</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sortpagibar pagi clearfix text-center">
        <div id="pagination" class="clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="page-node current">1</span>
            <a class="page-node" href="">2</a>
            <a class="next" href="">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 31 10" style="enable-background:new 0 0 31 10; width: 31px; height: 10px;"
                xml:space="preserve">
                <polygon points="31,5 25,0 25,4 0,4 0,6 25,6 25,10 "></polygon>
              </svg> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--gallery-->
<section class="section section-gallery">
  <div class="">
    <div class="hot_sp" style="padding-top: 70px;padding-bottom: 50px;">
      <h2 style="text-align:center;padding-top: 10px">
        <a style="font-size: 28px;color: black;text-decoration: none" href="">Khách hàng và Runner Inn</a>
      </h2>
    </div>
    <div class="list-gallery clearfix">
      <ul class="shoes-gp">
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="images/shoes/gallery_item_1.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="images/shoes/gallery_item_2.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="images/shoes/gallery_item_3.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="images/shoes/gallery_item_4.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="images/shoes/gallery_item_5.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="images/shoes/gallery_item_6.jpg" alt="">
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

@endsection
@section('header')
<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="plugins/animate/animate.min.css">

<link rel="stylesheet" href="plugins/fontawesome/all.css">

<link href="plugins/webfonts/font.css"
  rel="stylesheet">
<link rel="stylesheet" href="plugins/owl.carousel/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="plugins/owl.carousel/owl.theme.default.min.css" type="text/css">

<!-- UIkit CSS -->
<link rel="stylesheet" href="plugins/uikit/uikit.min.css" />
@endsection
