<?php
	include("../include/connect.php");
	$searchTerm = $_GET['term'];

   $sql = "select * from (
                 select de.deutsch_word As srch_key
			   from word_germany de
			   where
				 de.deutsch_word LIKE concat('".$searchTerm."' , '%')
				 UNION
			   select  ar.arabic_word As srch_key
			   from word_germany ar
			   where
				 ar.arabic_filtered LIKE concat('".$searchTerm."' , '%')
				 ) source
				  LIMIT 0,10
  			 ";
 	  $qr = $conn->query($sql);
 	while ($rows = $qr->fetch()) {
  	         $data[] = $rows['srch_key'];
    }
	    echo json_encode($data);
?>
