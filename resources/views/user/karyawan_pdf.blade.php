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
            margin-bottom: 80px;
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
            width: 100%;
        }
        .signature {
            margin-top: 70px;
            display: inline-block; 
        }
        .signature hr {
            border: 1px solid black;
            width: 50%;
        }
        .signature p {
            text-align: center;
        }

        pre {
            font-family: "Arial", sans-serif;
            /* Contoh penggunaan font Courier New, bisa diganti dengan font lain sesuai kebutuhan */
        }

        .data {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .label {
            width: 200px;
            text-align: right;
            padding-right: 10px;
        }

        .value {
            flex: 1;
        }

        .pre-wrapper {
            display: flex;
            justify-content: flex-end; /* Menempatkan pre-wrapper di kanan */
            margin-bottom: 10px; /* Atur jarak dari data sebelumnya */
        }

        .pre-content {
            width: calc(10x - 500px); /* Sesuaikan dengan lebar kolom data */
            text-align: left; /* Mengatur teks ke kiri */
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
        <div class="data">
            <span class="label">Nama</span>
            <span class="value">: {{ Auth::user()->name }}</span>
        </div>
        <div class="data">
            <span class="label">Nomor Pekerja</span>
            <span class="value">: {{ Auth::user()->no_peg }}</span>
        </div>
        <div class="data">
            <span class="label">Jabatan</span>
            <span class="value">: {{ Auth::user()->position->position_name }}</span>
        </div>
        <div class="data">
            <span class="label">Eselon</span>
            <span class="value">:</span>
        </div>
        <div class="data">
            <span class="label">Tanggal yang diminta</span>
            <span class="value">: {{ $list_cuti->cuti}}</span>
        </div>
        <div class="data">
            <span class="label">Tanggal yang Masuk Kerja</span>
            <span class="value">: {{ $list_cuti->masuk}}</span>
        </div>
       <div class="data">
    <span class="label">Keterangan</span>
    <span class="value">: {{ $list_cuti->keterangan}}</span> 
    <div class="pre-wrapper">
        <div class="pre-content">
            <pre>
Tulisan pertama
Tulisan kedua
Tulisan ketiga
            </pre> 
        </div>
    </div>
</div> 


        <!-- Bagian Yang Mengajukan Cuti -->
        <div class="content">
            <div class="left">
                <p>Tanggal: {{ now()->toDateString() }}</p>
                <p>Yang Mengajukan Cuti,</p>
                <div class="left">
                    <div class="signature">
                        <p>(Tanda Tangan)</p>
                    </div>
                </div>
            </div>
            
            <!-- Bagian Yang Menyetujui Cuti -->
            <div class="left">
                <p>Menyetujui,</p>
                <p>Pjs. Manager Technical</p>
                <div class="left">
                    <div class="signature">
                        <p>(Tanda Tangan)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>