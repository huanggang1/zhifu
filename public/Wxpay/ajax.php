<?php
echo 1;exit;
ini_set('date.timezone', 'Asia/Shanghai');

require_once "lib/WxPay.Api.php";
require_once "example/WxPay.JsApiPay.php";

$order_no = date("YmdHis");
$body = "订单描述"; //订单描述

$order_money = 0.1; //订单金额 元
$url_notify = "http://pay.sucaihuo.com/wxpay/example/notify.php";

//①、获取用户openid
$tools = new JsApiPay();
$openId = $tools->GetOpenid();

//②、统一下单
$input = new WxPayUnifiedOrder();
$input->SetBody($body);
$input->SetAttach("test");
$input->SetOut_trade_no($order_no);
$input->SetTotal_fee($order_money * 100);
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag("test");
$input->SetNotify_url($url_notify);
$input->SetTrade_type("JSAPI");
$input->SetOpenid($openId);
$order = WxPayApi::unifiedOrder($input);
$jsApiParameters = $tools->GetJsApiParameters($order);
echo 1;
echo $jsApiParameters;
//print_r($jsApiParameters);
//③、在支持成功回调通知中处理成功之后的事宜，见 notify.php
/**
 * 注意：
 * 1、当你的回调地址不可访问的时候，回调通知会失败，可以通过查询订单来确认支付是否成功
 * 2、jsapi支付时需要填入用户openid，WxPay.JsApiPay.php中有获取openid流程 （文档可以参考微信公众平台“网页授权接口”，
 * 参考http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html）
 */