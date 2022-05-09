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
    <title>Vue-PHP-Discs</title>
</head>
<body>
    <div id="root">
        <header class="d-flex bg-dark">
                <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid justify-content-between align-items-center">
                        <a class="navbar-brand" href="#"><img src="./assets/img/Spotify-Icon64.png" alt="Logo"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </ul>
                        <form class="d-flex align-self-end">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        </div>
                    </div>
                </nav>
               
                <!--<label for="" class="form-label text-white me-2">Seleziona un genere</label>
                <select 
                class="form-select-sm" 
                aria-label="Default select example" 
                v-model="selected" 
                @change="$emit('inviaGenereSel', selected)">
                
                <option value="">Tutti i Generi</option>
                <option v-for="(element, index) in passaGeneriProps" :key="index"
                    :value="element">
                {{element}}
                </option>
                </select>  -->
        </header>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="./assets/js/main.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> 
</body>
</html>