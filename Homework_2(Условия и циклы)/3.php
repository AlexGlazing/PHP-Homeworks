<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table >
        
        <tr>
            <td>Номер</td>
        </tr>
        <?php
        $n = 10;
        for ($i=1; $i <= $n ; $i++):
        ?>
        <tr >
            <?php if ($i% 2 !== 0): ?>
            <td style = "border: black 1px solid;"><?= $i; ?></td>
            <?php else: ?>
                <td style = "border: black 1px solid; background-color: gray; color: whitesmoke;"><?= $i; ?></td>
            <?php endif; ?>
        </tr>
        <?php endfor; ?>


        
    </table>
</body>
</html>