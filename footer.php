    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <!-- installed newest Bootstrapv4 on 2 oct 2017 -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    
    
    <script type="text/javascript">
    
        $(".toggleForms").click(function() {
            
            $("#signUpForm").toggle();
            $("#logInForm").toggle();
        });
        
        // $(#diary).bind('input propertychange',function() is deprecated. Use below code on text area changes instead.
        
        $("#diary").on('change keyup paste', function() {

                $.ajax({
                      method: "POST",
                      url: "updatedatabase.php",
                      data: { content: $("#diary").val() }

                      });
        });
    
    </script>
  </body>
</html>