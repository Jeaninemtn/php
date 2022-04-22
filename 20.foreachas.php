<pre>

    <?php
 
    // 儘量不要混用
    $ar5 = [
        20,
        'name' => 'David',
        'age' => 28,
        'mary'
    ];
    foreach($ar5 as $k => $v){
        echo "$k : $v \n";  // \n換行的意思
    };

    echo json_encode($ar5); // 轉換為 json 字串
    // json_decode: 從 json 字串轉那為原生的陣列或物件
    echo '<br>'; // 換行
    echo json_encode([1, 2, 3]);
    
    ?>

    <!-- https://www.php.net/manual/en/language.types.array.php -->

    <!-- https://www.php.net/manual/en/ref.array.php -->

    <!-- https://www.php.net/manual/en/control-structures.foreach.php -->
</pre>