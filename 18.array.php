<pre>

    <!-- php陣列 -->

    <?php
    $ar1 = array(3, 5, 2, 8); // 較舊的用法

    $ar2 = [3, 5, 2, 8]; // 現在大部分都用這個格式

    print_r($ar2); // 印出來 看array

    var_dump($ar2); // 可察看任何類型的變數 給的資訊多

    $ar3 = array(
        'name' => 'David',  // 注意引號跟胖箭頭(不是箭頭函數喔)
        'age' => 34,  // 胖箭頭中間不加空格
    );

    $ar4 = [
        'name' => 'David',
        'age' => 34,
    ];

    print_r($ar4);

    // 儘量不要混用
    $ar5 = [
        20,
        'name' => 'David',
        'age' => 28,
        'mary'
    ];
    print_r($ar5);

    ?>

    <!-- https://www.php.net/manual/en/language.types.array.php -->

    <!-- https://www.php.net/manual/en/ref.array.php -->

    <!-- https://www.php.net/manual/en/function.array-push.php -->
</pre>