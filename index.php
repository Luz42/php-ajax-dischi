<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>PHP DISCHI</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row gap-3 justify-content-center p-5">
            
    
    <?php
            // _DIR_ utilizzato per rendere i percorsi
            // relativi al file di utilizzo
    include __DIR__ . '/database.php';
    //var_dump($database);

    foreach($database as $album){
?>
        <div class="col-3 bg-dark text-white text-center">
            <div class="d-flex justify-content-center p-3">
                <img class="img-fluid" src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>">
            </div>    
            <h2><?= $album['title'] ?></h2>
            <p><?= $album['year'] ?></p>
            <p><?= $album['author'] ?></p>
        </div>
        <?php
    }

    ?>    
    </div>
    </div>


</body>
</html>