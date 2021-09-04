<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <title>Movie Ticket Booking</title>
    <style>
        .contact-container{
            /* margin: 20px 25px; */
        }
        .contact-heading{
            margin: 15px 25px;
        }
        .contactform{
            border : 2px solid black;
            color : white;
            width: 100%;
            background-color:rgb(58 48 98);
            padding: 20px 20px;
        }
        .contactform form{
            border: 2px solid white;
            width: 20%;
            background-color:rgb(116 124 153);
        }
        .contactform p{
            padding: 10px 0px;
        }
        .contactform input{
            margin: 8px 2px;
        }
        .contactform textarea{
            margin: 1px 2px;
        }
        button{
            border: 2px solid black;
            margin: 0px 2px;
        }
    </style>
</head>

<body>

    <?php include('includes/header.php') ?>
    <div class="contact-container">
        <div class="contact-heading">
        <h1>Contact</h1>
        </div>
    <div class="contactform">
    <p>Contact us here </p>
            <form action="" method="POST">
                <input placeholder="First Name" name="fname" required><br>
                <input placeholder="Last Name" name="lname" ><br>
                <input placeholder="E-mail Address" name="email" required><br>
                <textarea placeholder="Enter your message !" name="feedback" rows="10" cols="40" required></textarea><br>
                <button type="submit" name="submit" value="submit">Click to send</button>
    </div>
            
    </div>
    <?php
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $message=$_POST['feedback'];

    $sql="INSERT INTO contact SET
          fname='$fname',
          lname='$lname',
          email='$email',
          message='$message'";
          $res=mysqli_query($conn, $sql) or die(mysqli_error);
          if($res==true)
          {
              echo '<script>alert("Details has been submitted!")</script>';
          }
          else
          {
              echo '<script>alert("ERROR: Fill your details again")</script>';
          }
}
    
        ?>
    <?php include ('includes/footer.php') ?>
    
    </body>

</html>