<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="Assets/CSS/myaccount.css">
    <title>Iraders</title>
</head>
<body>
    <header>
        <div class="container-fluid bg-dark p-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="Assets/Images/logo.jpg" alt="logo" srcset="" id="logo" class="me-5">
                    <small id="brand_title" class="text-white">IRADERS</small>
                </div>
                <div class="col-md-6">
                    <ul class="navbar d-flex justify-content-end">
                        <li class="nav-item">
                            <a href="index.php?page=home" class="nav-link">Home</a>
                        </li>
                        <?php if (isset($_SESSION['id']) && $_SESSION['id'] >= 0):?>
                            <li class="nav-item">
                                <a href="index.php?page=myaccount" class="nav-link">My Account</a>
                            </li>
                        <?php else:?>
                            <li class="nav-item">
                                <a href="index.php?page=login" class="nav-link">Login</a>
                            </li>
                        <?php endif;?>
                        <li class="nav-item">
                            <a href="index.php?page=info" class="nav-link">Info</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=app" class="nav-link">App</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=translate" class="nav-link">Translate</a>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>
    </header>
    <main>
        <div class="myaccount d-flex">
            <ul class="navbar d-flex">
                <li class="nav-item">
                    <a href="" class="nav-link">User Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Change Password</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=logout" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </main>
