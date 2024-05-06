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
        <main>
            <div class="container py-4 h-100">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4 justify-content-center h-100">
                    <div v-for="disc, index in discs" class="col h-50" @click="showDisc(); getDiscFromApi(index)">
                        <div class="card align-items-center justify-content-center pt-3 h-100">
                            <div class="image-containers w-50">
                                <img :src="disc.poster" class="album-cover" :alt="disc.title">
                            </div>
                            <div class="card-body d-none d-sm-block text-center text-light flex-grow-0">
                                <h5 class="card-title">{{ disc.title }}</h5>
                                <small>{{ disc.author }}</small>
                                <div>{{ disc.year }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card clicked -->
            <div class="card-clicked justify-content-center align-items-center" :class="isActive === true ? 'd-flex' : ''">
                <div class="col-10 col-sm-5 col-lg-4">
                    <div class="card align-items-center py-3">
                        <div class="image-containers">
                            <img :src="disc.poster" class="album-cover" :alt="disc.title">
                        </div>
                        <div class="card-body text-center text-light">
                            <h5 class="card-title">{{ disc.title }}</h5>
                            <small>{{ disc.author }}</small>
                            <div>{{ disc.year }}</div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-light" @click="hideDisc"><i class="bi bi-x"></i></button>
            </div>
            <!-- /Card clicked -->
        </main>
    </div>

    <script src="js/script.js"></script>
</body>
</html>