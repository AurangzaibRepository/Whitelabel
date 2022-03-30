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

            <div>
                <?= form_open() ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                        <?= form_label('Email', 'email') ?>
                        <?= form_input([
                            'name' => 'email',
                            'id' => 'email',
                            'class' => 'form-control'
                        ]) ?>
                        </div>
                        <div class="mb-3">
                        <?= form_label('Password', 'password') ?>
                        <?= form_input([
                            'name' => 'password',
                            'id' => 'password',
                            'type' => 'password',
                            'class' => 'form-control'
                        ]) ?>
                        </div>
                    </div>

                </div>

                <?= form_close() ?>
            </div>

        </div>
    </div>
</body>

</html>