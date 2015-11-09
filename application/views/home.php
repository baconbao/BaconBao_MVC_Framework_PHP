<!DOCTYPE html>
<html>
<head>
  <title>BaconBao MVC Framework (PHP)</title>
	<meta charset="utf-8" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
</head>
<body>
  <h1><?php echo $callback; ?></h1>
  <div>
    <small>
      Session userId: <?php echo $userId; ?>, count: <?php echo $loginTimes; ?>.
      <a href="<?php echo SITE_HOMEURL.'/index/logout'; ?>">Restart.</a>
    </small>
  </div>
  <br /><br />
  <div>
    <small>
      <a href="<?php echo SITE_HOMEURL.'/get/show/AAa/BbB/cCC/DDd/EeE'; ?>">Getting "Http GET args" example.</a>
    </small>
  </div>
</body>
</html>