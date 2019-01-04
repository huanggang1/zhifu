<?php

return [
    //签名方式,默认为RSA2(RSA2048)
    'sign_type' => "RSA2",
    "merchant_private_key" => "MIIEpAIBAAKCAQEAoyuEjAFGoQcGl/WBTqqZGvXWb0MJCFXlEPOQZxXg0Xa1adm+PGo/EPpd3zCYTzxmBBnnl8DoSC9x2lTomuWoZEsDXEMslH8cRRAslQqwaDcCClSotiFhU0RbHH/ViknM7EWVz46FtImXjdTZfsPbs5ilbBqxOadcb89EzvR+nHj2cFJEovElSEP4Q2dVmAcP7ZiuoJrVBAwFgFLA6OjquNsRLSVKp2Kawzncu1k3LTdELyQeonJEv0O6BTVdZZkTurl2nHRtAVTJDTk2VrgvB9HCw82piKK6lgkv48cFUwqsB2wW6BgiBSEG7JGclOAchftAvIvKKxjkNY1cdSBmkwIDAQABAoIBAFsOpQhwidbBEffpZMDeyVRXTtSGZ1sEfDGqirJMbkrWYUTx44zZidpSreIov0awoQm23xw75iSqfXHnImuWsBNQHU72mcFA8ijEbuy5q1ptIDFdr0z8cdDC+8l6uVNT/gz4hDLxCUKH6lCXMMziRhACpoYemzpeYGJxG6gWnzV4E4m1kBR0xVodSaGEg4wfj7oVX102kjEKn4t4fj6zKJKsogbNPLUvuF3D1fpRsoW4sh/oTIEJB6e6mvltlr8jQoel1jWd+yF0srmDFPTbtVzXDISVXE0sOyy/OeNSxSOpfBpVs9ftfeinGfxm2XoS5OjDcD6/awPy/PAASKZybekCgYEAzPZipyE0SaicpV+h/xsyo/eo5+kNMGljLX986XxaX+i5V+hELAykr7tOfYqN5Sj/zlMNN8haIk+/Q34P2Ym0vFccHTddnlRlQPtZo8ZsRsCGw8GzKbSnDAmXAyllegyqkiaDwwvuZkcTnpenlttz1UXNjfE/23NgKvqDBSJWve8CgYEAy80DxNS6KhO7bb+6d4PF0HxhEDBRzoVjhYoFrCTARe/or2yoJTrvGeIuwLPLvdDfUHL41c4pva03zCCDVLCc3qixLismuCse1Y/gU0B11YBfZAfLjO9Mmlj+0n23j2NAdQQRgWxz1VUQVgDCBuTPvoHIxQqBmdDUWFyjLMuLxZ0CgYAFGDa5isS+8/b40Vi4e5eVpclIAm32fxgdAGc9cn7YlXNN8RMIuUO6roAz9Ka0RIGfQkc41L0Qz0Sky9RfBuI8MDodq8ui7NwbcmP3Ay6bz5tJ8F2gssHYNcDQLk48a2Yt/dEWnwxM9IVTUteykz/c1EBYv99jeAmy58kr7n+TdwKBgQC7N3561qCd/rpzO2nkWJzjxR61bG36NfcSuZQ0ax5mINm0LTDZ4qW7NViVlZVYrgQ3Nyb34gfeQr27OzLqHcQ9luIM838CODp/HUiJsfGNS/xVPAP1V+8a6x5L50k044xW8oHSTvqpwxbaqp+TDab57uesetZLotcuxQrxH5sq0QKBgQClRDMDSJ88aeYrga/yBTNFoBh6PicYd5dwU0rkG+BB9s7upz++IVtYOdk88pnkWCS6Y0MnXvTcQA1hKQ5eDHnWNuaHxrGzrptGTdtqtR+HP6MO1GBPy0JKlENWM7Uu564RHD2jTcYKB4jnwaoTCVwVEv519o6QDFWnaVnPl/zpJg==",
    //支付宝公钥
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz7QlNkg7FL/qN9t2zXmfsgfA+PXZwS6CRwIyFGRtJvJ7aLjgn8ZMIn8mIgNkgs2RXC4us58eiTkaqGnnX1brjNNu95s1yIlzfmbPQ7hQVH0MHvQz5jhGcEc2vjcdXmAso+Yr67N8i1dtDXocYxL/RhzWSGUY4QQYpvL0WQnkRW0lyFCx8iRdZgQ/irW7G0EX1pClDARYlbLTUqVBGyEYPhGmhqBbBCUYF3crRC5VRYTzcLr95FGU1YDJGYQVMUuQkOgy6HHCINkFgseh2cRXsRunbPexsm7vRBa5AvrHpcZmddX6DCFEcG99ydKv9p6LkjjXHnrB2Mbh5XQdP9VTLwIDAQAB",
    //编码格式
    'charset' => "UTF-8",
    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",
    //应用ID
    'app_id' => "2016091600522685",
    //异步通知地址,只有扫码支付预下单可用
    'notify_url' => "https://gang.abo27.com/asyn/getAsyn",
    'return_url' => "https://gang.abo27.com/getList",
    //最大查询重试次数
    'MaxQueryRetry' => "10",
    //查询间隔
    'QueryDuration' => "10"
];

