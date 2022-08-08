<?php

/** Template Name: Giriş Sayfası */
if (isset($_GET["actionType"])) {
    switch ($_GET["actionType"]) {
        case 'isEmpty':
            $err =  ["Lütfen tüm alanları doldurunuz."];
            break;
        case 'isError':
            $err =  ["Bu bilgilere ait kullanıcı bulunamadı."];
            break;
        default:
            if (isset($_SESSION["login_errors"]) && !empty($_SESSION["login_errors"]))
                $err =  $_SESSION["login_errors"];
            else
                $err =  ["Giriş işlemi sırasında bir problem oluştu."];
            break;
    }
    unset($_SESSION["login_errors"]);
}
?>
<!DOCTYPE html>

<html lang="tr">

<head>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/auth/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/auth/css/auth-theme.css">
</head>

<body>
    <div class="form-body without-side">
        <!-- <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="<?= get_template_directory_uri(); ?>/auth/images/kturgut.png" alt="">
                </div>
            </a>
        </div> -->
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <!-- <img src="<?= get_template_directory_uri(); ?>/auth/images/img3.png" alt=""> -->
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Kullanıcı Giriş Sayfası</h3>
                        <?php if (isset($err)) : ?>
                            <div class="alert alert-danger">
                                <?php foreach ($err as $msg) : ?>
                                    <?= $msg ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?= wp_login_form([
                            "label_log_in" => __("Giriş Yap"),
                            "remember" => false
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= get_template_directory_uri(); ?>/auth/js/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/auth/js/popper.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/auth/js/bootstrap.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/auth/js/main.js"></script>
</body>

</html>