<?php
require_once ('curl.php');
$cartItem = '"Cart":{"Item":[{"Skuid":"59804","IsAutoShip":"","Quantity":1,"Id":"90","productPack":[21244,21242,21244,22000,22001,22013,22030,22040,89293,76204,70701,70703]}]}';
$config = array(
	1 => array(
		'apiName' => 'Get Category',
		'url' => '/us/en/mobile_products.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&categories=1',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Product Summary',
		'url' => '/us/en/mobile_products.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&items=1&data={"Category":{"CategoryId":"CinchStarterKits","ParentCategoryId":"WeightManagement","PageSize":"1","PageNumber":"1"}}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Product Detail',
		'url' => '/us/en/mobile_products.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&detail=1&data={"Product":{"SkuId":"50415","PageSize":"1","PageNumber":"1"}}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Search Product',
		'url' => '/us/en/mobile_search.php',
		'method' => 'get',
		'getvalues' => 'search=1&sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&search=1&data={"Product":{"q":"20282","page": "1","q": "20282","sp_c": "","sort": ""}}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Get Cart',
		'url' => '/us/en/mobile_cart.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&getcart=1&data={'.$cartItem.'}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Preview Order',
		'url' => '/us/en/mobile_order.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=WV08094&sk_mobile.api_version=1&preview=1&data={'.$cartItem.'}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Preview Order Update',
		'url' => '/us/en/mobile_order.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=WV08094&sk_mobile.api_version=1&previewupdate=1&data={"OrderId":"",'.$cartItem.',"IsResale":"","IsShippingOverride":"1","WalletId":"19523289","IsAutoShip":"","DeliveryMethod":"STANDARD","DropShipId":"","SponsorId":"","IsNewMember":"","OrderTotal":"90.79","Shipping":{"name":"201 S 4th St","line1":"201 S 4th St","line2":"","city":"San Jose","state":"CA","county":"Santa Clara","zipcode":"95112-3600","phone":"","province":"CA","zip":"95112-3600","postalcode":"95112-3600","state_id":"CA"},"Billing":{"name":"BARNABE  BUTTERS","line1":"22108 CENTER ST","line2":"","city":"CASTRO VALLEY","state":"CA","county":"ALAMEDA","zipcode":"94546-6662","phone":"(925) 734-3636","province":"CA","zip":"94546-6662","postalcode":"94546-6662","state_id":"CA"},"PaymentDetails":{"card_type":"MasterCard","name":"Nameless","card_number":"********1111","expire_month":"7","expire_year":"2019","default":"false"},"PVMonth":"'.date('n').'"}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Preview Order Sponsor Flow',
		'url' => '/us/en/mobile_order.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&preview=1&shop=N&data={'.$cartItem.',"SponsorId":"","Shipping": {"name": "PREETHI A SIRIAM","line1": "4747 WILLOW RD","line2": "","city": "PLEASANTON","state": "CA","county": "ALAMEDA","zipcode": "94588-2763","phone": "(925) 924-2000","province": "CA","zip": "94588-2763","postalcode": "94588-2763","state_id": "CA"},"Billing": {"name": "PREETHI A SIRIAM","line1": "4747 WILLOW RD","line2": "","city": "PLEASANTON","state": "CA","county": "ALAMEDA","zipcode": "94588-2763","phone": "(925) 924-2000","province": "CA","zip": "94588-2763","postalcode": "94588-2763","state_id": "CA","email":"preethi_sriram@yahoo.com"}}
',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Submit Order Sponsor Flow',
		'url' => '/us/en/mobile_order.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&shop=N&release=1&data={"OrderId":"6100029830",'.$cartItem.',"IsResale":"","IsShippingOverride":"","WalletId":"","IsAutoShip":"","DeliveryMethod":"","DropShipId":"","SponsorId":"","IsNewMember":"","OrderTotal":"21.55","Shipping":{"name":"190 Marietta St NW","line1":"190 Marietta St NW","line2":"","city":"ATLANTA","state":"GA","county":"","zipcode":"30303","phone":"","province":"","zip":"30303","postalcode":"30303","state_id":"GA"},"Billing":{"name":"190 Marietta St NW","line1":"190 Marietta St NW","line2":"","city":"ATLANTA","state":"GA","county":"","zipcode":"30303","phone":"","province":"","zip":"30303","postalcode":"30303","state_id":"GA"},"PaymentDetails":{"card_type":"MC","name":"Jhon Doe","card_number":"5442 9811 1111 1114","expire_month":"12","expire_year":"2015","default":"false"},"MemberProfile": {"firstname": "Jhon","lastname": "Doe","spouse_firstname":"Jhon","spouse_lastname":"Doe","line1": "190 Marietta St NW", "line2": "","city": "ATLANTA","state": "GA", "county": "","zipcode": "30303","business_phone": "","postalcode": "30303","email": "preethi_sriram009@yahoo.com","dl_number":"","ssn":"","dl_state":"GA"},"PVMonth":"'.date('n').'"}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Submit Order',
		'url' => '/us/en/mobile_order.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=WV08094&sk_mobile.api_version=1&release=1&data={"OrderId":"6100029850",'.$cartItem.',"IsResale":"","IsShippingOverride":"1","WalletId":"19523289","IsAutoShip":"","DeliveryMethod":"STANDARD","DropShipId":"","SponsorId":"","IsNewMember":"","OrderTotal":"90.79","Shipping":{"name":"201 S 4th St","line1":"201 S 4th St","line2":"","city":"San Jose","state":"CA","county":"Santa Clara","zipcode":"95112-3600","phone":"","province":"CA","zip":"95112-3600","postalcode":"95112-3600","state_id":"CA"},"Billing":{"name":"BARNABE  BUTTERS","line1":"22108 CENTER ST","line2":"","city":"CASTRO VALLEY","state":"CA","county":"ALAMEDA","zipcode":"94546-6662","phone":"(925) 734-3636","province":"CA","zip":"94546-6662","postalcode":"94546-6662","state_id":"CA"},"PaymentDetails":{"card_type":"MasterCard","name":"Nameless","card_number":"********1111","expire_month":"7","expire_year":"2019","default":"false"},"PVMonth":"'.date('n').'"}',
		'postvalues' => ''
	), //"Cart":{"Item":[{"Skuid":"20283","IsAutoShip":"","Quantity":1}]}
	array(
		'apiName' => 'Get Customer Kit',
		'url' => '/us/en/mobile_sponsor.php',
		'method' => 'get',
		'getvalues' => 'jointype=1&type=member',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Get Business Kit',
		'url' => '/us/en/mobile_sponsor.php',
		'method' => 'get',
		'getvalues' => 'jointype=1',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Update Card To Wallet',
		'url' => '/us/en/mobile_payment.php',
		'method' => 'get',
		'getvalues' => 'update=1&sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&data={"PaymentData":{"wallet_id":"19541374","KSN": "62994953380000200108", "Track1Hex": "238fa0bbe0314649f81d4b016b7ececf8a862e57de01e709608d25aea42e7c79d2b2634323617c0000f6977fcd1423f1e448594534aacc85131b49b922eece06", "Track2Hex": "704cf49f5ea4128afb1997159d86a89b31b96b8a8369b17fc73dc145bbc19125abb2787b5c0474ed", "CardType":"Visa", "PaymentType":""}}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Add Card To Wallet',
		'url' => '/us/en/mobile_payment.php',
		'method' => 'get',
		'getvalues' => 'add=1&sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&data={"PaymentDetails":{"card_type":"MC","name":"Preethi","card_number":"5442981111111114","expire_month":"12","expire_year":"2015","default":"false"}}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Delete Wallet',
		'url' => '/us/en/mobile_payment.php',
		'method' => 'get',
		'getvalues' => 'delete=1&sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&data={"PaymentDetails":{"wallet_id":"20471311"}}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Get Auto Ship',
		'url' => '/us/en/mobile_autoship.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&items=1&appsku=59747',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Get States',
		'url' => '/us/en/mobile_sponsor.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&state=1',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Verify Member Profile',
		'url' => '/us/en/mobile_sponsor.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&verifyall=1&data={"MemberProfile":{"firstname": "Joe","lastname": "Smoe","spouse_firstname": "Ann","spouse_lastname": "Smoe","line1": "4747 WILLOW RD", "line2": "","city": "PLEASANTON","state": "CA", "county": "ALAMEDA","zipcode": "94588-2763","business_phone": "(925) 924-2000","postalcode": "94588-2763","dl_number": "45353627","dl_state": "CA","ssn": "555-55-5555","email": "preethi_sriram@yahoo.com"}}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Verify Address',
		'url' => '/us/en/mobile_sponsor.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&verifyaddress=1&data={"Shipping":{"name":"test","line1":"4 Pennsylvania Plaza","line2":"","city":"New York","state":"NY","county":"","zipcode":"10001","phone":"","province":"","zip":"10001","postalcode":"10001","state_id":"NY"}}',
		'postvalues' => ''
	), 
	array(
		'apiName' => 'Get Messages',
		'url' => '/us/en/mobile_messages.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=ZH07717&sk_mobile.api_version=1&message=1',
		'postvalues' => ''
	),
	array(
		'apiName' => 'List My Autoships',
		'url' => '/us/en/mobile_autoship.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=BQ50228&sk_mobile.api_version=1&list=1',
		'postvalues' => ''
	),
	array(
		'apiName' => 'List My Particular Autoships',
		'url' => '/us/en/mobile_autoship.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=BQ50228&sk_mobile.api_version=1&list=1&data={"autoshipid":"23"}',
		'postvalues' => ''
	),
	array(
		'apiName' => 'Add Items in Existing Autoship (in progress)',
		'url' => '/us/en/mobile_autoship.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=BQ50228&sk_mobile.api_version=1&add=1&data={"autoshipid":"23", "items":[{"sku":"52115", "qty": "1", "freq": "30"},{"sku":"89222", "qty": "1", "freq": "60"}]}',
		'postvalues' => ''
	),
	array(
		'apiName' => 'Add Items in New Autoship (in progress)',
		'url' => '/us/en/mobile_autoship.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=BQ50228&sk_mobile.api_version=1&list=1&data={"autoshipid":"23"}',
		'postvalues' => ''
	),
	array(
		'apiName' => 'Widget Default',
		'url' => '/us/en/mobile_widget.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=BQ50228&sk_mobile.api_version=1&default=1&data={"sku":"89281"}',
		'postvalues' => ''
	),
	array(
		'apiName' => 'Widget Info',
		'url' => '/us/en/mobile_widget.php',
		'method' => 'get',
		'getvalues' => 'sk_mobile.shakleeid=BQ50228&sk_mobile.api_version=1&info=1&data={"sku":"89281"}',
		'postvalues' => ''
	),
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
<p>API Tool</p>
<table border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td valign="top"><form id="form1" name="form1" method="post" action="" onsubmit="chg(); return true;" target="_blank">
        <p>Url:
          <label for="url2"></label>
          <input name="url" type="text" id="url" value="http://mobile.local.shaklee.com:8282" size="40" />
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