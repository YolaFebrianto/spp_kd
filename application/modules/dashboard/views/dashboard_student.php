<div class="row">
  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Sisa Tagihan Bulanan</p>
              <h5 class="font-weight-bolder">
              <?php echo 'Rp. ' . number_format($total_bulan, 0, ',', '.') ?>
              </h5>
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder"></span>
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
              <i class="fa fa-dollar text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Sisa Tagihan Lainnya</p>
              <h5 class="font-weight-bolder">
              <?php echo 'Rp. ' . number_format($total_bebas-$total_bebas_pay, 0, ',', '.') ?>
              </h5>
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder"></span>
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fa fa-money text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card ">
      <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between">
          <h6 class="mb-2">Informasi</h6>
        </div>
      </div>
      <div class="card-body p-3">
        <ul class="list-group">
        <?php
          $i = 1;
          foreach ($information as $row):
            ?>
          <?php //echo ($i == 1) ? 'active' : ''; ?>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-mobile-button text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm"><?php echo $row['information_title'] ?></h6>
                <span class="text-xs"><?php echo strip_tags(character_limiter($row['information_desc'], 250)) ?></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
            <?php
            $i++;
          endforeach;
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>