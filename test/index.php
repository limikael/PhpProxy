<?php

	require __DIR__."/../src/PhpProxy.php";

	$phpProxy=new PhpProxy();
	$phpProxy->setRemoteSite("http://staging.tunapanda.org/learninglocker/public/data/xAPI/");
	$phpProxy->dispatch();