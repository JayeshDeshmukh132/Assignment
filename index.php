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
    
    <section id="newrelease-section">
        <h1 class="h-newrelease">New Releases</h1>
        
        <div id="nr-container">
        
        <?php 
        $sql="SELECT * FROM movie LIMIT 5";
        $res= mysqli_query($conn,$sql);
        $count= mysqli_num_rows($res);
        if($count>0)
        {
          while($row=mysqli_fetch_assoc($res))
          {
              $id = $row['id'];
              $name= $row['name'];
              $language= $row['language'];
              $poster= $row['poster']; 

              ?>
              <div class="poster"><a href="<?php echo SITEURL; ?>booking.php?movie_id=<?php echo $id; ?>"><img src="<?php echo SITEURL; ?>images/<?php echo $poster;  ?>" alt="movie">
                    <div><?php echo $name; ?></div>
                    <div class="sec">UA</div>
                    <div class="sec"><?php echo $language; ?></div>
                </a></div>
              <?php
            }
        }           
        else
        {
            echo '<div class="error">Movie not available.</div>';
        }
        ?>
            
        </div>
    </section>

    <section id="pr-section">
        <h1 class="h-pr">Coming soon</h1>
        
        <div id="pr-container">
        <?php 
        $sql1="SELECT * FROM movie WHERE id>5 LIMIT 5";
        $res1= mysqli_query($conn,$sql1);
        $count1= mysqli_num_rows($res1);
        if($count1>0)
        {
          while($row1=mysqli_fetch_assoc($res1))
          {
              $id = $row1['id'];
              $name= $row1['name'];
              $language= $row1['language'];
              $poster= $row1['poster']; 

              ?>
              <div class="poster"><a href="<?php echo SITEURL; ?>booking.php?movie_id=<?php echo $id; ?>"><img src="<?php echo SITEURL; ?>images/<?php echo $poster;  ?>" alt="movie">
                    <div><?php echo $name; ?></div>
                    <div class="sec">UA</div>
                    <div class="sec"><?php echo $language; ?></div>
                </a></div>
               
              <?php
            }
        }
        else
        {
            echo '<div class="error">Movie not available.</div>';
        }
        ?>
            

        </div>
        
        
        <div id="pr-container">
        <?php 
        $sql2="SELECT * FROM movie WHERE id>10";
        $res2= mysqli_query($conn,$sql2);
        $count2= mysqli_num_rows($res2);
        if($count2>0)
        {
          while($row2=mysqli_fetch_assoc($res2))
          {
              $id = $row2['id'];
              $name= $row2['name'];
              $language= $row2['language'];
              $poster= $row2['poster']; 

              ?>
              <div class="poster"><a href="<?php echo SITEURL; ?>booking.php?movie_id=<?php echo $id; ?>"><img src="<?php echo SITEURL; ?>images/<?php echo $poster;  ?>" alt="movie">
                    <div><?php echo $name; ?></div>
                    <div class="sec">UA</div>
                    <div class="sec"><?php echo $language; ?></div>
                </a></div>
               
              <?php
            }
        }
        else
        {
            echo '<div class="error">Movie not available.</div>';
        }
        ?>

        </div>
    
    </section>
    
    <?php include ('includes/footer.php') ?>

</body>

</html>