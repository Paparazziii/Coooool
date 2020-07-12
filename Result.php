<?php
/**
 * Created by Jing

 */
//Title
$csv_header = ['PSUid','Awards','Answer'];
//Content
$csv_body = [
 [$_GET["email"],'奖品','答案选择']
//此处从html里提取信息并删除上一行示例
];
 
$fp = fopen('result.csv','a');
//Header
$header = implode(',', $csv_header) . PHP_EOL;
//Content
$content = '';
foreach ($csv_body as $k => $v) {
 $content .= implode(',', $v) . PHP_EOL;
}
//Assembly
$csv = $header.$content;
//Close
fwrite($fp, $csv);
fclose($fp);