<?php

require 'Class.Tiktok.php';


	$tiktok = new Tiktok_Api;




		$tiktok->login('Choulinng','01635912116@Aa',null);	

		 $tha_tim = $tiktok->CmtPost('6828895259699727618', "Tα»± Like Tα»± Comment αΊ‘ ππππππ");
		 echo json_encode($tha_tim);



