<?php
date_default_timezone_set("America/New_York");
require_once('src/Birthday.php');
$levi = new levidurfee\Birthday;

if($levi->check()) {
	echo "it's levi's birthday!";
} else {
	echo "it isn't levi's birthday :(";
}