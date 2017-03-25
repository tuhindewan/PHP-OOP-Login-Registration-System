<?php 
include 'inc/header.php';
include 'lib/User.php';
$user = new User();
Session::checkSession();
?>

<?php 

$loginmsg = Session::get("loginmsg");
if (isset($loginmsg)) {
  echo $loginmsg;}
 ?>
                  <div class="panel panel-default">
                          <div class="panel-heading">
                         <h2>User List <span class="pull-right"><strong>Welcome! </strong>
                         <?php 
                         $name = Session::get("name");
                           if (isset($name)) {
                             echo $name;
                         }
                         Session::set("loginmsg"," ");
                          ?>
                         </span></h2>
                          </div>
                            <div class="panel-body">
                              <table class="table table-striped">
                              <tr>
                              <th width="20%">Serial</th>
                              <th width="20%">Name</th>
                              <th width="20%">Username</th>
                              <th width="20%">Email Address</th>
                              <th width="20%">Action</th>
                              </tr>
                              <tr>
                                <td>01</td>
                                <td>tuhin</td>
                                <td>tuhin</td>
                                <td>tuhin@gmail.com</td>
                                <td>
                                  <a class="btn btn-primary" href="profile.php?id=1">view</a>
                                </td>
                              </tr>
                              <tr>
                                <td>01</td>
                                <td>tuhin</td>
                                <td>tuhin</td>
                                <td>tuhin@gmail.com</td>
                                <td>
                                  <a class="btn btn-primary" href="profile.php?id=1">view</a>
                                </td>
                              </tr>
                              <tr>
                                <td>01</td>
                                <td>tuhin</td>
                                <td>tuhin</td>
                                <td>tuhin@gmail.com</td>
                                <td>
                                  <a class="btn btn-primary" href="profile.php?id=1">view</a>
                                </td>
                              </tr>
                              </table>
                            </div>
                   </div>
<?php include 'inc/footer.php';?>