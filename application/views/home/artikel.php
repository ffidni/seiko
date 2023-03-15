<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="section-title bg-white text-center text-primary px-3">Seiko Sukapura</h6>
            <h1 class="mb-5">Daftar Artikel</h1>
        </div>
        <div class="row g-4 justify-content-center">

            <?php foreach ($articles as $article): ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">

                            <img class="img-fluid" src="<?= base_url('/assets/images/cara-kerja-di-jepang.jpg.webp') ?>"
                                alt="thumbnail">

                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="<?= base_url('/artikel/' . $article['link']) ?>"
                                    class="flex-shrink-0 btn btn-sm btn-primary px-3 border" style="border-radius: 30px;">
                                    Read More
                                </a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">
                                <?= $article['title'] ?>
                            </h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>Admin</small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-clock text-primary me-2"></i>
                                <?= $article['date'] ?>
                            </small>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</div>