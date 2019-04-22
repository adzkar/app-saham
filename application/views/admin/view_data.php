    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tobin's q Data</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Kode</th>
                    <th>Closing Price</th>
                    <th>List Share</th>
                    <th>Market Value</th>
                    <th>Debt</th>
                    <th>Assets</th>
                    <th>Tobin's Q</th>
                    <th style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                    if (!$data->count()) {
                      echo "<tr><td colspan='9' class='text-center'>Empty</td></tr>";
                    } else {
                      $no = 1;
                      foreach ($data as $value) {
                  ?>
                  <tr>
                    <td><?= $no ?>.</td>
                    <td><?= $value->kode ?></td>
                    <td><?= number_format($value->closing_price, 2) ?></td>
                    <td>Rp. <?= number_format($value->list_share, 2) ?></td>
                    <td>Rp. <?= number_format($value->closing_price*$value->list_share, 2) ?></td>
                    <td>Rp. <?= number_format($value->debt, 2) ?></td>
                    <td>Rp. <?= number_format($value->assets, 2) ?></td>
                    <td><?= round(($value->closing_price*$value->list_share + $value->debt) / $value->assets, 3) ?></td>
                    <td>
                      <a href="<?= base_url() ?>index.php/admin/edittobinsq/<?= $value->id ?>">
                        <span class="badge bg-blue">Edit</span>
                      </a>
                      <a href="<?= base_url() ?>index.php/tobinsq_c/delete/<?= $value->id ?>">
                        <span class="badge bg-red">Delete</span> 
                      </a>
                    </td>
                  </tr>
                  <?php  
                        $no++;
                      } // foreach    
                    } // else
                  ?>
                </tbody>
              </table>
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

