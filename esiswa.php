<?

//omang

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');

$siswa = new Siswa();
if(!copy($_FILES)['in_foto']['tmp_name'], 'img/'.$_POST['in_nis'].'.png')){
	exit('error');
}

$data['input_name']	=	$_POST['in_name'];
$data['input_email']	=	$_POST['in_email'];
$data['input_nationality']	=	$_POST['in_nation'];
$data['foto']	= 'img/' .$_POST['in_nis'].'.png';


	

	$tambah = $siswa->updateSiswa($_POST['in_nis'],$data);
	header('location:siswa.php');
	
?>