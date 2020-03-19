<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 mb-3 text-gray-800"><?= $title ?></h1>
        <a href="<?= base_url('admin/unit') ?>"><button class="btn-icon btn btn-primary"><i class="fas fa-arrow-circle-left"></i></button></a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('admin/unit_update/') . $unit['id'] ?>" method="post">
                        <input type="hidden" name="id" value="<?= $unit['id'] ?>">
                        <div class="input-group mb-3 row">
                            <label class="col-sm-4">Id Skema</label>
                            <div class="col-sm-8">
                                <select name="id_skema" class="form-control">
                                    <?php foreach ($id_skema as $item) :  ?>
                                        <option value="<?= $item['id_skema'] ?>"><?= $item['judul_skema'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="input-group mb-3 row">
                            <label class="col-sm-4">Id Unit</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_unit" value="<?= $unit['id_unit'] ?>">
                                <?= form_error('id_unit') ?>
                            </div>
                        </div>
                        <div class="input-group mb-3 row">
                            <label class="col-sm-4">Judul Unit</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="judul_unit" value="<?= $unit['judul_unit'] ?>">
                                <?= form_error('judul_unit') ?>
                            </div>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary mr-4">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>