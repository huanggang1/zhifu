<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
//use App\Libraries\PayMent;
use App\Libraries\AlipayPayment;
use App\Libraries\WeChatPayment;

class IndexController extends Controller {

    /**
     * 支付页面订单提交
     * @return type
     */
    public function getIndex() {
        return view('Home.index');
    }

    /**
     * 支付成功跳转页面
     * @return string
     */
    public function getList() {
        return "支付成功";
    }

    public function getAsyn() {
        $param = Input::all();
        $contents = json_encode($param);
        $content = json_encode($_POST);
        $dir = $this->createDir('log/');
        file_put_contents("./log/returnLog.txt", date("Y-m-d H:i:s") . "  " . $contents . "\r\n", FILE_APPEND);
        file_put_contents("./log/returnLog.txt", date("Y-m-d H:i:s") . "  " . $content . "\r\n", FILE_APPEND);
        require_once './Alipay/aop/request/AlipayTradeAppPayRequest.php';
        require_once './Alipay/aop/AopClient.php';
        $aop = new \AopClient();
        $aop->alipayrsaPublicKey = config("alipay.alipay_public_key");
        $flag = $aop->rsaCheckV1($_POST, NULL, config("alipay.sign_type"));
        file_put_contents("./log/signLog.txt", date("Y-m-d H:i:s") . "  " . json_encode($flag) . "\r\n", FILE_APPEND);
        if ($flag === true) {
            if ($_POST['trade_status'] == "TRADE_SUCCESS" && $_POST['app_id'] == config("alipay.app_id")) {
                file_put_contents("./log/signLog.txt", date("Y-m-d H:i:s") . "修改数据库数据\r\n", FILE_APPEND);
            }
            echo "success";
        }
    }

    /**
     * 支付
     * @return type
     */
    public function geSubmit() {
        $param = Input::all();
        $data = [
            'order_money' => '0.01',
            'order_no' => date("YmdHis") . mt_rand(0, 999999999999999),
            'url_notify' => 'https://gang.abo27.com/asyn/getWeixin',
            'addtime' => time(),
            'title' => '标题2018050213' . mt_rand(0, 9999),
            'body' => '主体内容201805027342' . mt_rand(0, 9999),
        ];
        //支付宝支付
        if ($param['payType'] == "Alipay") {
            $obj = new AlipayPayment();
        }
        //微信支付
        if ($param['payType'] == "WeChat") {
            $obj = new WeChatPayment();
        }
        $return = $obj->payMent($data);
        return view('Home.weChat')
                        ->with('order_no', $data['order_no'])
                        ->with('url', $return);
    }

    /**
     * 多码合一二维码
     */
    public function getBarcode() {
        require_once'./phpqrcode/phpqrcode.php';
        $value = "http://gang.abo27.com/multiCode";     //二维码内容  
        $errorCorrectionLevel = 'H'; //容错级别  
        $matrixPointSize = 6;   //生成图片大小  

        $dir = $this->createDir('qrcode/');
//        var_dump($dir);die;
        //生成二维码图片
        $filename = 'qrcode/' . microtime() . '.png';
        \QRcode::png($value, $filename, $errorCorrectionLevel, $matrixPointSize, 2);

        $logo = './images/logo.jpg';  //准备好的logo图片   
        $QR = $filename;   //已经生成的原始二维码图  
        if (file_exists($logo)) {
            $QR = imagecreatefromstring(file_get_contents($QR));     //目标图象连接资源。
            $logo = imagecreatefromstring(file_get_contents($logo));    //源图象连接资源。
            $QR_width = imagesx($QR);   //二维码图片宽度   
            $QR_height = imagesy($QR);   //二维码图片高度   
            $logo_width = imagesx($logo);  //logo图片宽度   
            $logo_height = imagesy($logo);  //logo图片高度   
            $logo_qr_width = $QR_width / 5;    //组合之后logo的宽度(占二维码的1/5)
            $scale = $logo_width / $logo_qr_width;    //logo的宽度缩放比(本身宽度/组合后的宽度)
            $logo_qr_height = $logo_height / $scale;  //组合之后logo的高度
            $from_width = ($QR_width - $logo_qr_width) / 2;   //组合之后logo左上角所在坐标点
            //重新组合图片并调整大小
            /*
             * 	imagecopyresampled() 将一幅图像(源图象)中的一块正方形区域拷贝到另一个图像中
             */
            imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
        }
        //输出图片  
        imagepng($QR, './images/qrcode.png');
        imagedestroy($QR);
        imagedestroy($logo);
        unlink($filename);
        return '<img src="./images/qrcode.png" alt="使用微信扫描支付">';
    }

    /**
     * 创建目录
     * @param type $dir
     */
    private function createDir($dir, $mode = "777") {
        if (is_dir($dir) || @mkdir($dir, $mode))
            return true;
        if (!$this->createDir(dirname($dir), $mode))
            return false;
        return @mkdir($dir, $mode);
    }

    /**
     * 多码合一支付
     */
    public function getMulticode() {
        $data = [
            'order_money' => '0.01',
            'order_no' => date("YmdHis") . mt_rand(0, 999999999999999),
            'url_notify' => "http://gang.abo27.com/asyn/getAsyn",
            'addtime' => time(),
            'title' => '标题201805021342' . mt_rand(0, 99999),
            'body' => '主体内容2018057342' . mt_rand(0, 99999)
        ];
        $ua = $_SERVER['HTTP_USER_AGENT'];
        file_put_contents("./log/typeLog.txt", date("Y-m-d H:i:s") . "  " . $ua . "\r\n", FILE_APPEND);
        if (strpos($ua, 'MicroMessenger')) {
            $obj = new WeChatPayment();
            $return = $obj->payMent($data);
            header('location: ' . "https://gang.abo27.com//Wxpay/example/qrcode.php?data={$return}");
        } elseif (strpos($ua, 'AlipayClient')) {
            $obj = new AlipayPayment();
            $obj->payMentWeb($data);
        }
    }
    /**
     * 微信支付异步处理回调
     * 
     */
    public function getWeixin() {
        $dir = $this->createDir('log/');
        $simple = json_decode(json_encode(simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA'], 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        file_put_contents('./log/ac_simple.txt', json_encode($simple) . PHP_EOL, FILE_APPEND);
        if ($simple['return_code'] == "SUCCESS" && $simple['result_code'] == "SUCCESS") {
            //处理验证回调参数
            foreach ($simple as $k => $v) {
                if ($k == "sign") {
                    $sign = $v;
                    unset($simple[$k]);
                }
            }
            //验签
            $resSign = strtoupper(md5(http_build_query($simple) . "&key=8934e7d15453e97507ef794cf7b0519d"));
            if ($sign == $resSign) {
                file_put_contents('./log/ac_simple.txt', "支付成功" . $resSign . "---" . $sign . PHP_EOL, FILE_APPEND);
            }
        }
    }

}
