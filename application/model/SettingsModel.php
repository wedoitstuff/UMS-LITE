<?php
class SettingsModel
{


  public static function siteLogo()
  {
    $sql = "SELECT * FROM settings";
  	$result = mysqli_query($conn, $sql);
  	$row = mysqli_fetch_assoc($result);

    $database = DatabaseFactory::getFactory()->getConnection();
    $query->execute();

    $row = $query->fetch(PDO::FETCH_ASSOC);

  	if($row['filePath'] != 'null'){
  		$logoPath = 'uploads/'.$row['filePath'];
  		$logoPath = "<img src = '$logoPath' height = '40'>";
  		if(file_exists('uploads/'.$row['filePath'])){
  			$logoPath = $logoPath;
  		}else{
  			$logoPath = $row['siteTitle'];
  		}
  	}else{
  		$logoPath = $row['siteTitle'];
  	}
  	return $logoPath;
  }
}
?>
