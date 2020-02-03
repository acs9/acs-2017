$(document).ready(function() {
    jQuery.validator.addMethod("alphaNumeric", function (value, element) {
        return this.optional(element) || /^[0-9a-zA-Z]+$/.test(value);
    }, "Fullname must contain only letters, numbers.");
    $('#booknow').validate({
        rules: {
            name: { 
                // minlength: 2,
                required: true,
                //alphaNumeric: true
            }, 

          
            
            email: {
                required: true,
                email: true,
               
            },
          

            mobile: {
                minlength: 10,
                required: true
            }, 
          service: {
               
                required: true
            },
        },


        messages: {
            'name': {
                required: 'Enter name'
            }, 

           
            'email': {
                required: 'E-mail is required',
                email: 'Enter a valid Email',
                
            },
          
            'mobile': {
                required: 'Enter contact number',
                minlength: 'Enter 10 numbers',
            },
        'service': {
                required: 'Select service',
               
            },
        }


    });
    });

   
