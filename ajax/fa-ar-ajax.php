<?php
	include("../include/connect.php");
	$searchTerm = $_GET['term'];

   $sql = "select * from (
                 select fa.farsi_word As srch_key
			   from word_farsi fa
			   where
				 fa.farsi_word LIKE concat('".$searchTerm."' , '%')
				 UNION
			   select  ar.arabic_word As srch_key
			   from word_farsi ar
			   where
				 ar.arabic_word_fl LIKE concat('".$searchTerm."' , '%')
				 ) source
				  LIMIT 0,10
  			 ";
				 $qr = $conn->query($sql);
		  	while ($rows = $qr->fetch()) {
		   	         $data[] = $rows['srch_key'];
		     }
		 	    echo json_encode($data);
		 ?>
