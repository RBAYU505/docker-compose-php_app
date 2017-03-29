<h2> Data Mahasiswa Akakom Janti YK </h2>
<?php
$mahasiswa = array
(
	array("145410161","RESTA BAYU SETIAWAN","TEKNIK INFORMATIKA"),
	array("125610003","ANDY NICHOLSON","SISTEM INFORMASI"),
	array("135410211","JOANA BENETH","TEKNIK INFORMATIKA")
);
for($r=0; $r<3; $r++) {
	for($c=0; $c<3; $c++) {
	echo $mahasiswa[$r][$c]."<br/>";
	}echo "<br/>";}
?>
