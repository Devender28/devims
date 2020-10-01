<script>
function sendOTP() { 
    var input = $("#email").val();
    
        var data = {
            "email" : input,
            "action" : "send_otp"
        }; 
        $.ajax({
            url : '<?php echo base_url("register/sendotp");?>',            
            type : 'POST',
            data : data, 
            success : function(response) { 
                $("#dev").html(response);
            }
            
        });
    
}

function login()
{
	var email = $("#email").val();
	var pw = $("#password").val();
    
	var data = {
		"email" : email,
		"password" : pw,
		"login" : 1
	}; 

	$.ajax({
            url : '<?php echo base_url("register/login");?>',            
            type : 'POST',
            data : data, 
            success : function(response) { 
				if(response=='')
		          {
					location.href = "<?php echo base_url('user/dashboard');?>";
				  }
                $("#dev").html(response);
            }
            
        });
}


function register()
{
	var name = $("#name").val();
	var email = $("#email1").val();
	var mobile = $("#mobile").val();
	var pw = $("#password1").val();
	var pp = $("#privacy_policy1").val();
	
  
	var data = {
		"name" : name,
		"email" : email,
		"mobile" : mobile,
		"password" : pw,
		"privacy_policy" : pp,
		"register" : 1
	}; 

	$.ajax({
            url : '<?php echo base_url("userregister");?>',            
            type : 'POST',
			data : data, 
			dataType: 'json',
            success : function(response) { 
				if(response.status == 'success')
				{
					
					$("#dev1").html(response.msg);
					$("#register").reset();
				}
				if(response.status == 'failed')
				{
					$("#dev1").html(response.msg);
				}
		         
               
                
            }
            
        });
}



</script>
