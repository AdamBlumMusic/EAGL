<?php
function getUA() {
	$useragent = $_SERVER ['HTTP_USER_AGENT'];
	echo $useragent;
}
?>