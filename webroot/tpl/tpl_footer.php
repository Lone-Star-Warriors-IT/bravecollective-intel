<?php if (!defined('INTEL')) die('go away'); ?>

    <div style="font-size:70%; position:fixed; bottom:1px; right:1px; z-index:-23;" ><a href="http://evewho.com/pilot/AzAkiR+NaLDa">Azakir Nalda</a> &bull; </div>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/bootstrap.min.js"></script>

<?php
    foreach ($pScripts as $file) {
	echo "  <script src='" . $file . "'></script>\n";
    }
?>

  </body>

</html>
