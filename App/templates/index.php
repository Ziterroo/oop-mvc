<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<h1>Товары</h1>
<table class="table table-secondary table-hover">
    <tr>
        <th>ID</th>
        <th>Наименование</th>
        <th>Цена</th>
    </tr>
    <?php foreach ($this->products as $product): ?>
        <tr>
            <td><?= $product->id ?></td>
            <td><?= $product->title ?></td>
            <td><?= $product->price ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<h1>Услуги</h1>
<table class="table table-secondary table-hover">
    <tr>
        <th>ID</th>
        <th>Наименование</th>
        <th>Цена</th>
    </tr>
    <?php foreach ($this->services as $service): ?>
        <tr>
            <td><?= $service->id ?></td>
            <td><?= $service->title ?></td>
            <td><?= $service->price ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>