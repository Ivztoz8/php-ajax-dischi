<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/Spotify-Icon32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Vue-PHP-Discs MLST 2</title>
</head>

<div id="app">

    <header class="p-3 d-flex justify-content-between align-items-center">
        <div>
            <h1>
                <i class="fab fa-spotify cl-green" type="button"></i>
            </h1>
        </div>
        <div>
        <div>
            <select name="" id="" v-model="genreSelezionato" @change="selezioneGenere">
                <option value="">Tutti i valori</option>
                <option v-for="genere in generi" :value="genere">{{genere}}</option>
            </select>
        </div>
        </div>
    </header>
    <main>
        <div class="container-md">
                    <div class="row row-cols-3 d-flex pt-5 g-3 align-items-start ps-5">
                    <!-- Inizio ciclo con Vuejs -->    
                        <div v-for="element in dischi" class="d-flex justify-content-center pb-5">
                            <div class="col-6 d-flex flex-column justify-content-center align-items-center bg-secondary">
                            <img :src="element.poster" class="img-fluid" alt="poster">
                            <h4 class="text-center fw-6">{{element.title}}</h4>
                            <span class="text-center fw-6">{{element.author}}</span>
                            <span class="text-center fw-6">{{element.year}}</span>
                        </div>
                    </div>
            </div>
        </div>
    </main>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>    
    <script src="./assets/js/main.js"></script> 
    
</body>
</html>





   
    