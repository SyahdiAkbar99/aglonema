<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45" id="contact">
    <!-- <div class="flex-c-t p-b-50">
        <div class="w-size4 p-t-30 p-l-15 p-r-15 respon6">
            <h4 class="s-text12" style="display: inline-block;">
                Kontak
            </h4>
            <h6 class="s-text11 p-b-30">
                Kirim saranmu disini
            </h6>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="fullname" placeholder="Nama Lengkap">
                    <span class="effect1-line"></span>
                </div>
                <div class="p-b-15"></div>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@contoh.com">
                    <span class="effect1-line"></span>
                </div>
                <div class="p-b-15"></div>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="no_telp" placeholder="No Telpon">
                    <span class="effect1-line"></span>
                </div>
                <div class="p-b-15"></div>
                <div class="effect1 w-size9">
                    <textarea class="s-text7 bg6 w-full p-b-5" type="text" name="pesan" placeholder="Pesan"></textarea>
                    <span class="effect1-line"></span>
                </div>
                <div class="p-b-15"></div>

                <div class="w-size2 p-t-20"> -->
    <!-- Button -->
    <!-- <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div> -->

    <div class="t-center p-l-15 p-r-15">
        <div class="t-center s-text8 p-t-20">
            Copyright © 2021 All rights reserved.
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/user/js/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/user/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/user/js/popper.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/user/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/user/js/select2.min.js') ?>"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/user/js/slick.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/user/js/slick-custom.js') ?>"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/user/js/countdowntime.js') ?>"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/user/js/lightbox.min.js') ?>"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/user/js/sweetalert.min.js') ?>"></script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>

<!--===============================================================================================-->
<script src="<?= base_url('assets/user/js/main.js') ?>"></script>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>

<script src="<?= base_url('assets/user/js/script.js'); ?>"></script>
<script type="text/javascript">
    //Button Export Data Tanaman Menu
    $(document).ready(function() {
        $('#data-users').DataTable({
            dom: 'rtip',
            autoWidth: true,
        });
    });

    $(document).on('click', '#id_produk', function(e) {
        document.getElementById("ids").value = $(this).attr('data-ids');
        document.getElementById("nama").value = $(this).attr('data-nama');
        document.getElementById("lokasi").value = $(this).attr('data-lokasi');
        document.getElementById("biaya").value = $(this).attr('data-biaya');
        document.getElementById("biaya_admin").value = $(this).attr('data-biaya_a');
        $('#modal').modal('hide');
    });
</script>
</body>

</html>