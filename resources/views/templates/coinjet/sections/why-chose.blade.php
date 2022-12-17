<section class="flat-why-choose style2 bg-browse">
    <div class="container">
       <div class="row">
            <div class="col-md-12">
                <div class="top-title center">
                    <h2>WHY CHOOSE AAMCLICK</h2>
                    <p>AAMClICK make it easy to invest money and get profit in one click.</p>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="iconbox inline-left style7">
                    <div class="icon">
                        <img src="{{ asset($activeTemplateTrue . 'images/icon/security-1.png') }}" alt="">
                    </div>
                    <div class="iconbox-content">
                        <h4><a href="#" title="">SECURITY</a></h4>
                        <p>AAM Click Provides you complete security with the secure network. So, you can invest here without any tension of phishing. </p>
                    </div>
                </div><!-- /.iconbox style7 -->
                <div class="iconbox inline-left style7">
                    <div class="icon">
                        <img src="{{ asset($activeTemplateTrue . 'images/icon/insurance-1.png') }}" alt="">
                    </div>
                    <div class="iconbox-content">
                        <h4><a href="#" title="">INSURANCE</a></h4>
                        <p>You can get insurance on AAMCLICK and a chance to get a profit with the help of a small investment. </p>
                    </div>
                </div><!-- /.iconbox style7 -->
                <div class="iconbox inline-left style7">
                    <div class="icon">
                        <img src="{{ asset($activeTemplateTrue . 'images/icon/mobile-app-1.png') }}" alt="">
                    </div>
                    <div class="iconbox-content">
                        <h4><a href="#" title="">MOBILE APP</a></h4>
                        <p>AAMCLICK will also provice you its mobile app through which you can handle your account perfectly without any problem and check your investment and profit status. </p>
                    </div>
                </div><!-- /.iconbox style7 -->
            </div><!-- /.col-md-4 col-sm-6 -->
            <div class="col-md-4 col-sm-6">
                <div class="iconbox inline-left style7">
                    <div class="icon">
                        <img src="{{ asset($activeTemplateTrue . 'images/icon/wallet-1.png') }}" alt="">
                    </div>
                    <div class="iconbox-content">
                        <h4><a href="#" title="">PRICING PLANS</a></h4>
                        <p>AAMCLICK provides 3 users plan of investment to make money for the ease of users from which you can choose any and start to make money.  </p>
                    </div>
                </div><!-- /.iconbox style7 -->
                <div class="iconbox inline-left style7">
                    <div class="icon">
                        <img src="{{ asset($activeTemplateTrue . 'images/icon/exchange-1.png') }}" alt="">
                    </div>
                    <div class="iconbox-content">
                        <h4><a href="#" title="">EASY METHOD</a></h4>
                        <p>For the user's facility, we make sure that all the processes of this AAMCLICK earning will be easy for users. </p>
                    </div>
                </div><!-- /.iconbox style7 -->
                <div class="iconbox inline-left style7">
                    <div class="icon">
                        <img src="{{ asset($activeTemplateTrue . 'images/icon/buying.png') }}" alt="">
                    </div>
                    <div class="iconbox-content">
                        <h4><a href="#" title="">RECURRING INVESTMENT</a></h4>
                        <p>Here you get the chance of Recurring investment to make more and more profit with AAMCLICK. </p>
                    </div>
                </div><!-- /.iconbox style7 -->
            </div><!-- /.col-md-4 col-sm-6 -->
            <div class="col-md-4">
                <div class="coin-convert">
                    <div class="title">
                        <h2>USD TO</h2>
                        <p class="sub-title">PKR CALCULATOR</p>
                    </div>
                    <div class="desc">
                        
                    </div>
                    <form action="#" class="form-convert">
                        <div class="field-row">
                            <div class="one-half">
                                <input type="text" class="form-input" id="number_currency" onchange="changeCrypto()">
                            </div>
                            <div class="one-half">
                                <select name="currency-select" id="currency_select" onChange="changeCrypto()">
                                    @foreach($cryptos as $crypto)
                                        <option value="{{$crypto->usd}}">{{$crypto->symbol}} ({{$crypto->name}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="field-row">
                            <div class="one-half">
                                <span id="result_currency">0</span>
                            </div>
                            <div class="one-half">
                                <select name="currency-select" id="currency_price">
                                    <option value="11277.80" selected>PKR (Paskitani Rupees )</option>
                                </select>  
                            </div>
                        </div>
                        <div class="btn-submit">
                            <button type="button"><i class="fa fa-refresh" aria-hidden="true"></i> INVERT</button>
                        </div>
                    </form><!-- /.form-convert -->
                </div><!-- /.coin-convert -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-why-choose style2 -->
<script>

</script>