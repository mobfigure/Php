
<?php
Class User extends CI_Model
{
	
	
 function login($username, $password)
 {
   $this -> db -> select('id, username, password');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 function add($username, $voornaam, $achternaam, $email, $password)
 {
	$data = array(
   'username' => $username ,
   'password' =>  MD5($password),
   'email' => $email ,
   'firstname' => $voornaam ,
   'lastname' => $achternaam 
);

$this->db->insert('users', $data);
 }
 
 function idForUsername ($username)
 {
   $this -> db -> select('id');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> limit(1);

   $query = $this -> db -> get();
	var_dump($query->result());
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
	
 }
}
?>

