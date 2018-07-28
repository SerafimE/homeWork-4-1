<?php declare(strict_types=1);
$connect = mysqli_connect('localhost', 'root', '', 'db1');
$sql = 'select * from books';
$res = mysqli_query($connect, $sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Книги</title>
</head>
<body>
<table>
    <caption><h1>Книги</h1></caption>
    <thead>
    <tr>
        <th>id</th>
        <th>Название</th>
        <th>Автор</th>
        <th>Год</th>
        <th>isbn</th>
        <th>Категория</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($data = mysqli_fetch_assoc($res)) { ?>
        <tr>
            <td><?php echo isset($data['id']) ? $data['id'] : 'нет' ?></td>
            <td><?php echo isset($data['name']) ? $data['name'] : 'нет' ?></td>
            <td><?php echo isset($data['author']) ? $data['author'] : 'нет' ?> </td>
            <td><?php echo isset($data['year']) ? $data['year'] : 'нет' ?> </td>
            <td><?php echo isset($data['isbn']) ? $data['isbn'] : 'нет' ?> </td>
            <td><?php echo isset($data['genre']) ? $data['genre'] : 'нет' ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>