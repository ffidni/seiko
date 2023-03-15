<div class="container-xxl py-5">
    <div class="container mx-auto px-5">
        <h2 class="mb-4">
            <?= $article['title'] ?>
        </h2>

        <img src="<?= base_url('/assets/images/cara-kerja-di-jepang.jpg.webp') ?>" alt="detail-artikel"
            class="img-fluid mx-auto w-100" style="height: 320px; object-fit: cover; background-size: cover;">

        <div class="d-flex border-top">
            <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-user-tie text-primary me-2"></i>Admin</small>
            <small class="flex-fill text-center border-end py-2">
                <i class="fa fa-clock text-primary me-2"></i>
                <?= $article['date'] ?>
            </small>
        </div>
        <div class="mt-5">
            <?= $article['description'] ?>
        </div>
    </div>
</div>