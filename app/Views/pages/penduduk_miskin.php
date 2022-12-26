<?= $this->extend('template/template_dashboard'); ?>

<?= $this->section('head'); ?>
<script src="<?= base_url('leaflet/leaflet.js'); ?>"></script>
<link rel="stylesheet" href="<?= base_url('leaflet/leaflet.css'); ?>">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="content-body" >
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0">Penduduk Miskin</h4>
                        <div id="maps" style="height: 700px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    var map = L.map('maps').setView([-5.450000, 105.266670], 14);

    var marker = L.marker([-5.450000, 105.266670]).bindPopup('Hello Bandar Lampung').addTo(map);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>
<?= $this->endSection(); ?>