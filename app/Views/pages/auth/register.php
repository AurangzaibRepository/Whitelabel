<?= $this->extend('layouts/auth.php') ?>

<?= $this->section('contents') ?>
            <div>
                <?= form_open() ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                        <?= form_label('First Name', 'first_name') ?>
                        <?= form_input([
                            'name' => 'first_name',
                            'id' => 'first_name',
                            'class' => 'form-control'
                        ]) ?>
                        <span class="spn-error" id="error-fname">First Name required</span>
                        </div>

                        <div class="mb-3">
                        <?= form_label('Last Name', 'last_name') ?>
                        <?= form_input([
                            'name' => 'last_name',
                            'id' => 'last_name',
                            'class' => 'form-control'
                        ]) ?>
                        <span class="spn-error" id="error-lname">Last Name required</span>
                        </div>

                        <div class="mb-3 text-center">
                            <?= form_submit('register', 'Register', [
                                'class' => 'btn btn-primary',
                                'onClick' => 'return validateRegister()'
                            ]) ?>
                        </div>
                    </div>
                </div>

                <?= form_close() ?>
            </div>
<?= $this->endSection() ?>
  
<?= $this->section('scripts') ?>
 
<?= script_tag('js/website/auth.js') ?>

 <?= $this->endSection() ?>
