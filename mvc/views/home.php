<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #up,
        down {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div id="up"></div>
    <div id="center">

        <?php require_once "./mvc/views/pages/" . $data['page'] . ".php" ?>

    </div>
    <div id="down"></div>
</body>

</html>