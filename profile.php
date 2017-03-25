<?php 
include 'lib/User.php';
include 'inc/header.php';
Session::checkSession();
?>
                  <div class="panel panel-default">
                          <div class="panel-heading">
                         <h2>User Profile <span class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></span></h2>
                          </div>
                            <div class="panel-body">
                            <div style="max-width: 600px;margin: 0 auto;">
<?php 
if (isset($_GET['id'])) {
  $userid = $_GET['id']; 
}

$user = new User();

$userdata = $user->getUserById($userid);

if ($userdata) {
  foreach ($userdata as $value) {
    

 ?>
                            <form>
                                <div class="form-group">
                                    <label for="name">Full Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" value="<?php echo $value['name']; ?>" >
                                  </div>
                                  <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Type Username" value="<?php echo $value['username']; ?>">
                                  </div>
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo $value['email']; ?>">
                                  </div>
<?php 

$sesid = Session::get("id");
if ($sesid == $userid) {
?>
                                  <button type="submit" class="btn btn-success" name="update">Update</button>
<?php } ?>
                            </form>
<?php   
}
}
else
{

 ?>
 <h2>No User Data Found.....</h2>
 <?php   
}
 ?>
                            </div>
                            </div>
                   </div>
<?php include 'inc/footer.php';?>
