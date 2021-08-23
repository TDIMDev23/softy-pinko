<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta name="description" content="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" >
    <meta name="description" content="<?=get_option('website_desc', "SmartPanel - #1 SMM Reseller Panel - Best SMM Panel for Resellers. Also well known for TOP SMM Panel and Cheap SMM Panel for all kind of Social Media Marketing Services. SMM Panel for Facebook, Instagram, YouTube and more services!")?>">
    <meta name="keywords" content="<?=get_option('website_keywords', "smm panel, SmartPanel, smm reseller panel, smm provider panel, reseller panel, instagram panel, resellerpanel, social media reseller panel, smmpanel, panelsmm, smm, panel, socialmedia, instagram reseller panel")?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <title>موقع ترندات - افضل خدمات السوشيال ميديا</title>
    <!--
      SOFTY PINKO
      https://templatemo.com/tm-535-softy-pinko
    -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="https://tdimdev23.github.io/softy-pinko/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://tdimdev23.github.io/softy-pinko/assets/css/font-awesome.css">
    <link rel="stylesheet" href="https://tdimdev23.github.io/softy-pinko/assets/css/style.css">
    <link rel="shortcut icon" href="https://tdimdev23.github.io/softy-pinko/logo.png">
        <script type="text/javascript">
      var token = '<?=$this->security->get_csrf_hash()?>',
          PATH  = '<?=PATH?>',
          BASE  = '<?=BASE?>';
      var    deleteItem = '<?=lang("Are_you_sure_you_want_to_delete_this_item")?>';
      var    deleteItems = '<?=lang("Are_you_sure_you_want_to_delete_all_items")?>';
    </script>
    <?=htmlspecialchars_decode(get_option('embed_head_javascript', ''), ENT_QUOTES)?>
    </head>
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    <!-- ***** Header Area Start ***** -->
    <?php if($display_html){}?>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo" style="display:flex;color:#ff589e;margin:15px;">
                            <img height="50px" src="https://tdimdev23.github.io/softy-pinko/logo.png" alt="https://trindatt.com"/>
                            <h1 style="font-family:sans;font-weight:bold;">Trin<span style="color:#a759d1">datt</span></h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" dir="rtl">
                            <li><a href="#welcome" class="active">الرئيسية</a></li>
                            <li><a href="#contact-us">اتصل بنا</a></li>
                            <li><a href="<?=cn("services")?>">الخدمات</a></li>
                            <?php if (!session('uid')) { ?>
                            <li><a href="<?=cn("auth/login")?>">تسجيل دخول</a></li>
                            <li><a href="<?=cn("auth/signup")?>">انشاء حساب</a></li>
                            <?php }else{?>
                            <li><a href="<?=cn("statistics")?>">الاحصائيات</a></li>
                            <?php }?>
                        </ul>
                        <a class='menu-trigger'>
                            <span>القائمة الجانبية</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12" dir="rtl">
                        <h1>المنصة الرائدة في مجال السوشيال مع ضمان الثبات على جميع الخدمات التي نقدمها.</h1>
                        <p>نحن نقدم جميع خدمات مواقع التواصل الاجتماعي مثل تحقيق شروط يوتيوب وزيادة المتابعين والتفاعلات لصفحاتكم الخاصة والمزيد من الخدمات الاخرى.</p>
                        <a href="<?=cn('auth/signup')?>" class="main-button-slider">اكتشف المزيد 
                        <i class="fa fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">استراتيجيات حديثة</h5>
                                <p>اتمام الخدمات سريعا، لوحة تحكم مبسطة وطرق دفع امنة مثل بايبال وفودافون كاش</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">معاملة ممتازة</h5>
                                <p>لا تتردد في طرح استفساراتك علينا فنحن بانتظاركم في كل وقت</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">خدمة مشتركة</h5>
                                <p>الان يمكنك اخبار اصدقائك ومشاركتهم ما نقدم من خدمات مميزة</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container" dir="rtl">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="https://tdimdev23.github.io/softy-pinko/logo.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix" style="text-align:right;">
                    <div class="left-heading">
                        <h2 class="section-title">افضل خدمة في مجال SMM !</h2>
                    </div>
                    <div class="left-text">
                        <p>نحن نقدم أرخص خدمات SMM Reseller Panel بين منافسينا. إذا كنت تبحث عن طريقة فائقة السهولة لتقديم خدمات تسويقية إضافية لعملائك الحاليين والجدد ، فلا مزيد من البحث! يقدم موقعنا هذا وأكثر!</p>
                        <p>يمكنك إعادة بيع خدماتنا في أي موقع أو ربط موقعك من خلال API والبدء في إعادة بيع خدماتنا مباشرة ، والبدء في بناء علاقات أقوى ، ومساعدتك في تحقيق ربح كبير في نفس الوقت. نحن نقوم بالعمل حتى تتمكن من التركيز على ما تفعله بشكل أفضل! مع نموك ، ينمو ربحك دون الحاجة إلى توظيف المزيد من الأشخاص. هذا يسمح لك بتوسيع عملك دون كل النفقات والصداع المرتبطة عادة بالنمو أكبر!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>مميزاتنا</h1>
                            <p>نقدم لك اهم الميزات التي نتميز بها في مجال السوشيال ميديا</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row" dir="rtl">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/work-process-item-01.png" alt=""></i>
                            <strong>الموزعين</strong>
                            <span>يمكنك إعادة بيع خدماتنا وزيادة أرباحك بسهولة ، يعتبر الموزعون جزءًا مهمًا.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/work-process-item-01.png" alt=""></i>
                            <strong>دعم فني</strong>
                            <span>يعمل فريق الدعم على مدار الساعة لسد كل ما يحتاجة عملائنا من مساعدة.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/work-process-item-01.png" alt=""></i>
                            <strong>خدمات عالية الجودة</strong>
                            <span>احصل على أفضل الخدمات عالية الجودة ولجميع المواقع وفي وقت أقل هنا.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/work-process-item-01.png" alt=""></i>
                            <strong>تحديثات</strong>
                            <span>يتم تحديث الخدمات يوميًا من أجل تحسينها بشكل أكبر ولتوفير أفضل تجربة لك.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/work-process-item-01.png" alt=""></i>
                            <strong>ندعم ال API</strong>
                            <span>لدينا دعم API لأصحاب اللوحات حتى تتمكن من إعادة بيع خدماتنا بسهولة.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/work-process-item-01.png" alt=""></i>
                            <strong>طرق دفع امنة</strong>
                            <span>لدينا طرق شائعة مثل PayPal ويمكن تمكين العديد من الطرق الأخرى عند الطلب.</span>
                        </a>
                    </div>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials" dir="rtl">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading ">
                        <h2 class="section-title">ماذا يقول الناس عنا.</h2>
                        <p>اليك اراء بعض الاشخاص التي تعاملنا معهم ولا يزالون ممنون الشكر لنا!</p>
                        <br>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content" style="text-align:right">
                            <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/testimonial-icon.png" alt=""></i>
                            <p>بعد تجربة العديد من المواقع التي تدعي أن لديها "توصيل سريع" ، يسعدني أنني وجدت هذه الخدمة أخيرًا. لقد بدأوا فعليًا في تسليم 5 ثوانٍ بعد دفعتي!</p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">John Smith</h3>
                                <span>YouTuber</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
                
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content" style="text-align:right">
                            <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/testimonial-icon.png" alt=""></i>
                            <p>لا أستطيع التأكيد بما فيه الكفاية على مدى سعادتي بالخدمة التي تلقيتها. شكرًا لكم جميعًا ، حسابي على Instagram يزداد نشاطًا! لم تكسب لنفسك عميلاً مخلصًا فحسب ، بل اكتسبت صديقًا مدى الحياة.</p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Keith Irvine</h3>
                                <span>Instagram Model</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
                
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content" style="text-align:right">
                            <i><img src="https://tdimdev23.github.io/softy-pinko/assets/images/testimonial-icon.png" alt=""></i>
                            <p>بعد عدة تجارب اخيرا وجدت هذه الخدمة حيث قمت بشراء زيارات لمدونتي وزادت معدلات ظهور مدونتي في محركات البحث !</p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Sara-Jade Bevis</h3>
                                <span>Blogger</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Video show Start ***** -->
    <section class="mini">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info" dir="rtl">
                            <h1>فيديو استعراضي</h1>
                            <p>في هذا الفيديو نقدم لكم الخدمات التي نقدمها لعملائنا !</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <center class="row" id="videoFrame" style="display:flex;justify-content:center;align-items:center;">
                  <img onclick="watch()" style="max-height:500px;border-radius:10px;" src="https://tdimdev23.github.io/softy-pinko/assets/images/video-frame.svg">
                </center>
                <!-- ***** Mini Box End ***** -->
                
                <!-- ***** Video Box Start ***** -->
                <div id="videoBox">
                  <span onclick="watch()">×</span>
                  <iframe src="https://www.youtube.com/embed/gNFoxEc-07E"></iframe>
                  <!--iframe src="https://youtu.be/gNFoxEc-07E"></iframe-->
                </div>
                <!-- ***** Video Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Video show End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans" dir="rtl">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">عروض خاصة</h2>
                        <p>اليك افضل العروض الخاصة والاكثر مبيعا الان يمكنك طلبها من خلال فتح تذكرة !</p>
                        <br>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">لمستخدمين التيك توك</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="period">السعر</span>
                                <span class="currency">$</span>
                                <span class="price">9.99</span>
                            </div>
                            <ul class="list">
                                <li class="active">1000 متابع حقيقي</li>
                                <li class="active">1000 لايك على منشورات مختلفة</li>
                                <li class="active">100 تعليق على منشور من اختيارك</li>
                                <li class="active">ضمان ثبات لمدة طويلة</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="<?=cn("tickets")?>" class="main-button">اطلبها الان</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item active">
                        <div class="pricing-header">
                            <h3 class="pricing-title">لمستخدمين الانستجرام</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="period">السعر</span>
                                <span class="currency">$</span>
                                <span class="price">9.99</span>
                            </div>
                            <ul class="list">
                                <li class="active">1000 متابع حقيقي</li>
                                <li class="active">1000 لايك على منشورات مختلفة</li>
                                <li class="active">100 تعليق على منشور من اختيارك</li>
                                <li class="active">ضمان ثبات لمدة طويلة</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="<?=cn("tickets")?>" class="main-button">اطلبها الان</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">لمستخدمين الفيسبوك</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="period">السعر</span>
                                <span class="currency">$</span>
                                <span class="price">9.99</span>
                            </div>
                            <ul class="list">
                                <li class="active">1000 متابع حقيقي</li>
                                <li class="active">1000 لايك على منشورات مختلفة</li>
                                <li class="active">100 تعليق على منشور من اختيارك</li>
                                <li class="active">ضمان ثبات لمدة طويلة</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="<?=cn("tickets")?>" class="main-button">اطلبها الان</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>2000</strong>
                            <span>خدمة واكثر</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>673</strong>
                            <span>عملاء سعيدون</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>217</strong>
                            <span>خدمات جارية</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>27</strong>
                            <span>دولة</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->   

    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us" dir="rtl">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">تواصل معنا الان :</h2>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" style="text-align:right">
                    <h5 class="margin-bottom-30">حافظ على تواصلك :</h5>
                    <div class="contact-text">
                        <p>اوقات العمل : جميع الايام ما عدا يوم الجمعة.</p>
                        <p>البريد الالكتروني الخاص بالدعم : 
                        <a href="mailto:support@trindatt.com">support@trindatt.com</a>.
                        </p>
                        <p>رقم الهاتف/الواتساب : 0123456789.</p>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" method="post">
                          <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="الاسم لو اللقب" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="بريدك الالكتروني" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" class="form-control" id="message" placeholder="رسالتك" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12" style="text-align:right">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">ارسال الان</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->
    
        <div class="modal-infor">
      <div class="modal" id="notification">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title"><i class="fe fe-bell"></i> <?=lang("Notification")?></h4>
              <button type="button" class="close" data-dismiss="modal"></button>
            </div>

            <div class="modal-body">
              <?=get_option('notification_popup_content')?>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><?=lang("Close")?></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                  <h3 style="text-align:center;color:#fff;width:100%;">النشرة الاخبارية</h3>
                <form class="col-lg-12 col-md-12 col-sm-12 inlineBlock" action="<?php echo cn("client/subscriber"); ?>" data-redirect="<?php echo cn(); ?>"  method="POST">
                  <div class="input-group" style="width:35vw;min-width:350px">
                    <div class="input-group-prepend">
                      <button class="input-group-text btn" style="background:#8261ee;color:#fff" id="btnGroupAddon">Subscribe</button>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="user@example.com" aria-label="Enter Your Email" aria-describedby="btnGroupAddon">
                  </div>
                </form>
                <div class="col-md-12 m-t-20">
                  <div id="alert-message"></div>
                </div>
                <br><br>
                <center class="col-lg-12 col-md-12 col-sm-12 inlineBlock">
                  <hr><hr class="hrlite"><hr>
                </center>
                <br><br>
                <center class="col-lg-12 col-md-12 col-sm-12 inlineBlock">
                  <hr><a href="#welcome">
                    <svg width="40px" height="27px" viewBox="0 0 60 40">
                      <polyline points="11,30 30,10 50,30" stroke="#fff" stroke-width="5" fill="none" />
                    </svg>
                  </a><hr>
                </center>
                <br><br>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   
                              <?php
            $version = get_field(PURCHASE, ['pid' => 23595718], 'version');
            $version = 'Ver'.$version;
          ?>
           <p class="copyright">جميع &copy; الحقوق محفوظة 2021 موقع ترندات</p> <?=(get_role("admin")) ? $version : "" ?>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="https://tdimdev23.github.io/softy-pinko/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://tdimdev23.github.io/softy-pinko/assets/js/popper.js"></script>
    <script src="https://tdimdev23.github.io/softy-pinko/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="https://tdimdev23.github.io/softy-pinko/assets/js/scrollreveal.min.js"></script>
    <script src="https://tdimdev23.github.io/softy-pinko/assets/js/waypoints.min.js"></script>
    <script src="https://tdimdev23.github.io/softy-pinko/assets/js/jquery.counterup.min.js"></script>
    <script src="https://tdimdev23.github.io/softy-pinko/assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="https://tdimdev23.github.io/softy-pinko/assets/js/custom.js"></script>
    <?php
      $redirect = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
    <script>
      function watch() {
        var video=window.videoBox.style;
        var frame=window.videoFrame.style;
        if(video.display=="none"){
          video.display="block"
          frame.display="none"
        } else{
          video.display="none"
          frame.display="flex"
        }
      }
    </script>
        <?php  if(segment(1) != 'auth'){?>
    <!-- theme Js -->
    <script src="<?=BASE?>themes/pergo/assets/js/theme.js"></script>
    <?php } ?>
    <!-- Script js -->
    <script src="<?=BASE?>assets/js/process.js"></script>
    <script src="<?=BASE?>assets/js/general.js"></script>
    <?=htmlspecialchars_decode(get_option('embed_javascript', ''), ENT_QUOTES)?>
    <script>
      $(document).ready(function(){
        var is_notification_popup = "<?=get_option('enable_notification_popup', 0)?>"
        setTimeout(function(){
            if (is_notification_popup == 1) {
              $("#notification").modal('show');
            }else{
              $("#notification").modal('hide');
            }
        },500);
     });
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>