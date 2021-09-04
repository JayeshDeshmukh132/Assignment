<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <title>Movie Ticket Booking</title>
</head>

<body>

    <?php include('includes/header.php') ?>

    <?php 
    if(isset($_GET['movie_id']))
    {
        $movie_id = $_GET['movie_id'];

        $sql="SELECT * FROM movie where id=$movie_id";

        $res= mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);
        if($count==1)
        {
            $row = mysqli_fetch_assoc($res);
            $name = $row['name'];
            $genre = $row['genre'];
            $duration = $row['duration'];
            $releasedate = $row['releasedate'];
            $director = $row['director'];
            $description = $row['description'];
            $poster= $row['poster'];
        }
        else
        {
header("location:".SITEURL);
        }
    }
    else
    {
header("location:".SITEURL);
    }
    ?>

   
    <div class="moviedetails">
        <div class="md-heading">
            
            <h1>Movie Details</h1>
        </div>
        <div class="bkp-sec2">
            <img class="image" src="<?php echo SITEURL; ?>images/<?php echo $poster; ?>" alt="MOVIE POSTER">

            <div class="movie-info">
                <div class="movietitle">
                    <h1><?php echo $name; ?></h1>
                </div>
                <hr>
                <table class="display">
                    <tr>
                        <td>GENRE</td>
                        <td style="padding: 0 0 0 90px"><?php echo $genre; ?></td>
                    </tr>
                    <tr>
                        <td>DURATION</td>
                        <td style="padding: 0 0 0 62px"><?php echo $duration; ?></td>
                    </tr>
                    <tr>
                        <td>RELEASE DATE</td>
                        <td style="padding: 0 0 0 26px"><?php echo $releasedate; ?></td>
                    </tr>
                    <tr>
                        <td>DIRECTOR</td>
                        <td style="padding: 0 0 0 66px"><?php echo $director; ?></td>
                    </tr>
                    <tr>
                        <td>DESCRIPTION</td>
                        <td style="padding: 0 0 0 35px"><?php echo $description; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="booking-form-container">
       <div><h1 class="info-heading">Book your seat</h1></div> 
        <form action="" method="POST">
            <table class="details-table">
                <tr>
                    <td>Full Name:</td>
                    <td><input placeholder="Enter your name" name="name" type="text" required></td>
                </tr>
                <tr>
                    <td>Email-id:</td>
                    <td><input type="email" placeholder="Enter your email" name="email" required></td>
                </tr>
                <tr>
                    <td>Phone number:</td>
                    <td><input type="text" name="pnumber" placeholder="Enter your number" required></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td><select name="type" required>
                        <option value="" disabled selected>Type</option>
                        <option value="2D">2D</option>
                        <option value="3D">3D</option>
                        <option value="4D">4D</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td><select name="date" required>
                        <option value="" disabled selected>Date</option>
                        <option value="01-09-2021">September 1,2021</option>
                        <option value="02-09-2021">September 2,2021</option>
                        <option value="03-09-2021">September 3,2021</option>
                        <option value="04-09-2021">September 4,2021</option>
                    </select></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Book" class="btn-submit"></td>
                </tr>
            </table>

            <?php include ('includes/footer.php') ?>

    <?php

    if(isset($_POST['submit']))
    {
    
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone_no=$_POST['pnumber'];
     $type=$_POST['type'];
     $date=$_POST['date'];
     
     $sql="INSERT INTO booking SET
           name='$name',
           email='$email',
           phone_no='$phone_no',
           type='$type',
           date='$date'
     ";
     
     $res= mysqli_query($conn, $sql) or die(mysqli_error);

     if($res==true){
        echo '<script>alert("Ticket is booked successfully!")</script>';  
        // header("location:".SITEURL."ticket.php");  
     }
     else{
         echo '<script>alert("Fill your details again!")</script>';
     }
    }
    ?>

</body>

</html>