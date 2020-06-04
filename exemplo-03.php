<?php


	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

	echo "Olá boa tarde a data de hoje é:";
	echo "<br>";
	echo ucwords(strftime("%A %B %C"));
	echo "<br>";
	echo ucwords(strftime("%D"));
	echo "<br>";
	echo ucwords(strftime("%c"));
	echo "<br>";
	echo strftime("%s");

?>