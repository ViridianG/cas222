<?php 
include('includes/header.php')
?>

            <main>
                
                   <?php
                        
                        include 'config.php';

                        if(isset($_POST['name'])){
                            echo '<div class="container" style="font-size: 1.8em;text-align: center;">';
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $role = $_POST['role'];
                            $message = $_POST['message'];
                            
                            
                            $body = "Name: $name  \n
                            		 Email: $email \n
                            		 Role: $role  \n
                            		 Message: $message";
                            
                            if(mail('grant.greer@pcc.edu', 'Contact Form Entry', $body)){
                            	echo 'Successfully sent.';
                            } else {
                            	 echo 'There were errors while sending the data.';
                            }
                            echo '</div>';
                            
                            
                        }
                    ?>
                   <form id="form-app" class="container custom-form" action="" method="post">
<fieldset class="row">

<!-- Heading -->
<div class="col-xs-12">
    <h3 class="legend">Contact Us</h3>
</div>

<!-- Paragraph Text -->
<div class="col-xs-12">
    <p>Let us know your questions, suggestions and concerns by filling out the contact form below.</p>
</div>

<!-- Text -->

<div class="form-row">
    <div class="form-group col-md-6">
        <label  class="control-label" for="text_1">Name</label>
        <input type="text" id="text_1" name="name" value="" data-alias="" class="form-control">
    </div>
    <div class="form-group col-md-6">
    <label  class="control-label" for="email_1">Email</label>
        <input type="email" id="email_1" name="email" value="" data-alias="" class="form-control" required>
    </div>
</div>


<!-- Radio -->
<div class="col-xs-12">
    <div class="form-group required-control"> 
        <label for="role" class="control-label">Role</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="role" value="Athlete" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Athlete</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="role" value="Volunteer" class="custom-control-input">
            <label class="custom-control-label" for="customRadio2">Volunteer</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio3" name="role" value="Interested Party" class="custom-control-input">
            <label class="custom-control-label" for="customRadio3">Interested Party</label>
        </div>
    </div>
</div>

<!-- Text Area -->
<div class="col-xs-12">
    <div class="form-group required-control">
        <label  class="control-label" for="textarea_1">Message</label>
        <textarea id="textarea_1" name="message" rows="3" data-alias="" class="form-control" required></textarea>
    </div>
</div>

<!-- Button -->
<div class="col-xs-12">
     <div class="form-action">
        <button type="submit" id="button_1" name="button_1" class="btn btn-primary">Submit</button>
    </div>
</div>
</fieldset>
</form>
                   </section>
                </section>
                <div class="what_to_bring">

                </div>

                <section>
                </section>

                <section></section>
                <?php include('includes/footer.php')?>           
 </main>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="scripts.js"></script>


    </body>
</html>
