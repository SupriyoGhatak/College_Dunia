
<div class="container">
                <div class="modal fade" id="mymodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                   <div class="modal-dialog modal-sm" role="document">
                      <div class="modal-content">
                          <div class="modal-header" style="background: lightblue">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: darkred">&times;</button>
                             <h4 class="modal-title" id="myModalLabel"><b><center>LOGIN</center></b></h4>
                          </div>
                             <div class="modal-body">
                                 <form action="login_script.php" method="POST">
                                     <div class="form-group">
                                         <label><span class="glyphicon glyphicon-envelope "></span>Email</label><br>
                                         <input type="text" name="email" class="from-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="XYZ@heritageit.edu.in"> 
                                     </div>
                                     <div class="form-group">
                                         <label><span class="glyphicon glyphicon-lock "></span>Password</label><br>
                                         <input type="text" name="password" class="from-control" required="true" pattern=".{6,}"  placeholder="atleast 6 character"> <br>
                                     </div>
                                     <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-log-in "></span>Login</button><br>
                                 </form>
                                 
                                 <br><p class="text-decoration"><a href="forgot.php">Forgot Password?</a></p>
                             </div>
                          <div class="modal-footer" style="background: lightblue; text-decoration: none;">
                                 
                              <center> <p class="text-decoration">Don't have an account?<a href="signup.php"><b style="color: black">Register</b></a></p></center>
                                 
                             </div>
                         </div>
                     </div>
                                
                 </div>
    
</div>
                