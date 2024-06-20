<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama User <span class="text-danger">*</span></label>
                    <input type="text" name="nama" class="form-control form-control-lg" placeholder="Nama User" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Username <span class="text-danger">*</span></label>
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Level Hak Akses <span class="text-danger">*</span></label>
                    <select name="akses_level" class="form-control">
                        <option value="User">User</option>
                        <option value="Admin">Admin</option>
                        <option value="Direktur">Direktur</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Bagian dan Unit Kerja <span class="text-danger">*</span></label>
                    <select name="id_bagian" class="form-control">
                        <option value="0">Semua Bagian dan Unit Kerja</option>
                        <!-- Contoh opsi, tambahkan opsi sesuai data yang ada -->
                        <option value="1">Bagian 1</option>
                        <option value="2">Bagian 2</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Deskripsi User</label>
                    <textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
                </div>
                <div class="form-group">
                    <div class="btn-group">
                        <button class="btn btn-success btn-lg" type="submit">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <button class="btn btn-info btn-lg" type="reset">
                            <i class="fa fa-times"></i> Reset
                        </button>
                        <button class="btn btn-warning btn-lg" type="button">
                            <i class="fa fa-backward"></i> Kembali
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
