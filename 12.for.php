<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>

<body>
    <table>
        <tr>
            <?php for ($i = 0; $i < 16; $i++) : ?>
                <td style="background-color: #FFFF<?= $i . $i ?>;"><?= $i ?></td>
            <?php endfor; ?>
        </tr>
    </table>
</body>

</html>


<!-- <tr>
    <td style="background-color: #FFFF00;">0</td>
    <td style="background-color: #FFFF11;">1</td>
    <td style="background-color: #FFFF22;">2</td>
    <td style="background-color: #FFFF33;">3</td>
    <td style="background-color: #FFFF44;">4</td>
    <td style="background-color: #FFFF55;">5</td>
    <td style="background-color: #FFFF66;">6</td>
    <td style="background-color: #FFFF77;">7</td>
    <td style="background-color: #FFFF88;">8</td>
    <td style="background-color: #FFFF99;">9</td>
    <td style="background-color: #FFFF1010;">10</td>  這邊會開始出錯
    <td style="background-color: #FFFF1111;">11</td>  變成八位數
    <td style="background-color: #FFFF1212;">12</td>  所以要轉換成16進位
    <td style="background-color: #FFFF1313;">13</td>
    <td style="background-color: #FFFF1414;">14</td>
    <td style="background-color: #FFFF1515;">15</td>
</tr> -->