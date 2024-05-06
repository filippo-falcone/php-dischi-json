<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /Vue -->
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- /Axios -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- /Bootstrap icons -->
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="img/spotify_logo.png" alt="Spotify Logo" width="58" height="42">
                    </a>
                </div>
            </nav>
        </header>
        <main class="py-4">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 justify-content-center">
                    <div v-for="disc in discs" class="col">
                        <div class="card align-items-center py-3">
                            <div class="image-containers">
                                <img :src="disc.poster" class="album-cover" :alt="disc.title">
                            </div>
                            <div class="card-body d-none d-md-block text-center text-light">
                                <h5 class="card-title">{{ disc.title }}</h5>
                                <small>{{ disc.author }}</small>
                                <div>{{ disc.year }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card clicked -->
            <div class="card-clicked justify-content-center align-items-center">
                <div class="col-10 col-sm-5 col-lg-4">
                    <div class="card align-items-center py-3">
                        <div class="image-containers">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" class="album-cover" alt="New Jersey">
                        </div>
                        <div class="card-body text-center text-light">
                            <h5 class="card-title">[Titolo]</h5>
                            <small>[autore]</small>
                            <div>[anno]</div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-light"><i class="bi bi-x"></i></button>
            </div>
            <!-- /Card clicked -->
        </main>
    </div>

    <script src="js/script.js"></script>
</body>
</html>