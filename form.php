<!-- Tugas Kelompok PBP - Week 3 
- Mohammad Izza Hakiki (24060123140139)
- Moh Yusril Nur Syabani (24060123140181)
- Indra Purwanto (24060123140150)
- Hadyan Kholish Prasetio (24060123140197)  -->

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Student Sign On Form</title>
</head>
<body>
  <form action="detail.php" method="post">
    <table border="1" cellpadding="8">
      <tr><th colspan="2">Student Sign On Form</th></tr>

      <tr>
        <td>Username:</td>
        <td>
          <input type="text" name="username" required>
          <div>Note: Username cannot contain numbers</div>
        </td>
      </tr>

      <tr>
        <td>Email:</td>
        <td>
          <input type="email" name="email" required>
          <div>Note: Email contain @ followed by domain</div>
        </td>
      </tr>

      <tr>
        <td>Perguruan Tinggi:</td>
        <td><input type="text" name="pt"></td>
      </tr>

      <tr>
        <td>Program Studi:</td>
        <td>
          <input type="radio" name="prodi" value="Informatika"> Informatika<br>
          <input type="radio" name="prodi" value="Matematika"> Matematika<br>
          <input type="radio" name="prodi" value="Fisika"> Fisika<br>
          <input type="radio" name="prodi" value="Kimia"> Kimia<br>
          <input type="radio" name="prodi" value="Statistika"> Statistika<br>
          <input type="radio" name="prodi" value="Biologi"> Biologi
        </td>
      </tr>

      <tr>
        <td>Hobi:</td>
        <td>
          <input type="checkbox" name="hobi[]" value="Futsal"> Futsal<br>
          <input type="checkbox" name="hobi[]" value="Badminton"> Badminton<br>
          <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
          <input type="checkbox" name="hobi[]" value="Menulis"> Menulis<br>
          <input type="checkbox" name="hobi[]" value="Travelling"> Travelling
        </td>
      </tr>

      <tr>
        <td>Password:</td>
        <td>
          <input type="password" name="password" required>
          <div>hint : minimal 8 karakter, ada huruf besar, huruf kecil, dan angka</div>
        </td>
      </tr>

      <tr>
        <td colspan="2" align="center">
          <button type="submit">Submit</button>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
