<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="<?= base_url('index2.html') ?>" class="h1"><b><?= $title; ?></b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="<?= base_url('index.html') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="mt-2 text-center">
                <a href="<?= base_url('Auth') ?>" class="text-center">I already have <b>an Account</b></a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->