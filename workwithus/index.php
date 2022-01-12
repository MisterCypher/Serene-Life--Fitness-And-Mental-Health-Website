<!DOCTYPE html>
<html>
<head>
	<title>Work With Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post" id="feedbak">
     	<h2>Work with Us</h2>
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

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email Address"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email ID"><br>
          <?php }?>
          <label>Qualifications</label>
          <?php if (isset($_GET['qualifications'])) { ?>
               <input type="text" 
                      name="qualifications" 
                      placeholder="Qualifications"
                      value="<?php echo $_GET['qualifications']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="qualifications" 
                      placeholder="qualifications"><br>
          <?php }?>



          <label>How can you help us?:</label>
         
          <?php if (isset($_GET['question'])) { ?>
               <textarea rows="4" cols="50" name="question" form="feedbak"
                      name="question" 
                      placeholder="Answer here"
                      value="<?php echo $_GET['question']; ?>"></textarea><br>

              
          <?php }
          else{ ?>
               <textarea rows="4" cols="50" name="question" form="feedbak" name="Question" 
                      placeholder="Answer here" style="margin-left: 11px; width:415px"></textarea><br>

            
          <?php }?>
        
     	




          <button type="submit">Submit</button>
          
     

     </form>
</body>
</html>