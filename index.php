<?php

    include __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Strong Password</title>
</head>
<body>
    
    <div class="container my_container">
        <div class="row text-center">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
            <p>Nota: Si consiglia di inserire un numero maggiore di 8</p>
        </div>

            <?php if($alert !== ''){ ?>
                <div class="alert alert-info">
                    <?php echo $alert; ?>
                </div>
            <?php } ?>

            <?php if(isset($password)){ ?>
                <div class="alert alert-info">
                    La tua password è: <strong> <?php echo $password; ?> </strong>
                </div>
            <?php } ?>

        <div class="row bg-white p-4 rounded my-4 my_row">
            <div class="col-12">
                <form action="./index.php" method="GET">
                    <div class="row py-2">
                        <div class="col-6">
                            <label for="pwdLength" class="form-label">Lunghezza password:</label>
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control" id="pwdLength" name="pwdLength" placeholder="Inserisci un numero">
                        </div>
                    </div>

                    <!-- <div class="row py-2">
                        <div class="col-6">
                            <label for="pwdRepeat" class="form-label">Consenti ripetizioni di uno o più caratteri:</label>
                        </div>
                        <div class="col-6">
                            <div class="form-check" id="pwdRepeat">
                                <input class="form-check-input" type="radio" name="pwdRepeat" id="pwdRepeatYes" checked>
                                <label class="form-check-label" for="pwdRepeatYes">
                                    Si
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="pwdRepeat" id="pwdRepeatNo">
                                <label class="form-check-label" for="pwdRepeatNo">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="pwdCharacter1">
                                <label class="form-check-label" for="pwdCharacter1">
                                    Lettere
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="pwdCharacter2">
                                <label class="form-check-label" for="pwdCharacter2">
                                    Numeri
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="pwdCharacter3">
                                <label class="form-check-label" for="pwdCharacter3">
                                    Simboli
                                </label>
                            </div>
                        </div>
                    </div> -->

                    <div class="row py-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Invia</button>
                            <!-- <button class="btn btn-secondary">Annulla</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="./js/script.js"></script>
</body>
</html>