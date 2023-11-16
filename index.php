<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="fontawsome/css/font-awesome.min.css">
    <title>Pinjaman Buku</title>
</head>

<body> 
<header class="head_bar">
    <h1 class="head_bar__title">PEMINJAMAN BUKU</h1>
</header>

<main>
<section class="Book_shelf" id="Book_shelf">
 <h2 id="bookShelf">DAFTAR PEMINJAM</h2>
    <div id="bookList" class="book_list"></div>    
    <div class="table_output">

    <!-- Table -->
     <table border="1">
    <thead>
    <tr>
        <th>Peminjam</th>
        <th>Buku</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Aksi</th>
    </tr>
    </thead>

    <tbody>
    <?php 
          include "conect.php"; 
          $result = mysqli_query($koneksi,"SELECT * from book");
          while($tampil = mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td>".$tampil['Name']."</td>";
              echo "<td>".$tampil['Judul']."</td>";
              echo "<td>".$tampil['Penulis']."</td>";
              echo "<td>".$tampil['Tahun']."</td>";
              echo "<td>

              <!-- edit -->
                <a href=\"Rak Buku.php?ubah=$tampil[Book_Id]\"  type=\"button\" class=\"edit\">
                  <i class='fa fa-pencil' aria-hidden=\"true\"></i>
                </a>
                
                
                <!-- delete -->
                <a href=\"proses.php?hapus=$tampil[Book_Id]\" class=\"delete\" onClick=\"return confirm('anda yakin???')\">
                  <i class=\"fa fa-trash\"></i>
                </a>
              </td>";
              echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

    <!-- nambah peminjam -->
    <button class="button" onclick="window.location.href='Rak Buku.php'">
    <i class="fa fa-plus"></i>
    Tambah peminjam
  </button>
  
</section>
</main>

<footer>
<div class="card">
      <div class="card-body" style="background-color: antiquewhite;">
        <blockquote class="blockquote mb-0" style="text-align: center; display: flex; justify-content: center;">
        <p>Muhammad Rifansyah aliyilbuni</p>
          <p>Ahmad farhan ruwaisyid</p>
          <p>Andiena amalia</p>
          <p>Ridho muhandis</p>
          <p>Agmal dwi cahyandita</p>
        </blockquote>
      </div>
        <div class="card-header" style="background-color: rgb(82, 229, 255); text-align: center;">
          tugas kelompok
        </div>
    </div>
  </footer>
</body>
</html>