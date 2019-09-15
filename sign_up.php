<?php
include_once "connection.php";
?>
<!DOCTYPE html>
 <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sign-up</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-grid.css">        
        <link rel="stylesheet" href = "form.css">
    </head>
  
    <body>        
        <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
            <a class="navbar-brand" href="#"><img src="https://scontent.fcai3-2.fna.fbcdn.net/v/t1.0-1/c0.0.200.200a/p200x200/1560459_10152073881575589_857303463_n.jpg?_nc_cat=107&_nc_oc=AQljj27aE2a0jGb-vgh1L_cU87neOywU0dkk-xNjdX0CxhpNw6hWuVxIWSXUciSMZ6U&_nc_ht=scontent.fcai3-2.fna&oh=907aa162b908aa6940df1646076ba9a8&oe=5E0BE5CB"
            width="80" hight ="70" style="margin-left: 40px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="stp-home.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.facebook.com/pg/STP.Organization/about/?ref=page_internal">Facebook</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="http://www.stp-egypt.com/?fbclid=IwAR1V0bZ4MrKT60zQQbAM54Kwgp07nWapb6JXmatZYJGMGZl8zUYxTLyyNvI#js_scroll_to_contact" tabindex="-1" aria-disabled="true">Contact Us</a>
                </li>
              </ul>
            </div>
        </nav>        
        <form class="needs-validation" method ="GET" action = "<?php echo $_SERVER['PHP_SELF'] ?>" novalidate >
            <div class ="container">
                <div class="form-row">
                  <div class="col-5">
                    <label style="font-size: 20px ; font-weight: 600" for="name">First-Name</label>
                    <input  id = "f_name" name="first_name"  type="text"  class="form-control" placeholder="Example : Ahmed " pattern="[a-zA-Z]{3,}" required>
                  </div>
                  
                    <div class="col-5">
                      <label style="font-size: 20px ; font-weight: 600" for="name">Last-Name</label>
                      <input  id = "l_name" name="last_name" type="text"  class="form-control" placeholder="Example :mohamed" pattern="[a-zA-Z]{3,}" required>
                          
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-10">
                    <label style="font-size: 20px ; font-weight: 600" for="name">E-mail</label>
                    <input  id = "email"type="email" name="Email"  class="form-control" placeholder="Example : Name30@gmail.com" required>
                  </div>
                </div>
                
                <div class="form-row">
                  <div class="col-10">
                    <label style="font-size: 20px ; font-weight: 600" for="name">Phone number</label>
                    <input  id = "num"type="text" name = "number"  class="form-control" placeholder="Example : 01019113832" pattern="[0-9]{11}" required>
                  </div>
                </div>
                
                
                <div class="form-row">
                  <div class="col-10">
                    <label style="font-size: 20px ; font-weight: 600" for="name">University</label>
                    <input  id = "name" name="university"  type="text"  class="form-control" placeholder="Example : cairo univesity " required>
                  </div>
                </div>
                  <div class="form-row">
                    <div class="col-10">
                      <label style="font-size: 20px ; font-weight: 600" for="name">faculty</label>
                      <input  id = "name" name="faculty" type="text"  class="form-control" placeholder="Example : engineering" required>
                          
                    </div>
                </div>
                
                
                <div class="form-row">
                <div class="col-5">
                    <label style="font-size: 20px ; font-weight: 600" for="name">First prefrence</label>
                   <select class="form-control" name="f_prefrence" id="first-p"> 
                    
                   <?php
                    
                    foreach ( $records as $record ){
                     
                     echo "<option value =" .     "{$record['name']}  >  " . $record ['name']   .  " </option>";
                    }
                    ?>
                   </select>
                  
                  </div>
                
                
                   <div class="col-5">
                            <label style="font-size: 20px ; font-weight: 600" for="name">Second prefrence</label>
                   <select class="form-control" name="s_prefrence" id="first-p"> 
                    
                     <?php
                   
                    foreach ( $records as $record ){
                               if('<script type="text/javascript">' . 'document.getElementById("first-p").
                                  options[document.getElementById("first-p").selectedIndex].val() ' .";" .
                                  "</script> " != $record ['name'])
                      echo "<option value =" .     "{$record['name']}  >  " . $record ['name']   .  " </option>";
                    }
                    
                    ?>
                     </select>
                   </div>
                </div>
                    <div>
                        <button type="submit" name="submit" class="btn btn-primary" style="display: inline-block;" >Submit</button>
                   </div>
                    <?php
 
 if(isset ($_GET['submit']))
 {
    
                $name = $_GET['first_name'] . " " . $_GET['last_name'] ;
      
                $email = $_GET['Email'];
                $phone = $_GET['number'];
                $uni = $_GET['university'];
                $fac = $_GET['faculty'];
                $f_pref = $_GET['f_prefrence'];
                $s_pref = $_GET['s_prefrence'] ;
          
                $sql = "INSERT INTO info (name,email,phone,university,faculty,first_name , second_name) VALUES ('{$name}','{$email}','{$phone}','{$uni}','{$fac}','{$f_pref}','{$s_pref}')";
                mysqli_query($connection,$sql);
                 
     }           
          
          
          ?>
                
            </div>
           
           
        </form>
        
        <script src="jquery-3.4.1.min.js" ></script>
        <script src="bootstrap.min.js"></script>
     <!--   <script src="jquery.validate.min.js"></script>-->
        <script src="plug.js"></script>
        <script>
 (function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
     Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();  </script>
  </script>
        
        <script>
          
              
        </script>
    </body>