<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP Magic 8-Ball</title>
    <!-- Include Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <!-- Add custom styles -->
    <style>
      body {
        padding-top: 50px;
      }
      .template {
        padding: 40px 15px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <!-- Add padding to template from custom styles -->
    <div class="template">
      <h1>PHP Magic 8-Ball</h1>
      <p><?php 
        // Only replies if there is a question
        if (isset($_POST['question'])) {
          if (($_POST['question']) != '') {
            // Choose a random number
            $result = rand(1,8);
            // Remind them of their question - add a question mark if one wasn't entered
            echo "Your question: $_POST[question]";
            if (strpos($_POST['question'], '?') === false) {
              echo "?";
            }
            // Based on random number, give an answer
            echo " The 8-ball says: ";  
            switch ($result) {
              case 1:
                echo "It is certain";
                break;
              case 2:
                echo "It is decidely so";
                break;
              case 3:
                echo "Reply hazy try again";
                break;
              case 4:
                echo "Better not tell you now";
                break;
              case 5:
                echo "Don't count on it";
                break;
              case 6:
                echo "My sources say no";
                break;
              case 7:
                echo "Yes";
                break;
              case 8:
                echo "Very doubtful";
                break;
              }
            echo "!";
          }
        }
      ?></p>
      <!-- Add form to ask question, change wording if a question had previously been asked -->
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p><strong>Ask <?php if (isset($_POST['question']) AND ($_POST['question']) != '') { echo "another "; } else { echo "a"; } ?> question:</strong> <input type="text" name="question"> <input type="submit" name="Ask" value="Ask"></p>
      </form>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (from Bootstrap below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>
