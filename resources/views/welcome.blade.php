
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Commerce</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- favicon -->
    <link rel="icon" href="../../public/favicon.ico" type="image/x-icon" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- offcanvas navbar button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#Offcanvas" aria-controls="offcanvas" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <h1 class="d-block d-hidden-lg logo mx-5" id="Logo">E-Commerce</h1>

                    <!-- offcanvas navbar items -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="Offcanvas" aria-labelledby="offcanvasLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close float-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body text-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link active btn" aria-current="page">Men</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link btn" aria-current="page">Women</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link btn" aria-current="page">Unisex</a>
                            </li>
                        </ul>
                    </div>
                </div>
            <!-- cart -->
            <div class="d-flex align-items-center ">
            <a class="btn " data-bs-toggle="offcanvas" href="#Offcanvascart" role="button" aria-controls="offcanvas"><i class="fas fa-shopping-cart"></i></a>


            <!-- account -->
            <div class="dropdown">
                <a href="#" class="dropdown-toggle d-flex align-items-center hidden-arrow" id="menuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="menuAvatar">
                    <li><a href="#" class="dropdown-item">My profile</a></li>
                    <li><a href="#" class="dropdown-item">My Orders</a></li>
                    <li><a href="#" class="dropdown-item">Account Information</a></li>
                    <li><a href="#" class="dropdown-item">Logout</a></li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
<!-- offcanvas cart items -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="Offcanvascart" aria-labelledby="offcanvasLabel">
                    <div class="offcanvas-header">
                        <h1 class="offcanvas-title logo mx-auto" id="Logo">E-Commerce</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Product 1
                            <span class="badge bg-primary rounded-pill">$10</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Product 2
                            <span class="badge bg-primary rounded-pill">$20</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Product 3
                            <span class="badge bg-primary rounded-pill">$30</span>
                        </li>
                        </ul>
                        <div class="text-end mt-3">
                        <p class="fw-bold">Total: $60</p>
                        <button class="btn btn-primary">Checkout</button>
                        </div>
                    </div>
            </div>
</body>

</html>