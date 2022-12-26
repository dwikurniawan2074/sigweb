<?php
$csv = [
    'name' => 'csv',
    'id' => 'csv'
];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Submit',
    'class' => 'btn btn-primary',
    'type' => 'submit'
];
?>

<?= $this->extend('template/template_dashboard'); ?>

<?= $this->section('head'); ?>
<script src="<?= base_url('leaflet/leaflet.js'); ?>"></script>
<link rel="stylesheet" href="<?= base_url('leaflet/leaflet.css'); ?>">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="content-body ">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pilih Data</h4>
                        <?= form_open_multipart('KodeWilayah/import'); ?>
                        <?= form_upload($csv); ?>
                        <?= form_submit($submit); ?>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>