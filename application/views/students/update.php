<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Update Data
                </div>
                <div class="card-body">

                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $students['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $students['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nickname">Nickname</label>
                            <input type="text" name="nickname" class="form-control" id="nickname" value="<?= $students['nick']; ?>">
                            <small class="form-text text-danger"><?= form_error('nickname'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="study">Study Program</label>
                            <select class="form-control" id="study" name="study">
                                <?php foreach ($studies as $study) : ?>
                                    <?php if ($study["code"] == $students['code_study']) : ?>
                                        <option value="<?= $study["code"]; ?>" selected><?= $study["name"]; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $study["code"]; ?>"><?= $study["name"]; ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <a href="<?= base_url(); ?>" class="btn btn-info">&#8592; Back</a>
                        <button type="submit" name="update" class="btn btn-primary float-right">Update Data</button>
                    </form>
                </div>
            </div>



        </div>
    </div>

</div>