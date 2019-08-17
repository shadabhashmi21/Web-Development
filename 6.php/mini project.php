<?php
    $sucess = "";
    $error = "";
    if ($_POST) {
        if (!$_POST['email']) {
            $error .= "An email address is required";
        }
        if (!$_POST['content']) {
            $error .= "An content address is required";
        }
        if (!$_POST['subject']) {
            $error .= "An subject address is required";
        }
        if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
          $error .= "The email address is invalid";
        }
        if ($error != "") {
            $error = '<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form</strong>' . $error .'</div>'; 
        } else {
            
    $emailTo = "shadabhashmi57@gmail.com";
    $subject = $_POST['subject'];
    $body = $_POST['content'];
    $headers = "From: ".$_POST['email'];
    if (mail($emailTo, $subject, $body, $headers)) {
        $sucess = '<div class="alert alert-success" role="alert">Your message was sent</div>';
    } else {
        $error = '<div class="alert alert-danger" role="alert">Message couldnt be sent</div>';
    }
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
          <h1>Get in touch!</h1>
          <div id="error"><? echo $error; ?></div>
          <form method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
          </div>
          <div class="form-group">
            <label for="content">Ask your question here</label>
            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
          </div>
          <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script type="application/javascript">
        $("form").submit(function(e){
            e.preventDefault();
            var error = "";
            if($("#email").val() == "") {
                error += "<p>The email field is required</p>";
            }
            if($("#subject").val() == "") {
                error += "<p>The subject field is required</p>";
            }
            if($("#content").val() == "") {
                error += "<p>The content field is required</p>";
            }
            if(error != "") {
            $("#error").html('<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form</strong>' + error +'</div>');
                } else {
                    $("form").unbind("submit").submit();
                }
        });
      </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>