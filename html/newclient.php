<?php

	// requirements
	require("../includes/config.php"); 
	require("../includes/client_class.php"); 
	
	// accessing by GET is incorrect, sorry
	if($_SERVER["REQUEST_METHOD"] == "GET") {
		apologize("Can't access this page by GET request."); 
	}

	// accessing by POST is correct
	else if($_SERVER["REQUEST_METHOD"] == "POST") {
		$info = new ClientInfo(); 
		assert2($info->from_array($_POST), "POST items are incorrect." );
		assert2($info->push(), "Failed to insert into server in newclient.php"); 
		$client_id = $info->get("ClientID"); 
		redirect("client.php?ClientID=" . $client_id); 
	}
	
?>