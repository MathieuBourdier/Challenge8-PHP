<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Formulaire</h1>
    <h2>Contactez Nous :</h2>
    <form  action="Thanks.php" method="get">
        <div>
          <label for="name">Nom :</label>
          <input type="text"  id="name"  name="user_name">
        </div>
        <div>
            <label for="firstname"> Prenom:</label>
            <input type="text" id="firstname" name="user_firstname">
        </div>
        <div>
            <label for="phone"> Telephone:</label>
            <input type="text" id="phone" name="user_phone">
        </div>
        <div>
          <label  for="email">Courriel :</label>
            <input  type="email"  id="email"  name="user_email">
        </div>
        <div>
            <label for="sujet">Choix du Sujet:</label>
  <select id="sujet" name="user_sujet">
    <option value="PHP">PHP</option>
    <option value="Javascript">Javascript</option>
    <option value="Github">Github</option>
    <option value="HTML">HTML</option>
  </select>
        </div>
        <div>
          <label  for="message">Message :</label>
          <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
          <button  type="submit">Envoyer votre message</button>
        </div>
      </form>
    
</body>
</html>