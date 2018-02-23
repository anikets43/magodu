<?
    include "common/header.php";
?>

<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>CONTACT US</h1>
                </div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb">
                        <a href="index.php">Home</a> / Contact us</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row text-center" style=" margin-top:-20px;">
            <!-- <div class="col-md-4" style=" margin-top:20px;">
                <div class="con-box">
                    <div class="fancy-box-icon">
                        <i class="fa fa-mobile-phone"></i>
                    </div>
                    <h3>PHONE</h3>
                    <div class="fancy-box-content">
                        <p>Phone 01: +1-310-341-3870
                            <br> Phone 02: +1-310-341-387</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" margin-top:20px;">
                <div class="con-box" style="background:#2f3191;">
                    <div class="fancy-box-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>ADDRESS</h3>
                    <div class="fancy-box-content">
                        <p>3104 Doctors Drive, Los Angeles,
                            <br> California, United States</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" margin-top:20px;">
                <div class="con-box">
                    <div class="fancy-box-icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <h3>EMAIL</h3>
                    <div class="fancy-box-content">
                        <p>mymagodu@gmail.com
                            <br> help@charityhope.com
                        </p>
                    </div>
                </div>
            </div> -->
            <div class="clearfix"></div>
            <p></p>
            </p>
            <div class="con-form clearfix">
                <h5>For any queries, please fill the form below :</h5>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="name" value="" size="40" class="" id="name" aria-required="true"
                               aria-invalid="false" placeholder="Your Name*" required>
                    </div>
                    <div class="col-md-4">
                        <input type="email" name="email" value="" size="40" class="" aria-required="true"
                               aria-invalid="false" placeholder="Your Email*" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="contactNum" value="" size="40" class="" id="contact"
                               aria-invalid="false" placeholder="Contact Number">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="subject" value="" size="40" class="" id="subject" aria-invalid="false"
                               placeholder="Subject">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <textarea name="comments" cols="40" rows="5" class="" id="comments" aria-invalid="false"
                                  placeholder="Comments"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 submit-button">
                    <input type="submit" value="send message" class="btn2" id="sub">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include "common/donation.php";
    include "common/footer.php";
?>


