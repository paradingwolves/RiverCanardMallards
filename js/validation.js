// Example starter JavaScript for disabling form submissions if there are invalid fields
$(document).ready( function() {
    'use strict'
    $('.alert').hide();  
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        event.preventDefault()
        event.stopPropagation()
        if (form.checkValidity()) {          
          console.log("valid");
          // then open it by using the show() method
          $("#myModal").toggle();
          $(".close").on('click', function (){
            $("#myModal").hide();
          });
          
  
        }
        else {
          /* Add alert if invalid submission */
            $('.alert').show(); 
            $('.btn-close').on('click', function(){
              $('.alert').hide();
            });
                  
            console.log("nah");
        }
        form.classList.add('was-validated')
      }, false)
    })
  }) 
    
  