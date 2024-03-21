<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Cuti</title>
    <style>
        /* CSS untuk mengatur tata letak surat */
        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: right;
        }
        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
        }
        .content {
            margin-bottom: 50px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .content p {
            margin: 5px 0;
            display: flex;
            align-items: center;
        }

        .left,
        .right {
            width: 50%;
        }
        .signature {
            margin-top: 70px;
        }
        .signature hr {
            border: 1px solid black;
            width: 50%;
        }
        .signature p {
            text-align: center;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <!-- Header dengan logo perusahaan -->
        <div class="header">
            <img src="{{asset('asset/pertamina.jpg')}}" style="width: 200px; height: auto;">

        </div>
        <!-- Judul Surat -->
        <div class="title">
            <h2>Surat Keterangan Cuti</h2>
        </div>
        <!-- Informasi Pengajuan Cuti -->
        <div class="content">
            <div class="left">
                <p>Nama         : [Nama]</p>
                <p>Nomor Pekerja: [Nomor Pekerja]</p>
                <p>Jabatan      : [Jabatan]</p>
                <p>Eselon       : [Eselon]</p>
                <p>Tanggal yang diminta: [Tanggal yang diminta]</p>
                <p>Tanggal Masuk Kerja: [Tanggal Masuk Kerja]</p>
                <p>Keterangan: [Keterangan]</p>
            </div>
        </div>
        <!-- Bagian Yang Mengajukan Cuti -->
        <div class="content">
            <div class="left">
            <p>Tanggal: [Tanggal Pengajuan]</p>
                <p>Yang Mengajukan Cuti,</p>
                <div class="left">
                <div class="signature">
                    <p>(Tanda Tangan)</p>
                </div>
                </div>
            </div>
            
        <!-- Bagian Yang Menyetujui Cuti -->
        <div class="content">
            <div class="left">
                <p>Yang Menyetujui,</p>
            <div class="right">
                <div class="signature">
                    <p>(Tanda Tangan)</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
