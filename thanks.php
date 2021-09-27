 <?php

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 // define variables and set to empty values
$nameErr = $listErr = $emailErr = $telErr = $messageErr = "";
$name = $list = $email = $tel = $user_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
      $nameErr = "Name is required";
  } else {
      $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["list"])) {
      $listErr = "list is required";
  } else {
      $list = test_input($_POST["list"]);
  }
    
  if (empty($_POST["email"])) {
      $emailErr = "Email is required";
  } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
  }

  if (empty($_POST["tel"])) {
      $telErr = "Tel is required";
  } else {
      $tel = test_input($_POST["tel"]);
  }

  if (empty($_POST["user_message"])) {
      $messageErr = "Message is required";
  } else {
      $user_message = test_input($_POST["user_message"]);
  }
}

if ($nameErr || $listErr || $emailErr || $telErr || $messageErr) {
    echo "$nameErr $listErr $emailErr  $telErr  $messageErr";
} else {
    echo "merci $_POST[name] de nous avoir contacté à propos du $_POST[list]";

    echo "<br>";
    
    echo "Un de nos conseiller vous contactera soit à l’adresse $_POST[email] ou par téléphone au $_POST[tel] dans les plus brefs délais pour traiter votre demande : ";
    
    echo "<br>";
    
    echo "$_POST[user_message]";
}











  

