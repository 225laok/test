<?php
$url = createUrl('https://test.huisuanzhang.com/heming/increase/result.jspx', ['companyName' => '嘉兴氏族制度电子商务有限责任公司']);
$header = [
    'channel:hsz'
];
$result = httpUtil($url, [], 'GET', $header);