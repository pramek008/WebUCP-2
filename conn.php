<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "tokobuku";

$koneksi = mysqli_connect($host,$user,$pass,$database);
// $koneksi = mysqli_connect("localhost","root","","tokobuku");

//cek koneksi ke database 
//apabila eror du

if(mysqli_connect_errno()){
    echo "Koneksi database Gagal : " . mysqli_connect_error();
}