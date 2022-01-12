<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post" id="feedbak">
     	<h2>Feedback</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Email Address</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email Id"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email Id"><br>
          <?php }?>
          <label>Feedback</label>
         
          <?php if (isset($_GET['feedback'])) { ?>
               <textarea rows="4" cols="50" name="feedback" form="feedbak" 
                      name="feedback" 
                      placeholder="Feedback"
                      value="<?php echo $_GET['feedback']; ?>"></textarea><br>

              
          <?php }
          else{ ?>
               <textarea rows="4" cols="50" name="feedback" form="feedbak" name="feedback" 
                      placeholder="Feedback" style="margin-left: 11px; width:415px"></textarea><br>

            
          <?php }?>
        
     	

     	<button type="submit">Submit</button>
          
     </form>
</body>
</html>