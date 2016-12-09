<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');

$siswa = new Siswa();
$nationality = new Nationality();
$data_nation = $nationality->readAllNationality();

if(isset($_POST['kirim'])){
	$name	=	$_POST['in_name'];
	$nis	=	$_POST['in_nis'];
	$email	=	$_POST['in_email'];
	$nat	=	$_POST['in_nation'];
	
	$tambah = $siswa->createSiswa($nat,$nis,$name,$email,"");
	echo "Data terinputs";
}
?>

<h1> Tambah Siswa </h1>

<form action="tsiswa.php" method="post">
NIS : <BR>
<input type="text" name="in_nis"> <br>
Nama Lengkap : <BR>
<input type="text" name="in_name"></br>
Email : <BR>
<input type="text" name="in_email"><br>
Kwarganegaraan : <BR>
<select name="in_nation">
	<option value="">--PILIH NEGARA--</option>
	<?php foreach($data_nation as $r): ?>
	<option value="<?php echo $r['id_nationality']?>"><?php echo $r['nationality']?></option>
	<?php endforeach; ?>
</select><br>
<input type="submit" name="kirim" value="Simpan">
</form>