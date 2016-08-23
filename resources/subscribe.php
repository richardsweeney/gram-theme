<?php
	require_once 'inc/MCAPI.class.php';
	$api = new MCAPI('abe73bbbe5688576da6e774ebfffe6bc-us14');

	// Submit subscriber data to MailChimp
	// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
	$retval = $api->listSubscribe( 'd47b3476b3', $_POST["email"], $merge_vars, 'html', false, true );

	if ($api->errorCode){
		echo "<h4>Please try again.</h4>";
	} else {
		echo "<h4>Thank you, you have been added to our mailing list.</h4>";
	}
?>
