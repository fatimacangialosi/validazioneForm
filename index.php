<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fill the form below</h1>
    <h6>Complete the below form to get instance access</h6>
<form action="/submit" method="POST">

    <label for="companyName">Company Name:</label><br>
        <input type="text" id="companyName" name="companyName" required><br>
    
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"   required placeholder="Nome"><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required   placeholder="email"> <br>

        <label for="phone">Phone:</label><br>
        <textarea id="phone" name="phone" rows="4" cols="50" required  placeholder="phone"></textarea><br>

        <select id="mobileDelivery" name="cars" required  >
            <option value="mobileDelivery" selected disabled>mobileDelivery</option>
            <option value="posteItaliane">posteItaliane</option>
            <option value="bartolini">bartolini</option>
            <option value="inPost">inPost</option>
            <option value="puntoRitiro">puntoRitiro</option>
        </select><br><br>

    <input type="submit" value="Invia richiesta">
</form>

<div class="container">
    <header>
        <h1>Header</h1>
      </header>
      <main>
        <p></p>
      </main>
</div>
   
    <img src="Screenshot 2024-03-20 104230.png" alt="Descrizione dell'immagine">
</div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Landing Page Interattiva</title>
</head>

<body>


  <div class="container">


    <div class="flex-col">



      <?php if (isset($_GET['formsent']) && intval($_GET['formsent']) == 1) : ?>
        <h1 class="title">Form inviato correttamente</h1>
      <?php endif ?>

      <?php if (isset($_GET['err'])) : ?>
        <h1 class="error">Errore: <?= $_GET['err'] ?></h1>
      <?php endif ?>

      <?php if (!isset($_GET['formsent']) && !isset($_GET['err'])) : ?>
        <div class="form-container">

          <div class="flex-text-container">
            <h1 class="title">Fill the form below</h1>
          </div>

          <div class="flex-text-container">
            <h5 class="subtitle">Complete the below form to get instant access.</h5>
          </div>





          <form action="form.php" method="post">


            <div class="flex-input-container">
              <i class="fa fa-building flex-input-col-left my-fa-color"></i>
              <input class="form-item form-input flex-input-col-right" type="text" id="company" name="company" required placeholder="Company name" />
            </div>


            <div class="flex-input-container">
              <i class="fa fa-user flex-input-col-left my-fa-color"></i>
              <input class="form-item form-input flex-input-col-right" type="text" id="fullname" name="fullname" required placeholder="Full name" />
            </div>

            <div class="flex-input-container">
              <i class="fa fa-envelope flex-input-col-left my-fa-color"></i>
              <input class="form-item form-input flex-input-col-right" type="email" id="email" name="email" required placeholder="Email" />
            </div>

            <div class="flex-input-container">
              <i class="fa fa-phone flex-input-col-left my-fa-color"></i>
              <input class="form-item form-input flex-input-col-right" type="tel" id="phone" name="phone" required placeholder="Phone" />
            </div>


            <div class="flex-input-container">
              <i class="fa fa-truck flex-input-col-left my-fa-color"></i>
              <select class="form-item form-input flex-input-col-right" id="service" name="service" required>
                <option value="" disabled selected>Choose service...</option>
                <option value="Web Design">Web Design</option>
                <option value="SEO">SEO</option>
                <option value="Social Media Marketing">Social Media Marketing</option>
              </select>
            </div>

            <div class="flex-input-container">
              <button class="form-btn" type="submit">Send request</button>
            </div>






          </form>
        </div>

      <?php endif ?>

    </div>

    <div class="flex-col flex-col-right">
      <img src="Screenshot 2024-03-20 104230.png." alt="">
    </div>


  </div>

  <!-- <script src="script.js"></script> -->
</body>

</html>