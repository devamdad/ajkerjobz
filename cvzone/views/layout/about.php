
<?php include 'php/_show-about.php';?>
<!-- About section -->
<article class="hs-content about-section" id="section1">
    <span class="sec-icon fa fa-home"></span>
    <div class="hs-inner">
        <span class="before-title">.01</span>
        <h2>ABOUT</h2>
        <span class="content-title">PERSONAL DETAILS</span>
        <div class="aboutInfo-contanier">
            <div class="about-card">
                <div class="face2 card-face">
                    <div id="cd-google-map">
                        <div id="google-container"></div>
                        <div id="cd-zoom-in"></div>
                        <div id="cd-zoom-out"></div>
                        <address>8690 Paul Street, San fransico</address>
                        <div class="back-cover" data-card-back="data-card-back"><i class="fa fa-long-arrow-left"></i>
                        </div>
                    </div>
                </div>
                <div class="face1 card-face">
                    <div class="about-cover card-face">
                        <a class="map-location" data-card-front="data-card-front"><img src="../assets/images/map-icon.png" alt="">
                        </a>
                        <div class="about-details">
                            <div><span class="fa fa-inbox"></span><span class="detail"><?php echo $userEmail;?></span>
                            </div>
                            <div><span class="fa fa-phone"></span><span class="detail"><?php echo $userPhone;?></span>
                            </div>
                        </div>

                        <div class="cover-content-wrapper">
                            <span class="about-description">Hello. I am a<span class="rw-words">
                              <span><strong><?php echo $userWork;?></strong></span>
                              <span><strong><?php echo $userWork;?></strong></span>
                              <span><strong><?php echo $userWork;?></strong></span>
                              <span><strong><?php echo $userWork;?></strong></span>
                              <span><strong><?php echo $userWork;?></strong></span>

                            </span>

                            <br>Welcome to my Personal profile</span>
                            <span class="status">
                            <span class="fa fa-circle"></span>
                            <span class="text">Available as <strong><?php echo $userWork;?></strong></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-details">
                <div class="tabbable tabs-vertical tabs-left">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active">
                            <a href="#bio" data-toggle="tab">Bio</a>
                        </li>
                        <li>
                            <a href="#hobbies" data-toggle="tab">Hobbies</a>
                        </li>
                        <li>
                            <a href="#facts" data-toggle="tab">Facts</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">

                        <div class="tab-pane fade in active" id="bio">
                            <h3>BIO</h3>
                            <h4>ABOUT ME</h4>
                            <p><?php echo $userBio;?></p>
                        </div>
                        <div class="tab-pane fade" id="hobbies">
                            <h3>HOBBIES</h3>
                            <h4>INTERESTS</h4>
                            <?php include 'php/_show-hobbies.php';?>

                            <div style="clear:both;"></div>
                        </div>
                        <div class="tab-pane fade" id="facts">
                            <h3>FACTS</h3>
                            <h4>NUMBERS ABOUT ME</h4>
                            <?php include 'php/_show-facts.php';?>


                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</article>
<!-- End About Section -->
