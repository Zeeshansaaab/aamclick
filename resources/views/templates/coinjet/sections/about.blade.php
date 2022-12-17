@php
    $aboutCaption = getContent('about.content',true);
@endphp
<section class="flat-recent-market style2" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-recent-text style3">
                    <h2 class="title">ABOUT US</h2>
                    <div class="content-text">
                        <p>AAMCLICK is an earning website where you can earn money through investment with one click. It is a helpful website to make a good amount of profit without any trouble. Moreover, we also give you a mobile application where you can check your all investment and profit statistics.
Besides, we provide a completely secure system to our users so, they do not face any kind of problem or error. Plus, in AAMCLICK, we give three plans that are Basic, Standard, and Premium, in which users get various facilities and the details of the profit on a specific investment.
.</p>
                        <a href="{{route('user.register')}}" class="read-more" title="">GET STARTED</a>
                    </div>
                </div><!-- /.wrap-recent-text style3 -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="single-image">
                    <div class="about-image">
                        <div class="about-1">
                            <img src="{{ asset($activeTemplateTrue . 'images/page/about-3.jpg') }}" alt="">
                        </div>
                        <div class="about-2">
                            <img src="{{ asset($activeTemplateTrue . 'images/page/about-3.jpg') }}" style="display:none;" alt="">
                        </div>
                    </div>
                </div><!-- /.single-image -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-recent-market style2 -->
<style>
@media only screen and (max-width: 767px)
.flat-recent-market.style2 {
    padding-bottom: 0px!important;
}

media only screen and (max-width: 991px)
.main-content, .footer, .error-404, .flat-faqs, .wrap-support, .flat-contact-form, .flat-recent-market, .flat-price-coin, .flat-why-choose, .flat-pricing, .flat-testimonial, .flat-our-work, .flat-why-choose.style1, .flat-about, .flat-recent-market.style2, .flat-why-choose.style2, .flat-testimonial.style1, .flat-work.style1, .flat-our-work.style3, .flat-address-box {
    padding: 50px 0 0 0;
}
</style>
