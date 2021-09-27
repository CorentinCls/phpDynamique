<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="name">Nom :</label>
      <input  type="text"  id="name"  name="name" required="required" >
    </div>

   

    <div>
        <label for="list"></label>
        <select name="list" id="list" required="required" >
            <option value="">--Please choose an option--</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="hamster">Hamster</option>
            <option value="parrot">Parrot</option>
            <option value="spider">Spider</option>
            <option value="goldfish">Goldfish</option>
        </select>
    </div>

    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="email" required="required">
    </div>

    <div>
        <label for="tel">Number Phone </label>
        <input type="tel" name="tel" id="tel" required="required">
    </div>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required="required"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>
