<?php
session_start();
require_once('model/model.php');
if (isset($_SESSION['flag'])) {

?>


    <?php
    include('header.php');
    ?>


<tr>
    <td colspan="3" rowspan="1">
    <b>
        <h2> &nbsp;&nbsp;Account</h2>
    </b>

 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editProfile.php">Edit Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="changePass.php">Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all.php">View All Profiles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">Search User</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
      </li>    
    </ul>
    
  </div>  
</nav>
    </td>
    </tr>

    <!-- <b>
        <h2> &nbsp;&nbsp;Account</h2>
    </b>
    <hr>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profile.php">View Profile</a></li>
        <li><a href="editProfile.php">Edit Profile</a></li>
        <li><a href="changePass.php">Change Password</a></li>
        <li><a href="all.php">View All Profiles</a></li>
        <li><a href="search.php">Search an User</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    </td> -->
    <tr>
    <td colspan="3" rowspan="2">
        <fieldset>
            <legend><b>
                    <h2>ALL PROFILES</h2>
                </b></legend>
            <table border="0" width="100%">
                <tr>
                    <td>
                        <?php
                        $result = showAllUsers();

                        foreach ($result as $key1 => $value1) {
                        ?>
                            <br>Name : <?php echo $result[$key1]['Name']; ?>
                            <br>Email : <?php echo $result[$key1]['Email']; ?>
                            <br>Gender : <?php echo $result[$key1]['Gender']; ?>
                            <br>Date of Birth : <?php echo $result[$key1]['Birth_date'] . "/";
                                                echo $result[$key1]['Birth_month'] . "/";
                                                echo $result[$key1]['Birth_year']; ?>
                            <br>User Type : <?php echo $result[$key1]['User_type']; ?>
                            <br>Department : <?php echo $result[$key1]['Dept']; ?>
                            <br>ID : <?php echo $result[$key1]['ID']; ?>
                            <br><img src="uploads/<?php echo $result[$key1]['Photo'] ?>" height="200px" weidth="200px" alt="">
                            <br>
                        <?php
                        } ?>
                    </td>
                </tr>
            </table>
        </fieldset>
    </td>
    </tr>
    <tr>
        <td height="390px">



            <?php
            include('footer.php');
            ?>

        <?php
    } else {
        header('location: login.php');
    }
        ?>