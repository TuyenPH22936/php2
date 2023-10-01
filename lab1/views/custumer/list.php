<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <a href="index.php?url=add_customer">Them Custumer</a>
    <table class="table" method="GET" border="1">

        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Ten</th>
                <th scope="col">Tuoi</th>
                <th scope="col">Thao Tac</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($custumer as $cus) {
            ?>
                <tr>
                    <th scope="row"><?php echo $cus['id'] ?></th>
                    <td> <?php echo $cus['ten'] ?></td>
                    <td> <?php echo $cus['tuoi'] ?></td>
                    <td> <a href="index.php?url=edit_customer&&id=<?php echo $cus['id'] ?>">Sua</a>
                        <a href="index.php?url=delete_customer&&id=<?php echo $cus['id'] ?>">xoa</a>
                    </td>
                <tr>

        </tbody>
    <?php
            }
    ?>
    </table>
</body>

</html>