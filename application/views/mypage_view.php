<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<title>Welcome to MY PAGE</title>

</head>



<body>

<h1>My Page</h1>



<a href="<?php echo site_url('Hello/index');?>">

LINK TO PAGE HELLO FN index</a>

<br>



<a href="<?php echo site_url('Hello/index2');?>">

LINK TO PAGE HELLO FN index2</a>

<br>

<a href="<?php echo site_url('Welcome');?>">

LINK TO PAGE WELCOME</a>

<br><br>
<img src="<?php echo base_url('img'):?>/wj.jpeg" alt="" >



</body>

</html>