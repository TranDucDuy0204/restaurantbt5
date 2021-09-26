<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <nav class="navbar admin navbar-expand-md">
            <div class="container h-100 d-flex justify-content-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="./home_admin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./user_admin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./category_admin.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./food_admin.php">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./order_admin.php">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="home__main">
        <div class="container">
            <div class="row">
                <h1 class="home__heading">Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-3 c-12">
                    <div class="item text-center">
                        <div class="item-number">4</div>
                        <span>Categories</span>
                    </div>
                </div>
                <div class="col-3 c-12">
                    <div class="item text-center">
                        <div class="item-number">6</div>
                        <span>Foods</span>
                    </div>
                </div>
                <div class="col-3 c-12">
                    <div class="item text-center">
                        <div class="item-number">3</div>
                        <span>Total Orders</span>
                    </div>
                </div>
                <div class="col-3 c-12">
                    <div class="item text-center">
                        <div class="item-number">$36.00</div>
                        <span>Revenue Generated</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer-admin text-center">
        <p class="footer__text m-0 text-white">
            2020 All rights reserved, Food House. Developed By
            <a href="#" class="fw-700">CSE485</a>
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>