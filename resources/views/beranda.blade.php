<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

	<style>
	</style>
</head>
<body>
@extends('layouts.header')
@section('beranda')
@section('content')


<nav class="navbar navbar-expand  navbar-dark bg-primary sticky-top">
        <div class="container-lg">
            <a class="navbar-brand" href="#"><i class="bi bi-fire"></i>CutiPro</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                </ul>
            </div>
        </div>
    </nav>
    <!--End Header-->
    <div class="container-lg">
        <div class="row ">
            <!--Sidebar-->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link active link-light" aria-current="page" href="index.php"><i class="bi bi-house-door">
                                            </i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="/profile"><i class="bi bi-textarea-resize"></i> Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="/historyrecord"><i class="bi bi-layout-text-window-reverse"></i>History Record</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="help.php"><i class="bi bi-question-circle"></i> Pengajuan</a>
                                    </li>
									<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-menu mt-2">
							<li>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Log Out</button>
        </form>
    </li>
                        </ul>
                    </li>
							
									
                        </div>
                    </div>
                </nav>
            </div> 
            <!--End sidebar-->

            <!--content-->
            <div class="col-lg-9 mt-2">
                <div class="row">
				<div class="col-xl-3 col-md-2 mb-2">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">USER BULAN INI</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-user-plus fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-3 col-md-6 mb-2">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-success text-uppercase mb-1">USER AKTIF</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-user-check fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-3 col-md-6 mb-2">
					<div class="card border-left-info shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-info text-uppercase mb-1">USER NON AKTIF</div>
									<div class="row no-gutters align-items-center">
										<div class="col-auto">
											<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
										</div>

									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-user-times fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Pending Requests Card Example -->
				<div class="col-xl-3 col-md-6 mb-2">
					<div class="card border-left-warning shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL USER</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-users fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
                </div>
            </div>
            <!--End Content-->
        </div>

    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
	</body>
</html>