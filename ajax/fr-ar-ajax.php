<?php
	include("../include/connect.php");
	$searchTerm = $_GET['term'];

   $sql = "select * from (
                 select fr.french_word As srch_key
			   from word_french fr
			   where
				 fr.french_word LIKE concat('".$searchTerm."' , '%')
				 UNION
			   select  ar.arabic_word As srch_key
			   from word_french ar
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
