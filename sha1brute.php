﻿<?php
$hash = $_GET['sha1'];
$passwordLength = $_GET['passlen'];
$alphabetLength = $_GET['alphlen'];
$numberOfTries = pow($alphabetLength, $passwordLength)-1;
	
	for($i = 0; $i < $numberOfTries; $i++)
		{
		if($hash == sha1(base_convert($i, 10, $alphabetLength)))
		{
			echo "Your password is ".base_convert($i, 10, $alphabetLength);
			return;
		}
	}
	if($i>=$numberOfTries)
		{
			echo "Password not found";
		}
	?>