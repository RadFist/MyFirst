<?php
include "conect.php";
    
if(isset($_POST['submit'])){
        if($_POST['submit']=="Tambahkan"){

            $name = $_POST["Name"];
            $judul = $_POST["judul"];
            $penulis = $_POST["penulis"];
            $tahun = $_POST["tahun"];
     
            $query = "INSERT INTO book( `Name`,`Judul`, `Penulis`, `Tahun`) VALUES ('$name','$judul', '$penulis',$tahun)";
            $sql = mysqli_query($koneksi,$query);

            if($sql){
                header("location: index.php");
            }else{
                echo "$query";
            }

         
        } elseif ($_POST['submit']=="Simpan"){
            $name = $_POST["Name"];
            $judul = $_POST["judul"];
            $penulis = $_POST["penulis"];
            $tahun = $_POST["tahun"];
            $id = $_POST['id'];
           
            $query ="UPDATE `book` SET `Name`='$name',`Judul`='$judul',`Penulis`='$penulis',`Tahun`= '$tahun' WHERE Book_Id =$id";
            $sql = mysqli_query($koneksi,$query);

            if($sql){
                header("location: index.php");
            }else{
                echo "$query";
            }
        }
    }
    if(isset($_GET['hapus'])){
        $query = "DELETE FROM book WHERE Book_Id = $_GET[hapus]";
        $sql = mysqli_query($koneksi,$query);
        if($sql){
            header("location: index.php");
        }else{
            echo "$query";
        }
    }
?>