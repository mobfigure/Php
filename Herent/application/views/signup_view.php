<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Signup</title>
 </head>
 <body>
   <h1>signup</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('signup/validate'); ?>
   
   
    <label for="voornaam">voornaam:</label>
     <input type="text" size="20" id="voornaam" name="voornaam"/>
     <br/>
	 <label for="achternaam">achternaam:</label>
     <input type="text" size="20" id="achternaam" name="achternaam"/>
     <br/>
	 <label for="email">email:</label>
     <input type="text" size="20" id="email" name="email"/>
     <br/>	 
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="signup"/>
   </form>
 </body>
</html>