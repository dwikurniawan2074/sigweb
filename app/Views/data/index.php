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
                                <h4 class="card-title">Data Peta</h4>
                            </div>
                            <div class="col-lg-2">
                                <a href="<?= site_url('Data/import'); ?>" class="btn btn-primary">Tambah Data</a>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Master Data</th>
                                        <th>Nama Wilayah</th>
                                        <th>Nilai Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data->getResult() as $key => $value) : ?>
                                        <tr>
                                            <td><?= $key + 1; ?></td>
                                            <td><?= $value->nama; ?></td>
                                            <td><?= $value->nama_wilayah; ?></td>
                                            <td><?= $value->nilai; ?></td>
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