<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">-->
        <link href="./css/index.css"  rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">

                    <form action="submit" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div id="body1" class="show" name="divcontent">
                            <dl class="content">
                                <dt>商户订单号
                                    ：</dt>
                                <dd>
                                    <input id="WIDout_trade_no" name="WIDout_trade_no" />
                                </dd>
                                <!--<hr class="one_line">-->
                                <dt>订单名称
                                    ：</dt>
                                <dd>
                                    <input id="WIDsubject" name="WIDsubject" />
                                </dd>
                                <!--<hr class="one_line">-->
                                <dt>付款金额
                                    ：</dt>
                                <dd>
                                    <input id="WIDtotal_amount" name="WIDtotal_amount" />
                                </dd>
                                <!--<hr class="one_line">-->
                                <dt>商品描述：</dt>
                                <dd>
                                    <input id="WIDbody" name="WIDbody" />
                                </dd> 
                                <!--<hr class="one_line">-->
                                <dt>支付方式
                                    ：</dt>
                                <dd>
                                    <input type="radio" style="width: 50px" name="payType" value="Alipay"/>支付宝
                                    <input type="radio" style="width: 50px" name="payType" value="WeChat" />微信
                                </dd>
                                <dd id="btn-dd">
                                    <span class="new-btn-login-sp">
                                        <button class="new-btn-login" type="submit" style="text-align:center;">付 款</button>
                                    </span>
                                    <!--<span class="note-help">如果您点击“付款”按钮，即表示您同意该次的执行操作。</span>-->
                                </dd>
                            </dl>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>


