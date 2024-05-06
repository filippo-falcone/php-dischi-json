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
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Spotify Logo" width="30" height="24">
                    </a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container my-4">
                <div class="row g-4 justify-content-center">
                    <div class="col-10 col-sm-5 col-lg-4">
                        <div class="card align-items-center py-3">
                            <div class="image-containers">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" class="album-cover" alt="...">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">[Title]</h5>
                                <small>[artist]</small>
                                <div>[years]</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="js/script.js"></script>
</body>
</html>