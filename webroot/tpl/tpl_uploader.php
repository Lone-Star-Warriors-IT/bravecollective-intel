<?php if (!defined('INTEL')) die('go away'); ?>

<!-- Uploader -->
<div class="container">

    <h4>We need your help!</h4>
    <div class="panel panel-default">
	<div class="panel-body">
	    <p>
		Please be active reporting meaningful intel (inlcuding a system name) through our <i>coalition intel channels</i>.<br>
		In addition we need volunteers running the <i>Lone Star Intel Reporter</i>. If nobody uploads intel (keep an eye on the <i>Uploader</i> count on the map) our map will stay empty.
	    </p>
	</div>
    </div>

    <h4>Lone Star Intel Reporter</h4>
    <div class="panel panel-default">
	<div class="panel-body">
	    <p>
		The <i>Lone Star Intel Reporter</i> is a Windows tool uploading data from in-game intel channels to this website.<br>
		Please keep it running while your Eve client is active and accept any updates distributed through its auto-update mechanism.
	    </p>
	    <strong>Download: <a href="http://lone-star-warriors.com/eve-downloads/intel/LSWIntelReporter.exe">Lone Star Intel reporter(In Beta!)</a></strong> <small>by <a href="evewho.com/pilot/AzAkiR+NaLDa">AzAkiR NaLDa</a></small>
	</div>
    </div>

    <div class="panel panel-success">
	<div class="panel-heading">
	    <h3 class="panel-title">Auth Token</h3>
	</div>
	<div class="panel-body text-center">
	    <h6><?php echo authUploaderToken(); ?></h6>
	    <small>The auth token listed above will expire in case you don't login into this site for some time.</small>
	</div>
    </div>

</div>
<!-- Uploader -->
