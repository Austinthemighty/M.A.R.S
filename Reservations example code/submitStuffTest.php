
<?php


try {
   $dbh = new PDO('mysql:host=localhost;dbname=reservation', 'root', 'root');

} catch (PDOException $e) {
   print "Error!: " . $e->getMessage() . "<br/>";
   die();
}


if(@$_POST['formSubmit'] == "Submit")
{
   $errorMessage = "";

   if(empty($_POST['firstName']))
   {
       $errorMessage = "<li>You forgot to enter your first name.</li>";
   }
   if(empty($_POST['lastName']))
   {
       $errorMessage = "<li>You forgot to enter your last name.</li>";
   }
   if(empty($_POST['phoneNumber']))
   {
       $errorMessage = "<li>You forgot to enter a phone number.</li>";
   }
   if(empty($_POST['title']))
   {
       $errorMessage = "<li>You forgot to enter a title.</li>";
   }
   if(empty($_POST['age']))
   {
       $errorMessage = "<li>You forgot to enter your age.</li>";
   }
   if(empty($_POST['email']))
   {
       $errorMessage = "<li>You forgot to enter your email.</li>";
   }
   if(empty($_POST['password']))
   {
       $errorMessage = "<li>You forgot to enter your password.</li>";
   }

   $stmt = $dbh->prepare("INSERT INTO contact (firstName, lastName, phoneNumber, title, age, email, password ) VALUES (?, ?, ?, ?, ?, ?, ?)");

   $result = $stmt->execute(array($_POST['firstName'], $_POST['lastName'], $_POST['phoneNumber'], $_POST['title'], $_POST['age'], $_POST['email'], $_POST['password']));

   if(!$result){
       print_r($stmt->errorInfo());
   }

   if(!empty($errorMessage))
   {
       echo("<p>There was an error with your form:</p>\n");
       echo("<ul>" . $errorMessage . "</ul>\n");
   }

}

?>