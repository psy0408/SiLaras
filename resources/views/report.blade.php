<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Laporan Sarana Sekolah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        .container {
            width: 500px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
     <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-600">SiLaras!</h1>
            <div class="space-x-6">
                <a href="/home" class="hover:text-indigo-600">Home</a>
                <a href="/report" class="hover:text-indigo-600">Report</a>
                <a href="/about" class="hover:text-indigo-600">About</a>
            </div>
        </div>
    </nav>
    
<div class="container">
    <h2>Form Laporan Sarana Sekolah</h2>

    <form action="proses_laporan.php" method="POST">
        <label>Nama Pelapor</label>
        <input type="text" name="nama" placeholder="Contoh: Jane Doe" required>

        <label>Kelas</label>
        <select name="kelas" id="kelas" required onchange="cekLainnya()">
            <option value="">-- Kelas --</option>
            <option value="X">X (Sepuluh)</option>
            <option value="XI">XI (Sebelas)</option>
            <option value="XII">XII (Dua Belas)</option>
        </select>

        <label>Jurusan</label>
        <select name="kelas" id="kelas" required onchange="cekLainnya()">
            <option value="">-- Jurusan --</option>
            <option value="RPL">RPL</option>
            <option value="PH">PH</option>
            <option value="MPLB">MPLB</option>
            <option value="TKR">TKR</option>
        </select>

        <label>Jenis Sarana</label>
        <select name="sarana" id="sarana" required onchange="cekLainnya()">
            <option value="">-- Pilih Sarana --</option>
            <option value="Meja">Meja</option>
            <option value="Kursi">Kursi</option>
            <option value="Papan Tulis">Papan Tulis</option>
            <option value="Proyektor">Proyektor</option>
            <option value="Monitor">Monitor</option>
            <option value="Lainnya">Lainnya</option>
        </select>

        <input type="text"
               name="sarana_lainnya"
               id="sarana_lainnya"
               placeholder="Masukkan jenis sarana"
               style="display:none; margin-top:8px;">

        <label>Tingkat Kerusakan</label>
        <select name="tingkat_kerusakan" required>
            <option value="">-- Pilih Tingkatan Kerusakan --</option>
            <option value="Ringan">Ringan</option>
            <option value="Sedang">Sedang</option>
            <option value="Berat">Berat</option>
            <option value="Membahayakan">Membahayakan</option>
        </select>

        <label>Lokasi</label>
        <input type="text" name="lokasi" placeholder="Contoh: Ruang Kelas X IPA 1" required>

        <label>Deskripsi Kerusakan</label>
        <textarea name="deskripsi" required></textarea>

        <label>Tanggal Laporan</label>
        <input type="date" name="tanggal" required>

        <button type="submit">Kirim Laporan</button>
    </form>
</div>

<script>
function cekLainnya() {
    const sarana = document.getElementById("sarana").value;
    const inputLainnya = document.getElementById("sarana_lainnya");

    if (sarana === "Lainnya") {
        inputLainnya.style.display = "block";
        inputLainnya.required = true;
    } else {
        inputLainnya.style.display = "none";
        inputLainnya.required = false;
        inputLainnya.value = "";
    }
}
</script>
</body>
</html>