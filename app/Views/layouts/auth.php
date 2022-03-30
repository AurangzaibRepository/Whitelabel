<!doctype html>
<html>

<head>
    <title><?= esc($title) ?>
    </title>
    <?= link_tag('css/bootstrap.min.css') ?>
    <?= link_tag('css/website/auth.css') ?>
</head>

<body>
<div class="dv-base">
        <div class="dv-layout">
            <div class="dv-img">
                <?= img('images/icon.svg') ?>
            </div>
            
            <?= $this->renderSection('contents') ?>
</div>
</div>

<!-- Scripts -->
<?= script_tag('js/jquery.min.js') ?>
<?= $this->renderSection('scripts') ?>
</body>
</html>