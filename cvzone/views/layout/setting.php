<!-- Sidebar-->
<div class="aside1">
    <a class="contact-button"><i class="fa fa-paper-plane"></i></a>

    <?php

    // if(empty($_GET)){
    //     echo '<a href="http://localhost/cvzone/admin/" target="_blank" class="download-button"><i class="fa fa-cloud-upload"></i></a>';
    // }

    ?>

    <div class="aside-content"><span class="part1">Ajker Job</span><span class="part2">Personal Profile</span>
    </div>
</div>
<aside class="hs-menu" id="hs-menu">
    <!-- <canvas id="demo-canvas"></canvas> -->

    <?php include 'php/_show-setting.php';?>

    <!-- Profil Image-->
    <div class="hs-headline">
        <a id="my-link" href="#my-panel"><i class="fa fa-bars"></i></a>
        <a href="#" class="download"><i class="fa fa-cloud-download"></i></a>
        <div class="img-wrap">
            <img src="../admin/assets/images/user/<?php echo $userImg ;?>" alt="" width="150" height="150" />
        </div>
        <div class="profile_info">
            <h1><?php echo $name ;?></h1>
            <h4><?php echo $userTitle ;?></h4>
            <h6><span class="fa fa-location-arrow"></span>&nbsp;&nbsp;&nbsp;<?php echo $userLocation ;?></h6>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="separator-aside"></div>
    <!-- End Profil Image-->

    <!-- menu -->
    <nav>
        <a href="#section1"><span class="menu_name">ABOUT</span><span class="fa fa-home"></span> </a>
        <a href="#section2"><span class="menu_name">RESUME</span><span class="fa fa-newspaper-o"></span> </a>
        <a href="#section3"><span class="menu_name">EXPERIENCE</span><span class="fa fa-laptop"></span> </a>
        <a href="#section4"><span class="menu_name">SERVICE</span><span class="fa fa-users"></span> </a>
        <a href="#section5"><span class="menu_name">PUBLICATION</span><span class="fa fa-money"></span> </a>
        <a href="#section6"><span class="menu_name">SKILLS</span><span class="fa fa-diamond"></span> </a>
        <a href="#section7"><span class="menu_name">WORKS</span><span class="fa fa-archive"></span> </a>
        <a href="#section8"><span class="menu_name">CONTACT</span><span class="fa fa-paper-plane"></span> </a>
    </nav>
    <!-- end menu-->
    <!-- social icons -->
    <div class="aside-footer">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa fa-github"></i></a>
    </div>
    <!-- end social icons -->
</aside>
<!-- End sidebar -->
