<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Order</title>
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
                <h1 class="home__heading">Manage Order</h1>
            </div>
            <table class="user__table table">
                <thead>
                    <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">Food</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty.</th>
                        <th scope="col">Total</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mixed Pizza</td>
                        <td>$10.00</td>
                        <td>2</td>
                        <td>20.00</td>
                        <td>2020-11-30 <br> 04:07:17</td>
                        <td>Delivered</td>
                        <td>Jana Bush</td>
                        <td>+1 (562) 101-2028</td>
                        <td>tydujy@maillinator.com</td>
                        <td>Minima iure ducimus</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn-success">Update Order</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Best Burger</td>
                        <td>$4.00</td>
                        <td>4</td>
                        <td>16.00</td>
                        <td>2020-11-30 <br> 03:52:43</td>
                        <td>Delivered</td>
                        <td>Kelly Dillard</td>
                        <td>+1 (908) 914-3106</td>
                        <td>fexekihor@maillinator.com</td>
                        <td>Incidunt ipsum ad d</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn-success">Update Order</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Sadeko Momo</td>
                        <td>$6.00</td>
                        <td>3</td>
                        <td>18.00</td>
                        <td>2020-11-30 <br> 03:49:48</td>
                        <td>Cancelled</td>
                        <td>Bradley Farrell</td>
                        <td>+1 (576) 504-4657</td>
                        <td>zuhafiq@maillinator.com</td>
                        <td>Duis aliqua Qui lor</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn-success">Update Order</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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