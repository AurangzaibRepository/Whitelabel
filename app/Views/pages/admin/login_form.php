<div>
    <?= form_open('/adminauth/login') ?>

    <?php if (session()->has('success')): ?>

    <div class="alert alert-success"><?= session()->getFlashdata('success') ?>
    </div>
    <?php endif ?>

    <?php if (session()->has('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?>
    </div>
    <?php endif ?>

    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <?= form_label('Email', 'email') ?>
                <?= form_input([
                'name' => 'email',
                'id' => 'email',
                'class' => 'form-control'
            ]) ?>
                <span class="spn-error" id="error-email">Email required</span>
            </div>

            <div class="mb-3">
                <?= form_label('Password', 'password') ?>
                <?= form_input([
                'name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'class' => 'form-control'
            ]) ?>
                <span class="spn-error" id="error-password">Password required</span>
            </div>

            <div class="mb-3 text-center">
                <?= form_submit('login', 'Login', [
                    'class' => 'btn btn-primary',
                    'onClick' => 'return validateForm()'
                ]) ?>
            </div>
        </div>
    </div>

    <?= form_close() ?>
</div>