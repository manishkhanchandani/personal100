// JavaScript Document

var Shaklee = {
	user_id: '',
	language: 'en',
	url_translation: 'http://mobile.local.shaklee.com:8282/us/en/mobile_translation.php?sk_mobile.shakleeid=BQ50228&sk_mobile.api_version=1&default=1',
	url_member: 'http://mobile.local.shaklee.com:8282/us/en/mobile_sponsor.php?jointype=1&type=member&sk_mobile.shakleeid=BQ50228',
	log: function(msg) {
		console.log(msg);
	},
	items: []
};

var ShakleeTranslation = {
	
};

function get(url, callback)
{
	$.getJSON(url, 'jsoncallback=?', function(data){
		eval(callback)(data);
	});

}

function test(data)
{
	alert(data);
	console.log(data);
}

function doClick(itemname)
{
	switch (itemname) {
		case 'member':
			get(Shaklee.url_member, 'member');
			$.mobile.changePage("#member", "slidedown");
			break;
		default:
			$.mobile.changePage("#"+itemname, "slidedown");
			break;
	}
}

function translation(data)
{
	//Shaklee.log(data);
	for (var key in data) {
		var obj = data[key];
		ShakleeTranslation[key] = obj;
	}
	Shaklee.log(ShakleeTranslation);
}

function showLabel(label)
{
	return ShakleeTranslation[label];
}
function addtosponsercart(ID, SKU, QTY, WIZARD_SKU)
{
	var items = {"Skuid":SKU, "isAutoShip": false, "Quantity":QTY, "Id":ID, "productPack":""}
	Shaklee.items = items;
	Shaklee.log(Shaklee.items);
	if (WIZARD_SKU > 0) {
		alert(WIZARD_SKU);
	}
}


function parse_jointype(data)
{
	var JoinTypes = data.JoinTypes;
	var meta = data.meta;
	var string = '';
	string = '';
	for (var key in JoinTypes) {
		var obj = JoinTypes[key];
		Shaklee.log('key');
		Shaklee.log(key);
		Shaklee.log('obj');
		Shaklee.log(obj);
		string += '<li>';
		for (var prop in obj) {
			var productlist = obj[prop];
			Shaklee.log('prop');
			Shaklee.log(prop);
			string += '<h3>' + showLabel(meta.jointypekey+key) + '</h3>';//<img src="'+showLabel(meta.image+key)+'" />
			Shaklee.log('productlist');
			Shaklee.log(productlist);
			string += '<ul>';
			for (var product in productlist) {
				var individual = productlist[product];
				Shaklee.log('individual');
				Shaklee.log(individual);
				string += '<li><div>'+showLabel(meta.jointypekey+product)+'</div>';
				string += '<span class="ui-li-count">'+(Object.keys(individual).length)+'</span>';
				string += '<ul>';
				for (var lang in individual) {
					var individual_lang = individual[lang];
					Shaklee.log('individual_lang');
					Shaklee.log(individual_lang);
					if (individual_lang.WIZARD_SKU) {
						//call wizart service
						string += '<li><a href="#" onClick="addtosponsercart(\''+individual_lang.ID+'\', \''+individual_lang.SKU+'\', 1, \''+individual_lang.WIZARD_SKU+'\')">'+showLabel('lang_'+lang)+'</a></li>';
					} else {
						//add to cart
						string += '<li><a href="#" onClick="addtosponsercart(\''+individual_lang.ID+'\', \''+individual_lang.SKU+'\', 1, 0)">'+showLabel('lang_'+lang)+'</a></li>';
					}
					
				}
				string += '</ul>';
				string += '</li>';
			}
			string += '</ul>';
		}
		string += '</li>';
	}
	return string;
}
function member(data)
{
	Shaklee.log(data);
	if (data.success == false) {
		alert('error');
	} else {
		var string = parse_jointype(data);
		$('#member_content').html(string);
		$('#member_content').listview('refresh');
	}
}


