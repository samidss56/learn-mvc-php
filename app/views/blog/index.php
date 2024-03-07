<?php
if (!session_id()) session_start();
require_once "../app/init.php";
$new = new App;
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Buat Artikel
            </button>
            <h3 class="mt-3">Blog</h3>
            <ul class="list-group">
                <?php foreach ($data["blog"] as $blog) : ?>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                        <?= $blog["judul"]; ?>
                        <a href="<?= BASE_URL; ?>/blog/detail/<?= $blog["id"]; ?>" class="btn btn-primary">baca</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Buat Artikel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/blog/tambah" method="post">
                    <div class="form-group">
                        <label for="penulis">Nama Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul Artikel</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="tulisan">Isi Artikel</label>
                        <textarea class="form-control" id="tulisan" rows="5" name="tulisan"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Artikel</button>
            </div>
            </form>
        </div>
    </div>