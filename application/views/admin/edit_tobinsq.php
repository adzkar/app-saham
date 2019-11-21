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
                <input type="text" class="form-control" placeholder="Kode" name="kode" style="width: 40%" maxlength="4" value="<?= $data->kode?>">
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="closing price">Tahun</label>
                  <div class="input-group"  style="width: 80%">
                    <input type="text" class="form-control" placeholder="Tahun" name="tahun" value="<?= $data->tahun ?>">
                  </div><br>
                  <label for="closing price">Closing Price</label>
                  <div class="input-group"  style="width: 80%">
                    <input type="text" class="form-control" placeholder="Closing Price" name="closing_price" value="<?= $data->closing_price?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">List Share</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">Rp.</span>
                    <input type="text" class="form-control" placeholder="List Share" name="list_share" value="<?= $data->list_share?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">Assets</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">Rp.</span>
                    <input type="text" class="form-control" placeholder="Assets" name="assets" value="<?= $data->assets?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">Piutang</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">Rp.</span>
                    <input type="text" class="form-control" placeholder="Piutang" name="piutang" value="<?= $data->piutang?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">Hutang</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">Rp.</span>
                    <input type="text" class="form-control" placeholder="Hutang" name="hutang" value="<?= $data->hutang?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">Modal</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">Rp.</span>
                    <input type="text" class="form-control" placeholder="Modal" name="modal" value="<?= $data->modal?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  
                </div>
                <div class="col-md-6">
                  <label for="closing price">Pendapatan</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">Rp.</span>
                    <input type="text" class="form-control" placeholder="Pendapatan" name="pendapatan" value="<?= $data->pendapatan?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">EPS</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">Rp.</span>
                    <input type="text" class="form-control" placeholder="EPS" name="eps" value="<?= $data->eps?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">ROA</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">%</span>
                    <input type="text" class="form-control" placeholder="ROA" name="roa" value="<?= $data->roa?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">ROE</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">%</span>
                    <input type="text" class="form-control" placeholder="ROE" name="roe" value="<?= $data->roe?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">DAR</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">X</span>
                    <input type="text" class="form-control" placeholder="DAR" name="dar" value="<?= $data->dar?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">DER</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">X</span>
                    <input type="text" class="form-control" placeholder="DER" name="der" value="<?= $data->der?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  <label for="closing price">PBV</label>
                  <div class="input-group"  style="width: 80%">
                    <span class="input-group-addon">X</span>
                    <input type="text" class="form-control" placeholder="PBV" name="pbv" value="<?= $data->pbv?>">
                    <span class="input-group-addon">.00</span>
                  </div><br>
                  
                </div>
              </div>
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

