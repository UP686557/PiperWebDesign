<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123036867-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-123036867-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title id=title>Piper Web Design | Contact</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="CSS/style2.css">
    <link rel="icon" type="image/png" href="Images/Logo/favicon.png">
    <meta name="description" content="">
		<meta charset="UTF-8">
  </head>
  <body>
    <header>
      <?php include 'navigation.php'?>
    </header>
    <div class="container border-bottom clearfix">
      <img src="Images/Text/Contact.png" class="float-right title-image page-title"/>
    </div>

    <!-- Main Content -->

    <div class="container">
      <form class="marketing" method="post" name="contact_form" action="contact-form-handler.php">
        <label>Name:</label>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="First name" name="first_name">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Last name" name="last_name">
          </div>
        </div>
        <div class="form-group">
          <label class="top-padding-10px">Subject:</label>
          <input type="text" class="form-control" id="inputSubject" placeholder="Subject" name="subject">
        </div>
        <div class="form-group">
          <label>Email Address:</label>
          <input type="text" class="form-control" id="inputEmail" placeholder="Email Address" name="email">
        </div>
        <div class="form-group">
          <label>Message:</label>
          <textarea class="form-control" rows="5" id="message" placeholder="Your message to us" name="subject"></textarea>
        </div>
        <input class="btn btn-primary btn-block" type="submit" value="Submit">
      </form>
    </div>

    <!-- Main Content End -->




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
  <footer>
    <?php include 'footer.php'?>
  </footer>
</html>
