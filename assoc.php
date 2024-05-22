<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Associative array
    </h1>
    <?php
    $assoc=[
        "name"=>"Mohadis",
        "Course"=>"Full stack",
        "Dateofjoin"=>"27-Apr-2024"
    ];
foreach($assoc as $key => $value)
        {
            echo $key. " : " .$value."<br>";
    }
    ?>
</body>
</html>