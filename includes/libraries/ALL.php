<?php
/***************
* SCAS i4
*
* ALL library functions
*
****************/

function check_assert_handler($description = NULL) {
	// <<<EDIT CODE HERE >>> //
	$msg = "Assert Failure: " . 
		($description ? $description : debug_backtrace()) ; 
	throw new Exception($msg);  
	// <<<END EDIT HERE >>> //

}

// <<EDIT DEFINITIONS HERE>> //
define("QUERY_DATABASE", DATABASE);
define("QUERY_PASSWORD", PASSWORD);
define("QUERY_SERVER", SERVER);
define("QUERY_USERNAME", USERNAME);
// << END EDIT HERE >> //

require("check.php"); 
	/* functions that check code is valid (e.g. assert statements) */

require("html.php"); 
	/* all functions begin with html and are written in camelCase */

require("manipulations.php"); 
	/* helper functions to manipulate arrays, strings, etc., */

require("query.php"); 
	/* all functions begin with query and are written in php_case */	

require("data_class.php"); 
	/* defines a class for a generic data object */
?>