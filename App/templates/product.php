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

<h1>Товар <?= $this->product->title ?></h1>
<table class="table table-secondary table-hover">
    <tr>
        <th>ID</th>
        <th>Наименование</th>
        <th>Цена</th>
    </tr>
        <tr>
            <td><?= $this->product->id ?></td>
            <td><?= $this->product->title ?></td>
            <td><?= $this->product->price ?></td>
        </tr>
</table>
</body>
</html>