<?php
function loadContent() {
    $connection = new PDO("mysql:host=localhost;dbname=user_3jca","user_3jca", "3A72RJOcuyWlL1J7"); 
    $statement = $connection->query('SELECT * FROM movie_tab WHERE titel!="Testfilm";');
    
    
    while($row = $statement->fetch()) {
        $movie_id=$row['movie_id'];
        $titel = $row['titel'];
        $laufzeit = $row['laufzeit'];
        $fsk = $row['fsk'] ; 
        $beschreibung = $row['beschreibung']; 
        $poster = $row['movie_poster']; 
        $release = $row['release_date'] ; 
    
        echo '<div class="col">';
        echo '<p class="titles text-truncate">';
        echo $titel;
        echo '</p>';
        echo '<p class="published">';
        echo $beschreibung;
        echo '</p>';
        echo '<figure action="infoside.php?titel='.$movie_id.'" method="get"><a href=><img src="'.$poster.'". class="img-fluid rounded">';
        echo '</figure>';
        echo '<div>';
    }
}

?>

<!doctype html>
<html lang="de">

<head>
    <title>Gesamuebersicht</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="overview.css">
</head>

<body>
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal">Flixbus</p>
        <nav class="my-2 my-md-0 me-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Support</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Abmelden</a>
    </header>

    <div class="container">
        <div class="header"> <img src="logo.png" class="img-fluid logo"> </div>
        <article class="main">

            <div class="row">
                
            <?php loadContent() ?>

            </div>
        </article>
        <aside class="aside aside-1 ">Aside 1</aside>
        <aside class="aside aside-2 ">Aside 2</aside>
        <footer class="footer ">Footer</footer>
    </div>
</body>

</html>