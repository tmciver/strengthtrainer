/**
 * ownCloud - strengthtrainer
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Tim McIver <tim@timmciver.com>
 * @copyright Tim McIver 2015
 */

(function (setManager, $, OC) {

    setManager.add = function() {
	var date = $('#set-date').val();
	var liftId = $('#lift-option').val();
	var numSets = $('#num-sets').val();
	var numReps = $('#num-reps').val();

	// validate date
	if (!isValidDate(date)) {
	    alert("You must enter a valid date.");
	    return
	}

	// validate numSet and numReps
	var numSetsInt = parseInt(numSets);
	var numRepsInt = parseInt(numReps);
	if (isNaN(numSetsInt) || isNaN(numRepsInt)) {
	    alert("'Number of Sets' and 'Number of Reps' must be positive integers.");
	    return;
	}
	
	var url = OC.generateUrl('/apps/strengthtrainer/sets');
	var data = {
	    date: date,
	    liftId: liftId,
	    numSets: numSetsInt,
	    numReps: numRepsInt
	};
	$.ajax({
	    url: url,
	    type: 'POST',
	    contentType: 'application/json',
	    data: JSON.stringify(data)
	}).done(function (response) {
	    var newRow = "<tr><td>" + date + "</td>"
	               +     "<td>" + liftId + "</td>"
	               +     "<td>" + numSets + "</td>"
	               +     "<td>" + numReps + "</td>"
	               +     "<td></td>"
	               + "</tr>";
	    $('#sets-table tr:last').before(newRow);
	});

	// clear the text box
	$('#num-sets').val('');
	$('#num-reps').val('');
    }

    function isValidDate(date) {
	var date_array = date.split("-");
	var year = date_array[0];
	var month = date_array[1];
	var day = date_array[2];
	
	// validate month
	var month_valid = month > 0 && month <= 12;

	// validate day
	var day_valid = day > 0 && day <= 32;

	return month_valid && day_valid;
    }

    function isValidInt(i) {
	return i > 0;
    }

    $(document).ready(function () {
	$('#add-set-button').click(function() {
	    setManager.add();
	});
    });

})({}, jQuery, OC);
