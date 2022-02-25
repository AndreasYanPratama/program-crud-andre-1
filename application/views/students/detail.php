<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $students['name']; ?></h5>
                    <h6 class="card-subtitle sb-2 text-muted"><?= $students['nick']; ?></h6>
                    <p class="card-text mt-3">Study Program = <?= $students['study']; ?></p>
                    <a href="<?= base_url(); ?>" class="btn btn-info">&#8592; Back</a>
                </div>
            </div>

        </div>
    </div>
</div>