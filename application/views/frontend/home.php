<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header pb-0">
				<div class="d-flex align-items-center">
					<p class="mb-0">Cek Data Pembayaran Siswa</p>
				</div>
			</div>
			<div class="card-body">
				<?php echo form_open(current_url(), array('class' => 'form-horizontal', 'method' => 'get')) ?>
				<div class="form-group" style="margin-bottom:0;">
					<div class="row" style="margin-bottom:0;">
						<label for="" class="col-sm-4 col-lg-1 col-md-1 control-label">Tahun Ajaran</label>
						<div class="col-sm-4 col-lg-2 col-md-2">
							<select class="form-control" name="n">
								<!-- <option value="">-- Tahun Ajaran --</option> -->
								<?php foreach ($period as $row): ?>
								<option <?php echo (isset($f['n']) AND $f['n'] == $row['period_id']) ? 'selected' : '' ?> value="<?php echo $row['period_id'] ?>"><?php echo $row['period_start'].'/'.$row['period_end'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<label for="" class="col-sm-4 col-lg-1 col-md-1 control-label">Cari Siswa</label>
						<div class="col-sm-4 col-lg-2 col-md-2">
							<input type="text" autofocus name="r" <?php echo (isset($f['r'])) ? 'placeholder="'.$f['r'].'"' : 'placeholder="NIS Siswa"' ?> class="form-control" required>
						</div>
						<div class="col-sm-4 col-lg-4 col-md-3">
							<button type="submit" class="btn btn-success"><i class="fa fa-search"> </i> Cari Siswa</button>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div><br>
<?php
if ($f) {
	if (empty(@$siswa)) {
		echo '<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header pb-0">
							<div class="d-flex align-items-center">
								<p class="mb-0">Data Siswa dengan NIS <b>"'.@$f['r'].'"</b> Tidak Ditemukan!</p>
							</div>
						</div>
						<div class="card-body">
						</div>
					</div>
				</div>
			</div>';
	} else {
?>
<div class="row">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header pb-0">
				<div class="d-flex align-items-center">
					<p class="mb-0">Informasi Siswa</p>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive p-0">
					<table class="table align-items-center mb-0">
						<tbody>
							<tr>
								<td width="200">Tahun Ajaran</td><td width="4">:</td>
								<?php foreach ($period as $row): ?>
								<?php echo (isset($f['n']) AND $f['n'] == $row['period_id']) ? 
								'<td><strong>'.$row['period_start'].'/'.$row['period_end'] .'<strong></td>' : '' ?> 
								<?php endforeach; ?>
							</tr>
							<?php foreach ($siswa as $row): ?>
							<tr>
								<td>NIS</td>
								<td>:</td>
								<?php echo (isset($f['n']) AND $f['r'] == $row['student_nis']) ? 
								'<td>'.$row['student_nis'].'</td>' : '' ?>
							</tr>
							<tr>
								<td>Nama Siswa</td>
								<td>:</td>
								<?php echo (isset($f['n']) AND $f['r'] == $row['student_nis']) ? 
								'<td>'.$row['student_full_name'].'</td>' : '' ?>
							</tr>
							<tr>
								<td>Nama Ibu Kandung</td>
								<td>:</td>
								<?php echo (isset($f['n']) AND $f['r'] == $row['student_nis']) ?  
								'<td>'.$row['student_name_of_mother'].'</td>' : '' ?>
							</tr>
							<tr>
								<td>Kelas</td>
								<td>:</td>
								<?php echo (isset($f['n']) AND $f['r'] == $row['student_nis']) ? 
								'<td>'.$row['class_name'].'</td>' : '' ?> 
							</tr>
							<?php if (majors()=='senior') { ?>
							<tr>
								<td>Program Keahlian</td>
								<td>:</td>
								<?php echo (isset($f['n']) AND $f['r'] == $row['student_nis']) ? 
								'<td>'.$row['majors_name'].'</td>' : '' ?>
							</tr>
							<?php } ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-header pb-0">
				<div class="d-flex align-items-center">
					<p class="mb-0">Tagihan Bulanan</p>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive p-0">
					<table class="table align-items-center mb-0">
						<thead>
							<tr>
								<th class="text-uppercase text-primary text-sm font-weight-bolder opacity-7 text-center" width="80px">No.</th>
								<th class="text-uppercase text-primary text-sm font-weight-bolder opacity-7 ps-2">Jenis Pembayaran</th>
								<th class="text-uppercase text-primary text-sm font-weight-bolder opacity-7 ps-2">Total Tagihan</th>
								<th class="text-uppercase text-primary text-sm font-weight-bolder opacity-7 ps-2">Sudah Dibayar</th>
								<th class="text-center text-uppercase text-primary text-sm font-weight-bolder opacity-7">Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i =1;
							foreach ($student as $row):
								$namePay = $row['pos_name'].' - T.A '.$row['period_start'].'/'.$row['period_end'];
								if (isset($f['n']) AND $f['r'] == $row['student_nis']) {
							?>
								<tr data-toggle="collapse" data-target="#demo" style="color:<?php echo ($total == $pay) ? '#00E640' : 'red' ?>">
									<td><?php echo $i ?></td>
									<td><?php echo $namePay ?></td>
									<td><?php echo 'Rp. ' . number_format($total - $pay, 0, ',', '.') ?></td>
									<td><?php echo 'Rp. ' . number_format($pay, 0, ',', '.') ?></td>
									<td><label class="badge badge-sm <?php echo ($total == $pay) ? 'bg-gradient-success' : 'bg-gradient-warning' ?>"><?php echo ($total == $pay) ? 'Lengkap' : 'Belum Lengkap' ?></label></td>
								</tr>
							<?php 
								}
								$i++;
							endforeach; 
							?> 
						</tbody>
						<tbody id="demo" class="collapse">
							<tr>
								<th>No.</th> 
								<th>Bulan</th>
								<th>Tahun</th>
								<th>Tagihan</th>
								<th style="text-align: center;">Status</th>
							</tr>  
							<?php 
								$i =1;
								foreach ($bulan as $row): 
									$mont = ($row['month_month_id']<=6) ? $row['period_start'] : $row['period_end'];
							?>
								<tr style="color:<?php echo ($row['bulan_status'] == 1) ? '#00E640' : 'red' ?>">              
									<td><?php echo $i; ?></td>
									<td><?php echo $row['month_name'] ?></td>
									<td><?php echo $mont ?></td>
									<td><?php echo 'Rp. ' . number_format($row['bulan_bill'], 0, ',', '.') ?></td>
									<td colspan="2" style="text-align: center;">
									<?php echo ($row['bulan_status'] == 1) ? 'Lunas' : 'Belum Lunas' ?>
									</td>
								</tr>
							<?php
								$i++;
								endforeach;
							?>      
						</tbody>
					</table>
				</div>
			</div>
		</div><br>
		<div class="card">
			<div class="card-header pb-0">
				<div class="d-flex align-items-center">
					<p class="mb-0">Tagihan Lainnya</p>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive p-0">
					<table class="table align-items-center mb-0">
						<thead>
							<tr>
								<th class="text-uppercase text-primary text-sm font-weight-bolder opacity-7 text-center" width="80px">No.</th>
								<th class="text-uppercase text-primary text-sm font-weight-bolder opacity-7 ps-2">Jenis Pembayaran</th>
								<th class="text-uppercase text-primary text-sm font-weight-bolder opacity-7 ps-2">Total Tagihan</th>
								<th class="text-uppercase text-primary text-sm font-weight-bolder opacity-7 ps-2">Dibayar</th>
								<th class="text-center text-uppercase text-primary text-sm font-weight-bolder opacity-7">Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i =1;
								foreach ($bebas as $row):
								if (isset($f['n']) AND $f['r'] == $row['student_nis']) {
									$sisa = $row['bebas_bill']-$row['bebas_total_pay'];
									$namePay = $row['pos_name'].' - T.A '.$row['period_start'].'/'.$row['period_end'];
							?>
								<tr style="color:<?php echo ($row['bebas_bill'] == $row['bebas_total_pay']) ? '#00E640' : 'red' ?>">
									<td><?php echo $i ?></td>
									<td><?php echo $namePay ?></td>
									<td><?php echo 'Rp. ' . number_format($sisa, 0, ',', '.') ?></td>
									<td><?php echo 'Rp. ' . number_format($row['bebas_total_pay'], 0, ',', '.') ?></td>
									<td><label class="badge badge-sm <?php echo ($row['bebas_bill']==$row['bebas_total_pay']) ? 'bg-gradient-success' : 'bg-gradient-warning' ?>"><?php echo ($row['bebas_bill']==$row['bebas_total_pay']) ? 'Lunas' : 'Belum Lunas' ?></label></td>
								</tr>
							<?php 
								}
								$i++;
								endforeach; 
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	}
}
?>