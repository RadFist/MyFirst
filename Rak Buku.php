<!DOCTYPE html>
<?php
include 'conect.php';
$id = "";
$name_input = "";
$judul_input = "";
$penulis_input = "";
$tahun_input = "";

if (isset($_GET['ubah']))
{
  $id = $_GET['ubah'];
  $query = "SELECT * from book WHERE Book_Id =$id";
  $sql = mysqli_query($koneksi,$query);  
  $result = mysqli_fetch_assoc($sql); 

  $name_input = $result['Name'];
  $judul_input = $result['Judul'];
  $penulis_input = $result['Penulis'];
  $tahun_input = $result['Tahun'];

}
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Bookshelf Apps</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="fontawsome/css/font-awesome.min.css">

  <!-- structure -->
</head>

<body>
  <header class="head_bar">
    <h1 class="head_bar__title">PEMINJAMAN BUKU</h1>
  </header>

  <main>
    <!-- input-->
    <section class="input_section" id="inputSection">
      <h2 id="h2InputSection">Masukkan Data peminjam</h2>

      <!-- id -->
      <form id="inputBook" method="POST" action="proses.php">
        <input type="number" value= <?php echo $id; ?> name="id" hidden >
        <!-- nama -->
        <div class="input" id="sectionTitle">
          <label for="inputBookTitle">Peminjam</label>
          <input id="inputBookTitle" name="Name" required type="text" value="<?php echo $name_input; ?>" >
          <small class="error-display" id="errorTitle">Wajib Diisi</small>
        </div>

        <!-- judul -->
        <div class="input" id="sectionTitle">
          <label for="inputBookTitle">Buku</label>
          <input id="inputBookTitle" name="judul" required type="text" value="<?php echo $judul_input; ?>">
          <small class="error-display" id="errorTitle">Wajib Diisi</small>
        </div>

        <!--penulis -->
        <div class="input" id="sectionAuthor">
          <label for="inputBookAuthor">Penulis</label>
          <input id="inputBookAuthor" name="penulis" required type="text" value ="<?php echo $penulis_input; ?>">
          <small class="error-display" id="errorAuthor">Wajib Diisi</small>
        </div>

        <!-- tahun -->
        <div class="input" id="sectionYear">
          <label for="inputBookYear">Tahun</label>
          <input id="inputBookYear" name="tahun" required type="number" value="<?php echo $tahun_input; ?>">
          <small class="error-display" id="errorYear">Wajib Diisi</small>
        </div>

        <!-- logika tombol -->
        <?php
          if (isset($_GET['ubah'])){
            ?>
            <button class="button" type="submit" name="submit" value ="Simpan">
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
              Simpan
            </button>
        <?php
          }else{
            ?>
          <button class="button" type="submit" name="submit" value="Tambahkan">
          <i class="fa fa-plus"></i>
          Tambahkan
          </button>
        <?php
          }
         ?>

        <input  class="buttonBatal" type="button" onclick="location.href='index.php';" value="Batal"/>
      </form>

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