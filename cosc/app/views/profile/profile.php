<?php require_once '../app/views/templates/headerPublic.php' ?>
 
   <html>
    <!-- the header of the assgn -->

    <p><font color="red">welcome to My First Web Page</font></p>
    


<!-- if it there -->

 
       <form action="/profile/index" method="post">
    
	<head>update your profile here</head>
 
 
      <div class="form-group">
      
<label >Firstname</label>

      <input  placeholder="Enter your firstname" type="text"  name="firstname" required>

    </div>
    

 <div class="form-group">
   
   <label>Last Name </label>
   
   <input class="form-control"  placeholder="Enter your Last name" type="text" name="lastname" required>
 
   </div>

 <div class="form-group">
   
   <label>Last Name </label>
   
   <input class="form-control"  placeholder="Enter your Last name" type="text" name="lastname"required >
 
   </div>


<div class="form-group">
   
   <label>email</label>
   
   <input class="form-control"  placeholder="Enter your email" type="text" name="email" required>
 
   </div>


<div class="form-group">
   
   <label>phone number </label>
   
   <input class="form-control"  placeholder="Enter your phone number" type="text" name="phonenumber"required >
 
   </div>


<div class="form-group">
   
   <label>birth date </label>
   
   <input class="form-control"  placeholder="Enter your birth date" type="date" name="birthdate" required>
 
   </div>




 
   	<button type="submit" class="btn btn-primary" name="add"> add</button>
    
</form>
    
        	
      
</html>

    <?php require_once '../app/views/templates/footerPublic.php' ?>

