<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Add New Student
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Nickname</label>
                            <input type="text" name="nickname" class="form-control" id="nickname">
                            <small class="form-text text-danger"><?= form_error('nickname'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="study">Study Program</label>
                            <select class="form-control" id="study" name="study">
                                <?php foreach ($studies as $study) : ?>
                                    <option value="<?= $study["code"]; ?>"><?= $study["name"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <a href="<?= base_url(); ?>" class="btn btn-info">&#8592; Back</a>
                        <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>