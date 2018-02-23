<?
include "common/header.php";
?>

<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>GALLERY</h1>
                </div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb">
                        <a href="index.php">Home</a> / Gallery</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery-sec">
    <div class="container">
        <div class="row text-center">
            <ul class="clearfix">
                <li>
                    <a href="images/thumbs/1.jpg" class="swipebox" title="My Caption">
                        <div class="image">
                            <img src="images/thumbs/1.jpg">
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="images/thumbs/2.jpg" class="swipebox" title="My Caption">
                        <div class="image">
                            <img src="images/thumbs/2.jpg">
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="images/thumbs/3.jpg" class="swipebox" title="My Caption">
                        <div class="image">
                            <img src="images/thumbs/3.jpg">
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="images/thumbs/4.jpg" class="swipebox" title="My Caption">
                        <div class="image">
                            <img src="images/thumbs/4.jpg">
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="images/thumbs/5.jpg" class="swipebox" title="My Caption">
                        <div class="image">
                            <img src="images/thumbs/5.jpg">
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="images/thumbs/6.jpg" class="swipebox" title="My Caption">
                        <div class="image">
                            <img src="images/thumbs/6.jpg">
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="images/thumbs/7.jpg" class="swipebox" title="My Caption">
                        <div class="image">
                            <img src="images/thumbs/7.jpg">
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="images/thumbs/8.jpg" class="swipebox" title="My Caption">
                        <div class="image">
                            <img src="images/thumbs/8.jpg">
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</section>


<?php
include "common/donation.php";
include "common/footer.php";
?>

<script src="js/jquery.swipebox.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        /* Basic Gallery */
        $('.swipebox').swipebox();

        /* Video */
        $('.swipebox-video').swipebox();

        /* Dynamic Gallery */
        $('#gallery').click(function (e) {
            e.preventDefault();
            $.swipebox([
                {href: 'http://swipebox.csag.co/mages/image-1.jpg', title: 'My Caption'},
                {href: 'http://swipebox.csag.co/images/image-2.jpg', title: 'My Second Caption'}
            ]);
        });

    });
</script>
<script src="js/script.js"></script>
