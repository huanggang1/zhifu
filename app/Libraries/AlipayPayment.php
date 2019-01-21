<?php

namespace App\Libraries;

class AlipayPayment extends PayMent {

    /**
     * 电脑版支付
     * @param type $data
     */
    public function payMent($data) {
        require_once './Alipay/pagepay/service/AlipayTradeService.php';
        require_once './Alipay/pagepay/buildermodel/AlipayTradePagePayContentBuilder.php';
        //构造参数
        $payRequestBuilder = new \AlipayTradePagePayContentBuilder();
        $payRequestBuilder->setBody($data['body']);
        $payRequestBuilder->setSubject($data['title']);
        $payRequestBuilder->setTotalAmount($data['order_money']);
        $payRequestBuilder->setOutTradeNo($data['order_no']);
        $aop = new \AlipayTradeService(config('alipay'));

        /**
         * pagePay 电脑网站支付请求
         * @param $builder 业务参数，使用buildmodel中的对象生成。
         * @param $return_url 同步跳转地址，公网可以访问
         * @param $notify_url 异步通知地址，公网可以访问
         * @return $response 支付宝返回的信息
         */
        $response = $aop->pagePay($payRequestBuilder, config('alipay.return_url'), config('alipay.notify_url'));
        //输出表单
        var_dump($response);
    }

    public function payMentWeb($data) {
//        $config = config('alipay');
        header("Content-type: text/html; charset=utf-8");
        require_once './Alipay/f2fpay/model/builder/AlipayTradePrecreateContentBuilder.php';
        require_once './Alipay/f2fpay/service/AlipayTradeService.php';
        $outTradeNo = $data['order_no'];
        $subject = $data['title'];
        $totalAmount = $data['order_money'];
        $undiscountableAmount = "0.01";
        $body = $data['body'];
//        $providerId = ""; //系统商pid,作为系统商返佣数据提取的依据
        $extendParams = new \ExtendParams();
//        $extendParams->setSysServiceProviderId($providerId);
        $extendParamsArr = $extendParams->getExtendParams();
        $timeExpress = "5m";
        $goodsDetailList = array();
        $goods1 = new \GoodsDetail();
//        $goods1->setGoodsId("apple-01");
//        $goods1->setGoodsName("iphone");
//        $goods1->setPrice(3000);
//        $goods1->setQuantity(1);
        //得到商品1明细数组
        $goods1Arr = $goods1->getGoodsDetail();

        // 继续创建并添加第一条商品信息，用户购买的产品为“xx牙刷”，单价为5.05元，购买了两件
//        $goods2 = new \GoodsDetail();
//        $goods2->setGoodsId("apple-02");
//        $goods2->setGoodsName("ipad");
//        $goods2->setPrice(1000);
//        $goods2->setQuantity(1);
//        //得到商品1明细数组
//        $goods2Arr = $goods2->getGoodsDetail();
//        $goodsDetailList = array($goods1Arr, $goods2Arr);
        //第三方应用授权令牌,商户授权系统商开发模式下使用
//        $appAuthToken = ""; //根据真实值填写
        // 创建请求builder，设置请求参数
        $qrPayRequestBuilder = new \AlipayTradePrecreateContentBuilder();
        $qrPayRequestBuilder->setOutTradeNo($outTradeNo);
        $qrPayRequestBuilder->setTotalAmount($totalAmount);
        $qrPayRequestBuilder->setTimeExpress($timeExpress);
        $qrPayRequestBuilder->setSubject($subject);
        $qrPayRequestBuilder->setBody($body);
        $qrPayRequestBuilder->setUndiscountableAmount($undiscountableAmount);
        $qrPayRequestBuilder->setExtendParams($extendParamsArr);
        $qrPayRequestBuilder->setGoodsDetailList($goods1Arr);
//        $qrPayRequestBuilder->setAppAuthToken($appAuthToken);
        // 调用qrPay方法获取当面付应答
        $qrPay = new \AlipayTradeService(config('alipay'));
        $qrPayResult = $qrPay->qrPay($qrPayRequestBuilder);
        file_put_contents("./log/typeLog.txt", date("Y-m-d H:i:s") . "  " . json_encode($qrPayResult) . "\r\n", FILE_APPEND);
        $response = $qrPayResult->getResponse();
        file_put_contents("./log/typeLog.txt", date("Y-m-d H:i:s") . "  " . json_encode($response) . "\r\n", FILE_APPEND);
        header('location: ' . urldecode($response->qr_code));
        exit;
    }

    public function payMentStatus() {
        
    }
    /**
     * 支付宝退款请求
     * @param type $data
     * @return type
     */
    public function payMentRefund($data) {
        header("Content-type: text/html; charset=utf-8");
        require_once './Alipay/f2fpay/service/AlipayTradeService.php';
        require_once './Alipay/f2fpay/buildermodel/AlipayTradeRefundContentBuilder.php';
        //商户订单号和支付宝交易号不能同时为空。 trade_no、  out_trade_no如果同时存在优先取trade_no
        //商户订单号，和支付宝交易号二选一
        $out_trade_no = trim($_POST['WIDout_trade_no']);

        //支付宝交易号，和商户订单号二选一
        $trade_no = trim($_POST['WIDtrade_no']);

        //退款金额，不能大于订单总金额
        $refund_amount = trim($_POST['WIDrefund_amount']);

        //退款的原因说明
        $refund_reason = trim($_POST['WIDrefund_reason']);

        //标识一次退款请求，同一笔交易多次退款需要保证唯一，如需部分退款，则此参数必传。
        $out_request_no = trim($_POST['WIDout_request_no']);

        $RequestBuilder = new \AlipayTradeRefundContentBuilder();
        $RequestBuilder->setTradeNo($trade_no);
        $RequestBuilder->setOutTradeNo($out_trade_no);
        $RequestBuilder->setRefundAmount($refund_amount);
        $RequestBuilder->setRefundReason($refund_reason);
        $RequestBuilder->setOutRequestNo($out_request_no);

        $Response = new \AlipayTradeService($config);
        $result = $Response->Refund($RequestBuilder);
        return $result;
    }

}
