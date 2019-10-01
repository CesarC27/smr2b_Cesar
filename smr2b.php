<a href="http://192.168.0.115/smr2b_adrian/smr2b.php">adrian</a>
cesar
<a href="http://192.168.0.108/smr2b_jesuscrespo/smr2b.php">jesuscrespo</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)

?>