<?php
$angka = $_POST['angka'];
Class CekPerulangan{
	function CekHasil($i)
	{
		if($i%3==0 AND $i%5==0){
			for($j=0;$j<5;$j++){
				echo "Marlin Booking </br>";
			}
		}
		else if($i%3==0){
			for($j=0;$j<$i;$j++){
				echo "Marlin </br>";
			}
		}
		
		else if($i%5==0){
			for($j=0;$j<$i;$j++){
				echo "Booking </br>";
			}
		}
		else
		{
			echo "tidak masuk kategori";
		}
		
	}
}

$cetak = new CekPerulangan();
echo $cetak->CekHasil($angka);

?>