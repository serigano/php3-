﻿<?php

$Countrys = [
    "0" => "日本",
    "1" => "アメリカ",
    "2" => "イギリス",
    "3" => "フランス"
];

foreach($Countrys as $key => $value) {
    echo $key.":".$value. "<br>";

}
// 配列に「日本,アメリカ,イギリス,フランス」を格納し、foreach文を使って順番に下記のフォーマットで出力して下さい。
// 要素番号:国名
