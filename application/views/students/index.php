<div class="container">
    <div class="flash-data " data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>students/add" class="btn btn-primary">Add New</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Find by fullname or nickname..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Find</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>List of Students Who Registered for The MLBB Pro Player Seminar</h3>
            <?php if (empty($students)) : ?>
                <div class="alert alert-danger" role="alert">
                    data not found or empty
                </div>
            <?php endif; ?>
            <ul class="list-group mb-5">
                <?php foreach ($students as $s) : ?>
                    <li class="list-group-item">
                        <?= $s['name'] ?>
                        <a href="<?= base_url(); ?>students/delete/<?= $s['id'] ?>" class="btn btn-danger float-right mr-1" onclick="return confirm('are you sure?');">delete</a>
                        <a href="<?= base_url(); ?>students/update/<?= $s['id'] ?>" class="btn btn-success float-right mr-1">update</a>
                        <a href="<?= base_url(); ?>students/detail/<?= $s['id'] ?>" class="btn btn-primary float-right mr-1">detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>