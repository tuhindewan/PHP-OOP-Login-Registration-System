<?php include 'inc/header.php';
Session::checkSession();
?>
                  <div class="panel panel-default">
                          <div class="panel-heading">
                         <h2>User Profile <span class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></span></h2>
                          </div>
                            <div class="panel-body">
                            <div style="max-width: 600px;margin: 0 auto;">
                            <form>
                                <div class="form-group">
                                    <label for="name">Full Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" value="tuhin" >
                                  </div>
                                  <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Type Username" value="tuhin">
                                  </div>
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="tuhin@gmail.com">
                                  </div>
                                  <button type="submit" class="btn btn-success" name="update">Update</button>
                            </form>
                            </div>
                            </div>
                   </div>
<?php include 'inc/footer.php';?>
