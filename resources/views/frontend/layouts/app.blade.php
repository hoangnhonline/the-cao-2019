<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content=""/>
    <title>Index - doithenhanh</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/owl/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/jasny-bootstrap/jasny-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/datetimepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/jquery-mmenu/jquery.mmenu.all.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/bootstrap3-dialog/bootstrap-dialog.min.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <nav class="mm-menu mm-horizontal mm-offcanvas mm-right mm-front" id="nuser">
      <ul class="list-unstyled alias-menu-account mm-list mm-panel mm-opened mm-current" id="mm-3">
        <li>
          <a href="#nuser" class="infomation-user">
            <div class="hi-thumb">
              <img src="img/avatar-default.png" alt="avatar">
            </div>
            <p><span class="number-account">Khá Bảnh</span><br>0 đ</p>
          </a>
        </li>
        <li><a href="profile.html"><i class="fa fa fa-th-large"></i>Tài khoản</a></li>
        <li><a href="change-password.html"><i class="fa fa-lock"></i>Đổi mật khẩu</a></li>
        <li><a href="change-password2.html"><i class="fa fa-key"></i>Mật khẩu cấp 2</a></li>
        <li><a href="bank.html"><i class="fa fa fa-credit-card"></i>Ngân hàng</a></li>
        <li><a href="log-balance.html"><i class="fa fa-history"></i>Biến động số dư</a></li>
        <li><a href="history.html"><i class="fa fa fa-clock-o"></i>Báo cáo</a></li>
        <li><a href="api-setup.html"><i class="fa fa fa-cogs"></i>Kết nối API</a></li>
        <li><a href="logout.html"><i class="fa fa fa-sign-out"></i>Thoát</a></li>
      </ul>
    </nav>
    <nav class="mm-menu mm-horizontal mm-offcanvas mm-right mm-front" id="nlogin">
      <ul class="mm-list mm-panel mm-opened mm-current" id="mm-2">
        <li>
          <span><i class="fa fa-user"></i> Xin chào</span>
        </li>
        <li>
          <a href="login.html">Đăng nhập</a>
        </li>
        <li>
          <a href="register.html">Đăng ký tài khoản</a>
        </li>
      </ul>
    </nav>
    <nav class="mm-menu mm-horizontal mm-offcanvas" id="menu">
      <ul class="mm-list mm-panel mm-opened mm-current" id="mm-0">
        <li>
          <a href="">Trang chủ</a>
        </li>
        <li>
          <a href="charge.html">Nạp tiền</a>
        </li>
        <li>
          <a href="transfer.html">Chuyển tiền</a>
        </li>
        <li>
          <a href="payment.html">Rút tiền</a>
        </li>
        <li>
          <a class="mm-subopen" href="#mm-1"></a><a href="javascript:void(0);">Dịch vụ</a>
        </li>
        <li>
          <a href="softpin-game.html">Mua thẻ Carot</a>
        </li>
        <li>
          <a href="fee.html">Bảng giá</a>
        </li>
      </ul>
      <ul class="list-unstyled alias-menu mm-list mm-panel mm-hidden" id="mm-1">
        <li class="mm-subtitle"><a class="mm-subclose" href="#mm-0">Dịch vụ</a></li>
        <li><a href="topup.html">Nạp tiền điện thoại</a></li>
        <li><a href="softpin-mobile.html">Mua thẻ điện thoại</a></li>
        <li><a href="softpin-game.html">Mua thẻ Game</a></li>
      </ul>
    </nav>
    <div class="mm-page">
      <div class="topmenu">
        <div class="menu clearfix">
          <a href="#menu" class="m-expand"></a>
          <div class="logo">
            <a class="logo-desktop" href="index.html">
            <img style="height: 34px; padding-top: 12px;" src="img/logo-web.png">
            </a>
          </div>
          <div id="login-menu">
            <div class="login">
              <a href="#nlogin"><i class="fa fa-user"></i></a>
              <ul class="list-inline">
                <li><a href="register.html">Đăng ký</a></li>
                <li><a href="login.html">Đăng nhập</a></li>
              </ul>
            </div>
          </div>
          <div id="user-menu" style="display: none;">
            <a href="#nuser" class="account-items">
              <div class="account">
                <div class="hi-thumb">
                  <img src="img/avatar-default.png" alt="avatar">
                </div>
                <p><span class="number-account">Khá Bảnh</span><br>0 đ</p>
                <i class="fa fa-chevron-down"></i>
              </div>
            </a>
          </div>
          <div class="mdland-navigator">
            <div class="menu-navigator clearfix">
              <ul class="nav navbar-nav">
                <li>
                  <a class="mn-desktop" href="">Trang chủ</a>
                </li>
                <li>
                  <a class="mn-desktop" href="charge.html">Nạp tiền</a>
                </li>
                <li>
                  <a class="mn-desktop" href="transfer.html">Chuyển tiền</a>
                </li>
                <li>
                  <a class="mn-desktop" href="payment.html">Rút tiền</a>
                </li>
                <li>
                  <a class="mn-desktop" href="javascript:void(0);">Dịch vụ <i class="fa fa-chevron-down"></i> <i class="fa fa-chevron-right"></i></a>
                  <ul class="list-unstyled alias-menu">
                    <li><a href="topup.html">Nạp tiền điện thoại</a></li>
                    <li><a href="softpin-mobile.html">Mua thẻ điện thoại</a></li>
                    <li><a href="softpin-game.html">Mua thẻ Game</a></li>
                  </ul>
                </li>
                <li>
                  <a class="mn-desktop" href="softpin-game.html">Mua thẻ Carot</a>
                </li>
                <li>
                  <a class="mn-desktop" href="fee.html">Bảng giá</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /mdland-navigator -->
        </div>
      </div>
      <div class="main-slider">
        <div class="owl-carousel dotsData" data-nav="true" data-margin="0" data-items='1' data-autoplayTimeout="700" data-autoplay="false" data-loop="true">
          <div class="item-slide" data-dot="1">
            <img src="img/slider03-compressed.jpg" alt="slide1">
          </div>
          <div class="item-slide" data-dot="2">
            <img src="img/slider04-compressed.jpg" alt="slide1">
          </div>
        </div>
      </div>
      <div class="news clearfix">
        <div class="col-md-8">
          <div class="title-news-sale"><a href="javascript:void(0);">Chiết khấu đổi thẻ:</a></div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nhà mạng</th>
                <th class="text-right">Phí giao dịch</th>
                <th class="text-right">Trạng thái</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Viettel</td>
                <td class="text-right ">36%</td>
                <td class="text-right"><span class="title-active">Hoạt động.</span></td>
              </tr>
              <tr>
                <td>Mobifone</td>
                <td class="text-right ">36%</td>
                <td class="text-right"><span class="title-active">Hoạt động.</span></td>
              </tr>
              <tr>
                <td>Vinaphone</td>
                <td class="text-right ">36%</td>
                <td class="text-right"><span class="title-active">Hoạt động.</span></td>
              </tr>
              <tr>
                <td>Gate</td>
                <td class="text-right ">36%</td>
                <td class="text-right"><span class="title-active">Hoạt động.</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 hidden-xs">
          <div class="title-news-sale"><a href="javascript:void(0);">Tin tức - Khuyến mại <i class="fa fa-angle-right"></i></a></div>
          <ul class="list-unstyled">
            <li>
              <a class="info-news clearfix" href="javascript:void(0);">
                <div class="info-news-left">
                  <p class="day"><span>02</span></p>
                  <p class="month"><span>th.06</span></p>
                </div>
                <div class="info-news-right"><span>[03/06/2016] Mobifone khuyến mại 50% giá trị thẻ nạp</span></div>
              </a>
            </li>
            <li>
              <a class="info-news clearfix" href="javascript:void(0);">
                <div class="info-news-left">
                  <p class="day"><span>09</span></p>
                  <p class="month"><span>th.05</span></p>
                </div>
                <div class="info-news-right"><span>[15/5-15/6] TRẢI NGHIỆM DỊCH VỤ - NHẬN NGAY ƯU ĐÃI 100K</span></div>
              </a>
            </li>
            <li>
              <a class="info-news clearfix" href="javascript:void(0);">
                <div class="info-news-left">
                  <p class="day"><span>06</span></p>
                  <p class="month"><span>th.05</span></p>
                </div>
                <div class="info-news-right"><span>QUY ĐỊNH PHÍ THAM GIA CHƯƠNG TRÌNH TRẢ GÓP 0%</span></div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="footer clearfix">
        <div class="info-footer clearfix">
          <div class="footer-left clearfix">
            <ul class="list-inline">
              <li>
                <div class="hi-items">
                  <p class="title">
                    <strong>Tài khoản</strong><i class="fa fa-minus"></i>
                  </p>
                  <ul class="alias-footer">
                    <li><a href="register.html">Đăng ký</a></li>
                    <li><a href="login.html">Đăng nhập</a></li>
                    <li><a href="charge.html">Nạp tiền</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="hi-items">
                  <p class="title">
                    <strong>Dịch vụ</strong><i class="fa fa-minus"></i>
                  </p>
                  <ul class="alias-footer">
                    <li><a href="softpin-game.html">Mua thẻ carot</a></li>
                    <li><a href="softpin-mobile.html">Mua thẻ điện thoại</a></li>
                    <li><a href="softpin-game.html">Mua thẻ game</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="hi-items">
                  <p class="title">
                    <strong>Tiện ích</strong><i class="fa fa-minus"></i>
                  </p>
                  <ul class="alias-footer">
                    <li><a href="transfer.html">Chuyển tiền</a></li>
                    <li><a href="payment.html">Rút tiền</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="hi-items">
                  <p class="title"><strong>Hỗ trợ trực tuyến</strong></p>
                  <ul class="list-unstyled  alias-items">
                    <li>
                      <i class="fa fa-phone-square"></i>
                      <p class="nummber"><span>096.998.9504<span class="text-support"> (08h - 22h trừ T7&amp;CN)</span></span>
                      </p>
                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i>
                      <p><a href="javascript:void(0);" class="nummber"> doithenhanh@gmail.com </a></p>
                      <p class="text-support"><span>Liên hệ qua Email</span></p>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <!--end .footer-left -->
        </div>
      </div>
      <div class="bottom-footer clearfix">
        <div class="info-bottom-footer clearfix">
          <div class="menu-bottom-footer">
            <ul class="list-inline">
              <li><a href="index.html">Trang chủ</a></li>
              <li><a href="fee.html">Bảng giá</a></li>
              <li><a href="javascript:void(0);">Hướng dẫn</a></li>
              <li><a href="javascript:void(0);">Điều khoản sử dụng</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="sellModal" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header no-padding">
            <div class="table-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="white">×</span></button>
              <i class="fa fa-exclamation-triangle text-warning" aria-hidden="true"></i> Cài đặt bảo mật:
            </div>
          </div>
          <div class="modal-body">
            <div class="form-horizontal">
              <div class="form-group">
                <div class="col-sm-12">
                  Bạn hãy thiết lập mật khẩu cấp 2 để sử dụng cho các giao dịch thanh toán!
                </div>
              </div>
            </div>
            <div class="form-horizontal">
              <div class="form-group">
                <div class="col-sm-12 text-right">
                  <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Đồng ý
                  </button>
                  <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Hủy
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- js components -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('libs/jasny-bootstrap/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/moment/moment.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap3-dialog/bootstrap-dialog.min.js') }}"></script>
    <script src="{{ asset('libs/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('libs/jquery-mmenu/jquery.mmenu.min.all.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>