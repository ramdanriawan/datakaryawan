<?php error_reporting(0); ?>
<?php include 'header_biasa.php'; ?>

<div class="container">
	<div class="">
		<div class="col-md-6 col-md-offset-3">
			<form class="" action="select" method="post">

				<div class="form-group">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center">Login user dan admin</h2>
						</div>
					</div>
				</div>

				<fieldset>
					<legend>Login Form:</legend>
					<div class="form-group">
						<input class="form-control" type="" name="username" placeholder="Username" maxlength="30">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="Password" maxlength="30">
					</div>

					<input type="hidden" name="table" value="tbl_login">

					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<button class="btn btn-primary btn-block" type="submit">
									Login
									<span class="glyphicon glyphicon-log-in"></span>
								</button>
							</div>
							<div class="col-md-4">
								<button class="btn btn-info btn-block" type="button" data-toggle="modal" data-target="#registerModal">
									Register
									<span class="glyphicon glyphicon-registration-mark"></span>
								</button>
							</div>
							<div class="col-md-4">
								<button class="btn btn-warning btn-block" type="reset">
									Reset
									<span class="glyphicon glyphicon-refresh"></span>
								</button>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<div id="registerModal" class="modal fade">
	<div class="modal-dialog modal-lg" style="width: 1080px;">
		<div class="modal-content">
			 <div class="modal-header">
			 	<span data-dismiss="modal">&times;</span>
			 	<h2 class="text-center modal-title">FORMULIR REGISTRASI</h2>
			 </div>

			 <div class="modal-body">
			 	<form class="" action="" method="post">
			 		<div class="row">
			 			<div class="col-md-4">
			 				
					 		<fieldset>
					 			<legend>Data Profil Pegawai</legend>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="username" placeholder="Username" required value="<?php echo $_POST["username"] ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="password" name="password" placeholder="Password" required value="<?php echo $_POST["username"] ?>>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama" placeholder="Nama Beserta Gelar" required value="<?php echo $_POST["username"] ?>>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nip" placeholder="Nip, Jika tidak punya isikan '-' ex: 198501012014011001" max="18" maxlength="18" required>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="tempat_lahir" placeholder="Tempat Lahir" required>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control tanggal_lahir" type="" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik" placeholder="Nik (Tidak Boleh Kosong)" required>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="npwp" placeholder="Npwp, Contoh: 22.333.444.5-777-000" required>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="jenis_kelamin" required>
					 					<option value="">--Jenis Kelamin--</option>
					 					<option value="Laki-Laki">Laki-Laki</option>
					 					<option value="Perempuan">Perempuan</option>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="status_pegawai" required>
					 					<option value="">--Status Pegawai--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_status_pegawai");

					 					foreach ($query->result() as $key => $value) {
					 						echo "<option value=$value->status_pegawai>$value->status_pegawai</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="jenjang_tempat_tugas" required>
					 					<option value="">--Jenjang Tempat Tugas--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_jenjang_tempat_tugas");

					 					foreach ($query->result() as $key => $value) {
					 						echo "<option value=$value->jenjang_tempat_tugas>$value->jenjang_tempat_tugas</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 		</fieldset>

					 		<fieldset>
					 			<legend>Formulir Data Kepegawaian</legend>
					 			<div class="form-group">
					 				<select class="form-control" name="pangkat_golongan" required>
					 					<option value="">--Pangkat Golongan---</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_pangkat_golongan");

					 					foreach ($query->result() as $key => $value) {
					 						echo "<option value=$value->pangkat_golongan>$value->pangkat_golongan</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control datepicker" type="" name="tmt_golongan" required placeholder="Tmt Golongan">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="sk_pengangkatan_awal" required placeholder="Sk Pengangkatan Awal">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control tmt_pengangkatan_awal" type="" name="tmt_pengangkatan_awal" placeholder="Tmt pengangkatan awal" required>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="mengampu_mata_pelajaran" placeholder="Mengampu Mata Pelajaran" required>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="number" name="jumlah_jam_mengajar" placeholder="Jumlah Jam Mengajar, ex: 24" required max="24">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="pejabat_yang_mengangkat" placeholder="Pejabat Yang Mengangkat" required >
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_sk_cpns" placeholder="No Sk CPNS" required >
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control datepicker" type="" name="tmt_sk_cpns" placeholder="Tmt Sk CPNS" required >
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_sk_pns" placeholder="NO SK PNS" required >
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control datepicker" type="" name="tmt_sk_pns" placeholder="TMT SK PNS" required >
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_sk_pangkat_terakhir" placeholder="No Sk Pangkat Terakhir" required >
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control datepicker" type="" name="tmt_sk_pangkat_terakhir" placeholder="Tmt Sk Pangkat Terakhir" required >
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_nuptk" placeholder="No Nuptk (Jika Tidak Punya Isi '-')" required max="16">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_karpeg" placeholder="No Karpeg" required >
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="jabatan" required>
					 					<option value="">--Jabatan--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_jabatan");

					 					foreach ($query->result() as $key => $value) {
					 						echo "<option value=$value->jabatan>$value->jabatan</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="unit_kerja" placeholder="Unit Kerja" required >
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control sk_pengangkatan_jabatan_fungsional_tertentu" name="sk_pengangkatan_jabatan_fungsional_tertentu" required>
					 					<option value="">--Sk Pengangkatan Jabatan Fungsional Tertentu--</option>
					 					<option value="Guru">Guru</option>
					 					<option value="Kepala Sekolah">Kepala Sekolah</option>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<label>Dokumen Sertifikat Diklat:
						 				<input  class="form-control" type="file" name="dokumen_sertifikat_diklat" required>
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control datepicker" type="" name="tmt_jabatan" placeholder="Tmt Jabatan" required>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="masa_kerja_terakhir" placeholder="Masa Kerja Terakhir" value="8 Tahun 1 Bulan" required>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control masa_kerja_pengangkatan" type="" name="masa_kerja_pengangkatan" placeholder="Masa Kerja Pengangkatan" required>
					 			</div>
					 			<div class="form-group">
					 				<label>Tahun Pensiun
						 				<input  class="form-control tahun_pensiun" type="" name="tahun_pensiun" placeholder="Tahun Pensiun" required>
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control gaji_terakhir" type="" name="gaji_terakhir" placeholder="Gaji Terakhir" required>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="sertifikasi" required>
					 					<option value="">--Sertifikasi--</option>
					 					<option value="Belum Sertifikasi">Belum Sertifikasi</option>
					 					<option value="Sudah Sertifikasi">Sudah Sertifikasi</option>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_sertifikasi" placeholder="No Sertifikasi" required>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="berkala_terakhir" placeholder="Berkala Terakhir" required>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="tahun_sertifikasi" placeholder="Tahun Sertifikasi" required>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="berkala_terakhir" placeholder="Berkala Terkahir" required>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_berkala_terakhir" placeholder="No Berkala Terkahir" required>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="tanggal_berkala_berikutnya" placeholder="Tanggal Berkala Berikutnya" required>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_berkala_berikutnya" placeholder="No Berkala Berikutnya" required value="-">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="number" name="no_hp" placeholder="No Hp" required>
					 			</div>
					 		</fieldset>
			 			</div>

			 			<div class="col-md-4">
			 				
					 		<fieldset>
					 			<legend>Formulir Data Pendidikan</legend>
					 			<div class="form-group">
					 				<select class="form-control" name="pendidikan_terakhir">
					 					<option value="">--Pendidikan Terakhir--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_pendidikan_terakhir");

					 					foreach ($query->result() as $key => $value) {
					 						echo "<option value=$value->pendidikan_terakhir>$value->pendidikan_terakhir</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="no_ijazah_terakhir" placeholder="No Ijazah Terakhir">
					 			</div>
					 			<div class="form-group">
					 				<label>
					 					Ijazah Terakhir (max 1MB):
						 				<input class="form-control"  type="file" name="foto_ijazah_terakhir">
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="universitas" placeholder="Universitas">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="fakultas" placeholder="Fakultas">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="jurusan" placeholder="Jurusan">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="number" name="tahun_lulus" placeholder="Tahun Lulus" required>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="riwayat_pendidikan_sd" placeholder="Riwayat Pendidikan Sd" required>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="no_ijazah_sd" placeholder="No Ijazah Sd" required>
					 			</div>
					 			<div class="form-group">
					 				<label>Ijazah Sd:
						 				<input class="form-control"  type="file" name="foto_ijazah_sd" required>
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="riwayat_pendidikan_smp" placeholder="Riwayat Pendidikan SMP" required placeholder="Riwayat Pendidikan SMP">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="no_ijazah_smp" placeholder="No Ijazah SMP" required>
					 			</div>
					 			<div class="form-group">
					 				<label>
					 					Ijazah Smp: 
						 				<input class="form-control"  type="file" name="foto_ijazah_smp" required>
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="riwayat_pendidikan_sma" placeholder="Riwayat Pendidikan SMA/SMK" required>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="no_ijazah_sma" placeholder="No Pendidikan SMA/SMK" required>
					 			</div>
					 			<div class="form-group">
					 				<label>
					 					Ijazah Sma: 
						 				<input class="form-control"  type="file" name="foto_ijazah_sma" placeholder="No Pendidikan SMA/SMK" required>
					 				</label>
					 			</div>
					 		</fieldset>

					 		<fieldset>
					 			<legend>Formulir Data Keluarga</legend>
					 			<div class="form-group">
					 				<select class="form-control" name="status_perkawinan" required>
					 					<option value="">--Status Perkawinan--</option>
					 					<option value="">Sudah Menikah</option>
					 					<option value="">Belum Menikah</option>
					 					<option value="">Janda</option>
					 					<option value="">Duda</option>
					 				</select>
					 			</div>

					 			<div class="form-group">
					 				<input class="form-control" type="file" name="foto_ktp_suami_istri" required>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="file" name="foto_kartu_keluarga" required>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama_suami_atau_istri" required placeholder="Nama Suami / Istri">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik_suami_istri" required placeholder="Nik Suami Atau Istri 16 digit">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_anak" required placeholder="Jumlah Anak">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nama_anak_pertama" required placeholder="Nama Anak Pertama">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik_anak_pertama" required placeholder="Nik Anak Pertama 16 digit">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nama_anak_kedua" required placeholder="Nama Anak Kedua">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik_anak_kedua" required placeholder="Nik Anak Kedua">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama_anak_ketiga" required placeholder="Nama Anak Ketiga">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik_anak_ketiga" required placeholder="Nik Anak Ketiga">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama_ayah_kandung" required placeholder="Nama Ayah Kandung">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nik_ayah_kandung" required placeholder="Nik Ayah Kandung">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama_ibu_kandung" required placeholder="Nama Ibu Kandung">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nik_ibu_kandung" required placeholder="Nik Ibu Kandung">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="pekerjaan_suami_atau_istri" required placeholder="Pekerjaan Suami Atau Istri">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nip_suami_atau_istri" required placeholder="Nip Suami Atau Istri (18 angka jika tidak punya isi '-')">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control penghasilan_suami_istri" type="" name="penghasilan_suami_istri" required placeholder="Penghasilan Suami Istri">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="alamat_rumah" required placeholder="Alamat Rumah">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="desa_atau_kelurahan" required placeholder="Desa Atau Kelurahan">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="kecamatan" required placeholder="Kecamatan">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="kabupaten" required placeholder="Kabupaten">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="kode_pos" required placeholder="Kode Pos">
					 			</div>
					 		</fieldset>
			 			</div>

			 			<div class="col-md-4 data_sekolah">
					 		<fieldset>
					 			<legend>Formulir Data Sekolah</legend>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="unit_kerja" placeholder="Unit Kerja">
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="jenjang_sekolah" required>
					 					<option value="">--Jenjang Sekolah--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_jenjang_sekolah");

					 					foreach($query->result() as $key => $value)
					 					{
					 						echo "<option value=$value->jenjang_sekolah>$value->jenjang_sekolah</option>";
					 					}


					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama_sekolah" required placeholder="Nama Sekolah">
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="uppk" required>
					 					<option value="">--UPPK--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_uppk");

					 					foreach ($query->result() as $key => $value) {
					 						echo "<option value=$value->uppk>$value->uppk</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama_kepala_sekolah" placeholder="Nama Kepala Sekolah">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nip_nama_kepala_sekolah" placeholder="Nip Nama Kepala Sekolah (18 angka jika tidak punya isi '-'" max="18">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="tempat_lahir_kepala_sekolah" placeholder="Tempat Lahir Kepala Sekolah">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control datepicker" type="" name="tanggal_lahir_kepala_sekolah" placeholder="Tanggal Lahir Kepala Sekolah">
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="jenis_kelamin_kepala_sekolah" required>
					 					<option value="">--Jenis Kelamin Kepala Sekolah--</option>
					 					<option value="Laki Laki">Laki Laki</option>
					 					<option value="Perempuan">Perempuan</option>
					 				</select>
					 			</div>
					 			<div class="form-group">
						 			<select class="form-control" name="pangkat_kepala_sekolah" required>
						 				<option value="">--Pangkat Golongan Kepala Sekolah--</option>
						 				<?php 

						 				$query = $this->db->query("select * from tbl_pangkat_golongan");

						 				foreach ($query->result() as $key => $value) {
						 					echo "<option value=$value->pangkat_golongan>$value->pangkat_golongan</option>";
						 				}

						 				 ?>
						 			</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="pendidikan_terakhir_kepala_sekolah" required>
					 					<option value="">--Pendidikan Terakhir Kepala Sekolah--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_pendidikan_terakhir");

					 					foreach ($query->result() as $key => $value) {
					 						echo "<option value=$value->pendidikan_terakhir>$value->pendidikan_terakhir</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="tmt_kepala_sekolah_periode_pertama" placeholder="Tmt Kepala Sekolah Periode Pertama">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="tmt_kepala_sekolah_periode_kedua" placeholder="Tmt Kepala Sekolah Periode Kedua">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="tmt_kepala_sekolah_periode_ketiga" placeholder="Tmt Kepala Sekolah Periode Ketiga">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="no_sk_kepala_sekolah_pertama" placeholder="No Sk Kepala Sekolah Pertama">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="no_sk_kepala_sekolah_kedua" placeholder="No Sk Kepala Sekolah Kedua">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="no_sk_kepala_sekolah_ketiga" placeholder="No Sk Kepala Sekolah Ketiga">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="no_sertifikat_nuk" placeholder="No Sertifikat Nuk">
					 			</div>
					 			<div class="form-group">
					 				<label>
					 					Dokumen Nuk: 
						 				<input class="form-control" type="file" name="foto_dokumen_nuk">
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="akreditasi_sekolah" required>
					 					<option value="">--Akreditasi Sekolah--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_akreditasi_sekolah");

					 					foreach ($query->result() as $key => $value) {
					 						echo "<option value=$value->akreditasi_sekolah>$value->akreditasi_sekolah</option>";
					 					}
					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nss" placeholder="Nss">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="npsn" placeholder="Npsn">
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="status_sekolah">
					 					<option value="">--Status Sekolah--</option>
					 					<option value="Swasta">Swasta</option>
					 					<option value="Negeri">Negeri</option>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<label>
					 					Foto Sekolah: 
						 				<input class="form-control" type="file" name="foto_sekolah">
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<label>
					 					Dokumen Kegiatan Sekolah: 
						 				<input class="form-control" type="file" name="foto_dokumen_kegiatan_sekolah">
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_rombel" placeholder="Jumlah Rombel">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_tenaga_pengajar" placeholder="Jumlah Tenaga Pengajar">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_siswa_laki_laki" placeholder="Jumlah Siswa Laki-Laki">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_siswa_perempuan" placeholder="Jumlah Siswa Perempuan">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_siswa_keseluruhan" placeholder="Jumlah Siswa Keseluruhan">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="kebutuhan_guru" placeholder="Kebutuhan Guru">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="guru_yang_tersedia" placeholder="Guru Yang Tersedia">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="kekurangan_guru" placeholder="Kekurangan Guru">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="kelebihan_guru" placeholder="Kelebihan Guru">
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="ruang_keterampilan" required>
					 					<option value="">--Ruang Keterampilan--</option>
					 					<option value="Ada">Ada</option>
					 					<option value="Tidak Ada">Tidak Ada</option>

					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control"  name="lab_bahasa" required>
					 					<option value="">--Lab Bahasa--</option>
					 					<option value="Ada">Ada</option>
					 					<option value="Tidak Ada">Tidak Ada</option>

					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control"  name="lab_komputer" required>
					 					<option value="">--Lab Komputer--</option>
					 					<option value="Ada">Ada</option>
					 					<option value="Tidak Ada">Tidak Ada</option>

					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control"  name="lab_ipa"  required>
					 					<option value="">--Lab Ipa--</option>
					 					<option value="Ada">Ada</option>
					 					<option value="Tidak Ada">Tidak Ada</option>

					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control"  name="perpustakaan"  required>
					 					<option value="">--Perpustakaan--</option>
					 					<option value="Ada">Ada</option>
					 					<option value="Tidak Ada">Tidak Ada</option>

					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control"  name="ruang_kelas"  required>
					 					<option value="">--Ruang Kelas--</option>
					 					<option value="Ada">Ada</option>
					 					<option value="Tidak Ada">Tidak Ada</option>

					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control"  name="kondisi_ruangan"  required>
					 					<option value="">--Kondisi Ruangan--</option>
					 					<option value="Ada">Ada</option>
					 					<option value="Tidak Ada">Tidak Ada</option>

					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control"  name="alat_pembelajaran"  required>
					 					<option value="">--Alat Pembelajaran--</option>
					 					<option value="Ada">Ada</option>
					 					<option value="Tidak Ada">Tidak Ada</option>

					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_matematika" placeholder="Jumlah Guru Matematika">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_ipa" placeholder="Jumlah Guru Ipa">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_ips"  placeholder="Jumlah Guru Ips">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_sbk"  placeholder="Jumlah Guru Sbk">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_bahasa_indonesia" placeholder="Jumlah Guru Bahasa Indonesia">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_bahasa_inggris" placeholder="Jumlah Guru Bahasa Inggris">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_pjok" placeholder="Jumlah Guru Pjok">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_pkn" placeholder="Jumlah Guru Pkn">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_prakarya" placeholder="Jumlah Guru Prakarya">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_agama_islam" placeholder="Jumlah Guru Agama Islam">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_agama_katolik" placeholder="Jumlah Guru Agama Katolik">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_agama_protestan"  placeholder="Jumlah Guru Agama Protestan">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_agama_budha" placeholder="Jumlah Guru Agama Budha">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_guru_agama_hindu"  placeholder="Jumlah Guru Agama Hindu">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_pns"  placeholder="Jumlah Pns">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_gty" placeholder="Jumlah Gty">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_gtk"  placeholder="Jumlah Gtk">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_gtt"  placeholder="Jumlah Gtt">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_gdd" placeholder="Jumlah Gdd">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="kepala_dinas_sekarang" placeholder="Kepala Dinas Sekarang">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nip_kepala_dinas" placeholder="Nip Kepala Dinas">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="keterangan_lain" placeholder="Keterangan Lain">
					 			</div>
					 		</fieldset>
			 			</div>
			 		</div>

			 		<input type="hidden" name="media" value="register">

			 		<div class="row">
			 			<div class="col-md-6">
			 				<button class="btn btn-info btn-block">
			 					<span class="glyphicon glyphicon-registration-mark"></span> 
			 					Register
			 				</button>
			 			</div>

			 			<div class="col-md-6">
			 				<button class="btn btn-warning btn-block" type="reset">
			 					<span class="glyphicon glyphicon-refresh"></span> 
			 					Reset
			 				</button>
			 			</div>
			 		</div>

			 	</form>
			 </div>
		</div>
	</div>
</div>

<?php include "footer_biasa.php"; ?>
<?php 
if($_COOKIE["pesan_insert"])
{
	echo "<script>alert('$_COOKIE[pesan_insert]');</script>";
	setcookie("pesan_insert", "", time() - 1, "");
}

 ?>

<?php 
extract($_POST);

if($_POST["media"] == "register")
{
	//data untuk tabel profile pegawai

	$query  = $this->db->query("select kode from tbl_profile_pegawai where kode='{$jenjang_tempat_tugas}001' order by id desc limit 1");
	$data   = $query->result()[0];
	$query2 = $this->db->query("select kode from tbl_profile_pegawai order by id desc limit 1");
	$data2  = $query2->result()[0];

	if($query->num_rows() < 1)
	{
		$kode = "{$jenjang_tempat_tugas}001";
	}else
	{
		$kode = ++$data2->kode;
	}

	$tbl_profile_pegawai = array(
		"kode"                 => $kode, #secara otomatis
		"username"             => $username,
		"password"             => $password,
		"nama"                 => $nama,
		"nip"                  => $nip,
		"tempat_lahir"         => $tempat_lahir,
		"tanggal_lahir"        => $tanggal_lahir,
		"nik"                  => $nik,
		"npwp"                 => $npwp,
		"jenis_kelamin"        => $jenis_kelamin,
		"status_pegawai"       => $status_pegawai,
		"jenjang_tempat_tugas" => $jenjang_tempat_tugas
	);

	$tbl_profile_pegawai_insert = $this->db->insert("tbl_profile_pegawai", $tbl_profile_pegawai);

	if($_FILES["dokumen_sertifikat_diklat"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Sertifikasi Diklat Melebihi 1MB");
		die();
	}else
	{
		move_uploaded_file($_FILES["dokumen_sertifikat_diklat"]["tmp_name"], "../../dokumen_sertifikat_diklat/$_FILES[dokumen_sertifikat_diklat][name]");
		$dokumen_sertifikat_diklat = base_url() . "dokumen_sertifikat_diklat/$_FILES[dokumen_sertifikat_diklat][name]";
	}

	//data untuk table formulir pegawai
	$tbl_pegawai = array(
		"nama"                                        => $nama,
		"nip"                                         => $nip,
		"pangkat_golongan"                            => $pangkat_golongan,
		"tmt_golongan"                                => $tmt_golongan,
		"sk_pengangkatan_awal"                        => $sk_pengangkatan_awal,
		"tmt_pengangkatan_awal"                       => $tmt_pengangkatan_awal,
		"mengampu_mata_pelajaran"                     => $mengampu_mata_pelajaran,
		"jumlah_jam_mengajar"                         => $jumlah_jam_mengajar,
		"pejabat_yang_mengangkat"                     => $pejabat_yang_mengangkat,
		"no_sk_cpns"                                  => $no_sk_cpns,
		"tmt_sk_cpns"                                 => $tmt_sk_cpns,
		"no_sk_pns"                                   => $no_sk_pns,
		"tmt_sk_pns"                                  => $tmt_sk_pns,
		"no_sk_pangkat_terakhir"                      => $no_sk_pangkat_terakhir,
		"tmt_sk_pangkat_terakhir"                     => $tmt_sk_pangkat_terakhir,
		"no_nuptk"                                    => $no_nuptk,
		"no_karpeg"                                   => $no_karpeg,
		"jabatan"                                     => $jabatan,
		"unit_kerja"                                  => $unit_kerja,
		"sk_pengangkatan_jabatan_fungsional_tertentu" => $sk_pengangkatan_jabatan_fungsional_tertentu,
		"dokumen_sertifikat_diklat"                   => $dokumen_sertifikat_diklat,
		"tmt_jabatan"                                 => $tmt_jabatan,
		"masa_kerja_terakhir"                         => $masa_kerja_terakhir,
		"masa_kerja_pengangkatan"                     => $masa_kerja_pengangkatan,
		"tahun_pensiun"                               => $tahun_pensiun,
		"gaji_terakhir"                               => $gaji_terakhir,
		"sertifikasi"                                 => $sertifikasi,
		"no_sertifikasi"                              => $no_sertifikasi,
		"tahun_sertifikasi"                           => $tahun_sertifikasi,
		"berkala_terakhir"                            => $berkala_terakhir,
		"no_berkala_terakhir"                         => $no_berkala_terakhir,
		"tanggal_berkala_berikutnya"                  => $tanggal_berkala_berikutnya,
		"no_berkala_berikutnya"                       => $no_berkala_berikutnya,
		"no_hp"                                       => $no_hp
	);

	$tbl_pegawai_insert = $this->db->insert("tbl_pegawai", $tbl_pegawai);


	if($_FILES["foto_ijazah_terakhir"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Ijazah Terakhir Melebihi 1MB");
		die();
	}else
	{
		move_uploaded_file($_FILES["foto_ijazah_terakhir"]["tmp_name"], "../../foto_ijazah_terakhir/$_FILES[ijazah_terakhir][name]");
		$ijazah_terakhir = base_url() . "foto_ijazah_terakhir/$_FILES[ijazah_terakhir][name]";
	}
	if($_FILES["foto_ijazah_sd"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Ijazah Sd Melebihi 1MB");
		die();
	}else
	{
		move_uploaded_file($_FILES["foto_ijazah_sd"]["tmp_name"], "../../foto_ijazah_sd/$_FILES[foto_ijazah_sd][name]");
		$foto_ijazah_sd = base_url() . "foto_ijazah_sd/$_FILES[foto_ijazah_sd][name]";
	}
	if($_FILES["foto_ijazah_smp"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Ijazah Smp Melebihi 1MB");
		die();
	}else
	{
		move_uploaded_file($_FILES["foto_ijazah_smp"]["tmp_name"], "../../foto_ijazah_smp/$_FILES[foto_ijazah_smp][name]");
		$foto_ijazah_smp = base_url() . "foto_ijazah_smp/$_FILES[foto_ijazah_smp][name]";
	}
	if($_FILES["foto_ijazah_sma"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Ijazah Sma Melebihi 1MB");
		die();
	}else
	{
		move_uploaded_file($_FILES["foto_ijazah_sma"]["tmp_name"], "../../foto_ijazah_sma/$_FILES[foto_ijazah_sma][name]");
		$foto_ijazah_sma = base_url() . "foto_ijazah_sma/$_FILES[foto_ijazah_sma][name]";
	}

	//data untuk tabel data pendidikan
	$tbl_pendidikan = array(
		"nama"                   => $nama,
		"nip"                    => $nip,
		"pendidikan_terakhir"    => $pendidikan_terakhir,
		"no_ijazah_terakhir"     => $no_ijazah_terakhir,
		"ijazah_terakhir"        => $ijazah_terakhir,
		"foto_ijazah_terakhir"   => $foto_ijazah_terakhir,
		"universitas"            => $universitas,
		"fakultas"               => $fakultas,
		"jurusan"                => $jurusan,
		"tahun_lulus"            => $tahun_lulus,
		"riwayat_pendidikan_sd"  => $riwayat_pendidikan_sd,
		"no_ijazah_sd"           => $no_ijazah_sd,
		"foto_ijazah_sd"         => $foto_ijazah_sd,
		"riwayat_pendidikan_smp" => $riwayat_pendidikan_smp,
		"no_ijazah_smp"          => $no_ijazah_smp,
		"foto_ijazah_smp"        => $foto_ijazah_smp,
		"riwayat_pendidikan_sma" => $riwayat_pendidikan_sma,
		"no_ijazah_sma"          => $no_ijazah_sma,
		"foto_ijazah_sma"        => $foto_ijazah_sma
	);

	$tbl_pendidikan_insert = $this->db->insert("tbl_pendidikan", $tbl_pendidikan);


	if($_FILES["foto_ktp_suami_istri"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Foto Suami Istri Melebihi 1MB");
		die();
	}else
	{
		move_uploaded_file($_FILES["foto_ktp_suami_istri"]["tmp_name"], "../../foto_ktp_suami_istri/$_FILES[foto_ktp_suami_istri][name]");
		$foto_ijazah_sma = base_url() . "foto_ktp_suami_istri/$_FILES[foto_ktp_suami_istri][name]";
	}
	if($_FILES["foto_kartu_keluarga"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Foto Kartu Keluarga Melebihi 1MB");
		die();
	}else
	{
		move_uploaded_file($_FILES["foto_kartu_keluarga"]["tmp_name"], "../../foto_kartu_keluarga/$_FILES[foto_kartu_keluarga][name]");
		$foto_ijazah_sma = base_url() . "foto_kartu_keluarga/$_FILES[foto_kartu_keluarga][name]";
	}

	//data untuk tabel data keluarga
	$tbl_keluarga = array(
		"nama"                    => $nama,
		"nip"                     => $nip,
		"status_perkawinan"       => $status_perkawinan,
		"foto_ktp_suami_istri"    => $foto_ktp_suami_istri,
		"foto_kartu_keluarga"     => $foto_kk,
		"nama_suami_istri"        => $nama_suami_istri,
		"nik_suami_istri"         => $nik_suami_istri,
		"jumlah_anak"             => $jumlah_anak,
		"nama_anak_pertama"       => $nama_anak_pertama,
		"nik_anak_pertama"        => $nik_anak_pertama,
		"nama_anak_kedua"         => $nama_anak_kedua,
		"nik_anak_kedua"          => $nik_anak_kedua,
		"nama_anak_ketiga"        => $nama_anak_ketiga,
		"nik_anak_ketiga"         => $nik_anak_ketiga,
		"nama_ayah_kandung"       => $nama_ayah_kandung,
		"nik_ayah_kandung"        => $nik_ayah_kandung,
		"nama_ibu_kandung"        => $nama_ibu_kandung,
		"nik_ibu_kandung"         => $nik_ibu_kandung,
		"pekerjaan_suami_istri"   => $pekerjaan_suami_istri,
		"nip_suami_istri"         => $nip_suami_istri,
		"penghasilan_suami_istri" => $penghasilan_suami_istri,
		"alamat_rumah"            => $alamat_rumah,
		"desa_kelurahan"          => $desa_kelurahan,
		"kecamatan"               => $kecamatan,
		"kabupaten"               => $kabupaten,
		"provinsi"                => $provinsi,
		"kode_pos"                => $kode_pos
	);

	$tbl_keluarga_insert = $this->db->insert("tbl_keluarga", $tbl_keluarga);

	if($_FILES["foto_dokumen_nuk"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Foto Nuk Keluarga Melebihi 1MB");
		die();
	}else
	{
		move_uploaded_file($_FILES["foto_dokumen_nuk"]["tmp_name"], "../../foto_dokumen_nuk/$_FILES[foto_dokumen_nuk][name]");
		$foto_ijazah_sma = base_url() . "foto_dokumen_nuk/$_FILES[foto_dokumen_nuk][name]";
	}
	if($_FILES["foto_sekolah"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Foto Sekolah Keluarga Melebihi 1MB");
		die();
	}else
	{
		move_uploaded_file($_FILES["foto_sekolah"]["tmp_name"], "../../foto_sekolah/$_FILES[foto_sekolah][name]");
		$foto_ijazah_sma = base_url() . "foto_sekolah/$_FILES[foto_sekolah][name]";
	}
	if($_FILES["foto_dokumen_kegiatan_sekolah"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Foto Kegiatan Sekolah Melebihi 1MB");
		die();
	}else
	{
		move_uploaded_file($_FILES["foto_dokumen_kegiatan_sekolah"]["tmp_name"], "../../foto_dokumen_kegiatan_sekolah/$_FILES[foto_dokumen_kegiatan_sekolah][name]");
		$foto_ijazah_sma = base_url() . "foto_dokumen_kegiatan_sekolah/$_FILES[foto_dokumen_kegiatan_sekolah][name]";
	}

	// khusus untuk kepala sekolah jika memilih sk pengangkatan jabatan fungsional tertentu sebagai kepala sekolah
	if($sk_pengangkatan_jabatan_fungsional_tertentu == "Kepala Sekolah")
	{
		$tbl_sekolah = array(
			"nama"                               => $nama,
			"nip"                                => $nip,
			"unit_kerja"                         => $unit_kerja,
			"jenjang_sekolah"                    => $jenjang_sekolah,
			"nama_sekolah"                       => $nama_sekolah,
			"uppk"                               => $uppk,
			"nama_kepala_sekolah"                => $nama_kepala_sekolah,
			"nip_nama_kepala_sekolah"            => $nip_nama_kepala_sekolah,
			"tempat_lahir_kepala_sekolah"        => $tempat_lahir_kepala_sekolah,
			"tanggal_lahir_kepala_sekolah"       => $tanggal_lahir_kepala_sekolah,
			"jenis_kelamin_kepala_sekolah"       => $jenis_kelamin_kepala_sekolah,
			"pangkat_kepala_sekolah"             => $pangkat_kepala_sekolah,
			"pendidikan_terakhir_kepala_sekolah" => $pendidikan_terakhir_kepala_sekolah,
			"tmt_kepala_sekolah_periode_pertama" => $tmt_kepala_sekolah_periode_pertama,
			"tmt_kepala_sekolah_periode_kedua"   => $tmt_kepala_sekolah_periode_kedua,
			"tmt_kepala_sekolah_periode_ketiga"  => $tmt_kepala_sekolah_periode_ketiga,
			"no_sk_kepala_sekolah_pertama"       => $no_sk_kepala_sekolah_pertama,
			"no_sk_kepala_sekolah_kedua"         => $no_sk_kepala_sekolah_kedua,
			"no_sk_kepala_sekolah_ketiga"        => $no_sk_kepala_sekolah_ketiga,
			"no_sertifikasi_nuk"                 => $no_sertifikasi_nuk,
	        "foto_dokumen_nuk"                   => $foto_dokumen_nuk,
			"akreditasi_sekolah"                 => $akreditasi_sekolah,
			"nss"                                => $nss,
			"npsn"                               => $npsn,
			"status_sekolah"                     => $status_sekolah,
			"foto_sekolah"                       => $foto_sekolah,
			"foto_dokumen_kegiatan_sekolah"      => $foto_dokumen_kegiatan_sekolah,
			"jumlah_rombel"                      => $jumlah_rombel,
			"jumlah_tenaga_pengajar"             => $jumlah_tenaga_pengajar,
			"jumlah_siswa_laki_laki"             => $jumlah_siswa_laki_laki,
			"jumlah_siswa_perempuan"             => $jumlah_siswa_perempuan,
			"jumlah_siswa_keseluruhan"           => $jumlah_siswa_keseluruhan,
			"kebutuhan_guru"                     => $kebutuhan_guru,
			"guru_yang_tersedia"                 => $guru_yang_tersedia,
			"kekurangan_guru"                    => $kekurangan_guru,
			"kelebihan_guru"                     => $kelebihan_guru,
			"ruang_keterampilan"                 => $ruang_keterampilan,
			"lab_bahasa"                         => $lab_bahasa,
			"lab_komputer"                       => $lab_komputer,
			"lab_ipa"                            => $lab_ipa,
			"perpustakaan"                       => $perpustakaan,
			"ruang_kelas"                        => $ruang_kelas,
			"kondisi_ruangan"                    => $kondisi_ruangan,
			"alat_pembelajaran"                  => $alat_pembelajaran,
			"jumlah_guru_matematika"             => $jumlah_guru_matematika,
			"jumlah_guru_ipa"                    => $jumlah_guru_ipa,
			"jumlah_guru_ips"                    => $jumlah_guru_ips,
			"jumlah_guru_sbk"                    => $jumlah_guru_sbk,
			"jumlah_guru_bahasa_indonesia"       => $jumlah_guru_bahasa_indonesia,
			"jumlah_guru_bahasa_inggris"         => $jumlah_guru_bahasa_inggris,
			"jumlah_guru_pjok"                   => $jumlah_guru_pjok,
			"jumlah_guru_pkn"                    => $jumlah_guru_pkn,
			"jumlah_guru_prakarya"               => $jumlah_guru_prakarya,
			"jumlah_guru_agama_islam"            => $jumlah_guru_agama_islam,
			"jumlah_guru_agama_katolik"          => $jumlah_guru_agama_katolik,
			"jumlah_guru_agama_protestan"        => $jumlah_guru_agama_protestan,
			"jumlah_guru_agama_budha"            => $jumlah_guru_agama_budha,
			"jumlah_guru_agama_hindu"            => $jumlah_guru_bahasa_inggris,
			"jumlah_pns"                         => $jumlah_pns,
			"jumlah_gty"                         => $jumlah_gty,
			"jumlah_gtk"                         => $jumlah_gtk,
			"jumlah_gtt"                         => $jumlah_gtt,
			"jumlah_gdd"                         => $jumlah_gdd,
			"kepala_dinas_sekarang"              => $kepala_dinas_sekarang,
			"nip_kepala_dinas"                   => $nip_kepala_dinas,
			"keterangan_lain"                    => $keterangan_lain
		);

		$tbl_sekolah_insert = $this->db->insert("tbl_sekolah", $tbl_sekolah);

		if($tbl_profile_pegawai_insert && $tbl_pegawai_insert && $tbl_pendidikan_insert && $tbl_keluarga_insert && $tbl_sekolah_insert)
		{
			setcookie("pesan_insert", "Berhasil Menambahkan Semua Data", time() + 1000000, "/");
		}else
		{
			setcookie("pesan_insert", "Gagal Menambahkan Semua Data", time() + 1000000, "/");
		die();
		}
	}else
	{
		if($tbl_profile_pegawai_insert && $tbl_pegawai_insert && $tbl_pendidikan_insert && $tbl_keluarga_insert)
		{
			setcookie("pesan_insert", "Berhasil Menambahkan Semua Data", time() + 1000000, "/");
		}else
		{
			die();
			setcookie("pesan_insert", "Gagal Menambahkan Semua Data", time() + 1000000, "/");
		}
	}
}

 ?>