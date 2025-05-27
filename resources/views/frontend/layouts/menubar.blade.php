<header>
    <div class="header-area homepage5 header header-sticky d-none d-lg-block " id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{ route('home') }}">
                                <img id="logo-scroll" class="logo" src="{{ asset('images/logo/logo for website.png') }}" alt="" style="display: none;">
                                <img id="logo-default" class="logo" src="{{ asset('images/logo/logo-white_for_website.png') }}" alt="">
                            </a>
                        </div>
                        
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home <i class="fa-solid"></i></a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#faq">FAQ<i class="fa-solid "></i></a></li>
                                <li><a href="{{ route('frontend.contact') }}">Contact Us <i class="fa-solid "></i></a></li>
                            </ul>
                        </div>
                        <div class="cta-btn d-none d-md-block">
                            <a href="https://calendly.com/spsbd2021/30min" target="_blank" class="header-btn8 login">মিটিং এর জন্য<i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header mobile-header5 d-block d-lg-none header-area header-sticky">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/logo/fav-logo.png') }}" alt=""></a>
                </div>
                <div class="mobile-nav-icon dots-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar mobile-sidebar5">
    <div class="logosicon-area">
        <div class="logos">
            <img src="{{ asset('images/logo/logo for website.png') }}" alt="">
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav">
        <ul class="mobile-nav-list">
            <li><a href="{{ route('home') }}">Home </a></li>
            <li><a href="features.html">Features</a></li>
            <li><a href="https://calendly.com/spsbd2021/30min">Schedule A Meeting</a></li>
        </ul>

        <div class="allmobilesection">
            <div class="single-footer">
                <h3>Contact Info</h3>
                <div class="footer4-contact-info">
                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="tel:+8801716477600">+8801716477600</a>
                        </div>
                    </div>

                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="mailto:sps@saralrekha.com.bd">sps@saralrekha.com.bd</a>
                        </div>
                    </div>

                    <div class="single-footer">
                        <h3>Our Location</h3>

                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-text">
                                <a href="mailto:sps@saralrekha.com.bd">120, selina parvin sarak, century arched, room 31, Moghbazar, Dhaka, Dhaka 1217</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const logoDefault = document.getElementById('logo-default');
        const logoScroll = document.getElementById('logo-scroll');

        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                logoDefault.style.display = 'none';
                logoScroll.style.display = 'inline';
            } else {
                logoDefault.style.display = 'inline';
                logoScroll.style.display = 'none';
            }
        });
    });
</script>

