/**
 * ownCloud - strengthtrainer
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Tim McIver <tim@timmciver.com>
 * @copyright Tim McIver 2015
 */

(function (liftManager, $, OC) {

    liftManager.add = function() {
	var liftName = $('#liftname').val()
	console.log("Lift name is: " + liftName)
	if (liftName) {
	    var url = OC.generateUrl('/apps/strengthtrainer/lifts');
	    var data = {
		name: liftName
	    };
	    $.ajax({
		url: url,
		type: 'POST',
		contentType: 'application/json',
		data: JSON.stringify(data)
	    }).done(function (response) {
		var newRow = "<tr><td>" + liftName + "</td></tr>"
		console.log(response)
		$('#liftstable > tr:last').before(newRow);
	    });
	}
    }

    $(document).ready(function () {
	$('#addliftbutton').click(function() {
	    liftManager.add();
	});
    });

})({}, jQuery, OC);
