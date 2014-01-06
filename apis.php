<?php
require_once ('curl.php');
$shakleeId = !empty($_GET['shaklee_id']) ? $_GET['shaklee_id'] : 'BQ50228'; //'BQ50228';
//$shipping = '"Shipping":{"name":"190 Marietta St NW","line1":"190 Marietta St NW","line2":"","city":"ATLANTA","state":"GA","county":"","zipcode":"30303","phone":"","province":"","zip":"30303","postalcode":"30303","state_id":"GA"}';
//$billing = '"Billing":{"name":"190 Marietta St NW","line1":"190 Marietta St NW","line2":"","city":"ATLANTA","state":"GA","county":"","zipcode":"30303","phone":"","province":"","zip":"30303","postalcode":"30303","state_id":"GA"}';
//$cartItem = '"Cart":{"Item":[{"Skuid":"89283","IsAutoShip":"","Quantity":1,"Id":"90","productPack":[21244,21242,21244,22000,22001,22013,22030,22040,89293,76204,70701,70703]}]}';
//$cartItem = '"Cart":{"Item":[{"Skuid":"89280","IsAutoShip":"","Quantity":1,"Id":"","productPack":[]}]}';
//$cartItem = '"Cart":{"Item":[{"Skuid":"20340","IsAutoShip":"1","Quantity":1,"Id":"","productPack":[]}]}';
//$cartItem = '"Cart":{"Item":[{"Skuid":"89281","IsAutoShip":"","Quantity":1,"Frequency":"","productPack":[],"primaryAppSku":"10001", "appSku":1}]}';
$config = array(
	1 => array(
		'apiName' => 'Get Volume',
		'url' => '/us/en/volume_summary',
		'method' => 'get',
		'getvalues' => 'shaklee_id='.$shakleeId,
		'postvalues' => ''
	)
);
$currentPage = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
$jsondata = json_encode($config);
$url = '';
if (!empty($_POST)) {
	if (!empty($_POST['postvalues'])) {
	header('Content-type: text/json');
		$url = $_POST['mainurl'].'?'.$_POST['getvalue'];
		$r = curlget($url, 'post', $_POST['postvalue']);
		echo $r;
		exit;
	} else {
	header('Content-type: text/json');
		$url = $_POST['mainurl'].'?'.$_POST['getvalues'];
		$r = curlget($url, 'get');
		echo $r;
		exit;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Api Tool</title>
<script language="javascript">
	var apis = <?php echo $jsondata; ?>;

function use(id)
{
	var details = apis[id];
	document.getElementById('path').value = details.url;
	var base_url = document.getElementById('url').value + document.getElementById('path').value;
	document.getElementById('mainurl').value = base_url;
	document.getElementById('getvalues').value = details.getvalues;
	document.getElementById('postvalues').value = details.postvalues;
	console.log(apis[id]);
}

function chg()
{
	var url = document.getElementById('url').value + document.getElementById('path').value + '?' + document.getElementById('getvalues').value;
	document.getElementById('result').innerHTML = url;
	if (document.getElementById('postvalues').value) {
		document.getElementById('form1').action = '<?php echo $currentPage; ?>';
		document.getElementById('result').innerHTML = document.getElementById('result').innerHTML + '<br/>With Post Data: <br />' + details.postvalues;
	} else {
		document.getElementById('form1').action = url;
	}
}
</script>
<style type="text/css">
body {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 11px;
}
</style>
</head>

<body>
<p>API Services For Angular</p>
<table border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td valign="top"><form id="form1" name="form1" method="post" action="" onsubmit="chg(); return true;" target="_blank">
        <p>Url:
          <label for="url2"></label>
          <input name="url" type="text" id="url" value="http://apis.local.myshaklee.com:81" size="40" />
        </p>
        <p>Path:
          <label for="path"></label>
          <input name="path" type="text" id="path" value="" />
        </p>
        <p>Get Values: <br />
          <label for="getvalues"></label>
          <textarea name="getvalues" id="getvalues" cols="45" rows="5"></textarea>
        </p>
        <p>Post Values: <br />
          <label for="postvalues"></label>
          <textarea name="postvalues" id="postvalues" cols="45" rows="5"></textarea>
        </p>
        <p>
          <input type="submit" name="submit" id="submit" value="Submit" />
          <input type="hidden" name="mainurl" id="mainurl" />
        </p>
        <p>&nbsp;</p>
      </form>
    <p>&nbsp;</p></td>
    <td valign="top">
    <?php
	  foreach ($config as $k => $v) {
		 ?>
            <?php echo $k; ?>. <a href="javascript:;" onclick="use('<?php echo $k; ?>');"><?php echo $v['apiName']; ?></a><br />
            <?php
	  }?></td>
  </tr>
</table>
<div id="result"></div>
</body>
</html>