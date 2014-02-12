gooooo
  <table border="2">
   <?php foreach ($results as $result):?>
<tr>
<td><?php echo $result->name;?></td><td><?php echo $result->specifications;?></td>
<td><input type="checkbox" name="tool" value="<?php echo $result->name;?>"/></td>
</tr>
<?php endforeach;?>
</table>
 </body>
</html>