<!DOCTYPE html>
<html lang="de">
<head>
<title>Meteogram</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"><meta name="robots" content="noindex,nofollow">
</head>
<body>
<script src="libraries/custom/jquery_min.js"></script>
<script src="libraries/custom/sun.js"></script>
<script src="libraries/custom/meteogram.js"></script>
<script src="highstock/highstock.js"></script>
<script src="libraries/custom/windbarb.js"></script>

<div id="dwd_container" style="height: 320px; margin: 0 auto">
    <div style="margin-top: 100px; text-align: center" id="loading">
        <i class="fa fa-spinner fa-spin"></i> Lade Wetterdaten...
    </div>
</div>

<br />
<b>Fatal error</b>:  Uncaught exception 'Exception' with message 'DateTime::__construct(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone.' in /home/spreitz-de/htdocs/EDNC/meteogram/data/meteogram.php:76
Stack trace:
#0 /home/spreitz-de/htdocs/EDNC/meteogram/data/meteogram.php(76): DateTime-&gt;__construct()
#1 {main}
  thrown in <b>/home/spreitz-de/htdocs/EDNC/meteogram/data/meteogram.php</b> on line <b>76</b><br />
