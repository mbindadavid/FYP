<form action="reghand.php" method="post" class="register">
   <fieldset>
   <legend>Registration</legend>
   <input type="text" name="fname" required="required" maxlength="15" placeholder="First Name"/>        
   <input type="text" name="lname" required="required" maxlength="15" placeholder="Last Name"/>
   <p id="name_error" class="error">First name Last name cannot be empty and can be same</p>
   <input type="text" name="username" required="required" maxlength="15" placeholder="Username" class="username" />        
   <p id="username_error" class="error">That Username is unavailable</p>       
   <input type="email" name="email" required="required" maxlength="35" placeholder="Email"/>        
   <p id="email_error" class="error">That Email is already registered</p>       
   <input type="password" name="password" required="required" maxlength="15" placeholder="Password"/>        
   <input type="password" name="password2" required="required" maxlength="15" placeholder="Confirm Password"/>
   <p id="password_error" class="error">Passwords do not match</p>
   <input type="submit" name="reg" value="Sign Up!">
 </fieldset>
</form>

