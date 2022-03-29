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
            <label>School Of Whales</label>
        </div>
        <div class="dv-layout">
            <div class="dv-leftmenu">

            </div>
            <div class="dv-contents">
                <?= $this->renderSection('contents') ?>
            </div>
        </div>
    </div>
</body>

</html>