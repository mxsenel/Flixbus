<?php
    // übergabe der Film ID
    $movie_id = rand(1, 10);

    // Anzeige des Filmnamens als Titel
    
    $connection = new PDO("mysql:host=localhost;dbname=user_3jca","user_3jca", "3A72RJOcuyWlL1J7"); 
    $statment1 = $connection->query('SELECT * FROM movie_tab WHERE movie_id="'.$movie_id.'";');
    $row = $statment1->fetch(); 
    
    $titel = $row['titel'];
    $laufzeit = $row['laufzeit'];
    $fsk = $row['fsk'] ; 
    $beschreibung = $row['beschreibung']; 
    $poster = $row['movie_poster']; 
    $release = $row['release_date'] ; 

?>

<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="overview.css">
            <title><?php echo $titel ?></title>
    </head>
    <body>
        <div class="container">
            <div class="header"> <img src="static/img/logo.png" class="img-fluid logo"> </div>
            <article class="maine">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo $poster ?>" class="img-fluid" alt="...">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="mt-0 font-weight-bold"><?php echo $titel ?></h3>
                        <br>
                            <?php echo $beschreibung ?> 
                            <br>
                            <br>
                            <strong>Erscheinungsdatum: </strong> <?php echo $release ?>
                            <br>
                            <br>
                            <strong>Laufzeit: </strong> <?php echo $laufzeit ?> min 
                            <br>
                            <br>
                            <strong>Altersfreigabe: </strong><?php echo $fsk ?> Jahre
                            <br>
                            <br>
                            <a type="submit" name="knopf" id="knopf" class="btn btn-success btn-send" href="videoplayer.php">Film Abspielen</a>
                            <a class="btn btn-danger" href="overview.html">Zurück zur Übersicht</a>
                    </div>
                </div>
            </article>
        </div>
    </body>
</html>