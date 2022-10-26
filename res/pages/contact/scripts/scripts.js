$(function(){
    //CONTACT FORM AJAX SUBMIT
    $('#contactForm').submit(function(){
        
		$.ajax({
			url:'mailer.php',
			type : 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			success: function(data) {
				
				console.log(data);
				
					
					$('#note').show();
					$('#error').hide();
					$("#fields").hide();
					
			}
		})
        return false;
    })


})