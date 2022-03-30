<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('contents') ?>
<style>
    .lnk-users {
        background: #f2f2f2;
        border-left: 2px solid #202b57;
    }
</style>

<table class="table table-bordered table-stripped">
    <thead>
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
</table>

<?= $this->endSection();
