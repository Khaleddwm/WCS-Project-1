 <!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Nous Contacter</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway&family=Raleway+Dots&display=swap">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fix.css">
  </head>
  <body>

      <header class="site-header">
        <div class="container">
            <a href="index.php"><img src="https://i.postimg.cc/BLhrcN82/2-I-z-O4l-DH3hy-XSCg-YHINGA.png" width=40 alt="Logo de la Wild Code School" class="logo"></a>
            <h1>Contact/Accès</h1>
            <?php include_once 'includePhp/nav.php'; ?>
        </div>
      </header>
  		  <div id= "title1" class="iframe">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2700.968652241741!2d0.6664252510479954!3d47.3930445105972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fcd593e3aaaaab%3A0x5e60b318897c16ec!2sTraining%20D%C3%A9veloppeur%20Web%20-%20Wild%20Code%20School!5e0!3m2!1sen!2sfr!4v1583931727154!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="adcontact">
            <p class ='adresse'>Wild Code School, 49 Boulevard Preuilly, 37000 Tours</p>
            <p class ='tel'>06 40 95 34 98</p>
        </div>
        <?php include_once 'includePhp/contact+php.php' ?>
        <footer class="contact scroll" id="contact">
          <div class="container2">
              <h2 class="section-title">Envoyez-nous un message</h2>
              <form action="" method="post" class="contact-form">
                  <label for="name" class="first-half">Votre nom</label>
                  <input type="text" id="name" name="user_name" value="<?php if(isset($_POST['user_name'])) echo $_POST['user_name']; ?>" required class="first-half">
                  <p>
                  <?php if(isset($errors['name1'])) echo $errors['name1']; ?>
                  </p>
                  <label for="email" class="last-half">Votre e-mail</label>
                  <input type="email" id="email" name="user_email" value="<?php if(isset($_POST['user_email'])) echo $_POST['user_email']; ?>" required class="last-half">
                  <p>
                  <?php if(isset($errors['email1'])) echo $errors['email1']; ?>
                  <?php if(isset($errors['email2'])) echo $errors['email2']; ?>
                  </p>
                  <label for="msg" class="full-width">Votre message</label>
                  <select name="user_option" required>
                  <option value="Informations">Informations</option> 
                  <option value="Assistance technique" selected>Candidature</option>
                  <option value="Délai de livraison">Réclamation</option>
                  <option value="Délai de retour">Autres</option>
                  <textarea id="msg" name="user_message" required class="full-width"><?php if(isset($_POST['user_message'])) echo $_POST['user_message']; ?></textarea>
                  <p>
                  <?php if(isset($errors['message1'])) echo $errors['message1']; ?>
                  </p>
                  <button type="submit" class="last-half btn-send btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24,0,18,22,9.871,14.761l7.8-8.234L7.215,13.754,0,12ZM9,16.668V24l3.258-4.431Z"/></svg>Envoyer</button>
              </form>
          </div>
      </footer>
      
      <?php include_once 'includePhp/ancrecontact.php' ?>
      
      <?php include_once 'includePhp/footer.php' ?>
      
      
      <script src="js/navigation.js"></script>
      </div>
      
      

  </body>
</html>
