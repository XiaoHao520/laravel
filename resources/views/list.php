<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>sex</th>
    </tr>
    <?php
    foreach ($rows as $row) {
        ?>
        <tr>
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->age; ?></td>
            <td><?php echo $row->sex; ?></td>
        </tr>
    <?php } ?>

</table>
</body>
</html>
