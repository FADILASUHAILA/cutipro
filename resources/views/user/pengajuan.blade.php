
@extends('layouts.app')

@section('content')

@extends('header')

    <!--End Header-->
@include('navbar')
    <div class="container-lg">
		
        <div class="row ">
            <!--Sidebar-->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded border mt-3">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link active link-light" aria-current="page" href="/user"><i class="bi bi-house-door">
                                            </i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="/profile"><i class="bi bi-textarea-resize"></i> Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="/historyrecord"><i class="bi bi-layout-text-window-reverse"></i>History Record</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="/pengajuan"><i class="bi bi-question-circle"></i> Leave Application</a>
                                    </li>
									<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-menu mt-2">
							<li>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Log Out</button>
        </form>
    </li>
                        </ul>
                    </li>
							
									
                        </div>
                    </div>
                </nav>
            </div> 
            <!--End sidebar-->
<!--content-->
<div class="col-lg-9 mt-3">
<div class="card">
		<h5 class="card-header">
	
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-fw fa-plus"></i>Cuti Lain
</button> </h5>
		<div class="card-body">
	

				<form action="" method="post">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Kode Cuti</label>
								<input type="text" class="form-control" name="kode_unik" value="" readonly>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="hidden" name="id_user" value="">
										<input type="hidden" name="role_id" value="">
										<label for="input">Tanggal Input :</label>
										<input type="text" id="input" name="input" class="form-control" value="" readonly>
										
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="nik">No Induk Karyawan :</label>
										<input type="text" id="nik" name="nik" class="form-control" value="" readonly>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="nama">Nama Lengkap :</label>
								<input type="text" id="nama" name="nama" class="form-control" value="" readonly>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="bagian">Bagian / Departemen :</label>
										<input type="text" id="bagian" name="bagian" class="form-control" value="" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="jabatan">Jabatan :</label>
										<input type="text" id="jabatan" name="jabatan" class="form-control" value="" readonly>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="jenisCuti">Jenis Cuti</label>
								<select class="form-control" id="jenisCuti" name="jenis_cuti">
									<option>Cuti Tahunan</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="ket">Keterangan :</label>
								<input type="text" id="ket" name="keterangan" class="form-control" value="">
								
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="txt1">Sisa Cuti Terakhir</label>
										
											<input type="text" id="txt1" class="form-control" value="" readonly>
								
											<input type="text" id="txt1" class="form-control" value="" readonly>

								
											<input type="text" id="txt1" class="form-control" value="12" readonly>
									
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="txt2">Jumlah Cuti Diambil :</label>
										<input type="text" id="txt2" name="jml_cuti" class="form-control" onkeyup="sum();">
										
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="txt3">Sisa Cuti Sekarang :</label>
										<input type="text" id="txt3" name="sisa_cuti" class="form-control" readonly>
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="tglCuti1">Tanggal Cuti 1 :</label>
										<input type="date" id="tglCuti1" name="cuti" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="tglCuti2">Tanggal Cuti 2 :</label>
										<input type="date" id="tglCuti2" name="cuti2" class="form-control">
									
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="tglMasuk">Tanggal Masuk :</label>
										<input type="date" id="tglMasuk" name="masuk" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat :</label>
								<input type="varchar" id="alamat" name="alamat" class="form-control" value="">

							</div>
							<div class="form-group">
								<label for="telp">No Telp / HP :</label>
								<input type="varchar" id="telp" name="telp" class="form-control" value="">
								
							</div>
						</div>
					</div>
					<button type="submit" name="simpan" class="btn btn-danger"><i class="fas fa-save"></i> Simpan Data</button>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-calendar-alt"></i>
						Kalender
					</button>
				</form>
		</div>
	</div>

	<!-- <div class="card">
		<div class="card-body">
			<form action="" method="post">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Kode Cuti :</label>
							<input type="text" class="form-control" name="kode_unik" value="" readonly>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="hidden" name="id_user" value="">
									<input type="hidden" name="role_id" value="">
									<label for="input">Tanggal Input :</label>
									<input type="text" id="input" name="input" class="form-control" value="" readonly>
							
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nik">No Induk Karyawan :</label>
									<input type="text" id="nik" name="nik" class="form-control" value="" readonly>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="nama">Nama Lengkap :</label>
							<input type="text" id="nama" name="nama" class="form-control" value="" readonly>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="bagian">Bagian / Departemen :</label>
									<input type="text" id="bagian" name="bagian" class="form-control" value="" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="jabatan">Jabatan :</label>
									<input type="text" id="jabatan" name="jabatan" class="form-control" value="" readonly>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="jenisCuti">Jenis Cuti</label>
							<select class="form-control" id="jenisCuti" name="jenis_cuti">
								<option>Cuti Tahunan</option>
							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="ket">Keterangan :</label>
							<input type="text" id="ket" name="keterangan" class="form-control" value="">
							
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="txt1">Sisa Cuti Terakhir</label>
									
										<input type="text" id="txt1" class="form-control" value="" readonly>
									
										<input type="text" id="txt1" class="form-control" value="12" readonly>
								
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="txt2">Jumlah Cuti Diambil :</label>
									<input type="text" id="txt2" name="jml_cuti" class="form-control" onkeyup="sum();">
									
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="txt3">Sisa Cuti Sekarang :</label>
									<input type="text" id="txt3" name="sisa_cuti" class="form-control" readonly>
									
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="tglCuti1">Tanggal Cuti 1 :</label>
									<input type="date" id="tglCuti1" name="cuti" class="form-control">
									
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="tglCuti2">Tanggal Cuti 2 :</label>
									<input type="date" id="tglCuti2" name="cuti2" class="form-control">
									
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="tglMasuk">Tanggal Masuk :</label>
									<input type="date" id="tglMasuk" name="masuk" class="form-control">
									
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="alamat">Alamat :</label>
							<input type="varchar" id="alamat" name="alamat" class="form-control" value="">
							
						</div>
						<div class="form-group">
							<label for="telp">No Telp / HP :</label>
							<input type="varchar" id="telp" name="telp" class="form-control" value="">
						
						</div>
					</div>
				</div>
				<button type="submit" name="simpan" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Data</button>
				<button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-calendar-alt"></i>
					Kalender
				</button>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-danger font-weight-bolder" role="alert">
				<center>" CUTI ANDA BELUM DISETUJUI "</center>
			</div>
		</div>
	</div> -->
<!-- /.container-fluid -->
<!-- Modal Cuti diluar tanggungan -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cuti Lain</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="row">
						<input type="hidden" name="id_user" value="">
						<input type="hidden" name="role_id" value="">

						<div class="form-group col-md-12">
						<label for="tglInput">Kode Unik</label>
							<input type="text" class="form-control" name="kode_unik2" value="" readonly>
						</div>
						<div class="form-group col-md-3">
							<label for="tglInput">Tanggal Input</label>
							<input type="text" class="form-control" id="tglInput" name="tgl_input" value="" readonly>
						</div>
						<div class="form-group col-md-3">
							<label for="nik">NIK</label>
							<input type="text" class="form-control" id="nik" name="nik" value="" readonly>
						</div>
						<div class="form-group col-md-6">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="" readonly>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="jabatan">Jabatan</label>
							<input type="text" class="form-control" id="tglInput" name="jabatan" value="" readonly>
						</div>
						<div class="form-group col-md-6">
							<label for="bagian">Bagian</label>
							<input type="text" class="form-control" id="bagian" name="bagian" value="" readonly>
						</div>
						<div class="form-group col-md-6">
							<label for="keterangan">Jenis Cuti</label>
							<input type="text" class="form-control" id="keterangan" name="jenis_cuti" value="Cuti Lain" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" id="alamat" name="alamat" value="" required>
					</div>
					<div class="row">
						<div class="form-group col-md-8">
							<label for="jenisCuti">Keterangan</label>
							<input type="text" class="form-control" id="jenisCuti" name="keterangan" placeholder="Cth: Cuti Menikah, Cuti Melahirkan, Cuti Hamil" required>
						</div>
						<div class="form-group col-md-4">
							<label for="jenisCuti">No Telp / Handphone</label>
							<input type="text" class="form-control" id="jenisCuti" name="telp" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="cuti1">Tanggal Cuti</label>
							<input type="date" class="form-control" id="cuti1" name="cuti" required>
						</div>
						<div class="form-group col-md-4">
							<label for="cuti2">Tanggal Cuti 2</label>
							<input type="date" class="form-control" id="cuti1" name="cuti2" required>
						</div>
						<div class="form-group col-md-4">
							<label for="tglMasuk">Tanggal Masuk</label>
							<input type="date" class="form-control" id="tglMasuk" name="masuk" required>
						</div>
					</div>
					<button type="submit" name="simpan" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Data</button>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-calendar-alt"></i>
						Kalender
					</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Kalender -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Kalendar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<br>
			<center>
				<iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FBangkok&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;hl=id&amp;src=ZW4uaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%237986CB" style="border-width:0" width="700" height="400" frameborder="0" scrolling="no"></iframe>
			</center>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>





    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
	</body>
</html>