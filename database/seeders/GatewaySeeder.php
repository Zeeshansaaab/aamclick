<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class GatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 101,
            'name' => 'Paypal',
            'alias' => 'Paypal',
            'image' => '5f6f1bd8678601601117144.jpg',
            'status' => 1,
            'gateway_parameters' => '{"paypal_email":{"title":"PayPal Email","global":true,"value":"sb-owud61543012@business.example.com"}}',
            'supported_currencies' => '{"AUD":"AUD","BRL":"BRL","CAD":"CAD","CZK":"CZK","DKK":"DKK","EUR":"EUR","HKD":"HKD","HUF":"HUF","INR":"INR","ILS":"ILS","JPY":"JPY","MYR":"MYR","MXN":"MXN","TWD":"TWD","NZD":"NZD","NOK":"NOK","PHP":"PHP","PLN":"PLN","GBP":"GBP","RUB":"RUB","SGD":"SGD","SEK":"SEK","CHF":"CHF","THB":"THB","USD":"$"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 102,
            'name' => 'Perfect Money',
            'alias' => 'Perfect Money',
            'image' => '5f6f1d2a742211601117482.jpg',
            'status' => 1,
            'gateway_parameters' => '{"passphrase":{"title":"ALTERNATE PASSPHRASE","global":true,"value":"hR26aw02Q1eEeUPSIfuwNypXX"},"wallet_id":{"title":"PM Wallet","global":false,"value":""}}',
            'supported_currencies' => '{"USD":"$","EUR":"\u20ac"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 103,
            'name' => 'Stripe Hosted',
            'alias' => 'Stripe',
            'image' => '5f6f1d4bc69e71601117515.jpg',
            'status' => 1,
            'gateway_parameters' => '{"secret_key":{"title":"Secret Key","global":true,"value":"sk_test_51I6GGiCGv1sRiQlEi5v1or9eR0HVbuzdMd2rW4n3DxC8UKfz66R4X6n4yYkzvI2LeAIuRU9H99ZpY7XCNFC9xMs500vBjZGkKG"},"publishable_key":{"title":"PUBLISHABLE KEY","global":true,"value":"pk_test_51I6GGiCGv1sRiQlEOisPKrjBqQqqcFsw8mXNaZ2H2baN6R01NulFS7dKFji1NRRxuchoUTEDdB7ujKcyKYSVc0z500eth7otOM"}}',
            'supported_currencies' => '{"USD":"USD","AUD":"AUD","BRL":"BRL","CAD":"CAD","CHF":"CHF","DKK":"DKK","EUR":"EUR","GBP":"GBP","HKD":"HKD","INR":"INR","JPY":"JPY","MXN":"MXN","MYR":"MYR","NOK":"NOK","NZD":"NZD","PLN":"PLN","SEK":"SEK","SGD":"SGD"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 104,
            'name' => 'Skrill',
            'alias' => 'Skrill',
            'image' => '5f6f1d41257181601117505.jpg',
            'status' => 1,
            'gateway_parameters' => '{"pay_to_email":{"title":"Skrill Email","global":true,"value":"merchant@skrill.com"},"secret_key":{"title":"Secret Key","global":true,"value":"---"}}',
            'supported_currencies' => '{"AED":"AED","AUD":"AUD","BGN":"BGN","BHD":"BHD","CAD":"CAD","CHF":"CHF","CZK":"CZK","DKK":"DKK","EUR":"EUR","GBP":"GBP","HKD":"HKD","HRK":"HRK","HUF":"HUF","ILS":"ILS","INR":"INR","ISK":"ISK","JOD":"JOD","JPY":"JPY","KRW":"KRW","KWD":"KWD","MAD":"MAD","MYR":"MYR","NOK":"NOK","NZD":"NZD","OMR":"OMR","PLN":"PLN","QAR":"QAR","RON":"RON","RSD":"RSD","SAR":"SAR","SEK":"SEK","SGD":"SGD","THB":"THB","TND":"TND","TRY":"TRY","TWD":"TWD","USD":"USD","ZAR":"ZAR","COP":"COP"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 105,
            'name' => 'PayTM',
            'alias' => 'PayTM',
            'image' => '5f6f1d1d3ec731601117469.jpg',
            'status' => 1,
            'gateway_parameters' => '{"MID":{"title":"Merchant ID","global":true,"value":"DIY12386817555501617"},"merchant_key":{"title":"Merchant Key","global":true,"value":"bKMfNxPPf_QdZppa"},"WEBSITE":{"title":"Paytm Website","global":true,"value":"DIYtestingweb"},"INDUSTRY_TYPE_ID":{"title":"Industry Type","global":true,"value":"Retail"},"CHANNEL_ID":{"title":"CHANNEL ID","global":true,"value":"WEB"},"transaction_url":{"title":"Transaction URL","global":true,"value":"https:\/\/pguat.paytm.com\/oltp-web\/processTransaction"},"transaction_status_url":{"title":"Transaction STATUS URL","global":true,"value":"https:\/\/pguat.paytm.com\/paytmchecksum\/paytmCallback.jsp"}}',
            'supported_currencies' => '{"AUD":"AUD","ARS":"ARS","BDT":"BDT","BRL":"BRL","BGN":"BGN","CAD":"CAD","CLP":"CLP","CNY":"CNY","COP":"COP","HRK":"HRK","CZK":"CZK","DKK":"DKK","EGP":"EGP","EUR":"EUR","GEL":"GEL","GHS":"GHS","HKD":"HKD","HUF":"HUF","INR":"INR","IDR":"IDR","ILS":"ILS","JPY":"JPY","KES":"KES","MYR":"MYR","MXN":"MXN","MAD":"MAD","NPR":"NPR","NZD":"NZD","NGN":"NGN","NOK":"NOK","PKR":"PKR","PEN":"PEN","PHP":"PHP","PLN":"PLN","RON":"RON","RUB":"RUB","SGD":"SGD","ZAR":"ZAR","KRW":"KRW","LKR":"LKR","SEK":"SEK","CHF":"CHF","THB":"THB","TRY":"TRY","UGX":"UGX","UAH":"UAH","AED":"AED","GBP":"GBP","USD":"USD","VND":"VND","XOF":"XOF"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 106,
            'name' => 'Payeer',
            'alias' => 'Payeer',
            'image' => '5f6f1bc61518b1601117126.jpg',
            'status' => 0,
            'gateway_parameters' => '{"merchant_id":{"title":"Merchant ID","global":true,"value":"866989763"},"secret_key":{"title":"Secret key","global":true,"value":"7575"}}',
            'supported_currencies' => '{"USD":"USD","EUR":"EUR","RUB":"RUB"}',
            'crypto' => 0,
            'extra' => '{"status":{"title": "Status URL","value":"ipn.Payeer"}}',
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 107,
            'name' => 'PayStack',
            'alias' => 'PayStack',
            'image' => '5f7096563dfb71601214038.jpg',
            'status' => 1,
            'gateway_parameters' => '{"public_key":{"title":"Public key","global":true,"value":"pk_test_cd330608eb47970889bca397ced55c1dd5ad3783"},"secret_key":{"title":"Secret key","global":true,"value":"sk_test_8a0b1f199362d7acc9c390bff72c4e81f74e2ac3"}}',
            'supported_currencies' => '{"USD":"USD","NGN":"NGN"}',
            'crypto' => 0,
            'extra' => '{"callback":{"title": "Callback URL","value":"ipn.Paystack"},"webhook":{"title": "Webhook URL","value":"ipn.Paystack"}}',
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 108,
            'name' => 'VoguePay',
            'alias' => 'VoguePay',
            'image' => '5f6f1d5951a111601117529.jpg',
            'status' => 1,
            'gateway_parameters' => '{"merchant_id":{"title":"MERCHANT ID","global":true,"value":"demo"}}',
            'supported_currencies' => '{"USD":"USD","GBP":"GBP","EUR":"EUR","GHS":"GHS","NGN":"NGN","ZAR":"ZAR"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 109,
            'name' => 'Flutterwave',
            'alias' => 'Flutterwave',
            'image' => '5f6f1b9e4bb961601117086.jpg',
            'status' => 1,
            'gateway_parameters' => '{"public_key":{"title":"Public Key","global":true,"value":"----------------"},"secret_key":{"title":"Secret Key","global":true,"value":"-----------------------"},"encryption_key":{"title":"Encryption Key","global":true,"value":"------------------"}}',
            'supported_currencies' => '{"BIF":"BIF","CAD":"CAD","CDF":"CDF","CVE":"CVE","EUR":"EUR","GBP":"GBP","GHS":"GHS","GMD":"GMD","GNF":"GNF","KES":"KES","LRD":"LRD","MWK":"MWK","MZN":"MZN","NGN":"NGN","RWF":"RWF","SLL":"SLL","STD":"STD","TZS":"TZS","UGX":"UGX","USD":"USD","XAF":"XAF","XOF":"XOF","ZMK":"ZMK","ZMW":"ZMW","ZWD":"ZWD"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 110,
            'name' => 'RazorPay',
            'alias' => 'RazorPay',
            'image' => '5f6f1d3672dd61601117494.jpg',
            'status' => 1,
            'gateway_parameters' => '{"key_id":{"title":"Key Id","global":true,"value":"rzp_test_kiOtejPbRZU90E"},"key_secret":{"title":"Key Secret ","global":true,"value":"osRDebzEqbsE1kbyQJ4y0re7"}}',
            'supported_currencies' => '{"INR":"INR"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 111,
            'name' => 'Stripe Storefront',
            'alias' => 'StripeJs',
            'image' => '5f7096a31ed9a1601214115.jpg',
            'status' => 1,
            'gateway_parameters' => '{"secret_key":{"title":"Secret Key","global":true,"value":"sk_test_51I6GGiCGv1sRiQlEi5v1or9eR0HVbuzdMd2rW4n3DxC8UKfz66R4X6n4yYkzvI2LeAIuRU9H99ZpY7XCNFC9xMs500vBjZGkKG"},"publishable_key":{"title":"PUBLISHABLE KEY","global":true,"value":"pk_test_51I6GGiCGv1sRiQlEOisPKrjBqQqqcFsw8mXNaZ2H2baN6R01NulFS7dKFji1NRRxuchoUTEDdB7ujKcyKYSVc0z500eth7otOM"}}',
            'supported_currencies' => '{"USD":"USD","AUD":"AUD","BRL":"BRL","CAD":"CAD","CHF":"CHF","DKK":"DKK","EUR":"EUR","GBP":"GBP","HKD":"HKD","INR":"INR","JPY":"JPY","MXN":"MXN","MYR":"MYR","NOK":"NOK","NZD":"NZD","PLN":"PLN","SEK":"SEK","SGD":"SGD"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 112,
            'name' => 'Instamojo',
            'alias' => 'Instamojo',
            'image' => '5f6f1babbdbb31601117099.jpg',
            'status' => 1,
            'gateway_parameters' => '{"api_key":{"title":"API KEY","global":true,"value":"test_2241633c3bc44a3de84a3b33969"},"auth_token":{"title":"Auth Token","global":true,"value":"test_279f083f7bebefd35217feef22d"},"salt":{"title":"Salt","global":true,"value":"19d38908eeff4f58b2ddda2c6d86ca25"}}',
            'supported_currencies' => '{"INR":"INR"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 501,
            'name' => 'Blockchain',
            'alias' => 'Blockchain',
            'image' => '5f6f1b2b20c6f1601116971.jpg',
            'status' => 1,
            'gateway_parameters' => '{"api_key":{"title":"API Key","global":true,"value":"55529946-05ca-48ff-8710-f279d86b1cc5"},"xpub_code":{"title":"XPUB CODE","global":true,"value":"xpub6CKQ3xxWyBoFAF83izZCSFUorptEU9AF8TezhtWeMU5oefjX3sFSBw62Lr9iHXPkXmDQJJiHZeTRtD9Vzt8grAYRhvbz4nEvBu3QKELVzFK"}}',
            'supported_currencies' => '{"BTC":"BTC"}',
            'crypto' => 1,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 503,
            'name' => 'CoinPayments',
            'alias' => 'CoinPayments',
            'image' => '5f6f1b6c02ecd1601117036.jpg',
            'status' => 1,
            'gateway_parameters' => '{"public_key":{"title":"Public Key","global":true,"value":"----------------------------------"},"private_key":{"title":"Private Key","global":true,"value":"----------------------------------------"},"merchant_id":{"title":"Merchant ID","global":true,"value":"--------------------------"}}',
            'supported_currencies' => '{"BTC":"Bitcoin","BTC.LN":"Bitcoin (Lightning Network)","LTC":"Litecoin","CPS":"CPS Coin","VLX":"Velas","APL":"Apollo","AYA":"Aryacoin","BAD":"Badcoin","BCD":"Bitcoin Diamond","BCH":"Bitcoin Cash","BCN":"Bytecoin","BEAM":"BEAM","BITB":"Bean Cash","BLK":"BlackCoin","BSV":"Bitcoin SV","BTAD":"Bitcoin Adult","BTG":"Bitcoin Gold","BTT":"BitTorrent","CLOAK":"CloakCoin","CLUB":"ClubCoin","CRW":"Crown","CRYP":"CrypticCoin","CRYT":"CryTrExCoin","CURE":"CureCoin","DASH":"DASH","DCR":"Decred","DEV":"DeviantCoin","DGB":"DigiByte","DOGE":"Dogecoin","EBST":"eBoost","EOS":"EOS","ETC":"Ether Classic","ETH":"Ethereum","ETN":"Electroneum","EUNO":"EUNO","EXP":"EXP","Expanse":"Expanse","FLASH":"FLASH","GAME":"GameCredits","GLC":"Goldcoin","GRS":"Groestlcoin","KMD":"Komodo","LOKI":"LOKI","LSK":"LSK","MAID":"MaidSafeCoin","MUE":"MonetaryUnit","NAV":"NAV Coin","NEO":"NEO","NMC":"Namecoin","NVST":"NVO Token","NXT":"NXT","OMNI":"OMNI","PINK":"PinkCoin","PIVX":"PIVX","POT":"PotCoin","PPC":"Peercoin","PROC":"ProCurrency","PURA":"PURA","QTUM":"QTUM","RES":"Resistance","RVN":"Ravencoin","RVR":"RevolutionVR","SBD":"Steem Dollars","SMART":"SmartCash","SOXAX":"SOXAX","STEEM":"STEEM","STRAT":"STRAT","SYS":"Syscoin","TPAY":"TokenPay","TRIGGERS":"Triggers","TRX":" TRON","UBQ":"Ubiq","UNIT":"UniversalCurrency","USDT.TRC20":"Tether USD (Omni Layer)","VTC":"Vertcoin","WAVES":"Waves","XCP":"Counterparty","XEM":"NEM","XMR":"Monero","XSN":"Stakenet","XSR":"SucreCoin","XVG":"VERGE","XZC":"ZCoin","ZEC":"ZCash","ZEN":"Horizen"}',
            'crypto' => 1,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 504,
            'name' => 'CoinPayments Fiat',
            'alias' => 'CoinpaymentsFiat',
            'image' => '5f6f1b94e9b2b1601117076.jpg',
            'status' => 1,
            'gateway_parameters' => '{"merchant_id":{"title":"Merchant ID","global":true,"value":"6515561"}}',
            'supported_currencies' => '{"USD":"USD","AUD":"AUD","BRL":"BRL","CAD":"CAD","CHF":"CHF","CLP":"CLP","CNY":"CNY","DKK":"DKK","EUR":"EUR","GBP":"GBP","HKD":"HKD","INR":"INR","ISK":"ISK","JPY":"JPY","KRW":"KRW","NZD":"NZD","PLN":"PLN","RUB":"RUB","SEK":"SEK","SGD":"SGD","THB":"THB","TWD":"TWD"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 505,
            'name' => 'Coingate',
            'alias' => 'Coingate',
            'image' => '5f6f1b5fe18ee1601117023.jpg',
            'status' => 1,
            'gateway_parameters' => '{"api_key":{"title":"API Key","global":true,"value":"6354mwVCEw5kHzRJ6thbGo-N"}}',
            'supported_currencies' => '{"USD":"USD","EUR":"EUR"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 506,
            'name' => 'Coinbase Commerce',
            'alias' => 'CoinbaseCommerce',
            'image' => '5f6f1b4c774af1601117004.jpg',
            'status' => 1,
            'gateway_parameters' => '{"api_key":{"title":"API Key","global":true,"value":"c47cd7df-d8e8-424b-a20a"},"secret":{"title":"Webhook Shared Secret","global":true,"value":"55871878-2c32-4f64-ab66"}}',
            'supported_currencies' => '{"USD":"USD","EUR":"EUR","JPY":"JPY","GBP":"GBP","AUD":"AUD","CAD":"CAD","CHF":"CHF","CNY":"CNY","SEK":"SEK","NZD":"NZD","MXN":"MXN","SGD":"SGD","HKD":"HKD","NOK":"NOK","KRW":"KRW","TRY":"TRY","RUB":"RUB","INR":"INR","BRL":"BRL","ZAR":"ZAR","AED":"AED","AFN":"AFN","ALL":"ALL","AMD":"AMD","ANG":"ANG","AOA":"AOA","ARS":"ARS","AWG":"AWG","AZN":"AZN","BAM":"BAM","BBD":"BBD","BDT":"BDT","BGN":"BGN","BHD":"BHD","BIF":"BIF","BMD":"BMD","BND":"BND","BOB":"BOB","BSD":"BSD","BTN":"BTN","BWP":"BWP","BYN":"BYN","BZD":"BZD","CDF":"CDF","CLF":"CLF","CLP":"CLP","COP":"COP","CRC":"CRC","CUC":"CUC","CUP":"CUP","CVE":"CVE","CZK":"CZK","DJF":"DJF","DKK":"DKK","DOP":"DOP","DZD":"DZD","EGP":"EGP","ERN":"ERN","ETB":"ETB","FJD":"FJD","FKP":"FKP","GEL":"GEL","GGP":"GGP","GHS":"GHS","GIP":"GIP","GMD":"GMD","GNF":"GNF","GTQ":"GTQ","GYD":"GYD","HNL":"HNL","HRK":"HRK","HTG":"HTG","HUF":"HUF","IDR":"IDR","ILS":"ILS","IMP":"IMP","IQD":"IQD","IRR":"IRR","ISK":"ISK","JEP":"JEP","JMD":"JMD","JOD":"JOD","KES":"KES","KGS":"KGS","KHR":"KHR","KMF":"KMF","KPW":"KPW","KWD":"KWD","KYD":"KYD","KZT":"KZT","LAK":"LAK","LBP":"LBP","LKR":"LKR","LRD":"LRD","LSL":"LSL","LYD":"LYD","MAD":"MAD","MDL":"MDL","MGA":"MGA","MKD":"MKD","MMK":"MMK","MNT":"MNT","MOP":"MOP","MRO":"MRO","MUR":"MUR","MVR":"MVR","MWK":"MWK","MYR":"MYR","MZN":"MZN","NAD":"NAD","NGN":"NGN","NIO":"NIO","NPR":"NPR","OMR":"OMR","PAB":"PAB","PEN":"PEN","PGK":"PGK","PHP":"PHP","PKR":"PKR","PLN":"PLN","PYG":"PYG","QAR":"QAR","RON":"RON","RSD":"RSD","RWF":"RWF","SAR":"SAR","SBD":"SBD","SCR":"SCR","SDG":"SDG","SHP":"SHP","SLL":"SLL","SOS":"SOS","SRD":"SRD","SSP":"SSP","STD":"STD","SVC":"SVC","SYP":"SYP","SZL":"SZL","THB":"THB","TJS":"TJS","TMT":"TMT","TND":"TND","TOP":"TOP","TTD":"TTD","TWD":"TWD","TZS":"TZS","UAH":"UAH","UGX":"UGX","UYU":"UYU","UZS":"UZS","VEF":"VEF","VND":"VND","VUV":"VUV","WST":"WST","XAF":"XAF","XAG":"XAG","XAU":"XAU","XCD":"XCD","XDR":"XDR","XOF":"XOF","XPD":"XPD","XPF":"XPF","XPT":"XPT","YER":"YER","ZMW":"ZMW","ZWL":"ZWL"}',
            'crypto' => 0,
            'extra' => '{"endpoint":{"title": "Webhook Endpoint","value":"ipn.CoinbaseCommerce"}}',
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 113,
            'name' => 'Paypal Express',
            'alias' => 'PaypalSdk',
            'image' => '5f6f1bec255c61601117164.jpg',
            'status' => 1,
            'gateway_parameters' => '{"clientId":{"title":"Paypal Client ID","global":true,"value":"Ae0-tixtSV7DvLwIh3Bmu7JvHrjh5EfGdXr_cEklKAVjjezRZ747BxKILiBdzlKKyp-W8W_T7CKH1Ken"},"clientSecret":{"title":"Client Secret","global":true,"value":"EOhbvHZgFNO21soQJT1L9Q00M3rK6PIEsdiTgXRBt2gtGtxwRer5JvKnVUGNU5oE63fFnjnYY7hq3HBA"}}',
            'supported_currencies' => '{"AUD":"AUD","BRL":"BRL","CAD":"CAD","CZK":"CZK","DKK":"DKK","EUR":"EUR","HKD":"HKD","HUF":"HUF","INR":"INR","ILS":"ILS","JPY":"JPY","MYR":"MYR","MXN":"MXN","TWD":"TWD","NZD":"NZD","NOK":"NOK","PHP":"PHP","PLN":"PLN","GBP":"GBP","RUB":"RUB","SGD":"SGD","SEK":"SEK","CHF":"CHF","THB":"THB","USD":"$"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 114,
            'name' => 'Stripe Checkout',
            'alias' => 'StripeV3',
            'image' => '5f709684736321601214084.jpg',
            'status' => 1,
            'gateway_parameters' => '{"secret_key":{"title":"Secret Key","global":true,"value":"sk_test_51I6GGiCGv1sRiQlEi5v1or9eR0HVbuzdMd2rW4n3DxC8UKfz66R4X6n4yYkzvI2LeAIuRU9H99ZpY7XCNFC9xMs500vBjZGkKG"},"publishable_key":{"title":"PUBLISHABLE KEY","global":true,"value":"pk_test_51I6GGiCGv1sRiQlEOisPKrjBqQqqcFsw8mXNaZ2H2baN6R01NulFS7dKFji1NRRxuchoUTEDdB7ujKcyKYSVc0z500eth7otOM"},"end_point":{"title":"End Point Secret","global":true,"value":"whsec_lUmit1gtxwKTveLnSe88xCSDdnPOt8g5"}}',
            'supported_currencies' => '{"USD":"USD","AUD":"AUD","BRL":"BRL","CAD":"CAD","CHF":"CHF","DKK":"DKK","EUR":"EUR","GBP":"GBP","HKD":"HKD","INR":"INR","JPY":"JPY","MXN":"MXN","MYR":"MYR","NOK":"NOK","NZD":"NZD","PLN":"PLN","SEK":"SEK","SGD":"SGD"}',
            'crypto' => 0,
            'extra' => '{"webhook":{"title": "Webhook Endpoint","value":"ipn.StripeV3"}}',
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 115,
            'name' => 'Mollie',
            'alias' => 'Mollie',
            'image' => '5f6f1bb765ab11601117111.jpg',
            'status' => 1,
            'gateway_parameters' => '{"mollie_email":{"title":"Mollie Email ","global":true,"value":"vi@gmail.com"},"api_key":{"title":"API KEY","global":true,"value":"test_cucfwKTWfft9s337qsVfn5CC4vNkrn"}}',
            'supported_currencies' => '{"AED":"AED","AUD":"AUD","BGN":"BGN","BRL":"BRL","CAD":"CAD","CHF":"CHF","CZK":"CZK","DKK":"DKK","EUR":"EUR","GBP":"GBP","HKD":"HKD","HRK":"HRK","HUF":"HUF","ILS":"ILS","ISK":"ISK","JPY":"JPY","MXN":"MXN","MYR":"MYR","NOK":"NOK","NZD":"NZD","PHP":"PHP","PLN":"PLN","RON":"RON","RUB":"RUB","SEK":"SEK","SGD":"SGD","THB":"THB","TWD":"TWD","USD":"USD","ZAR":"ZAR"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 116,
            'name' => 'Cashmaal',
            'alias' => 'Cashmaal',
            'image' => '60d1a0b7c98311624350903.png',
            'status' => 1,
            'gateway_parameters' => '{"web_id":{"title":"Web Id","global":true,"value":"3748"},"ipn_key":{"title":"IPN Key","global":true,"value":"546254628759524554647987"}}',
            'supported_currencies' => '{"PKR":"PKR","USD":"USD"}',
            'crypto' => 0,
            'extra' => '{"webhook":{"title": "IPN URL","value":"ipn.Cashmaal"}}',
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('gateways')->insert([
            'form_id' => 0,
            'code' => 119,
            'name' => 'Mercado Pago',
            'alias' => 'MercadoPago',
            'image' => '60f2ad85a82951626516869.png',
            'status' => 1,
            'gateway_parameters' => '{"access_token":{"title":"Access Token","global":true,"value":"3Vee5S2F"}}',
            'supported_currencies' => '{"USD":"USD","CAD":"CAD","CHF":"CHF","DKK":"DKK","EUR":"EUR","GBP":"GBP","NOK":"NOK","PLN":"PLN","SEK":"SEK","AUD":"AUD","NZD":"NZD"}',
            'crypto' => 0,
            'extra' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
