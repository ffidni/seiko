<body>
    <header class="header">
        <section class="">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($carousels as $carousel): ?>
                        <div class="carousel-item active bg-image">
                            <img src="<?= base_url($carousel['cover_url']) ?>" class="d-block w-100 z-index-0" alt="...">
                            <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)"></div>
                            <div class="caption">
                                <h5 class="text-info text-uppercase mb-3 animated slideInDown">Lembaga Pelatihan Kerja
                                    Tasikmalaya</h5>
                                <h1 class="display-3">
                                    <?= $carousel['title'] ?>
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2 d-none d-md-block">
                                    <?= $carousel['sub_title'] ?>
                                </p>
                                <a class="btn btn-light py-md-3 px-md-5 animated slideInRight">JOIN NOW</a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </header>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="d-flex justify-content-center" style="margin-top: 10vh;">
                <div class="col-lg-4 wow fadeInUp me-5" data-wow-delay="0.1s"
                    style="min-height: 400px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-auto"
                            src="<?= base_url('assets/images/home2.jpg') ?>" alt="about-cover"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div>
                    <h3>Selamat datang di LPK Seiko!</h3>
                    <p>SSCI adalah lembaga pelatihan bahasa Jepang & Korea (Japanese & Korean Language Training Centre)
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0 fs-5"><i class="fa fa-arrow-right text-primary me-2"></i>Biaya Terjangkau</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0 fs-5"><i class="fa fa-arrow-right text-primary me-2"></i>Jaminan 100% Kerja
                            </p>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0 fs-5"><i class="fa fa-arrow-right text-primary me-2"></i>Pelatihan Intens</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0 fs-5"><i class="fa fa-arrow-right text-primary me-2"></i> Pendaftaran Mudah
                            </p>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0 fs-5"><i class="fa fa-arrow-right text-primary me-2"></i>Tips &amp; Trick</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0 fs-5"><i class="fa fa-arrow-right text-primary me-2"></i>Dukungan Kontak</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container">
                <h3 class="text-center">Instruktor Berpengalaman</h3>
                <div class="row g-4">
                    <?php foreach ($instructors as $instructor): ?>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="team-item bg-light">
                                <div class="overflow-hidden">

                                    <img class="img-fluid" src="<?= base_url($instructor['image_url']) ?>"
                                        alt="img-instructor">

                                </div>
                                <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                    <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                        <a class="btn btn-sm-square btn-primary mx-1" href="<?= $instructor['facebook'] ?>"
                                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href="<?= $instructor['instagram'] ?>"
                                            target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <h2 class="mb-0">
                                        <?= $instructor['nama'] ?>
                                    </h2>
                                    <p class="fs-5">
                                        <?= $instructor['jabatan'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

    </div>

</body>