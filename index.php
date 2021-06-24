<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet08 Exercice06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet08 Exercice06</h1>
            <h2 class="col-12 text-info text-center">Afficher le nombre de jours du mois de février 2021.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
        <?php 
            $nombreDeJoursFevrier = cal_days_in_month(CAL_GREGORIAN, 2, 2020); // anné bissextile
            echo "Il y a eu {$nombreDeJoursFevrier} jours Février 2020";
            $nombreDeJoursFevrier = cal_days_in_month(CAL_GREGORIAN, 2, 2021); 
            echo ", et il y a eu {$nombreDeJoursFevrier} jours Février 2021";
        ?>
        </div>
    </div>
</body>
</html>