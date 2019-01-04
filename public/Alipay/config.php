<?php

//$config = array (	
//		//应用ID,您的APPID。
//		'app_id' => "",
//
//		//商户私钥
//		'merchant_private_key' => "",
//		
//		//异步通知地址
//		'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
//		
//		//同步跳转
//		'return_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/return_url.php",
//
//		//编码格式
//		'charset' => "UTF-8",
//
//		//签名方式
//		'sign_type'=>"RSA2",
//
//		//支付宝网关
//		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",
//
//		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
//		'alipay_public_key' => "",
//);
$config = array(
    //签名方式,默认为RSA2(RSA2048)
    'sign_type' => "RSA2",
    // "alipay_public_key"=>"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz7QlNkg7FL/qN9t2zXmfsgfA+PXZwS6CRwIyFGRtJvJ7aLjgn8ZMIn8mIgNkgs2RXC4us58eiTkaqGnnX1brjNNu95s1yIlzfmbPQ7hQVH0MHvQz5jhGcEc2vjcdXmAso+Yr67N8i1dtDXocYxL/RhzWSGUY4QQYpvL0WQnkRW0lyFCx8iRdZgQ/irW7G0EX1pClDARYlbLTUqVBGyEYPhGmhqBbBCUYF3crRC5VRYTzcLr95FGU1YDJGYQVMUuQkOgy6HHCINkFgseh2cRXsRunbPexsm7vRBa5AvrHpcZmddX6DCFEcG99ydKv9p6LkjjXHnrB2Mbh5XQdP9VTLwIDAQAB",
    //'merchant_private_key' => "MIIEpAIBAAKCAQEA7Iw56saP0kwvGPUAb1SLh/ekF7dLrgjwU6uiCEwBA781PLqoMd+wUy/jZIhYH0770fYK04VWdw2GimDdezN1B7At4ZInDfYsuAbQm9m7iawzcEUv2/UNmGWbSQELg5guHuoemFoZjFqaBe9RsrtrxGMlv6VSaZ3AR5xQuBqkiQWAW4BGhaf940x4mkBKRlTPHAPk4H40O5Seo/MNy/16cEUbpoYpa/vcifUFjBXtLKE/AAvEjT/sAxjm1wv2up08ng+dTELgkn10Ly+yHPVCTd/ZzNdyy8xJ5I+ZQYDTu4TjLx/kRCvge0YSfA/Qjj4EO40SPJe75peY2ZI0b94dewIDAQABAoIBAGHqSa8dMjtivbwe7mcnH/rQT2RhwznvCUwZJ6E3lNPwOiFBQo4igeJtWDstFQ0grKxkpGaaMwhk2OQ+5G8zBaaBDvzoerIUzL4AVCmvHyoF1eULPpxV+6KxrG2zuQhn3e9+CdwWr6yhdFAwmCjb2+gXAnEqBcsiOY1q7x7GKIVurdDZPnHj1Si27qIvojFI4mHkphR8U3pGXtKT4RpmbaL24XxU2aO/pZgjO0AwgdyH6fK5WMLgwobt00Jsfz/9uk3zF4PErL01eknuFmYN17pQF7gkYLmliesbM7zPQIZQVkrypOgT2/Rb18LFKn29KLybThHGcvXjDKTGJC/R0gECgYEA9wuRAdPgsPN9IpR6/BbflsAj6vPLCmmMlOgyB7eoSkOQkLliIoBGlDu0zuElkqJru8bQxq3vORtw3AA9KJS3w+cHZ6yCiuRBbqTNxecpidCxhGeblJTP9GwZ5n+dYdyyoyDMVjCrJDJ2iMoI6OlMOEQyVvzzrvaYX7iMahNIdVsCgYEA9R8/+mD6fpGhXcmxorrdvqLsgi40thn1rsEWrLX4QTkefoPXpXPPxKVwRW6oxBu+n7xBwNVV7rL1U9biuEm1gt84LAwLrEEf8VBS+MdO3+U2nmVYn3957BMsjjfbd7TWqTAjis3j5YCG8wXHXWMxTTH5nvdGZLIvqpkbcrt/0mECgYEAiNHXFXQK1PWFMEmbc1IXsp3nRpCOus2KFk4ipzOH+NlCj2ScfQ8eB6qpkIoRDQz3LaAGsIJUIwSXlMBtHrR+sfiZmUlpYxLXSjfr3tcPokv6hKH9AGUKZwwXrBixSSm5pa7cfD+oCPwJuehq1tOeausaFiMxsozQBvNmkLjtQFECgYEAnPJXWo9BlEzWj2CXFmSjmm5jFK9VHMveXPhQ9mDFBa328nakWtGeVIDBNBO4h2hkU46MY1W1YdK/9eB+5hR73cHjC4Di8HX6Z95QYe3reLwgjqbBac6LWDamrqDhKvJlB4tFFpjhtI7o2S34Crl6Vb0L4VbegZb9ojPKOVoIa8ECgYAdfXNb6RRmgFCG5d7rQERhemw3RSu/WUChpU4gUy/Tbp/921MGyTJfbHO53lP3tQ8opQmEmFth7BLRdnzkCVT9pR2nGjwI31umhGuLGl/DGEC09AEkSCd/m4gpExdVdFY6jyJfvRwtSr4Yvell/OL15aHNM6C11aHgiqFPjgPBpw==",
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz7QlNkg7FL/qN9t2zXmfsgfA+PXZwS6CRwIyFGRtJvJ7aLjgn8ZMIn8mIgNkgs2RXC4us58eiTkaqGnnX1brjNNu95s1yIlzfmbPQ7hQVH0MHvQz5jhGcEc2vjcdXmAso+Yr67N8i1dtDXocYxL/RhzWSGUY4QQYpvL0WQnkRW0lyFCx8iRdZgQ/irW7G0EX1pClDARYlbLTUqVBGyEYPhGmhqBbBCUYF3crRC5VRYTzcLr95FGU1YDJGYQVMUuQkOgy6HHCINkFgseh2cRXsRunbPexsm7vRBa5AvrHpcZmddX6DCFEcG99ydKv9p6LkjjXHnrB2Mbh5XQdP9VTLwIDAQAB",
    "merchant_private_key" => "MIIEpQIBAAKCAQEAtwDzFZZ6Kh3BGG0zmvd/SZ0XwknmqKjgVmAkZp1pozbjY7nvvK1sVSm1GyQMXo9gEFDKt/k0ERpQZQ9F/BvfLgIh6IbpFWVnJap03+PHm/bSlzd7FKWjOClpkzlsdYV3KwNWBp+/Zz0Z35+j8hbXzTrhZzbQYkPVqWaPGdR2ojlgoJsdiVRRCUSLuuzZRg/0QtboHl8ODBXxGIJPiMJOMBxky7URnTtbZPa4f+VbJ81Ne0hSocHYZ+BodPeEKxQfQiYsSWHYZcQLVvZo0G9bMh/P9ZXgiKa3APq5SRjcIhEt3ey7qZ72G6dAjP+GZxemWWwmooLf3DQTuxw63MFY7QIDAQABAoIBAQCLdlXJ5dtDrVkyXEYvmt2OJAGvNtJpRglwyePzr5KJp5KytUhV6XPdkuNJw7cJeQokZO2YNnnPbtZFrdYPws3aKhXdNrL6c0SgF77pwJSl7vud8dICchho/GZQpDpbdVLTnL86XRNogc/t86LlIzNiW7TbC5LS0A9MAbScYqXmCbhPp2pAn666CuR79ZWpJu/y9uZqA7eqjCPmQNfMgbmlILVTJqQvG0lIrlhX/BFcIBgadeJX7u4tL0o8RxUy75YHejRxrOqEPFjohq/vhKW5jbW9zMtpy6l9iC6LdJF8QjnXP6bbfWKMrX+cLbNsedt5S8F9DCs4ehaan/AbZhqhAoGBAO/Kt5rMqA1b/2cOuSYgdxExN/s5wWsK8zpz5BmmiFOd3Lq+oguVseEkdc2V6DErxT7utDYzX701rONMYBupMwmmcHePW/U3icBVeBCetK/PYoWG93aM9MumV9ePw7Ej6mtxu2wVqf5v36016a6scdtYqBybBT0zXhVz4qnFyKwPAoGBAMNflohlR4QhGoEwG398Yhjw3OtUgpBwCYC1PfrESMqZqKB6FretvJwkvpXV1RglW6VwFvoz0frnQWIUiGR6eUCg1ZamQEykVKIo0f6GA40Xb1eTt1bhs7Tu3TZXb4Jpxd9IgoMlthMNahnfPSDfXKN/hOAy+BPk4ePDpPKAsZ9DAoGBAMyDUbrmJ8JVH2xvIzxAXiy8lKlg5fT8vtuwse+qmATw06w2IJDO2IpUBWEVJJajZTQ6dFrx0ArY955YqnONCGmHmc5u55gqCQOQIbnTEfoMX1PQ+8gRiksSkULZa6buIeYHdzlE9Np74gKhw69lhin04FSdZod/AxQ65Su082TDAoGAKN15kxX8G3sBHDx/w+60ZhsbWm3W0XddxXojeKxNvXLefpKK5eiFJvPYmWacp+xIexYy+CqWpTBx0J4S2VF0wzvg8R3dHSrSOQjow6AsZfqc42iWVKno+NNtmcw4GsMdDFMSWXQt3VZU9wxmsNWHfvtRQ8Pld+PMC+QEQGUCwhkCgYEA0YPXAVpz5wnxO1k/uL7Ep3H3OS7Ux4qjk9CE/Q2rRcNkfOMCkdZnwHsR2cqoWO3SjJ9msOKaa1+74jgGWsh6I5fPh5PMy3qPGJEKdRRaV0d6B6uI1zXJN2+UdMYuD4nM2gVA2Xug8VKwJyCxUJyJym4/jzZjXnOY6FOh1Xdfcz0=",
//支付宝公钥
    //编码格式
    'charset' => "UTF-8",
    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",
    //应用ID
    'app_id' => "2016091600522685",
    //异步通知地址,只有扫码支付预下单可用
    'notify_url' => "http://47.98.157.254:81/demo.php",
    'return_url' => "http://47.98.157.254:81",
    //最大查询重试次数
    'MaxQueryRetry' => "10",
    //查询间隔
    'QueryDuration' => "10"
);
