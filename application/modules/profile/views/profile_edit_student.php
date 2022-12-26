<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo media_url() ?>/css/bootstrap-datepicker.min.css">
<script src="<?php echo media_url() ?>/js/jquery.min.js"></script>
<!-- datepicker -->
<script src="<?php echo media_url() ?>/js/bootstrap-datepicker.min.js"></script>
<?php
if (isset($student)) {
	$inputFullnameValue = $student['student_full_name'];
	$inputClassValue = $student['class_class_id'];
	$inputMajorValue = $student['majors_majors_id'];
	$inputNisValue = $student['student_nis'];
	$inputNisNValue = $student['student_nisn'];
	$inputPlaceValue = $student['student_born_place'];
	$inputDateValue = $student['student_born_date'];
	$inputPhoneValue = $student['student_phone'];
	$inputParPhoneValue = $student['student_parent_phone'];
	$inputHobbyValue = $student['student_hobby'];
	$inputAddressValue = $student['student_address'];
	$inputGenderValue = $student['student_gender'];
	$inputMotherValue = $student['student_name_of_mother'];
	$inputFatherValue = $student['student_name_of_father'];
	$inputStatusValue = $student['student_status'];
} else {
	$inputFullnameValue = set_value('student_full_name');
	$inputClassValue = set_value('class_class_id');
	$inputMajorValue = set_value('majors_majors_id');
	$inputNisValue = set_value('student_nis');
	$inputNisNValue = set_value('student_nisn');
	$inputPlaceValue = set_value('student_born_place');
	$inputDateValue = set_value('student_born_date');
	$inputPhoneValue = set_value('student_phone');
	$inputParPhoneValue = set_value('student_parent_phone');
	$inputHobbyValue = set_value('student_hobby');
	$inputAddressValue = set_value('student_address');
	$inputGenderValue = set_value('student_gender');
	$inputMotherValue = set_value('student_name_of_mother');
	$inputFatherValue = set_value('student_name_of_father');
	$inputStatusValue = set_value('student_status');
}
?>
<?php echo form_open_multipart(current_url()); ?>
<div class="row">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header pb-0 p-3">
				<div class="d-flex justify-content-between">
					<h6 class="mb-2"><?php echo isset($title) ? '' . $title : null; ?></h6>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<?php echo validation_errors(); ?>
						<h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Data Pribadi</h6>
						<?php if (isset($student)) { ?>
						<input type="hidden" name="student_id" value="<?php echo $student['student_id']; ?>">
						<?php } ?>
						
						<div class="form-group">
							<label>Nama lengkap <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
							<input readonly="" type="text" class="form-control" value="<?php echo $inputFullnameValue ?>">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div class="radio">
								<label>
									<input type="radio" name="student_gender" value="L" <?php echo ($inputGenderValue == 'L') ? 'checked' : ''; ?>> Laki-laki
								</label>&nbsp;&nbsp;
								<label>
									<input type="radio" name="student_gender" value="P" <?php echo ($inputGenderValue == 'P') ? 'checked' : ''; ?>> Perempuan
								</label>
							</div>
						</div>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input name="student_born_place" type="text" class="form-control" value="<?php echo $inputPlaceValue ?>" placeholder="Tempat Lahir">
						</div>

						<div class="form-group">
							<label>Tanggal Lahir </label>
							<!-- <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
								<span class="input-group-addon"><i class="fas fa-calendar"></i></span>
								<input class="form-control" type="text" name="student_born_date" readonly="readonly" placeholder="Tanggal" value="<?php //echo $inputDateValue; ?>">
							</div> -->
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
								</div>
								<input name="student_born_date" class="form-control datepicker" placeholder="Tanggal Lahir" type="text" value="<?php echo $inputDateValue; ?>" data-date="" data-date-format="yyyy-mm-dd">
							</div>
						</div>

						<div class="form-group">
							<label>Hobi</label>
							<input name="student_hobby" type="text" class="form-control" value="<?php echo $inputHobbyValue ?>" placeholder="Hobi">
						</div>

						<div class="form-group">
							<label>No. Handphone <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
							<input name="student_phone" type="text" class="form-control" value="<?php echo $inputPhoneValue ?>" placeholder="No Handphone">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="student_address" placeholder="Alamat Tempat Tinggal"><?php echo $inputAddressValue ?></textarea>
						</div>
						<br>
						<h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Data Sekolah</h6>
						<div class="form-group">
							<label>NIS <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
							<input readonly="" type="text" class="form-control" value="<?php echo $inputNisValue ?>">
						</div> 

						<div class="form-group">
							<label>NISN <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
							<input readonly="" type="text" class="form-control" value="<?php echo $inputNisNValue ?>">
						</div>
						<?php if (majors()== 'senior') { ?>
						<div class="form-group">
							<label>Program Keahlian <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
							<input readonly="" type="text" class="form-control" value="<?php echo $student['majors_name'] ?>">
						</div> 
						<?php } ?>

						<div class="form-group"> 
							<label >Kelas *</label>
							<input readonly="" type="text" class="form-control" value="<?php echo $student['class_name'] ?>">
						</div>
						<br>
						<h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Data Keluarga</h6>
						<div class="form-group">
							<label>Nama Ibu Kandung</label>
							<input name="student_name_of_mother" type="text" class="form-control" value="<?php echo $inputMotherValue ?>" placeholder="Nama Ibu">
						</div>
						<div class="form-group">
							<label>Nama Ayah Kandung</label>
							<input name="student_name_of_father" type="text" class="form-control" value="<?php echo $inputFatherValue ?>" placeholder="Nama Ayah">
						</div>
						<div class="form-group">
							<label>No. Handphone Orang Tua <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
							<input name="student_parent_phone" type="text" class="form-control" value="<?php echo $inputParPhoneValue ?>" placeholder="No Handphone Orang Tua">
						</div>
					</div>
				</div>
				<p class="text-muted">*) Kolom wajib diisi.</p>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-body">
				<p>Foto</p>
				<div style="text-align:center;width:100%;">
					<a href="#" class="thumbnail">
					<?php if (isset($student) AND $student['student_img'] != NULL) { ?>
					<img class="max-width-500 w-100 position-relative z-index-2" src="<?php echo upload_url('student/'.$student['student_img']) ?>" class="img-responsive avatar">
					<?php } else { ?>
					<img class="max-width-500 w-100 position-relative z-index-2" src="<?php echo media_url('img/missing.png') ?>">
					<?php } ?>
					</a>
				</div>
				<br>
				<button type="submit" class="btn btn-success" style="display:block;width:100%;">Simpan</button>
				<a href="<?php echo site_url('student/profile'); ?>" class="btn btn-info" style="display:block;width:100%;">Batal</a>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
<script>
	$(".datepicker").datepicker({autoclose: true, todayHighlight: true});
</script>