<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Cuti Karyawan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .leave-request-container {
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 400px;
            text-align: center;
        }

        .leave-request-header {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            font-size: 1.2em;
        }

        .leave-request-form {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }

        .submit-button {
            background-color: #27ae60;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        .submit-button:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>

<div class="leave-request-container">
    <div class="leave-request-header">
        <h1>Pengajuan Cuti</h1>
    </div>
    <div class="leave-request-form">
        <div class="form-group">
            <label for="employeeName">Nama Karyawan:</label>
            <input type="text" id="employeeName" name="employeeName" required>
        </div>

        <div class="form-group">
            <label for="leaveType">Jenis Cuti:</label>
            <select id="leaveType" name="leaveType" required>
                <option value="annual">Cuti Tahunan</option>
                <option value="sick">Cuti Sakit</option>
                <option value="other">Lainnya</option>
            </select>
        </div>

        <div class="form-group">
            <label for="startDate">Tanggal Mulai:</label>
            <input type="date" id="startDate" name="startDate" required>
        </div>

        <div class="form-group">
            <label for="endDate">Tanggal Selesai:</label>
            <input type="date" id="endDate" name="endDate" required>
        </div>

        <div class="form-group">
            <label for="reason">Alasan Cuti:</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>
        </div>

        <button type="submit" class="submit-button">Ajukan Cuti</button>
    </div>
</div>

</body>
</html>
