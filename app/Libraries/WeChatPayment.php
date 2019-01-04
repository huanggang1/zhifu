<?php

namespace App\Libraries;

class WeChatPayment extends PayMent {

    public function payMent($data) {
        require './Wxpay/lib/WxPay.Api.php';
        require './Wxpay/example/WxPay.NativePay.php';
        $order_money = $data['order_money'];
        $NativePay = new \NativePay();
        $order_no = $data['order_no'];
        $title = $data['title'];
        $url_notify = $data['url_notify'];
        $input = new \WxPayUnifiedOrder();
        $input->SetBody($title);   //商品描述
        $input->SetAttach(""); //附加数据
        $input->SetOut_trade_no($order_no);
        $input->SetTotal_fee($order_money * 100); // 总金额
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 300));
        $input->SetGoods_tag(""); //商品标记，代金券或立减优惠功能的参数，说明详见
        $input->SetNotify_url($url_notify);
        $input->SetTrade_type("NATIVE");
        $input->SetProduct_id($order_no); //商品ID 或订单编号
        $result = $NativePay->GetPayUrl($input);
        $code_url = $result["code_url"];
        return $code_url;
    }
    public function payMentWeb($data) {
        
    }

    public function payMentStatus() {
        
    }

    public function payMentRefund() {
        
    }

}
