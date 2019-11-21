    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tobin's q Data</h3>
          &nbsp
          &nbsp
          &nbsp
          <a href="<?= base_url()?>index.php/tobinsq_c/exportToExcel" class="badge bg-green">Export To Excel</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-bordered" >
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Kode</th>
                      <th>Tahun</th>
                      <th>List Share</th>
                      <th>Market Value</th>
                      <th>Assets</th>
                      <th>Piutang</th>
                      <th>Hutang</th>
                      <th>Modal</th>
                      <th>Pendapatan</th>
                      <th>EPS</th>
                      <th>ROA</th>
                      <th>ROE</th>
                      <th>DAR</th>
                      <th>DER</th>
                      <th>Tobin's Q</th>
                      <th>PBV</th>
                      <th>Closing Price</th>
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
                      <td><?= $value->tahun ?></td>
                      <td>Rp. <?= number_format($value->list_share, 2) ?></td>
                      <td>Rp. <?= number_format($value->closing_price*$value->list_share, 2) ?></td>
                      <td>Rp. <?= number_format($value->assets, 2) ?></td>
                      <td>Rp. <?= number_format($value->piutang, 2) ?></td>
                      <td>Rp. <?= number_format($value->hutang, 2) ?></td>
                      <td>Rp. <?= number_format($value->modal, 2) ?></td>
                      <td>Rp. <?= number_format($value->pendapatan, 2) ?></td>
                      <td>Rp. <?= number_format($value->eps, 2) ?></td>
                      <td><?= number_format($value->roa, 2) ?> %</td>
                      <td><?= number_format($value->roe, 2) ?> %</td>
                      <td><?= number_format($value->dar, 2) ?></td>
                      <td><?= number_format($value->der, 2) ?></td>
                      <td><?= round(($value->closing_price*$value->list_share) / $value->assets, 3) ?></td>
                      <td>Rp. <?= number_format($value->pbv, 2) ?></td>
                      <td>Rp. <?= number_format($value->closing_price, 2) ?></td>
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

