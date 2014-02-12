

   <h1>Home</h1
   <h2>Welcome <?php echo $username; ?>!</h2>
  
  
  <?php echo form_open('searchTools/searchByName'); ?>	
  Zoek op naam:
  <input type="text" name="toolname"/>
  <input type="submit" value="zoek"/>
   </form><br/>
  
   <?php echo form_open('searchTools/searchByUsername'); ?>	
	 Zoek op username:
	  <input type="text" name="username"/>
	  <input type="submit" value="zoek"/>
  </from><br/>
  
  <?php echo form_open('searchTools/searchByCategory'); ?>	
	 Zoek in de categorie:
	<select name="category">
		<option value="NULL"></option>
		<option value="keuken">keuken</option>
		<option value="tuin">tuin </option>
		<option value="hobby">hobby</option>		
	</select>
     <input type="submit" value="zoek"/>
  </form><br/>
   
 </body>
</html>

