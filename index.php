<?php
$tab =  get_defined_constants();

?>
<html>
<head>
    <title>Classement</title>
</head>
<body>
<table border="1" bgcolor="#7fffd4">
    <tr>
        <th></th>
        <th></th>
    </tr>
    <?php
    foreach ($tab as $indice => $value) {
        ?>
        <tr>
            <td><?=  $indice ?></td>
            <td><?=  $value ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>

