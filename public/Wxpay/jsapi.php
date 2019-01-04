<?php
session_start();
ini_set('date.timezone', 'Asia/Shanghai');
ini_set('date.timezone', 'Asia/Shanghai');

require_once "lib/WxPay.Api.php";
require_once "example/WxPay.JsApiPay.php";
//①、获取用户openid
$tools = new JsApiPay();
$openId = $tools->GetOpenid();


//require_once "lib/WxPay.Api.php";
//require_once "example/WxPay.JsApiPay.php";
//
//$order_no = date("YmdHis");
//$body = "订单描述"; //订单描述
//
//$order_money = 0.1; //订单金额 元
//$url_notify = "http://pay.sucaihuo.com/wxpay/example/notify.php";
//
////①、获取用户openid
//$tools = new JsApiPay();
//$openId = $tools->GetOpenid();
//
////②、统一下单
//$input = new WxPayUnifiedOrder();
//$input->SetBody($body);
//$input->SetAttach("test");
//$input->SetOut_trade_no($order_no);
//$input->SetTotal_fee($order_money * 100);
//$input->SetTime_start(date("YmdHis"));
//$input->SetTime_expire(date("YmdHis", time() + 600));
//$input->SetGoods_tag("test");
//$input->SetNotify_url($url_notify);
//$input->SetTrade_type("JSAPI");
//$input->SetOpenid($openId);
//$order = WxPayApi::unifiedOrder($input);
//$jsApiParameters = $tools->GetJsApiParameters($order);
//
//print_r($jsApiParameters);
$jsApiParameters  = '{"appId":"wx422126b0b6bbfcfc","nonceStr":"9jg380puyhllm7yydi7ryonbhdh4sfcj","package":"prepay_id=wx20161214165454ad24a2a08a0776832658","signType":"MD5","timeStamp":"1481705694","paySign":"35050180C3750DB6A0F608B6BBDD3E73"}';
//③、在支持成功回调通知中处理成功之后的事宜，见 notify.php
/**
 * 注意：
 * 1、当你的回调地址不可访问的时候，回调通知会失败，可以通过查询订单来确认支付是否成功
 * 2、jsapi支付时需要填入用户openid，WxPay.JsApiPay.php中有获取openid流程 （文档可以参考微信公众平台“网页授权接口”，
 * 参考http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html）
 */
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/> 
        <title>微信支付样例-支付</title>
        <style>
            .motify{display:none;position:fixed;top:35%;left:50%;width:220px;padding:0;margin:0 0 0 -110px;z-index:9999;background:rgba(0, 0, 0, 0.8);color:#fff;font-size:14px;line-height:1.5em;border-radius:6px;-webkit-box-shadow:0px 1px 2px rgba(0, 0, 0, 0.2);box-shadow:0px 1px 2px rgba(0, 0, 0, 0.2);@-webkit-animation-duration 0.15s;@-moz-animation-duration 0.15s;@-ms-animation-duration 0.15s;@-o-animation-duration 0.15s;@animation-duration 0.15s;@-webkit-animation-fill-mode both;@-moz-animation-fill-mode both;@-ms-animation-fill-mode both;@-o-animation-fill-mode both;@animation-fill-mode both;}
            .motify .motify-inner{padding:10px 10px;text-align:center;word-wrap:break-word;}
            .motify p{margin:0 0 5px;}.motify p:last-of-type{margin-bottom:0;}
            
.loader-container {
    background-color: #fff;
    border-radius: 8px;
    height: 100px;
    position: relative;
    width: 200px;
}
.loader-container .loader::before,.loader-container .loader::after {
    position: absolute;
    content: '';
    top: 0%;
    left: 50%;
    margin-left: -15.5px;
    width: 25px;
    height: 25px;
    border-radius: 100%;
}

.loader-container .loader::after {
    border-width: 3px;
    border-style: solid;
    border-color: #d9d9d9 #d9d9d9 #d9d9d9 transparent;
    -webkit-box-shadow: 0px 0px 0px 1px transparent;
    box-shadow: 0px 0px 0px 1px transparent;
    -webkit-animation: loader 0.8s linear;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation: loader 0.8s linear;
    -moz-animation: loader 0.8s linear;
    animation: loader 0.8s linear;
    -webkit-animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}
        </style>

    </head>
    <body>
        <font color="#9ACD32"><b>该笔订单支付金额为<span style="color:#f00;font-size:50px"><?php echo $order_money; ?></span>元</b></font><br/><br/>
        <div align="center">
            <button style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" >立即支付</button>
        </div>
        <div class="loader-container"><div class="loader center">处理中</div></div>
        <div class="motify" id="motify"><div class="motify-inner" id="motify_content"></div></div>

        <script type="text/javascript" src="http://www.jikeduo.com.cn/static/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                
            })
                //调用微信JS api 支付
                function jsApiCall() {
                    $.post('ajax.php?action=pay', {username: 1}, function(data) {
                        alert(data);
                    })
                    alert("c");
//                    WeixinJSBridge.invoke('getBrandWCPayRequest',<?php echo $jsApiParameters; ?>,
//                            function(res) {
//                                // WeixinJSBridge.log(res.err_msg);
////                                alert(res.err_code + "|" + res.err_desc + "|" + res.err_msg);
//                                if (res.err_msg == "get_brand_wcpay_request:cancel") {
//                                    var err_msg = "您取消了微信支付";
//                                } else if (res.err_code == 3) {
//                                    var err_msg = "您正在进行跨号支付<br/>正在为您转入扫码支付......";
//                                } else if (res.err_msg == "get_brand_wcpay_request:fail") {
//                                    var err_msg = "微信支付失败<br/>错误信息：" + res.err_desc;
//                                } else {
//                                    var err_msg = res.err_msg + "<br/>" + res.err_desc;
//                                }
//                                show_notice(err_msg);
//                            }
//                    );
                }

                function callpay() {
                    if (typeof WeixinJSBridge == "undefined") {
                        if (document.addEventListener) {
                            document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
                        } else if (document.attachEvent) {
                            document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                            document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
                        }
                    } else {
                        jsApiCall();
                    }
                }
                window.onload = function() {
                    if (typeof WeixinJSBridge == "undefined") {
                        if (document.addEventListener) {
                            document.addEventListener('WeixinJSBridgeReady', editAddress, false);
                        } else if (document.attachEvent) {
                            document.attachEvent('WeixinJSBridgeReady', editAddress);
                            document.attachEvent('onWeixinJSBridgeReady', editAddress);
                        }
                    } else {
                    }
                }
                function show_notice(content) {
                    $("#motify").show();
                    $("#motify_content").html(content);
                    setTimeout(function() {
                        $('#motify').hide();
                    }, 3000);
                }
        </script>
    </body>
</html>