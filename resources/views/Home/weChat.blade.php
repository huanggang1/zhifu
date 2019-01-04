<title>微信充值</title>
<style>
    body{ background:#f5f5f5;}
    .wx_img{ margin-top:30px;}
    .wx_img img{ border:1px solid #ddd;}
</style>   
</head>
<body>

    <div align="center" >
        <!--        <h1 style="color:red;">微信扫码支付</h1>-->

        <img src="{{asset('Wxpay/WePayLogo.png')}}" width="180px;" style="display:block; margin:0px auto; margin-top:100px;">
        <div class="wx_img"><img alt="微信扫码支付" src="{{url('')}}/Wxpay/example/qrcode.php?data={{$url}}"></div>
        <input type="hidden" value="{{$order_no}}" id="order_no"/>
    </div>

</body>
</html>
<script src="./Js/jquery.js" type="text/javascript"></script>
<script>
changeOrderStatues();
function changeOrderStatues() {
    var order_no = $("#order_no").val();
    var mark = $("#mark").val();
    // alert(order_no);
    $.get("getList", {order_no: order_no, mark: mark}, function (data) {
        //alert(data);
        if (data == 'SUCCESS') {
            //订单状态为1表示支付成功
            //alert("感谢您赞助，付款成功");
            location.href = "status"; //页面跳转
        }
    })
    setTimeout("changeOrderStatues()", 3000);
}
</script>



