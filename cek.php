<?php
if (!isset($_SESSION['kunci'])) 
{
    # code...
    header( 'location: login.php' );
}

?>