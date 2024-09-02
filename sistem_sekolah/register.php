<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-container h2 {
            text-align: center;
        }
        .form-container label {
            display: block;
            margin-top: 10px;
        }
        .form-container input, .form-container select, .form-container textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-container button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Pendaftaran Siswa</h2>
    <form id="registerForm">
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" required>

        <label for="dob">Tempat, Tanggal Lahir:</label>
        <input type="text" id="dob" name="dob" required>

        <label for="address">Alamat Rumah:</label>
        <input type="text" id="address" name="address" required>

        <label for="phone">No. Telepon Orang Tua/Wali:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="parent">Nama Orang Tua/Wali:</label>
        <input type="text" id="parent" name="parent" required>

        <label for="school">Sekolah Asal:</label>
        <input type="text" id="school" name="school" required>

        <label for="grade">Kelas yang Didaftarkan:</label>
        <input type="text" id="grade" name="grade" required>

        <label for="start_date">Tanggal Masuk Sekolah:</label>
        <input type="date" id="start_date" name="start_date" required>

        <button type="button" onclick="submitRegistration()">Daftar</button>
    </form>
</div>

<div class="form-container">
    <h2>Catatan Kehadiran</h2>
    <form id="attendanceForm">
        <label for="attendance_name">Nama Siswa:</label>
        <input type="text" id="attendance_name" name="attendance_name" required>

        <label for="attendance_date">Tanggal:</label>
        <input type="date" id="attendance_date" name="attendance_date" required>

        <label for="status">Status Kehadiran:</label>
        <select id="status" name="status">
            <option value="hadir">Hadir</option>
            <option value="izin">Izin</option>
            <option value="sakit">Sakit</option>
            <option value="alpha">Alpha</option>
        </select>

        <button type="button" onclick="submitAttendance()">Kirim Kehadiran</button>
    </form>
</div>

<script>
    function submitRegistration() {
        const name = document.getElementById('name').value;
        const dob = document.getElementById('dob').value;
        const address = document.getElementById('address').value;
        const phone = document.getElementById('phone').value;
        const parent = document.getElementById('parent').value;
        const school = document.getElementById('school').value;
        const grade = document.getElementById('grade').value;
        const startDate = document.getElementById('start_date').value;

        // Create a text representation of the data
        const registrationData = `
Nama Lengkap: ${name}
Tempat, Tanggal Lahir: ${dob}
Alamat Rumah: ${address}
No. Telepon Orang Tua/Wali: ${phone}
Nama Orang Tua/Wali: ${parent}
Sekolah Asal: ${school}
Kelas yang Didaftarkan: ${grade}
Tanggal Masuk Sekolah: ${startDate}

        `;

        // Save to localStorage (for demonstration purposes)
        localStorage.setItem('registrationData', registrationData);

        alert('Pendaftaran berhasil! Data disimpan.');
    }

    function submitAttendance() {
        const studentName = document.getElementById('attendance_name').value;
        const date = document.getElementById('attendance_date').value;
        const status = document.getElementById('status').value;

        // Create a text representation of the data
        const attendanceData = `
Nama Siswa: ${studentName}
Tanggal: ${date}
Status Kehadiran: ${status}

        `;

        // Save to localStorage (for demonstration purposes)
        localStorage.setItem('attendanceData', attendanceData);

        alert('Kehadiran berhasil dikirim!');
    }
</script>
</body>
</html>
