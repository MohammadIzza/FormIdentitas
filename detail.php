<!-- Tugas Kelompok PBP - Week 3 
- Mohammad Izza Hakiki (24060123140139)
- Moh Yusril Nur Syabani (24060123140181)
- Indra Purwanto (24060123140150)
- Hadyan Kholish Prasetio (24060123140197)  -->

<?php
// Ambil data
$username = $_POST['username'] ?? '';
$email    = $_POST['email'] ?? '';
$pt       = $_POST['pt'] ?? '';
$prodi    = $_POST['prodi'] ?? '';
$hobi     = $_POST['hobi'] ?? [];
$password = $_POST['password'] ?? '';

$errors = [];

// Validasi 
if (!preg_match("/^[A-Za-z]+$/", $username)) {
  $errors[] = "Username hanya boleh huruf.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = "Email tidak valid.";
}
if (empty($prodi)) {
  $errors[] = "Program studi wajib dipilih.";
}
if (!(strlen($password) >= 8 && preg_match("/[A-Z]/",$password) && preg_match("/[a-z]/",$password) && preg_match("/[0-9]/",$password))) {
  $errors[] = "Password tidak sesuai aturan.";
}

// Jika ada error
if ($errors) {
  echo "<script>alert('".implode("\\n",$errors)."');history.back();</script>";
  exit;
}

// Jika sukses
echo "<script>alert('Form submitted successfully');</script>";
echo "<h2>Detail Informasi Data</h2>";
echo "<ul>";
echo "<li>Username: ".htmlspecialchars($username)."</li>";
echo "<li>Email: ".htmlspecialchars($email)."</li>";
echo "<li>Perguruan Tinggi: ".htmlspecialchars($pt)."</li>";
echo "<li>Program Studi: ".htmlspecialchars($prodi)."</li>";
echo "<li>Hobi: ".($hobi ? implode(", ",$hobi) : "(tidak diisi)")."</li>";
echo "<li>Password: ********</li>";
echo "</ul>";
echo "<a href='form.php'>Kembali ke Form</a>";
