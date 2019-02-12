<?php 

if(isset($_POST['submit'])){
	$klasor_adi = $_POST['klasor_adi'];
	$dosya_adi = $_POST['dosya_adi'];
	if(!file_exists($klasor_adi)){
	$olustur = mkdir($klasor_adi);
	$altklasorler = ['css','js','images'];
	
	if($olustur){
		if(!$dosya_adi){
			fopen($klasor_adi.'/'.'index.php','a+');
		}else {
			fopen($klasor_adi.'/'.$dosya_adi.'.php','a+');
		}
		foreach ($altklasorler as $altklasor) {
			mkdir($klasor_adi.'/'.$altklasor);
		}
		echo 'Klasörünüz Oluşturuldu. Klasör Adı :'.$klasor_adi.'. '.'Dosya Adınız : '.$dosya_adi.'.php';
	}
 }else{
 	echo 'Girmek İstediğiniz Klasör Zaten Var. Yeni Bir Ad Giriniz.';
  }
}

 ?>
 
  <form method="POST">
 	<label>Klasör Adı Giriniz :</label>
 	<input type="text" name="klasor_adi"><br><br>
 	<label>Dosya Adı Giriniz :</label>
 	<input type="text" name="dosya_adi"><br><br>
 	<button type="submit" name="submit">Oluştur</button>
 </form>
