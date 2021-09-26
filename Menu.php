<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>    
<body>
    <header>
        <nav class="navbar navbar-expand-md">
            <div class="container h-100 p-0">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo.png" alt="" class="logo__img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Foods</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="search position-relative">
            <nav class="navbar bg-transparent h-100">
                <div class="container-fluid h-100">
                    <form class="d-flex position-absolute top-50 start-50 translate-middle">
                        <input class="form-control" type="search" placeholder="Search for Food...">
                        <button class="search__btn btn btn-pink" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </section>
        <section class="menu">
            <div class="container-md">
                <div class="row">
                    <h2 class="text-center menu__heading">Food Menu</h2>
                    <div class="col-6 c-12">
                        <div class="menu__item card d-flex flex-row p-4">
                            <img class="menu__item-img" src="./images/menu-momo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="menu__item-name card-title">Dumplings Specials</h5>
                                <span class="menu__item-price">$5.00</span>
                                <p class="menu__item-decs card-text">Chicken Dumplings with hurbs from Mountains.</p>
                                <a href="#" class="menu__item-btn btn btn-pink">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 c-12">
                        <div class="menu__item card d-flex flex-row p-4">
                            <img class="menu__item-img" src="./images/menu-burger.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="menu__item-name card-title">Best Burger</h5>
                                <span class="menu__item-price">$4.00</span>
                                <p class="menu__item-decs card-text">Berger with Ham, Pineapple and lots of Cheese.</p>
                                <a href="#" class="menu__item-btn btn btn-pink">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 c-12">
                        <div class="menu__item card d-flex flex-row p-4">
                            <img class="menu__item-img" src="./images/menu-momo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="menu__item-name card-title">Sadeko Momo</h5>
                                <span class="menu__item-price">$6.00</span>
                                <p class="menu__item-decs card-text">Best Spicy Momo for Winter.</p>
                                <a href="#" class="menu__item-btn btn btn-pink">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 c-12">
                        <div class="menu__item card d-flex flex-row p-4">
                            <img class="menu__item-img" src="./images/menu-pizza.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="menu__item-name card-title">Mixed Pizza</h5>
                                <span class="menu__item-price">$10.00</span>
                                <p class="menu__item-decs card-text">Pizza with Chicken, Ham, Buff, Mushroom and Vegetbles.</p>
                                <a href="#" class="menu__item-btn btn btn-pink">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <span class="pagigation">See All Foods</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer__icon d-flex justify-content-center">
                        <a href="#" class="footer__icon-link">
                            <img src="data:image/png;base64,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" alt="" class="footer__icon-img">
                        </a>
                        <a href="#" class="footer__icon-link">
                            <img src="https://1.img-dpreview.com/files/p/E~C109x112S578x578T1200x1200~articles/2505830214/instagram-large.jpeg" alt="" class="footer__icon-img">
                        </a>
                        <a href="#" class="footer__icon-link">
                            <img src="https://upload.wikimedia.org/wikipedia/vi/9/9f/Twitter_bird_logo_2012.svg" alt="" class="footer__icon-img">
                        </a>
                    </div>
                    <div class="footer__auther d-flex justify-content-center">
                        All rights reserved. Designed by
                        <a class="footer__auther-link" href="#"> CSE485</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>