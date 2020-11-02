<!-- Header -->
<header id="header-web">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">
            <img src="assets/img/Frame.png" alt="" class="ml-5">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form id="form-search" method="#" class="col-lg-7 ml-lg-5 mr-lg-auto px-0 px-lg-2">
                <div class="input-with-icon">
                    <img class="input-icon" src="assets/img/icon-search.svg" alt="">
                    <input name="keyword" load-key="" type="text" autocomplete="off"
                        placeholder="Temukan Event, Wahana Wisata , Virtual Tour, Lain-lain.">
                    <ul class="dropdown-menu">
                        <li class="result-template d-none">
                            <a class="event-list-link" href="#">
                                <div class="event-list">
                                    <div class="event-list-title">Event Title</div>
                                    <div class="event-list-address">Event Address</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </form>
            <button type="button" class="btn btn-login"> <i class="fa fa-sign-in"></i> Login</button>
        </div>
    </nav>
    <!-- akhir navbar -->
    <!-- menu utama -->
    <nav id="menu-utama" class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container d-flex justify-content-between">
            <div class="collapse navbar-collapse" id="nav-main">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img class="nav-icon" src="assets/img/icon-attraction.svg" alt="">Attraction
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img class="nav-icon" src="assets/img/icon-event.svg" alt="">Event
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img class="nav-icon" src="assets/img/icon-virtual-tour.svg"
                                alt="Virtual Tour Indonesia">Virtual Tour
                            <span class="badge badge-primary bg-brand-1 ml-2">New</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="pilihKota" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img class="nav-icon" src="assets/img/icon-location.svg" alt="">
                            Semarang
                        </a>
                        <div id="#" class="dropdown-menu py-4" aria-labelledby="#">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link btn-buat-tiket">
                            <img src="assets/img/icon-plus.svg" alt="" class="nav-icon">
                            Buat Tiket
                        </a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link text-left bg-brand-2" href="/auth/login?fallback=%2F">
                            <i class="nav-link-icon ion-log-in"></i>Login </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir menu utama -->
</header>
<!-- akhir header -->
