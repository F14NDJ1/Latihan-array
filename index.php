<?php 
echo "=========";
echo "=Array=";
echo "=========";
$mahasiswa = [
	'nama' 		=> 'Firman Anshari Adjie',
	'nim'  		=> 1710530215,
	'alamat'	=> 'Mataram',
	'prestasi'	=> [
		'akademik'	=> [
				'IPA'	=> 'Olimpiade Sains',
				'IPS'	=> 'OSN IPS'
		],
		'non_akademik'	=> 'PIMNAS FUTSAL' 
	],	
];
echo"<pre>";
print_r($mahasiswa);
echo"<pre>";

echo "==========";
echo "=Object=";
echo "==========";
$mahasiswa = (object)[
	'nama' 		=> 'Firman Anshari Adjie',
	'nim'  		=> 1710530215,
	'alamat'	=> 'Mataram',
	'prestasi'	=> (object)[
		'akademik'	=> [
				'IPA'	=> 'Olimpiade Sains',
				'IPS'	=> 'OSN IPS'
		],
		'non_akademik'	=> 'PIMNAS FUTSAL' 
	],	
];
$mahasiswa->prestasi->akademik = (object)$mahasiswa->prestasi->akademik;


echo"<pre>";
print_r($mahasiswa);
echo"<pre>";
 ?>