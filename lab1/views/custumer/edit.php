<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    if (is_array($custumer)) {
        // print_r($rows);
        // echo "<pre>";
        extract($custumer);
        // echo $ten;
    }
    ?>
    <form action="index.php?url=update_customer" method="post">

        <input type="hidden" name="id" id="" value="<?php echo $custumer['id'] ?>">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Sua Ho Ten</label>
            <input type="text" class="form-control" placeholder="Moi sua Ho va Ten" name="ten" value="<?php echo $custumer['ten'] ?>">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Sua Tuoi</label>
            <input type="text" class="form-control" placeholder="Moi sua Tuoi" name="tuoi" value="<?php echo $custumer['tuoi'] ?>">
            <!-- $rows -->
        </div>
        <button type="submit" name="gui">Luu</button>

    </form>
</body>

</html>