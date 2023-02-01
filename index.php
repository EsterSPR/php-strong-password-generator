<?php

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
    
    <div class="container">
        <div class="row text-center mb-4">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>
        <div class="row bg-white p-5 rounded">
            <div class="col-12">
                <form action="">
                    <div class="row py-3">
                        <div class="col-6">
                            <label for="pwdLength" class="form-label">Lunghezza password:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="pwdLength" required>
                        </div>
                    </div>
                    <div class="row py-3">
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
                    <div class="row py-3">
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
                    </div>
                    <div class="row py-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Invia</button>
                            <button class="btn btn-secondary">Annulla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>