<?php

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Database.php';
require_once 'core/Flasher.php';

require_once 'config/config.php';

?>

<noscript>
    ini adalah router dari semua folder yang nantinya akan di kirimkan di public index.php, jika kamu mempunyai sebuah endpoint yang nantinya akan di render di public index.php maka taruh foldernya disini dengan require_once 'core/nama_foldermu';
</noscript>