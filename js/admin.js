$(document).ready(function(){



	$('#somesetting').blur(function(event){
		event.preventDefault();
		var post = $( "#somesetting" ).serialize();
		$.post( OC.filePath('radio', 'ajax', 'seturl.php') , post, function(data){
			$('#radio .msg').text('Finished saving: ' + data);
		});
	});



});
