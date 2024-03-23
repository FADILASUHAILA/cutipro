
@extends('layouts.app')

@section('content')

@extends('header')

    <!--End Header-->
@include('navbar')
<style>
    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 10px; /* Optional: Sesuaikan margin sesuai kebutuhan */
    }

    .form-group label {
        flex: 0 0 auto; /* Label tidak akan memperpanjang */
        width: 150px; /* Sesuaikan lebar label sesuai kebutuhan */
        margin-right: 70px; /* Optional: Sesuaikan margin antara label dan input */
        text-align: left; /* Atur label agar berada di sebelah kiri */
    }

    .form-group input,
    .form-group select {
        flex: 1; /* Input akan mengisi sisa ruang yang tersedia */
    }

</style>

<!--content-->
<div class="container-fluid">
<div class="card">
		<h5 class="card-header">
	
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-fw fa-plus"></i>Cuti Lain
</button> </h5>
		<div class="card-body">
		<form action="{{ route('cuti.store') }}" method="POST">
		@csrf
					<div class="row">
						<div class="col-md-10">
							<div class="form-group">
								<label>No Pegawai</label>
								<input type="text" class="form-control" name="no_peg" value="{{ Auth::user()->no_peg }}" readonly>
							</div>
						</div>
					</div>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<input type="hidden" name="id" value="">
										<input type="hidden" name="role_id" value="">
										<label for="input">Tanggal Input :</label>
										<input type="text" id="input" name="input" class="form-control" value="{{ now()->toDateString() }}" readonly>
									</div>
								</div>
							</div>
								<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label for="email">Email :</label>
										<input type="email" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-10">
							<div class="form-group">
								<label for="nama">Nama Lengkap :</label>
								<input type="text" id="name" name="nama" class="form-control" value="{{ Auth::user()->name }}" readonly>
							</div>
							</div>
							</div>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label for="departement">Bagian / Departemen :</label>
										<input type="text" id="departement" name="departement" class="form-control" value=" {{ Auth::user()->departement->departement_name }}" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label for="jabatan">Jabatan :</label>
										<input type="text" id="position_id" name="position" class="form-control" value=" {{ Auth::user()->position->position_name }}" readonly>
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-10">
							<div class="form-group">
								<label for="jenisCuti">Jenis Cuti</label>
								<select class="form-control" id="jenisCuti" name="jenis_cuti">
									<option>Cuti Tahunan</option>
								</select>
							</div>
						</div>
							</div>
						<div class="row">
						<div class="col-md-10">
							<div class="form-group">
								<label for="ket">Keterangan :</label>
								<input type="text" id="ket" name="keterangan" class="form-control" value="">
							</div>
						</div>
						</div>
							<div class="row">
							<div class="col-md-6">
							<div class="form-group d-flex flex-row align-items-center">
										<label for="txt1">Sisa Cuti Sebelumnya :</label>
										<input type="text" id="txt1" name="jml_cuti1" value="{{ Auth::user()->jml_cuti }}" class="form-control" onkeyup="sum();" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="tglCuti2">Tanggal Cuti :</label>
										<input type="date" id="tglCuti" name="cuti" class="form-control">
									
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="tglMasuk">Tanggal Masuk :</label>
										<input type="date" id="tglMasuk" name="masuk" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-6">
							<div class="form-group d-flex flex-row align-items-center">
										<label for="txt2">Jumlah Cuti Diambil :</label>
										<input type="text" id="txt2" name="jml_cuti" class="form-control" onkeyup="sum();" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								<div class="form-group d-flex flex-row align-items-center">
										<label for="txt3">Sisa Cuti Sekarang :</label>
										<input type="text" id="txt3" name="sisa_cuti" class="form-control" readonly>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="tglMasuk">User ID :</label>
										<input type="text" id="userid" name="id_user" value="{{ Auth::user()->id }}" class="form-control" readonly>
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-10">
							<div class="form-group">
								<label for="alamat">Alamat :</label>
								<input type="text" id="alamat" name="alamat" class="form-control" value="">

							</div>
							</div>
							</div>
							<div class="row">
							<div class="col-md-10">
							<div class="form-group">
								<label for="telp">No Telp / HP :</label>
								<input type="int" id="telp" name="telp" class="form-control" value="">
							</div>
						</div>
					</div>
					
					<button type="submit" class="btn btn-danger"><i class="bi bi-save-fill"></i> Simpan Data</button>
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
							<input type="text" class="form-control" id="tlp" name="telp" required>
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
					<button type="submit" name="simpan" class="btn btn-primary"><i class="bi bi-save-fill"></i> Simpan Data</button>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-calendar-alt"></i>
						Kalender
					</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Notifikasi -->
<div class="modal" id="errorModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Peringatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Anda telah menggunakan semua cuti Anda.</p>
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
	<script>
    function updateSisaCuti() {
        var sisaCutiTerakhir = parseInt("{{ Auth::user()->jml_cuti }}") || 0;
        var jumlahCutiDiambil = parseInt(document.getElementById('txt2').value) || 0;
        var sisaCutiSekarang = sisaCutiTerakhir - jumlahCutiDiambil;
        
        // Ensure the result is non-negative
        sisaCutiSekarang = Math.max(sisaCutiSekarang, 0);

        document.getElementById('txt3').value = sisaCutiSekarang;
    }

    document.getElementById('txt2').onkeyup = updateSisaCuti;

	$(document).ready(function(){
        // Cek apakah terdapat pesan error dalam session
        var hasError = "{{ Session::has('error') }}";

        if (hasError) {
            $('#errorModal').modal('show');
        }
    });

	function hitungCuti() {
    // Ambil nilai dari input tanggal cuti dan tanggal masuk
    var tanggalCuti = new Date(document.getElementById('tglCuti').value);
    var tanggalMasuk = new Date(document.getElementById('tglMasuk').value);

    // Hitung selisih hari antara tanggal cuti dan tanggal masuk
    var selisihHari = Math.abs(Math.ceil((tanggalMasuk - tanggalCuti) / (1000 * 60 * 60 * 24)));

    // Masukkan hasil perhitungan ke input jumlah cuti diambil
    document.getElementById('txt2').value = selisihHari;

    // Update sisa cuti
    updateSisaCuti();
}

// Panggil fungsi hitungCuti() saat nilai tanggal cuti atau tanggal masuk berubah
document.getElementById('tglCuti').addEventListener('change', hitungCuti);
document.getElementById('tglMasuk').addEventListener('change', hitungCuti);
</script>

</body>
</html>