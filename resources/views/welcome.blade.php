<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Commerce</title>
        <!-- favicon -->
        <link rel="icon" href="../../public/favicon.ico" type="image/x-icon"/>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <!-- font Logo -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&family=Space+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">E-Commerce</a>
                <!-- offcanvas button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#rightOffcanvas" aria-controls="offcanvasRight" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!-- offcanvas items -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="rightOffcanvas" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h1 class="offcanvas-title" id="offcanvasRightLabel">E-Commerce</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                     <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page">Home</a>
                            </li>
                        </ul>
                     </div>
                </div>
            </div>
        </nav>
    </body>
</html>
