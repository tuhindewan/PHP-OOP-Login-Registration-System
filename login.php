<?php 
include 'inc/header.php';
include 'lib/User.php';
?>
<?php 

$user = new User();

if (isset($_POST['login'])) {
  $userLogin = $user->userLogin($_POST);
}
?>
                  <div class="panel panel-default">
                          <div class="panel-heading">
                         <h2>User Login</h2>
                          </div>
                            <div class="panel-body">
                            <div style="max-width: 600px;margin: 0 auto;">
                            <?php 

                            if (isset($userLogin)) {
                               echo $userLogin;
                            }

                             ?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                  </div>
                                  <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Type Password" >
                                  </div>
                                  <button type="submit" class="btn btn-success" name="login">Login</button>
                            </form>
                            </div>
                            </div>
                   </div>
<?php include 'inc/footer.php';?>
