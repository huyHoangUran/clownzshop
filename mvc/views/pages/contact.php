<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>

<body>


    <?php foreach ($data['sv'] as $sV) : ?>
        <h2><?= $sV['hoTen'] ?></h2>
        <h2><?= $sV['namSinh'] ?></h2>

    <?php endforeach ?>
</body>

</html>