<?php
require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/Spotify-Icon32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>Vue-PHP-Discs</title>
</head>
<body>
    <div id="root">
        <header class="p-5">
            <div>
                <h1>
                    <i class="fab fa-spotify cl-green" type="button"></i>
                </h1>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row row-cols-3 g-3 d-flex justify-content-center align-items-start">
                <!-- Inizio ciclo -->    
                    <?php foreach($database as $element){?>
                        <div>
                            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="<?php echo $element['poster'] ?>" class="img-fluid" alt="">
                                    <h2><?php echo $element['title'] ?></h2>
                                    <span><?php echo $element['author'] ?></span>
                                    <span><?php echo $element['year'] ?></span>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            </div>
        </main>

    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="./assets/js/main.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> 
</body>
</html>