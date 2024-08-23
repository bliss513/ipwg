<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran SPP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
        }

        input, select {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        #message {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pembayaran SPP</h1>
        <form id="payment-form">
            <label for="name">Nama Siswa:</label>
            <input type="text" id="name" name="name" required>

            <label for="class">Kelas:</label>
            <select id="class" name="class" required>
                <option value="">Pilih Kelas</option>
                <option value="1">Kelas 1</option>
                <option value="2">Kelas 2</option>
                <option value="3">Kelas 3</option>
                <!-- Tambah opsi sesuai kebutuhan -->
            </select>

            <label for="amount">Jumlah Pembayaran (Rp):</label>
            <input type="number" id="amount" name="amount" required>

            <label for="payment-method">Metode Pembayaran:</label>
            <select id="payment-method" name="payment-method" required>
                <option value="">Pilih Metode Pembayaran</option>
                <option value="bank-transfer">Transfer Bank</option>
                <option value="cash">Tunai</option>
                <!-- Tambah opsi sesuai kebutuhan -->
            </select>

            <button type="submit">Bayar</button>
        </form>
        <div id="message"></div>
    </div>
    <script>
        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault();

            // Mengambil data dari form
            const name = document.getElementById('name').value;
            const classValue = document.getElementById('class').value;
            const amount = document.getElementById('amount').value;
            const paymentMethod = document.getElementById('payment-method').value;

            // Validasi
            if (!name || !classValue || !amount || !paymentMethod) {
                document.getElementById('message').innerText = 'Harap isi semua field!';
                return;
            }

            // Menampilkan pesan sukses
            document.getElementById('message').innerText = `Pembayaran berhasil!\nNama: ${name}\nKelas: ${classValue}\nJumlah: Rp${amount}\nMetode Pembayaran: ${paymentMethod}`;

            // Reset form
            document.getElementById('payment-form').reset();
        });
    </script>
</body>
</html>
