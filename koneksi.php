 <?php
$koneksi = mysqli_connect("localhost","root","","keuangan");

//Check connection
if (mysqli_connect_errno()){
	echo "konneksi database gagal:".
	mysqli_connect_error();
}else{
	echo "hore bisa konek" ;
}
?>