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
		$('#liftstable tr:last').before(newRow);
		// clear the text box
		$('#liftname').val('')
	    });
	}
    }

    $(document).ready(function () {
	$('#addliftbutton').click(function() {
	    liftManager.add();
	});
    });

})({}, jQuery, OC);
