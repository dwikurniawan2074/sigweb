<?= $this->extend('template/template_dashboard'); ?>

<?= $this->section('content'); ?>

<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3 mb-3">
                            <div class="col-lg-10">
                                <h4 class="card-title">Kode Wilayah</h4>
                            </div>
                            <div class="col-lg-2">
                                <a href="<?= site_url('KodeWilayah/import'); ?>" class="btn btn-primary">Tambah Data</a>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Wilayah</th>
                                        <th>Nama Wilayah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kodeWilayah as $key => $value) : ?>
                                        <tr>
                                            <td><?= $key + 1; ?></td>
                                            <td><?= $value->kode_wilayah; ?></td>
                                            <td><?= $value->nama_wilayah; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>