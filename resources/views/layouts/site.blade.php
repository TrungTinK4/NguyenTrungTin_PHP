<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    @yield("header")

</head>
<body>
    <header></head>

      <body>
        <div class="header">
          <a style="color: #ffffff;text-decoration: none;" href="index.html">MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH >
            300K
            - ĐỔI TRẢ TRONG 30 NGÀY - ĐẢM BẢO CHẤT LƯỢNG</a>
        </div>
      
        <!--Navbar-->
      
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
      
          <div class="container">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" class="logo-top" alt="">
            </a>
            <div class="desk-menu collapse navbar-collapse justify-content-md-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">TRANG CHỦ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.html">BỘ SƯU TẬP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="detailproduct.html">SẢN PHẨM
                      <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul class="sub_menu">
                      <li class="">
                        <a href="detailproduct.html" title="Sản phẩm - Style 1"> 
                          Sản phẩm - Style 1
                        </a>
                      </li>
                      <li class="">
                        <a href="detailproduct.html" title="Sản phẩm - Style 2"> 
                          Sản phẩm - Style 2
                        </a>
                      </li>
                      <li class="">
                        <a href="detailproduct.html" title="Sản phẩm - Style 3"> 
                          Sản phẩm - Style 3
                        </a>
                      </li>
                    </ul>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="introduce.html">GIỚI THIỆU</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.html">BLOG</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.html">LIÊN HỆ</a>
                </li>
              </ul>
            </div>
            <div id="offcanvas-flip1" uk-offcanvas="flip: true; overlay: true">
              <div class="uk-offcanvas-bar" style="background: white;
              width: 350px;">
      
                <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>
                <h3 style="font-size: 14px;
                      color: #272727;
                      text-transform: uppercase;
                      margin: 3px 0 30px 0;
                      font-weight: 500; letter-spacing: 2px;">MENU</h3>
                <div class="justify-content-md-center">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="product.html">BỘ SƯU TẬP</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Sản phẩm
      
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:0;">
                        <a class="dropdown-item" href="detailproduct.html" title="Sản phẩm - Style 1">Sản phẩm - Style 1</a>
                        <a class="dropdown-item" href="detailproduct.html" title="Sản phẩm - Style 2">Sản phẩm - Style 2</a>
                        <a class="dropdown-item" href="detailproduct.html" title="Sản phẩm - Style 3">Sản phẩm - Style 3</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="introduce.html">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="blog.html">BLOG</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">LIÊN HỆ</a>
                    </li>
                  </ul>
                </div>
      
              </div>
            </div>
            <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
              <div class="uk-offcanvas-bar" style="    background: white;
                  width: 350px;">
      
                <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>
      
                <h3 style="font-size: 14px;
                      color: #272727;
                      text-transform: uppercase;
                      margin: 3px 0 30px 0;
                      font-weight: 500; letter-spacing: 2px;">Tìm kiếm</h3>
                <div class="search-box wpo-wrapper-search">
                  <form action="search" class="searchform searchform-categoris ultimate-search">
                    <div class="wpo-search-inner" style="display:inline">
                      <input type="hidden" name="type" value="product">
                      <input required="" id="inputSearchAuto" name="q" maxlength="40" autocomplete="off"
                        class="searchinput input-search search-input" type="text" size="20"
                        placeholder="Tìm kiếm sản phẩm...">
                    </div>
                    <button type="submit" class="btn-search btn" id="search-header-btn">
                      <i style="font-weight:bold" class="fas fa-search"></i>
                    </button>
                  </form>
                  <div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
                    <div class="resultsContent"></div>
                  </div>
                </div>
      
              </div>
            </div>
            <div id="offcanvas-flip2" uk-offcanvas="flip: true; overlay: true">
              <div class="uk-offcanvas-bar" style="    background: white;
                        width: 350px;">
      
                <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>
      
                <h3 style="font-size: 14px;
                            color: #272727;
                            text-transform: uppercase;
                            margin: 3px 0 30px 0;
                            font-weight: 500; letter-spacing: 2px;">Giỏ hàng</h3>
                <div class="site-nav-container-last" style="color:#272727">
                  <div class="cart-view clearfix">
                    <table id="cart-view">
                      <tbody>
                        <tr class="item_1">
                          <td class="img"><a href="" title="Nike Air Max 90 Essential &quot;Grape&quot;"><img
                                src="images/shoes/1.jpg" alt="/products/nike-air-max-90-essential-grape"></a></td>
                          <td>
                            <a class="pro-title-view" style="color: #272727" href=""
                              title="Nike Air Max 90 Essential &quot;Grape&quot;">Nike Air Max 90 Essential "Grape"</a>
                            <span class="variant">Tím / 36</span>
                            <span class="pro-quantity-view">1</span>
                            <span class="pro-price-view">4,800,000₫</span>
                            <span class="remove_link remove-cart"><a href=""><i style="color: #272727;"
                                  class="fas fa-times"></i></a></span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <span class="line"></span>
                    <table class="table-total">
                      <tbody>
                        <tr>
                          <td class="text-left">TỔNG TIỀN:</td>
                          <td class="text-right" id="total-view-cart">4,800,000₫</td>
                        </tr>
                        <tr>
                          <td class="distance-td"><a href="" class="linktocart button dark">Xem giỏ hàng</a></td>
                          <td><a href="" class="linktocheckout button dark">Thanh toán</a></td>
                        </tr>
                      </tbody>
                    </table>
      
                    <a href="" target="_blank" class="button btn-check" style="text-decoration:none;"><span>Click nhận mã giảm
                        giá ngay !</span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="icon-ol">
              <a style="color: #272727" href="">
                <i class="fas fa-user-alt"></i>
              </a>
              <a href="#" class="" uk-toggle="target: #offcanvas-flip">
                <i class="fas fa-search" style="color: black"></i>
              </a>
             
              <a style="color: #272727" href="#" uk-toggle="target: #offcanvas-flip2">
                <i class="fas fa-shopping-cart"></i>
              </a>
              <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
          </div>
      
        </nav>
        
    <main>
        @yield('content')
    </main>
    
    <footer><footer> <footer class="main-footer">
      <div class="container">
        <div class="">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="footer-col footer-block">
                <h4 class="footer-title">
                  Giới thiệu
                </h4>
                <div class="footer-content">
                  <p>Runner Inn trang mua sắm trực tuyến của thương hiệu giày, thời trang nam, nữ, phụ kiện, giúp bạn
                    tiếp
                    cận xu hướng thời trang mới nhất.</p>
                  <div class="logo-footer">
                    <img src="images/logo-bct.png" alt="Bộ Công Thương">
                  </div>
                  <div class="social-list">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-google"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-youtube"></a>
                    <a href="#" class="fab fa-skype"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="footer-col footer-link">
                <h4 class="footer-title">
                  PHÁP LÝ &amp; CÂU HỎI
                </h4>
                <div class="footer-content toggle-footer">
                  <ul>
                    <li class="item">
                      <a href="#" title="Tìm kiếm">Tìm kiếm</a>
                    </li>
                    <li class="item">
                      <a href="#" title="Giới thiệu">Giới thiệu</a>
                    </li>
                    <li class="item">
                      <a href="#" title="Chính sách đổi trả">Chính sách đổi trả</a>
                    </li>
                    <li class="item">
                      <a href="#" title="Chính sách bảo mật">Chính sách bảo mật</a>
                    </li>
                    <li class="item">
                      <a href="#" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="footer-col footer-block">
                <h4 class="footer-title">
                  Thông tin liên hệ
                </h4>
                <div class="footer-content toggle-footer">
                  <ul>
                    <li><span>Địa chỉ:</span> 117-119 Lý Chính Thắng, Phường 7, Quận 3, TP. Hồ Chí Minh, Vietnam</li>
                    <li><span>Điện thoại:</span> +84 (028) 38800659</li>
                    <li><span>Fax:</span> +84 (028) 38800659</li>
                    <li><span>Mail:</span> contact@aziworld.com</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="footer-col footer-block">
                <h4 class="footer-title">
                  FANPAGE
                </h4>
                <div class="footer-content">
                  <div id="fb-root">
                    <div class="footer-static-content">
                      <div class="fb-page" data-href="https://www.facebook.com/AziWorld-Viet-Nam-908555669481794/"
                        data-tabs="timeline" data-width="" data-height="215" data-small-header="false"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/AziWorld-Viet-Nam-908555669481794/"
                          class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/AziWorld-Viet-Nam-908555669481794/">AziWorld Viet Nam</a>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-footer--copyright">
        <div class="container">
          <hr>
          <div class="main-footer--border" style="text-align:center;padding-bottom: 15px;">
            <p>Copyright © 2019 <a href="https://runner-inn.myharavan.com"> Runner Inn</a>. <a target="_blank"
                href="https://www.facebook.com/henrynguyen202">Powered by HuniBlue</a></p>
          </div>
        </div>
      </div>
    </footer>
  </footer>
</footer>
    @yield("footer")
</body>
</html>