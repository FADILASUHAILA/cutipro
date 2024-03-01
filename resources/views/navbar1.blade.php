<!-- <nav class="navbar navbar-expand  navbar-dark bg-danger sticky-top">
    <div class="container-lg">
        <a class="navbar-brand" href="#"><i class="bi bi-fire"></i>CutiPro</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
            </ul>
        </div>
    </div>
</nav> -->

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
                                    <a class="nav-link active link-light" aria-current="page" href="/superadmin"><i class="bi bi-house-door">
                                        </i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-dark" href=""><i class="bi bi-textarea-resize"></i> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-dark" href=""><i class="bi bi-layout-text-window-reverse"></i>History Record</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-dark" href="/aproval"><i class="bi bi-question-circle"></i> Aproval</a>
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
        <div class="col-lg-9 mt-3">