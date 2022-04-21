<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
    <style>
        td {
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <?php for ($i = 0; $i < 16; $i++) : ?>
                <td style="background-color: #AAFF<?= sprintf ("%X%X", $i, $i) ?>;">
                <?= $i ?>
                </td>
            <?php endfor; ?>
        </tr>
        <tr>
            <?php for ($i = 0; $i < 16; $i++) : ?>
                <td style="background-color: #FFAA<?= sprintf ("%X%X", $i, $i) ?>;">
                <?= $i ?>
                </td>
            <?php endfor; ?>
        </tr>
        <tr>
            <?php for ($i = 0; $i < 16; $i++) : ?>
                <td style="background-color: #FAFA<?= sprintf ("%X%X", $i, $i) ?>;">
                <?= $i ?>
                </td>
            <?php endfor; ?>
        </tr>
    </table>
</body>

<!-- https://www.php.net/manual/en/function.sprintf.php -->

</html>