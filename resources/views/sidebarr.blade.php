@php
use App\Models\User;
$user = auth()->user();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light rounded mt-3" id="sidebar">
    <div class="container-fluid">
        <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body py-3">
                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                    <div class="text-center">
                        <img src="#" alt="Profile Picture" class="rounded-circle mt-3" width="100" height="100">
                    </div>
                    <div class="text-center">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span class="navbar-text">admin</span>
                            
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#">
                                        <i class="bi bi-sm bi-pencil-square"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="navbar-text">nama</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                </div>
                            </div>
                        </div>
                    </div>

                    <hr style="background-color: black;">
                    <li class="nav-item">
                        <a class="nav-link ps-2 " aria-current="page" href="dashboard"><i class="bi bi-house-door-fill"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 " href="datauser"><i class="bi bi-people-fill"></i> Data User</a>
                    </li>
                    <hr style="background-color: black;">
                    

            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="">
                Change Password
            </button>
        </div>
    </div>
</nav>
</body>
</html>