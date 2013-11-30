/* All jQuery custom and common validation functions need to be written here
 * please avoid highly customized validation methods
 * CAE 11/30
 *
 **/
jQuery.validator.setDefaults({
        errorElement : 'span',
        errorClass : 'validation-error',
});
jQuery.validator.addMethod("isValidIP", function(value, element) {
    var dataString = 'ipad='+ value;  
        $.ajax({
            type: "POST",
            url: "http://localhost/QS-master/index.php/utility/isValidIP",
            dataType:'json',
            async: false,
            data: dataString,
            cache: false,
            beforeSend: function()
            {
            //parent.animate({'backgroundColor':'#ffff99'},300).animate({ opacity: 0.35 }, "slow");;
            }, 
            success: function(data)
            {
                if(data.isValid){
                   valid = true;
                } else{
                    valid = false;
                } 

            },
            error: function(){
                    alert("Something went wrong");
            }


        });
    return valid;

}, "Invalid IP format");

jQuery.validator.addMethod("isUniqueUsername", function(value, element) {
    var dataString = 'new='+ value;  
        $.ajax({
            type: "POST",
            url: "http://localhost/QS-master/index.php/employee/isUniqueUsername",
            dataType:'json',
            data: dataString,
            cache: false,
            beforeSend: function()
            {
            //parent.animate({'backgroundColor':'#ffff99'},300).animate({ opacity: 0.35 }, "slow");;
            }, 
            success: function(data)
            {
               if(data.isUnique){
                   valid = true;
                } else{
                    valid = false;
                }
                //alert(data.isUnique); 

            },
            error: function(){
                    alert("Something went wrong");
            }


        });
    return valid;

}, "Username already exists");

jQuery.validator.addMethod("isUniqueEmailAddress", function(value, element) {
    var dataString = 'new='+ value;  
        $.ajax({
            type: "POST",
            url: "http://localhost/QS-master/index.php/employee/isUniqueEmailAddress",
            dataType:'json',
            data: dataString,
            cache: false,
            beforeSend: function()
            {
            //parent.animate({'backgroundColor':'#ffff99'},300).animate({ opacity: 0.35 }, "slow");;
            }, 
            success: function(data)
            {
               if(data.isUnique){
                   valid = true;
                } else{
                    valid = false;
                }
                //alert(data.isUnique); 

            },
            error: function(){
                    alert("Something went wrong");
            }


        });
    return valid;

}, "Email address already exists");

jQuery.validator.addMethod("isUniqueIPAddress", function(value, element) {
    var dataString = 'new='+ value;  
        $.ajax({
            type: "POST",
            url: "http://localhost/QS-master/index.php/employee/isUniqueIPAddress",
            dataType:'json',
            data: dataString,
            cache: false,
            beforeSend: function()
            {
            //parent.animate({'backgroundColor':'#ffff99'},300).animate({ opacity: 0.35 }, "slow");;
            }, 
            success: function(data)
            {
               if(data.isUnique){
                   valid = true;
                } else{
                    valid = false;
                }
                //alert(data.isUnique); 

            },
            error: function(){
                    alert("Something went wrong");
            }


        });
    return valid;

}, "IP address already exists");
    


