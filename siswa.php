<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();
$a=1;
?>

<table border="8">
<tr>
<th>No</th>
<th>NIS</th>
<th>Full Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Nationality</th>
<th>Detail Siswa</th>
</tr>
<?php foreach($data as $r):?>
<tr>
<td><?php echo $a++; ?></td>
<td><?php echo $r['nis']; ?></td>
<td><?php echo $r['full_name']; ?></td>
<td><?php echo $r['date_ob']; $ages=$siswa->AgeC($r['date_ob']); ?></td>
<td><?php echo $ages; ?></td>
<td><?php echo $r['nationality']; ?></td>
<td><a href="siswa.php?a=<?php echo $r['id_siswa']; ?>"> Detail</a>
|<a href="siswa.php?a=<?php echo $r['id_siswa']; ?>"> Delete
|<a href="editsiswa.php?a=<?php echo $r['id_siswa']; ?>"> Edit</td>
</tr>

<?php endforeach?>

</table>