<div class="row">
	<div class="col-12">
		<div class="card mb-4">
			<div class="card-header pb-0">
				<h6>Detail Profil</h6>
			</div>
			<div class="card-body px-0 pt-0 pb-2">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-12">
						<?php if (!empty($student['student_img'])) { ?>
						<img class="max-width-500 w-100 position-relative z-index-2" src="<?php echo upload_url('student/'.$student['student_img']) ?>" style="margin-left:20px;">
						<?php } else { ?>
						<img class="max-width-500 w-100 position-relative z-index-2" src="<?php echo media_url('argon/img/user.png') ?>" style="margin-left:20px;">
						<?php } ?>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-12">
						<div class="table-responsive p-0" style="margin:0 20px;">
							<table class="table align-items-center mb-0">
								<tbody>
									<tr>
										<td>NIS Siswa</td>
										<td>:</td>
										<td><?php echo $student['student_nis'] ?></td>
									</tr>
									<tr>
										<td>NISN Siswa</td>
										<td>:</td>
										<td><?php echo $student['student_nisn'] ?></td>
									</tr>
									<tr>
										<td>Nama lengkap</td>
										<td>:</td>
										<td><?php echo $student['student_full_name'] ?></td>
									</tr>
									<tr>
										<td>Jenis Kelamin</td>
										<td>:</td>
										<td><?php echo ($student['student_gender']=='L')? 'Laki-laki' : 'Perempuan' ?></td>
									</tr>
									<tr>
										<td>Tempat, Tanggal Lahir</td>
										<td>:</td>
										<td><?php echo $student['student_born_place'].', '. pretty_date($student['student_born_date'],'d F Y',false) ?></td>
									</tr>
									<tr>
										<td>Hobi</td>
										<td>:</td>
										<td><?php echo $student['student_hobby'] ?></td>
									</tr>
									<tr>
										<td>No. Handphone</td>
										<td>:</td>
										<td><?php echo $student['student_phone'] ?></td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>:</td>
										<td><?php echo $student['student_address'] ?></td>
									</tr>
									<tr>
										<td>Nama Ibu Kandung</td>
										<td>:</td>
										<td><?php echo $student['student_name_of_mother'] ?></td>
									</tr>
									<tr>
										<td>Nama Ayah Kandung</td>
										<td>:</td>
										<td><?php echo $student['student_name_of_father'] ?></td>
									</tr>
									<tr>
										<td>No. Handphone Orang Tua</td>
										<td>:</td>
										<td><?php echo $student['student_parent_phone'] ?></td>
									</tr>
									<tr>
										<td>Kelas</td>
										<td>:</td>
										<td><?php echo $student['class_name'] ?></td>
									</tr>
									<?php if(majors()=='senior') { ?>
									<tr>
										<td>Program Keahlian</td>
										<td>:</td>
										<td><?php echo $student['majors_name'] ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-lg-12">
						<div style="margin-left:20px;margin-top:20px;">
							<a href="<?php echo site_url('student') ?>" class="btn btn-default">
								<i class="fa fa-arrow-circle-o-left"></i> Kembali
							</a>
							<a href="<?php echo site_url('student/profile/edit') ?>" class="btn btn-success">
								<i class="fa fa-edit"></i> Edit
							</a>
							<a href="<?php echo site_url('student/profile/cpw'); ?>" class="btn btn-warning"><i class="fa fa-refresh"></i> Ganti Password</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>