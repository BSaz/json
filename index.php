<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Веб-сервер</title>
</head>

<body>
<?php
//$json_string = file_get_contents(__DIR__ . '/file.json');
//$data = json_decode($json_string);
$data = [
     ['firstName' => 'Иван', 'lastName' => 'Иванов']
]
?>

    <table>
        <?php foreach ($data as $value) : ?>
        <tr>
            <td><?=$value['firstName'] ?></td>
            <td><?=$value['lastName'] ?></td>
<!--            <td>--><?//=$value['city'] ?><!--</td>-->
<!--            <td>--><?//=$value['streetName'] ?><!--</td>-->
<!--            <td>--><?//=$value['buildingNumber'] ?><!--</td>-->
<!--            <td>--><?//=$value['phoneNumber'] ?><!--</td>-->
        </tr>
        <?php endforeach; ?>



    </table>

</body>




</html>

