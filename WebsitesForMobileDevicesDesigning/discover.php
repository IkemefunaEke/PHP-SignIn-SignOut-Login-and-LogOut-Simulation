<?php 
  include_once 'header.php';
?>
                <section class="index-intro">
                        <?php
                           if(isset($_SESSION["userid"])){
                               echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
                           }
                        ?>
                    <h1 class="font-effect-fire">About Us</h1>
                    <p>My Name is Ikemefuna Eke<p>
                    <p>
                      I am a hard working programmer and this is the site I created.
                      Reach out to us for more information if you want to find out more.     
                    <p>   
                    <p> Send an Email! </p> 
                    <div class="signup-form-form">
                      <form class="contact form" action ="contactform.php" method="post">
                        <input type= "text" name = "name" placeholder="Fullname">
                        <BR></BR>
                        <input type= "text" name = "mail" placeholder="Your Email">
                        <BR></BR>
                        <input type= "text" name = "subject" placeholder="Subject">
                        <BR></BR> 
                        <textarea name="message"  placeholder ="Message"> </textarea>
                        <BR></BR>
                        <button class="font-effect-neon" type= "submit" name= "submit"> SEND EMAIL </button>
                      </form>
                    </div>       
                </section>     
<?php 
  include_once 'footer.php';
?>