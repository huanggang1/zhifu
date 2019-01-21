<?php

namespace App\Libraries;

abstract class PayMent {
    /* 支付 */

    abstract function payMent($data);
    /* 支付状态查询 */

    abstract function payMentStatus();

    /* 支付退款 */

    abstract function payMentRefund($data);

    /* web扫码支付 */

    abstract function payMentWeb($data);
}
