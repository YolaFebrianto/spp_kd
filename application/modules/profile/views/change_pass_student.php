<?php echo form_open(current_url()); ?>
<div class="row">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header pb-0">
				<div class="d-flex align-items-center">
					<p class="mb-0">Reset Password</p>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<?php if ($this->uri->segment(3) == 'cpw') { ?>
							<label >Password lama *</label>
							<input type="password" name="student_current_password" class="form-control" placeholder="Password lama" required="">
							<?php } ?>
						</div>
						<div class="form-group">
							<label >Password baru*</label>
							<input type="password" name="student_password" class="form-control" placeholder="Password baru" required="">
							<?php if ($this->uri->segment(3) == 'cpw') { ?>
							<input type="hidden" name="student_id" value="<?php echo $this->session->userdata('uid_student'); ?>" >
							<?php } else { ?>
							<input type="hidden" name="student_id" value="<?php echo $student['student_id'] ?>" >
							<?php } ?>
						</div>
						<div class="form-group">
							<label > Konfirmasi password baru*</label>
							<input type="password" name="passconf" class="form-control" placeholder="Konfirmasi password baru"  required="">
						</div>
						<p class="text-muted">*) Kolom wajib diisi.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-body">
				<button type="submit" class="btn btn-success" style="display:block;width:100%;">Simpan</button>
				<a href="<?php echo site_url('student/profile'); ?>" class="btn btn-info" style="display:block;width:100%;">Batal</a>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>