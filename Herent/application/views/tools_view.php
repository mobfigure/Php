<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title> Toolsview</title>
 </head>
 <body>
   <h1>List Tools</h1>
   <h1>Add Tool</h1>
    <?php echo validation_errors(); ?>
   <?php echo form_open('toolManagement/addTool'); ?>
   
   
    <label for="name">tool naam:</label>
     <input type="text" size="20" id="name" name="name"/>
     <br/>
	 <label for="specification">eigenschap:</label>
     <input type="text" size="20" id="specification" name="specification"/>
     <br/>
     <input type="submit" value="add"/>
   </form>
   
 </body>
</html>