<?php
// https://www.w3schools.com/js/js_ajax_php.asp
// Array with names
$a[] = "Anna";
// array_push($a,"Brittany"); 寫法一樣
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];
// request 用來收集送出表單後的資料
// 在這邊指的應該是input的value吧

// echo $q;

$hint = "";
// hint預設空字串

// lookup all hints from array if $q is different from ""
if ($q !== "") {  // 如果$q不是空字串 那就執行以下
  $q = strtolower($q);  // Make a string lowercase 先把input的值轉為小寫
  $len = strlen($q);  // Get string length 抓input值的長度
  foreach ($a as $name) {  // 跑迴圈 去找有沒有符合的字串
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;