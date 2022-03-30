<!doctype html>
<html>
<head>
    <title><?= 'Admin - '. esc($title) ?></title>
    <?= link_tag('css/bootstrap.min.css') ?>
    <?= link_tag('css/website/auth.css') ?>
</head>

<body>
    <div class="dv-base">
        <div class="dv-layout">
            <div class="dv-img">
                <?= img('images/icon.svg') ?>
            </div>

            <label class="label-admin">Admin Login</label>

            <?= view('pages/admin/login_form') ?>

        </div>
    </div>

<!-- Scripts -->
<?= script_tag('js/jquery.min.js') ?>
<?= script_tag('js/website/auth.js') ?>
</body>
</html>