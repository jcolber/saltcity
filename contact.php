<?php include('head.php'); ?>

<body>
<?php include_once("analyticstracking.php") ?>
<?php include('navbar.php'); ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Josh Colbert</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>801.888.4359</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:josh@saltcitygaragedoors.com">josh@saltcitygaragedoors.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>595 N. Columbus St.
                            <br>Salt Lake City, UT 84103</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Justen Keesling</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>801.888.4359</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:justen@saltcitygaragedoors.com">justen@saltcitygaragedoors.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>595 N. Columbus St.
                            <br>Salt Lake City, UT 84103</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                        <?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "jcolber@gmail.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"Thank you for your form submission",$msg);
echo 'Thank you for your submission.  Please <a href="index.php">Click here to return to our homepage.';

?>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php include('footer.php'); ?>

</body>

</html>
