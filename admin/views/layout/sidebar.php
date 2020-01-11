
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="home.php">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Admin Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php
                      if ($_SESSION['adminStatus'] == "Super" || $_SESSION['adminStatus'] == "Prime"){
                        echo '<li><a href="create-admin.php">Create Admin</a></li>';
                        echo '<li><a href="manage-admin-super.php">Manage Admin</a></li>';
                      }
                      if ($_SESSION['adminStatus'] == "Moderator"){
                        echo '<li><a href="manage-admin-moderator.php">Manage Admin</a></li>';
                      }
                      ?>
                      <li><a href="update-admin.php">Update Admin</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tasks"></i> Company Registration <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="manage-company.php">Manage Company</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-address-card"></i> Cvzone Manager<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="manage-user.php">Manage User</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-briefcase"></i> Job Post Manager<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="manage-job-post.php">Manage Job Post</a></li>
                    </ul>
                  </li>

                </ul>
              </div>


            </div>
            <!-- /sidebar menu
