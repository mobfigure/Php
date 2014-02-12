

   <h1>Home</h1>
   <h2>Welcome <?php echo $username; ?>!</h2>
  
  
  <?php echo form_open('searchTools/searchByCategory'); ?>

	 Zoek in de categorie:
	<select name="category">
		<option value="NULL"></option>
		<option value="keuken">keuken</option>
		<option value="tuin">tuin </option>
		<option value="hobby">hobby</option>		
	</select>
	 <br/>
     <input type="submit" value="zoek"/>
   </form>
 </body>
</html>

