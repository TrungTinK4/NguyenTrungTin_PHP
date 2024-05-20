@extends('layouts.site')
@section('title','Liên Hệ')
@section('content')
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
            <span><span style="color: #777777">Liên hệ</span></span>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section>

  <div class="container">

    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12 box-heading-contact">
        <div class="box-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1025.6909825921396!2d106.6854739108858!3d10.782465761154615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2e5ba4431f%3A0xa1e4cc4c30b79491!2zSOG6u20gMjMyIFbDtSBUaOG7iyBTw6F1LCBwaMaw4budbmcgNywgUXXhuq1uIDMsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1566967773757!5m2!1svi!2s"
            width="100%" height="700" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12  wrapbox-content-page-contact">
        <div class="header-page-contact clearfix">
          <h1>Liên hệ</h1>
        </div>
        <div class="box-info-contact">
          <ul class="list-info">
            <li>
              <p>Địa chỉ chúng tôi</p>
              <p><strong>232/6 đường Võ Thị Sáu, phường 7, quận 3, Tp. Hồ
                  Chí Minh.</strong></p>
            </li>
            <li>
              <p>Email chúng tôi</p>
              <p><strong>contact@aziworld.com</strong></p>
            </li>
            <li>
              <p>Điện thoại</p>
              <p><strong>+84 (028) 38800659</strong></p>
            </li>
            <li>
              <p>Thời gian làm việc</p>
              <p><strong>Thứ 2 đến Thứ 6 từ 8h đến 18h; Thứ 7 và Chủ nhật từ 9h30 đến 17h00 </strong></p>
            </li>
          </ul>
        </div>
        <div class="box-send-contact">
          <h2>Gửi thắc mắc cho chúng tôi</h2>
          <div id="col-left contactFormWrapper menuList-links">
            <form accept-charset="UTF-8" action="/contact" class="contact-form" method="post">
              <div class="contact-form">
                <div class="row">
                  <div class="col-sm-12 col-xs-12">
                    <div class="input-group">
                      <input required="" type="text" class="form-control"
                        placeholder="Tên của bạn">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">  
                    <div class="input-group">
                      <input required="" type="text" class="form-control"
                        placeholder="Email của bạn">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="input-group">
                      <input  required="" type="text" class="form-control"
                        placeholder="Số điện thoại của bạn">
                    </div>
                  </div>
                  <div class="col-sm-12 col-xs-12">
                    <div class="input-group">
                      <textarea placeholder="Nội dung"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <button class="button dark">Gửi cho chúng tôi</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


  </div>

</section>
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
<script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
<script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit-icons.min.js"></script>
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