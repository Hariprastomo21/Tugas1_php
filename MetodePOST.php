<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        .container {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #2c3e50;
        }

        input[type="text"], input[type="email"], input[type="number"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 12px;
            font-size: 16px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .result {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .result h3 {
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .result p {
            font-size: 16px;
            margin: 8px 0;
        }

        .lulus {
            color: #27ae60;
            font-weight: bold;
        }

        .remedial {
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Form Nilai Ujian</h2>
    <div class="container">
        <form method="post">
            <label>Nama</label><br>
            <input type="text" name="nama" required><br>

            <label>Email</label><br>
            <input type="email" name="email" required><br>

            <label>Nilai Ujian</label><br>
            <input type="number" name="nilai" required><br>

            <input type="submit" name="proses" value="Cek Hasil">
        </form>

        <?php
            if (isset($_POST['proses'])) {
                // Mengambil input dari form
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $nilai = $_POST['nilai'];

                // Mengecek nilai ujian dan menentukan status kelulusan
                if ($nilai > 70) {
                    $status = "Lulus";
                    $statusClass = "lulus";
                } else {
                    $status = "Remedial";
                    $statusClass = "remedial";
                }

                // Menampilkan hasil
                echo "<div class='result'>";
                echo "<h3>Hasil:</h3>";
                echo "<p>Nama: $nama</p>";
                echo "<p>Email: $email</p>";
                echo "<p>Nilai Ujian: $nilai</p>";
                echo "<p class='$statusClass'>Status: $status</p>";
                echo "</div>";
            }
        ?>

    </div>

</body>
</html>
