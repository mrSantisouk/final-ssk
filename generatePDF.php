<?php
require_once('./dompdf/autoload.inc.php');

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('chroot',realpath(''));
$options->set('defaultFont','Phetsarath');


$dompdf = new Dompdf($options);

$html = '
<style>
@font-face {
    font-family:Phetsarath;
    src: url(Phetsarath.ttf);
  }  
body{
    font-family:Phetsarath ;
    fon-size: 18 px;
}
</style>


<h1 >ສະບາຍດີ</h1>
<h1 >hi</h1>

';

$dompdf->load_html($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream('hi', array("Attachment" => 0));




?>