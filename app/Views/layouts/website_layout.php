<!doctype html>
<html>

<head>
    <title><?= esc($title) ?>
    </title>
    <?= link_tag('css/website/main.css') ?>
</head>

<body>
    <div class="dv-base">
        <div class="dv-top">
            <?= $this->renderSection('contents') ?>
        </div>
    </div>
</body>

</html>