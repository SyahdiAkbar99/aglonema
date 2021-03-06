<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <?php foreach ($data_banner as $dtbnr) : ?>
                <?php $no = 1; ?>
                <div class="item-slick1 item1-slick<?= $no; ?>" style="background-image: url(<?= base_url('assets/admin/img/data/admin/banner/') . $dtbnr['image']; ?>);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                            <?= $dtbnr['nama']; ?>
                        </span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            <?= $dtbnr['deskripsi']; ?>
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="<?= base_url('') ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <?php $no++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
    <div class="container">
        <!-- Product -->
        <div class="row p-3">
            <?php foreach ($data_tanam as $dattnm) : ?>
                <?php $no = 1; ?>
                <?php if ($dattnm['urutan'] % 2 == 1) : ?>
                    <div class="row d-flex justify-content-start">
                        <div class="col-lg-7 pb-5">
                            <div class="d-flex justify-content-start">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex flex-row">
                                            <div class="col-lg-1">
                                                <div class="card" style="border: none;">
                                                    <div class="card-body">
                                                        <h4 class="text-center">
                                                            <?= $dattnm['urutan']; ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card text-center" style="border: none;">
                                                    <div class="card-body">
                                                        <img src="<?= base_url('assets/admin/img/data/admin/penanaman/') . $dattnm['image']; ?>" class="img-fluid img-thumbnail text-center" style="width: 10rem;" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 bg-light">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="text-center"><?= $dattnm['deskripsi']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="row d-flex justify-content-end">
                        <div class="col-lg-7 col-lg-offset-6 pb-5">
                            <div class="d-flex justify-content-end">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex flex-row">
                                            <div class="col-lg-1">
                                                <div class="card" style="border: none;">
                                                    <div class="card-body">
                                                        <h4 class="text-center">
                                                            <?= $dattnm['urutan']; ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card text-center" style="border: none;">
                                                    <div class="card-body">
                                                        <img src="<?= base_url('assets/admin/img/data/admin/penanaman/') . $dattnm['image']; ?>" class="img-fluid img-thumbnail text-center" style="width: 10rem;" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 bg-light">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="text-center"><?= $dattnm['deskripsi']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $no++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Produk Lainnya
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                <?php foreach ($data_product as $datprd) : ?>
                    <?php $no = 1; ?>
                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="<?= base_url('assets/admin/img/data/seller/tanaman/') . $datprd['image']; ?>" alt="IMG-PRODUCT">

                                <div class="block2-overlay trans-0-4">
                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        <a href="<?= base_url('Buyer'); ?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" role="button">
                                            Masukkan Ke Keranjang
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20">
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    <?= $datprd['nama']; ?>
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    <?= "Rp " . number_format($datprd['harga'], 2, ',', '.'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>