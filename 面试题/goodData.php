<?php
$goodData = [
    'color' => ['蓝色', '黑色', '红色', '极光白', '渐变蓝', '贵族黑', '渐变紫', '翡翠绿', '深海蓝', '高端黑'],
    'size' => ['6.1', '6.2', '6.3', '6.4', '6.5', '6.6', '6.7', '6.8', '6.9', '7.0'],
    'meal' => ['官方标配', '套餐一', '套餐二', '套餐三', '套餐四'],
    'memory' => ['32G', '64G', '128G', '256G'],
    'locate' => ['中国大陆', '香港', '美国']
];
$res = [];
//var_dump($goodData['color'][0]);
foreach ($goodData['color'] as  $color) {
    foreach ($goodData['size'] as  $size) {
        foreach ($goodData['meal'] as  $meal) {
            foreach ($goodData['memory'] as $memory) {
                foreach ($goodData['locate'] as $locate) {
                    $data = [];
                    array_push($data, $color);
                    array_push($data, $size);
                    array_push($data, $meal);
                    array_push($data, $memory);
                    array_push($data, $locate);
                    array_push($data, []);
                    array_push($data, []);
                    array_push($data, []);
                    array_push($res, $data);
                }
            }
        }
    }
}
var_dump($res[0]);
