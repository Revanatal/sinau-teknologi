<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    <!-- CSS files -->
    <link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/dist/img/asu.jpeg">
    <style>
        body {
            display: none;
        }
    </style>
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                <!-- <a href="."><img src="<?= base_url(); ?>assets/static/logo.svg" height="36" alt=""></a> -->
                <img src="<?= base_url(); ?>assets/dist/img/asu.jpeg" alt="" class="d-inline-block">
                <h1>Sinau Teknologi</h1>
                <small class="text-muted">by <strong>XI RPL A</strong></small>
            </div>
            <?= form_open('', ['class' => 'card card-md', 'autocomplete' => 'off']); ?>
            <div class="card-body">
                <?= $this->session->flashdata('msg'); ?>
                <h2 class="card-title text-center mb-4">Register akun baru</h2>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input autofocus onfocus="this.select()" value="<?= set_value('fullname'); ?>" name="fullname" type="text" class="form-control" placeholder="Masukan Nama Lengkap">
                    <?= form_error('fullname'); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input value="<?= set_value('username'); ?>" name="username" type="text" class="form-control" placeholder="Masukan Username">
                    <?= form_error('username'); ?>
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <div class="input-group input-group-flat">
                        <input name="password" type="password" class="form-control" placeholder="Masukan Password" autocomplete="off" id="password">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip"><svg id="eye" onclick="toggle()" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                            </a>
                        </span>
                    </div>
                    <script>
                            var state= false;
                            function toggle(){
                                if(state){
                                    document.getElementById(
                                    "password").setAttribute("type","password");
                                    document.getElementById("eye").style.color='#7a797e';
                                    state = false;
                                } else {
                                    document.getElementById(
                                    "password").setAttribute("type","text");
                                    state = true;
                                }
                            }
                        </script>
                    <?= form_error('password'); ?>
                </div>
                <div class="mb-2">
                    <label class="form-label">Ulangi Password</label>
                    <div class="input-group input-group-flat">
                        <input name="password2" type="password" class="form-control" placeholder="Ulangi Password" autocomplete="off" id="password1">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip"><svg id="eye1" onclick="togglee()" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                            </a>
                        </span>

                    </div>
                    <script>
                            var state= false;
                            function togglee(){
                                if(state){
                                    document.getElementById(
                                    "password1").setAttribute("type","password");
                                    document.getElementById("eye1").style.color='#7a797e';
                                    state = false;
                                } else {
                                    document.getElementById(
                                    "password1").setAttribute("type","text");
                                    state = true;
                                }
                            }
                        </script>
                     
                    <?= form_error('password2'); ?>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </div>
            </div>
            <?= form_close(); ?>
            <div class="text-center text-muted mt">
                Sudah punya akun? <a href="<?= base_url("signin"); ?>" tabindex="-1">Login</a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="<?= base_url(); ?>assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tabler Core -->
    <script src="<?= base_url(); ?>assets/dist/js/tabler.min.js"></script>
    <script>
        document.body.style.display = "block"
    </script>
</body>

</html>