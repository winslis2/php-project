<?php
$goodData = [
'color' => ['蓝色', '黑色'],
'size' => ['6.1', '6.2'],
'meal' => ['官方标配', '套餐一'],
'memory' => ['1G', '2G'],
'memory1' => ['房子', '车子'],
'memory2' => ['人民币', '美元'],
'memory3' => ['帽子', '鞋子'],
'memory5' => ['男孩', '女孩'],
'memory6' => ['手机', '电脑'],
'memory7' => ['天使', '魔鬼'],
'locate' => ['中国大陆', '香港', '美国']
];
$sort = ["locate", "memory6"];
$keys = array_keys($goodData);
foreach ($keys as $key) {
    if (!in_array($key,$sort)) {
        array_push($sort,$key);
    }
}
$values = [];
foreach ($sort as $key) {
    array_push($values,$goodData[$key]);
}

function CartesianProduct($sets){
    // 保存结果
$result = array();
    // 循环遍历集合数据
    for($i=0,$count=count($sets); $i<$count-1; $i++){
        // 初始化
        if($i==0){
            $result = $sets[$i];
        }
        // 保存临时数据
        $tmp = array();
        // 结果与下一个集合计算笛卡尔积
        foreach($result as $res){
            foreach($sets[$i+1] as $set){
                $tmp[] = $res.','.$set;
            }
        }
        // 将笛卡尔积写入结果
        $result = $tmp;
    }
    $res = [];
    foreach ($result as $value) {
        $v = explode(',',$value);
        array_push($res,$v);
    }
    var_dump($res);
    return $res;

}
CartesianProduct($values);