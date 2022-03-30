<!doctype html>
<html>

<head>
    <title><?= esc($title) ?>
    </title>
    <?= link_tag('css/bootstrap.min.css') ?>
    <?= link_tag('css/website/main.css') ?>

    <!-- Scripts -->
    <?= script_tag('js/jquery.min.js') ?>
</head>

<body>
    <div class="dv-base">
        <div class="dv-top">
            <label>School Of Whales</label>
        </div>
        <div class="dv-layout">
            <div class="dv-leftmenu">
                <div class="dv-logo">
                    <?= img('images/icon.svg') ?>
                </div>

                <?= view('layouts/website_left_menu') ?>

            </div>
            <div class="dv-contents">
                <?= $this->renderSection('contents') ?>
            </div>
        </div>
    </div>
</body>

</html>