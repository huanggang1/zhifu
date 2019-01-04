<?php

$signature = $_GET["signature"];
$timestamp = $_GET["timestamp"];
$nonce = $_GET["nonce"];
file_put_contents('./log.txt', $signature . PHP_EOL, FILE_APPEND);
file_put_contents('./log.txt', json_encode($_GET) . PHP_EOL, FILE_APPEND);
$token = "pamtest";
$tmpArr = array($token, $timestamp, $nonce);
sort($tmpArr, SORT_STRING);
$tmpStr = implode($tmpArr);
$tmpStr = sha1($tmpStr);
file_put_contents('./log.txt', $tmpStr . PHP_EOL, FILE_APPEND);
if ($tmpStr == $signature) {
    file_put_contents('./log.txt', "成功" . PHP_EOL, FILE_APPEND);
    echo $_GET['echostr'];
    exit;
    return true;
} else {
    file_put_contents('./log.txt', "失败" . PHP_EOL, FILE_APPEND);
    return false;
}
//die;
//include_once "wxBizMsgCrypt.php";
//
//// 第三方发送消息给公众平台
//$encodingAesKey = "4uHonLBCII8ghgNEBaH7weoAGN64F5p5wL5dekjxc1h";
//$token = "pamtest";
//$timeStamp = time();
//$nonce = "xxxxxx";
//$appId = "wxde2cd1120f6dc80e";
//$text = "<xml><ToUserName><![CDATA[oia2Tj我是中文jewbmiOUlr6X-1crbLOvLw]]></ToUserName><FromUserName><![CDATA[gh_7f083739789a]]></FromUserName><CreateTime>1407743423</CreateTime><MsgType><![CDATA[video]]></MsgType><Video><MediaId><![CDATA[eYJ1MbwPRJtOvIEabaxHs7TX2D-HV71s79GUxqdUkjm6Gs2Ed1KF3ulAOA9H1xG0]]></MediaId><Title><![CDATA[testCallBackReplyVideo]]></Title><Description><![CDATA[testCallBackReplyVideo]]></Description></Video></xml>";
//
//
//$pc = new WXBizMsgCrypt($token, $encodingAesKey, $appId);
//$encryptMsg = '';
//$errCode = $pc->encryptMsg($text, $timeStamp, $nonce, $encryptMsg);
//if ($errCode == 0) {
//    print("加密后: " . $encryptMsg . "\n");
//} else {
//    print($errCode . "\n");
//}
//
//$xml_tree = new DOMDocument();
//$xml_tree->loadXML($encryptMsg);
//$array_e = $xml_tree->getElementsByTagName('Encrypt');
//$array_s = $xml_tree->getElementsByTagName('MsgSignature');
//$encrypt = $array_e->item(0)->nodeValue;
//$msg_sign = $array_s->item(0)->nodeValue;
//
//$format = "<xml><ToUserName><![CDATA[toUser]]></ToUserName><Encrypt><![CDATA[%s]]></Encrypt></xml>";
//$from_xml = sprintf($format, $encrypt);
//
//// 第三方收到公众号平台发送的消息
//$msg = '';
//$errCode = $pc->decryptMsg($msg_sign, $timeStamp, $nonce, $from_xml, $msg);
//if ($errCode == 0) {
//    print("解密后: " . $msg . "\n");
//} else {
//    print($errCode . "\n");
//}
