<?php
// Set zona waktu ke Asia/Jakarta (WIB)
date_default_timezone_set("Asia/Jakarta");

// Inisialisasi variabel untuk pesan error dan hasil
$nameError = $emailError = $password = "";
$name = $email = $password = "";
$timeMessage = "";
$dateMessage = "";

// Fungsi untuk membersihkan input
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validasi dan proses form ketika metode POST digunakan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi nama
    if (empty($_POST["name"])) {
        $nameError = "Nama tidak boleh kosong";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validasi email
    if (empty($_POST["email"])) {
        $emailError = "Email tidak boleh kosong";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Format email tidak valid";
    } else {
        $email = test_input($_POST["email"]);
    }

    // Validasi password
    if (empty($_POST["password"])) {
        $passwordError = "Masukkan Password";
    } else {
        $password = test_input($_POST["password"]);
    }

    // Jika validasi lolos, tampilkan pesan berdasarkan waktu
    if (empty($nameError) && empty($emailError)) {
        // Ambil waktu server saat ini dengan zona waktu yang sudah disesuaikan
        $hour = date("H");

        // Tentukan pesan berdasarkan waktu
        if ($hour >= 5 && $hour < 12) {
            $timeMessage = "Selamat pagi";
        } elseif ($hour >= 12 && $hour < 15) {
            $timeMessage = "Selamat siang";
        } elseif ($hour >= 15 && $hour < 18) {
            $timeMessage = "Selamat sore";
        } else {
            $timeMessage = "Selamat malam";
        }

        // Ambil tanggal saat ini
        $dateMessage = date("l, d F Y");
    }
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sederhana dengan PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #f3e8da98;">

    <h2>Formulir Informasi</h2>
    <p><span style="color:red;">* Wajib diisi</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
            <div class="d-flex align-items-center">
                <label for="name" class="form-label me-3">Nama Lengkap</label>
                <span style="color:red; margin-left: 110px; position: absolute;">* <?php echo $nameError; ?></span>
            </div>
            <input type="text" class="form-control mt-2" name="name" id="name" value="<?php echo $name; ?>" style="width: 300px" required>
        </div>

        <div class="mb-3">
            <div class="d-flex align-items-center">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <span style="color:red; margin-left: 5px;">* <?php echo $emailError ?> </span>
            </div>
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" style="width: 300px" required>
        </div>

        <div class="mb-3">
            <div class="d-flex align-items-center">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <span style="color:red; margin-left: 5px;">* </span>
            </div>
            <input type="password" class="form-control" id="exampleInputPassword1" style="width: 300px">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <br><br>
    </form>
    <?php
    // Tampilkan hasil jika form valid
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameError)&& empty($emailError)){
        echo "<h2>Data yang Anda Kirim:</h2>";
        echo "Nama: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo $timeMessage. ", hari ini adalah ". $dateMessage;
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>    
</html>