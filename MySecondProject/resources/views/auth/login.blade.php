  @extends('frontend.frontend_dashboard')
  @section('main')
  @section('title')
  User Login | Easy RealEstate
  @endsection

  <!--Page Title-->
  <section class="page-title-two bg-color-1 centred">
      <div class="pattern-layer">
          <div class="pattern-1"
              style="background-image: url({{ asset('frontend/assets/images/shape/shape-9.png') }});"></div>
          <div class="pattern-2"
              style="background-image: url({{ asset('frontend/assets/images/shape/shape-10.png') }});"></div>
      </div>
      <div class="auto-container">
          <div class="content-box clearfix">
              <h1>تسجيل الدخول</h1>
              <ul class="bread-crumb clearfix">
                  <li><a href="index.html">الرئيسية</a></li>
                  <li>تسجيل الدخول</li>
              </ul>
          </div>
      </div>
  </section>
  <!--End Page Title-->


  <!-- ragister-section -->
  <section class="ragister-section centred sec-pad">
      <div class="auto-container">
          <div class="row clearfix">
              <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                  <div class="sec-title">

                  </div>
                  <div class="tabs-box">
                      <div class="tab-btn-box">
                          <ul class="tab-btns tab-buttons centred clearfix">
                              <li class="tab-btn active-btn" data-tab="#tab-1">تسجيل الدخول</li>
                              <li class="tab-btn" data-tab="#tab-2">إنشاء حساب</li>
                          </ul>
                      </div>
                      <div class="tabs-content">
                          <div class="tab active-tab" id="tab-1">
                              <div class="inner-box">
                                  <h4>تسجيل الدخول</h4>
                                  <form action="{{ route('login') }}" method="post" class="default-form">
                                      @csrf

                                      <div class="form-group">
                                          <label>البريد الإلكتروني/الاسم/رقم الهاتف</label>
                                          <input type="text" name="login" id="login" required="">
                                      </div>

                                      <div class="form-group">
                                          <label>كلمة المرور</label>
                                          <input type="password" name="password" id="password" required="">
                                      </div>

                                      <div class="form-group message-btn">
                                          <button type="submit" class="theme-btn btn-one">تسجيل الدخول</button>
                                      </div>
                                  </form>
                                  <div class="othre-text">
                                      <p>ليس لديك حساب؟ <a href="signup.html">سجّل الآن</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="tab" id="tab-2">
                              <div class="inner-box">
                                  <h4>إنشاء حساب</h4>

                                  <form action="{{ route('register') }}" method="post" class="default-form">
                                      @csrf


                                      <div class="form-group">

                                          <label>اسم المستخدم</label>
                                          <input type="text" name="name" id="name" required="">
                                      </div>
                                      <div class="form-group">
                                          <label>البريد الإلكتروني</label>
                                          <input type="email" name="email" id="email" required="">
                                      </div>
                                      <div class="form-group">
                                          <label>كلمة المرور</label>
                                          <input type="password" name="password" id="password" required="">
                                      </div>

                                      <div class="form-group">
                                          <label>تأكيد كلمة المرور</label>
                                          <input type="password" name="password_confirmation" id="password_confirmation"
                                              required="">
                                      </div>

                                      <div class="form-group message-btn">
                                          <button type="submit" class="theme-btn btn-one">إنشاء حساب</button>
                                      </div>
                                  </form>
                                  <div class="othre-text">
                                      <p>ليس لديك حساب؟ <a href="signup.html">سجّل الآن</a></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- ragister-section end -->


  <!-- subscribe-section -->
  <section class="subscribe-section bg-color-3">
      <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
      <div class="auto-container">
          <div class="row clearfix">
              <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                  <div class="text">
                      <span>اشتراك</span>
                      <h2> . اشترك في النشرة الإخبارية لدينا للحصول على آخر الأخبار والعروض</h2>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                  <div class="form-inner">
                      <form action="contact.html" method="post" class="subscribe-form">
                          <div class="form-group">
                              <input type="email" name="email" placeholder="Enter your email" required="">
                              <button type="submit">Subscribe Now</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- subscribe-section end -->

  @endsection
