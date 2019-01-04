<?php

//$config = array (
//		//签名方式,默认为RSA2(RSA2048)
//		'sign_type' => "RSA",
//
//		//支付宝公钥
//		'alipay_public_key' => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDDI6d306Q8fIfCOasdfiUeJHkrIvYISRcc73s3vF1ZT7XN8RNPwJxo8pWaJMmvyTn9N4HQ632qJBVHf8sxHi",
//
//		//商户私钥
//		//'merchant_private_key' => "",
//            'merchant_private_key' => "MIICXAIBAAKBgQCyffRONGd8Q/1kRh1cpsSRi360DXLHI7zxdPJGYe5HKDWF7u9b3zZU9erZpM90XE7gZRKsxIgOurH4uqhmVRbto3e+LiYOyNpd6As3Q427KCTIT7ajhHicZ6GWhegTUiVLqiuWLsauQcbI6DO4GEZrlvAdzus0WcJiasdfW02rxSQIDAQABAoGAXBJYyVaC4zj3Jph8YOStlR5N13bwdATdW/glWWT+0rnNEi90TQHRNvY7lNVNJgrPrTS182TVgjOPxmwSnebakhIuGIdPq99GLE4LGd5lKWTzkd84BMvhatfNsCCzcEVFqKg3tZd4t3fQ93FrILsnnZpLhiW53jIrStCkR3rx9OECQQDWMSHyc91hEVMQqVNasbGEicKWxhoDqjdm2lHkBx4mrB9JEZFDs6MxWdajf2/Qw+tgtpN3YBcCDw/HnGHhQtStAkEA1VTyjOdAwWode8X4fu0IPq9+E19mcVOAJjLBH46mropwgOdj3raqT/ThaKeaydjabsTAiY2J18HiTiyH+1bGjQJBAKgRJXH5OFxSG7uXIbCofYJiFi34g7EcfxxVcqxaaW4u4N2Uy0c0TXkL5T+lXzeQg8D/gfbJj0QuTVNzgdofdoECQBHYOznCFk6Xe8PguXqUhT4JG/iu4DjWjT+kuzbSjerHtcVylY4JpZFuoHRKoM4Fj6/4UUqwRjmABFgZrX4+sfkCQCNI8RCZ6yprh5kEOePo3uazAlNENP8dKkhgqChawdK77NzlJ727Nt23STHFx6NkhzyruJGQ5Vx1Lkl0wKuKbXM=",
//
//		//编码格式
//		'charset' => "UTF-8",
//
//		//支付宝网关
//		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",
//
//		//应用ID
//		'app_id' => "2016061501500000",
//
//		//异步通知地址,只有扫码支付预下单可用
//		'notify_url' => "http://www.baidu.com",
//
//		//最大查询重试次数
//		'MaxQueryRetry' => "10",
//
//		//查询间隔
//		'QueryDuration' => "3"
//);
$config = array(
    //签名方式,默认为RSA2(RSA2048)
    'sign_type' => "RSA2",
    'merchant_private_key' => "MIIEpAIBAAKCAQEA7Iw56saP0kwvGPUAb1SLh/ekF7dLrgjwU6uiCEwBA781PLqoMd+wUy/jZIhYH0770fYK04VWdw2GimDdezN1B7At4ZInDfYsuAbQm9m7iawzcEUv2/UNmGWbSQELg5guHuoemFoZjFqaBe9RsrtrxGMlv6VSaZ3AR5xQuBqkiQWAW4BGhaf940x4mkBKRlTPHAPk4H40O5Seo/MNy/16cEUbpoYpa/vcifUFjBXtLKE/AAvEjT/sAxjm1wv2up08ng+dTELgkn10Ly+yHPVCTd/ZzNdyy8xJ5I+ZQYDTu4TjLx/kRCvge0YSfA/Qjj4EO40SPJe75peY2ZI0b94dewIDAQABAoIBAGHqSa8dMjtivbwe7mcnH/rQT2RhwznvCUwZJ6E3lNPwOiFBQo4igeJtWDstFQ0grKxkpGaaMwhk2OQ+5G8zBaaBDvzoerIUzL4AVCmvHyoF1eULPpxV+6KxrG2zuQhn3e9+CdwWr6yhdFAwmCjb2+gXAnEqBcsiOY1q7x7GKIVurdDZPnHj1Si27qIvojFI4mHkphR8U3pGXtKT4RpmbaL24XxU2aO/pZgjO0AwgdyH6fK5WMLgwobt00Jsfz/9uk3zF4PErL01eknuFmYN17pQF7gkYLmliesbM7zPQIZQVkrypOgT2/Rb18LFKn29KLybThHGcvXjDKTGJC/R0gECgYEA9wuRAdPgsPN9IpR6/BbflsAj6vPLCmmMlOgyB7eoSkOQkLliIoBGlDu0zuElkqJru8bQxq3vORtw3AA9KJS3w+cHZ6yCiuRBbqTNxecpidCxhGeblJTP9GwZ5n+dYdyyoyDMVjCrJDJ2iMoI6OlMOEQyVvzzrvaYX7iMahNIdVsCgYEA9R8/+mD6fpGhXcmxorrdvqLsgi40thn1rsEWrLX4QTkefoPXpXPPxKVwRW6oxBu+n7xBwNVV7rL1U9biuEm1gt84LAwLrEEf8VBS+MdO3+U2nmVYn3957BMsjjfbd7TWqTAjis3j5YCG8wXHXWMxTTH5nvdGZLIvqpkbcrt/0mECgYEAiNHXFXQK1PWFMEmbc1IXsp3nRpCOus2KFk4ipzOH+NlCj2ScfQ8eB6qpkIoRDQz3LaAGsIJUIwSXlMBtHrR+sfiZmUlpYxLXSjfr3tcPokv6hKH9AGUKZwwXrBixSSm5pa7cfD+oCPwJuehq1tOeausaFiMxsozQBvNmkLjtQFECgYEAnPJXWo9BlEzWj2CXFmSjmm5jFK9VHMveXPhQ9mDFBa328nakWtGeVIDBNBO4h2hkU46MY1W1YdK/9eB+5hR73cHjC4Di8HX6Z95QYe3reLwgjqbBac6LWDamrqDhKvJlB4tFFpjhtI7o2S34Crl6Vb0L4VbegZb9ojPKOVoIa8ECgYAdfXNb6RRmgFCG5d7rQERhemw3RSu/WUChpU4gUy/Tbp/921MGyTJfbHO53lP3tQ8opQmEmFth7BLRdnzkCVT9pR2nGjwI31umhGuLGl/DGEC09AEkSCd/m4gpExdVdFY6jyJfvRwtSr4Yvell/OL15aHNM6C11aHgiqFPjgPBpw==",
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz7QlNkg7FL/qN9t2zXmfsgfA+PXZwS6CRwIyFGRtJvJ7aLjgn8ZMIn8mIgNkgs2RXC4us58eiTkaqGnnX1brjNNu95s1yIlzfmbPQ7hQVH0MHvQz5jhGcEc2vjcdXmAso+Yr67N8i1dtDXocYxL/RhzWSGUY4QQYpvL0WQnkRW0lyFCx8iRdZgQ/irW7G0EX1pClDARYlbLTUqVBGyEYPhGmhqBbBCUYF3crRC5VRYTzcLr95FGU1YDJGYQVMUuQkOgy6HHCINkFgseh2cRXsRunbPexsm7vRBa5AvrHpcZmddX6DCFEcG99ydKv9p6LkjjXHnrB2Mbh5XQdP9VTLwIDAQAB",
    //支付宝公钥
    // "alipay_public_key" => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmxBzTqvEUrZpwnMH+RqvAvdpGJbTffd5vPr8/Jx8Y9hHAg8Pg+i4YacNZ6NqClfJWwerQS0Z8uTH+vDLCjXdQQqznMsXpeNLzItQz8o7N0hlV1peGFyASz1l8Qri58z2/Xp96yPkaf5h99UCkPwtCGhhZ1zH2/tTUOHOtGWWLwM0FzM/d0GoOvms2K3mtXdeLVSqiP+tKin/piEvNTDYOU5OMlXc9HRE1vnnjLAvggTf87UUtbNy4U22Dhu8w+N15VskL5SSFywSoScztJBC8L1AdSLRL9tlT63NQkW1h4pAWo6UL5K3nrIeY3vFPdimzPkWznu0X8jfu6hDoXTUTQIDAQAB",
    //  "merchant_private_key" => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAu7mHEB5AV4SC5Dm9R5r/ ySVkAtZ+i0L+r9cnQ1J08xrYVriUKGycigQpMcau37bGV/0In+3gxrSCpsULOxJv 60w7IIM6S7Ub2X3sGim3X9IC4jHmFmbNz+/NLIv2mnNbtsg+ADRqUW8Zk/c8ql9l 0me9UWzrPdOsY2wZID55teh5bKPGefPm/pXrKoNDCK9jI8c/JJyFH4annfD4qoVA BdM7rVnDwYiwnp0QD29qYUKj2PR/q01Bskn4a9Co6aP/DJE5pYFkQ7JrgO7w5pio qGvPVHGGJtiIIr49UTKkAOm/YXa18d8kw2weBhGSa3zsP8a/RKW840n8i+kSx2RW DQIDAQAB",
    //编码格式
    'charset' => "UTF-8",
    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",
    //应用ID
    'app_id' => "2016091600522685",
    //异步通知地址,只有扫码支付预下单可用
    'notify_url' => "http://www.baidu.com",
    //最大查询重试次数
    'MaxQueryRetry' => "10",
    //查询间隔
    'QueryDuration' => "10"
);
//$config = array(
//    //应用ID,您的APPID。
//    'app_id' => "2016091600522685",
//    //商户私钥，您的原始格式RSA私钥
//    'merchant_private_key' => "MIIEpAIBAAKCAQEA7Iw56saP0kwvGPUAb1SLh/ekF7dLrgjwU6uiCEwBA781PLqoMd+wUy/jZIhYH0770fYK04VWdw2GimDdezN1B7At4ZInDfYsuAbQm9m7iawzcEUv2/UNmGWbSQELg5guHuoemFoZjFqaBe9RsrtrxGMlv6VSaZ3AR5xQuBqkiQWAW4BGhaf940x4mkBKRlTPHAPk4H40O5Seo/MNy/16cEUbpoYpa/vcifUFjBXtLKE/AAvEjT/sAxjm1wv2up08ng+dTELgkn10Ly+yHPVCTd/ZzNdyy8xJ5I+ZQYDTu4TjLx/kRCvge0YSfA/Qjj4EO40SPJe75peY2ZI0b94dewIDAQABAoIBAGHqSa8dMjtivbwe7mcnH/rQT2RhwznvCUwZJ6E3lNPwOiFBQo4igeJtWDstFQ0grKxkpGaaMwhk2OQ+5G8zBaaBDvzoerIUzL4AVCmvHyoF1eULPpxV+6KxrG2zuQhn3e9+CdwWr6yhdFAwmCjb2+gXAnEqBcsiOY1q7x7GKIVurdDZPnHj1Si27qIvojFI4mHkphR8U3pGXtKT4RpmbaL24XxU2aO/pZgjO0AwgdyH6fK5WMLgwobt00Jsfz/9uk3zF4PErL01eknuFmYN17pQF7gkYLmliesbM7zPQIZQVkrypOgT2/Rb18LFKn29KLybThHGcvXjDKTGJC/R0gECgYEA9wuRAdPgsPN9IpR6/BbflsAj6vPLCmmMlOgyB7eoSkOQkLliIoBGlDu0zuElkqJru8bQxq3vORtw3AA9KJS3w+cHZ6yCiuRBbqTNxecpidCxhGeblJTP9GwZ5n+dYdyyoyDMVjCrJDJ2iMoI6OlMOEQyVvzzrvaYX7iMahNIdVsCgYEA9R8/+mD6fpGhXcmxorrdvqLsgi40thn1rsEWrLX4QTkefoPXpXPPxKVwRW6oxBu+n7xBwNVV7rL1U9biuEm1gt84LAwLrEEf8VBS+MdO3+U2nmVYn3957BMsjjfbd7TWqTAjis3j5YCG8wXHXWMxTTH5nvdGZLIvqpkbcrt/0mECgYEAiNHXFXQK1PWFMEmbc1IXsp3nRpCOus2KFk4ipzOH+NlCj2ScfQ8eB6qpkIoRDQz3LaAGsIJUIwSXlMBtHrR+sfiZmUlpYxLXSjfr3tcPokv6hKH9AGUKZwwXrBixSSm5pa7cfD+oCPwJuehq1tOeausaFiMxsozQBvNmkLjtQFECgYEAnPJXWo9BlEzWj2CXFmSjmm5jFK9VHMveXPhQ9mDFBa328nakWtGeVIDBNBO4h2hkU46MY1W1YdK/9eB+5hR73cHjC4Di8HX6Z95QYe3reLwgjqbBac6LWDamrqDhKvJlB4tFFpjhtI7o2S34Crl6Vb0L4VbegZb9ojPKOVoIa8ECgYAdfXNb6RRmgFCG5d7rQERhemw3RSu/WUChpU4gUy/Tbp/921MGyTJfbHO53lP3tQ8opQmEmFth7BLRdnzkCVT9pR2nGjwI31umhGuLGl/DGEC09AEkSCd/m4gpExdVdFY6jyJfvRwtSr4Yvell/OL15aHNM6C11aHgiqFPjgPBpw==",
//    //异步通知地址
//    'notify_url' => "http://alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",
//    //同步跳转
//    'return_url' => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",
//    //编码格式
//    'charset' => "UTF-8",
//    //签名方式
//    'sign_type' => "RSA2",
//    //支付宝网关
//    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",
//    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
//    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz7QlNkg7FL/qN9t2zXmfsgfA+PXZwS6CRwIyFGRtJvJ7aLjgn8ZMIn8mIgNkgs2RXC4us58eiTkaqGnnX1brjNNu95s1yIlzfmbPQ7hQVH0MHvQz5jhGcEc2vjcdXmAso+Yr67N8i1dtDXocYxL/RhzWSGUY4QQYpvL0WQnkRW0lyFCx8iRdZgQ/irW7G0EX1pClDARYlbLTUqVBGyEYPhGmhqBbBCUYF3crRC5VRYTzcLr95FGU1YDJGYQVMUuQkOgy6HHCINkFgseh2cRXsRunbPexsm7vRBa5AvrHpcZmddX6DCFEcG99ydKv9p6LkjjXHnrB2Mbh5XQdP9VTLwIDAQAB",
//);
