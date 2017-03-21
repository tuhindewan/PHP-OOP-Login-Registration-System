<?php include 'inc/header.php';?>
                  <div class="panel panel-default">
                          <div class="panel-heading">
                         <h2>User Registration</h2>
                          </div>
                            <div class="panel-body">
                            <div style="max-width: 600px;margin: 0 auto;">
                            <form>
                                <div class="form-group">
                                    <label for="name">Full Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" required="">
                                  </div>
                                  <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Type Username" required="">
                                  </div>
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required="">
                                  </div>
                                  <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Type Password" required="">
                                  </div>
                                  <button type="submit" class="btn btn-success" name="register">Submit</button>
                            </form>
                            </div>
                            </div>
                   </div>
<?php include 'inc/footer.php';?>
