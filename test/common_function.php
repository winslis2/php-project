<?php

$data = [
    'name' => 'lis2',
    'age' => 12,
    'gender' => 1
];
$fields = 'name,age';

function filterArrayData(array $arr, string $fields): array
{
    $res = [];
    if (!empty($arr) && !empty($fields) && is_string($fields)) {
        $fields = explode(",", $fields);
        foreach ($fields as $field) {
            //&& $arr[$field] !== ""
            if (isset($arr[$field])) {
                $res[$field] = $arr[$field];
            }
            if($field == 'vat_percent' && empty($arr[$field])) {
                $res[$field] = null;
            }
        }
    }
    return $res;
}

$filterData = filterArrayData($data, $fields);
var_dump($filterData);
