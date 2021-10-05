<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<title>Welcome to Hello World</title>



</head>



<body>

<div id="container">

<h1>Hello World</h1>

</div>

<hr>

HTML Helper

<?php echo br(3);

?>

RMUTL<br>TAK



<p>Heading</p>

<?php echo heading("mark",1);?>

<?php echo heading("mark",2);?>

<?php echo heading("mark",3);?>

<?php echo heading("mark",4);?>

<?php echo heading("mark",5);?>

<?php echo heading("mark",6);?>



<p>nbs</p>

<?php

echo 'My Website';

echo nbs(10);

echo 'jetsada';

?>



<p>OL</p>

<?php

$list =array('jetsada',

'keawmuangklang',

'mark',

'tak');



echo ol($list);



echo '<hr>';



echo ul($list);

?>




</body>

</html>