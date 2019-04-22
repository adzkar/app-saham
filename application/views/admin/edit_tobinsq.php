    <!-- Main content -->
    <section class="content">
      <?php  
      if ($this->session->flashdata('errors')) {
      ?>
      <div class="alert alert-danger" >
        <strong>Errors!</strong><br>  
        <?= $this->session->flashdata('errors') ?>
        </div>
      <?php  
        }
      ?>
      <?php  
        if ($this->session->flashdata('success')) {
      ?>
      <div class="alert alert-success" >
        <strong>Success!</strong><br>
        <?= $this->session->flashdata('success') ?>  
      </div>
      <?php  
        }
      ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Insert Data</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <div class="col-6">
            <form action="<?= base_url() ?>index.php/tobinsq_c/update/<?= $data->id ?>" method="post">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Kode" name="kode" style="width: 40%" maxlength="4" value="<?= $data->kode?>" readonly>
              </div>
              <br>
              <label for="closing price">Closing Price</label>
              <div class="input-group"  style="width: 40%">
                <input type="text" class="form-control" placeholder="Closing Price" name="closing_price" value="<?= $data->closing_price?>">
                <span class="input-group-addon">.00</span>
              </div><br>
              <label for="closing price">List Share</label>
              <div class="input-group"  style="width: 40%">
                <span class="input-group-addon">Rp.</span>
                <input type="text" class="form-control" placeholder="List Share" name="list_share" value="<?= $data->list_share?>">
                <span class="input-group-addon">.00</span>
              </div><br>
              <label for="closing price">Debt</label>
              <div class="input-group"  style="width: 40%">
                <span class="input-group-addon">Rp.</span>
                <input type="text" class="form-control" placeholder="Debt" name="debt" value="<?= $data->debt?>">
                <span class="input-group-addon">.00</span>
              </div><br>
              <label for="closing price">Assets</label>
              <div class="input-group"  style="width: 40%">
                <span class="input-group-addon">Rp.</span>
                <input type="text" class="form-control" placeholder="Assets" name="assets" value="<?= $data->assets?>">
                <span class="input-group-addon">.00</span>
              </div><br>

              <button type="reset" class="btn btn-warning">Reset</button>
              <button type="submit" class="btn btn-primary">Update</button>

            </form>
              
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Tobin's q Data
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

