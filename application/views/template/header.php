<head>
    <title>Seiko - Landing Page</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 Landing Page Template For Online Courses">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:800|Roboto:400,500,700&display=swap"
        rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?= base_url('assets/css/theme.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">


</head>
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" style="top: -100px;">
    <a href="<?= base_url('') ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="<?= base_url('/assets/images/logo_seiko.png') ?>" alt="logo-large" class="img-fluid my-2" width="120">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
            <a href="#" class="nav-item nav-link">Contact</a>
            <a href="<?= base_url('/artikel') ?>" class="nav-item nav-link">Artikel</a>
            <a href="/course/" class="nav-item nav-link">Courses</a>
        </div>
        <a href="<?= base_url('/login') ?>" class="btn btn-primary py-4 px-lg-5 d-block">Login<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>