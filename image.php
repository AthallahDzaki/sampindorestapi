<?php
require "include/text_to_image.php";
if(empty($_GET['text'])) echo 'Error Text Not Found', die;
TextToImage($_GET['text']);
?> 
