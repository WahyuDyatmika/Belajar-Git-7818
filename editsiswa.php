<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');

$id=$_GET['id'];
if(!is_numeric($id)){
	exit('ID SALAH');
}
$siswa = new Siswa();
$data = $siswa->readSiswa($id);

$nation = new nationality();
$data_nation = $nation ->readAllNationality();


if(empty($data)){
	exit('Siswa is not found');
	}
$dt=$data[0];

?>


<h1> Edit Siswa </h1>
<form action="esiswa.php" method="post">
NIS : <BR>
<input type="text" name="in_nis" value="<?php echo $dt['id_siswa'];  ?>" disabled> <br>
Nama Lengkap : <BR>
<input type="text" name="in_name" value="<?php echo $dt['full_name'];  ?>"></br>
Email : <BR>
<input type="text" name="in_email" value="<?php echo $dt['email'];  ?>"><br>
Kwarganegaraan : <BR>
<select name="in_nation">
	<option value="<?php echo $dt['id_nationality']?>"><?php echo $dt['nationality']?></option>
	<?php foreach($data_nation as $r): ?>
	<option value="<?php echo $r['id_nationality']?>"><?php echo $r['nationality']?></option>
	<?php endforeach; ?>
</select><br>
<input type="file" name="foto"><br><br>
<img src="$dt(in)foto">
<input type="submit" name="kirim" value="Simpan">
</form>