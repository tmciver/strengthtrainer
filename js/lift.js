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
	var liftName = $('#lift-name').val()
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
		$('#lifts-table tr').eq(1).after(newRow);
	    });

	    // clear the text box
	    $('#lift-name').val('')
	}
    }

    liftManager.lifts = function(callback) {
	var url = OC.generateUrl('/apps/strengthtrainer/lifts');
	var lifts = [];

	$.ajax({
	    url: url,
	    type: 'GET',
	    headers: {
	     	Accept: "application/json"
	    }
	}).done(function (lifts) {
	    callback(lifts);
	});
    }

    function liftCreationRow() {
	return "<tr> \
                  <td><input type=\"text\" id=\"lift-name\"><input type=\"button\" value=\"Add\" id=\"add-lift-button\" class=\"st-button\" /></td> \
                </tr>";
    }

    $(document).ready(function () {
	$('#add-lift-button').click(function() {
	    liftManager.add();
	});
	$('#lifts-table').dataTable();
	$('#lifts-table thead').append(liftCreationRow());
    });

})(window.liftManager = window.liftManager || {}, jQuery, OC);
