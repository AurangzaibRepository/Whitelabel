<?= $this->extend('layouts/website_layout') ?>

<?= $this->section('contents') ?>
<style>
    .lnk-profile {
        background: #f2f2f2;
        border-left: 2px solid #202b57;
    }
</style>

<?= form_open('home/update') ?>

    <?php if (session()->has('success')): ?>
        <div class="alert alert-success"> <?= session()->get('success') ?></div>
    <?php endif ?>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <?= form_label('First Name', 'first_name') ?>
                <?= form_input([
                    'name' => 'first_name',
                    'id' => 'first_name',
                    'value' => $data['first_name'],
                    'class' => 'form-control'
                ]) ?>
                <span class="spn-error" id="error-fname">First name required</span>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <?= form_label('Last Name', 'last_name') ?>
                <?= form_input([
                    'name' => 'last_name',
                    'id' => 'last_name',
                    'value' => $data['last_name'],
                    'class' => 'form-control'
                ]) ?>
                <span class="spn-error" id="error-lname">Last name required</span>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <?= form_label('Email', 'email') ?>
                <?= form_input([
                    'name' => 'email',
                    'id' => 'email',
                    'value' => $data['email'],
                    'class' => 'form-control'
                ]) ?>
                <span class="spn-error" id="error-email">Email required</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-end">
        <?= form_submit('save', 'Save', [
            'class' => 'btn btn-primary',
            'onClick' => 'return validateForm()'
        ]) ?>
        </div>
    </div>

<?= form_close() ?>

<!-- Scripts -->
<?= script_tag('js/website/profile.js') ?>

<?= $this->endSection() ?>
