<!doctype html>
<html>

<head>
    <title><?= esc($title) ?>
    </title>
    <?= link_tag('css/website/auth.css') ?>
</head>

<body>
    <div class="dv-base">
        <div class="dv-layout">
            <div class="dv-img">
                <?= img('images/icon.svg') ?>
            </div>

            <div>
                <?= form_open() ?>
                <div class="row">
                    <div class="col-md-12">
                        <?= form_label('Email', 'email') ?>
                        <?= form_input([
                            'name' => 'email',
                            'id' => 'email',
                            'class' => 'form-control'
                        ]) ?>
                    </div>
                    
                </div>

                <?= form_close() ?>
            </div>

        </div>
    </div>
</body>

</html>