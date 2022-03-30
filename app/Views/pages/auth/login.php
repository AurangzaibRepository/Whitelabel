<?= $this->extend('layouts/auth.php') ?>

<?= $this->section('contents') ?>
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
                        <?= anchor('/auth/register', 'Signup', [
                            'class' => 'lnk-signup'
                        ]) ?>
                        </div>

                        <div class="mb-3 text-center">
                            <?= form_submit('login', 'Login', [
                                'id' => 'btn-login',
                                'class' => 'btn btn-primary',
                                'onClick' => 'return validateForm()'
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
