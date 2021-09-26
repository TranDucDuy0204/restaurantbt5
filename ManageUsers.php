<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
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
                <h1 class="home__heading">Manage Users</h1>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn_admin border-0">Add New User</button>
            </div>
            <table class="user__table table">
                <thead>
                    <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Arsenio Leach</td>
                        <td>toduwaxobi</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn_admin">Change Password</button>
                                <button type="button" class="btn action-btn btn-success">Update Admin</button>
                                <button type="button" class="btn action-btn btn-pink">Delete Admin</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Sasha Mendez</td>
                        <td>goxemyde</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn_admin">Change Password</button>
                                <button type="button" class="btn action-btn btn-success">Update Admin</button>
                                <button type="button" class="btn action-btn btn-pink">Delete Admin</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Vijay Thapa</td>
                        <td>vijaythapa</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn_admin">Change Password</button>
                                <button type="button" class="btn action-btn btn-success">Update Admin</button>
                                <button type="button" class="btn action-btn btn-pink">Delete Admin</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Administrator</td>
                        <td>admin</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn_admin">Change Password</button>
                                <button type="button" class="btn action-btn btn-success">Update Admin</button>
                                <button type="button" class="btn action-btn btn-pink">Delete Admin</button>
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