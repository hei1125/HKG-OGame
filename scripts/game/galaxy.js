function doit(missionID, planetID) {
	$.getJSON("game.php?page=fleetAjax&ajax=1&mission="+missionID+"&planetID="+planetID, function(data)
	{
		$('#slots').text(data.slots);
		if(typeof data.ships !== "undefined")
		{
			$.each(data.ships, function(elementID, value) {
				$('#elementID'+elementID).text(number_format(value));
			});
		}
		
		var statustable	= $('#fleetstatusrow');
		var messages	= statustable.find("~tr");
		if(messages.length == MaxFleetSetting) {
			messages.filter(':last').remove();
		}
		var element		= $('<td />').attr('colspan', 8).attr('class', data.code == 600 ? "success" : "error").text(data.mess).wrap('<tr />').parent();
		statustable.removeAttr('style').after(element);
	});
}

function galaxy_submit(value) {
	$('#auto').attr('name', value);
	$('#galaxy_form').submit();
}
$(document).on('keydown', function(event) {
    if (event.keyCode == $.ui.keyCode.DOWN) {
        event.preventDefault();
        galaxy_submit('galaxyRight');
    }
    else if (event.keyCode == $.ui.keyCode.UP) {
        event.preventDefault();
        galaxy_submit('galaxyLeft');
    }
    else if (event.keyCode == $.ui.keyCode.RIGHT) {
        event.preventDefault();
        galaxy_submit('systemRight');
    }
    else if (event.keyCode == $.ui.keyCode.LEFT) {
        event.preventDefault();
        galaxy_submit('systemLeft');

    }
});