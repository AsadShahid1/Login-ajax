
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="registration.css">
<link rel="shortcut icon" href="../img/online-form.png" type="image/x-icon">
<title>My Registration</title>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="row justify-content-center my-5 ">
            <div class="col-bg col-md-6 text-left text-white ">
                <form class="sign-up" action="val_registration.php" id = "ajax" method="post">
                    <h2 class="heading mb-4">Registration form</h2>
                    <hr>
                    <div class="form-group-spe fone mt-2">
                        <div class="form-item">
                            <label for="validationCustom01" class="form-label">First Name</label>
                            <input type="name" name="first" class="form-control" id="validationCustom01" placeholder="First name">                           
                        </div>
                        <div class="form-item mt-2">
                            <label for="custom2" class="form-label">Last Name</label>
                            <input type="name" name="last" class="form-control" id="custom2" placeholder="Last name">                            
                        </div>
                    </div>
                    <div class="form-group fone mt-2">
                        <label for="custom3" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="custom3" placeholder="Email">                       
                    </div>
                    <div class="form-group fone mt-2">
                        <label for="custom4" class="form-label">Password</label>
                        <input type="password" name="pwd" class="form-control" id="custom4" placeholder="Password">                        
                    </div>
                    <span jsslot="" class="text-dark">Use 8 or more characters with a mix of letters, numbers &amp;
                        symbols</span>
                    <div class="form-group fone mt-2">
                        <label for="custom5" class="form-label">Confirm Password</label>
                        <input type="password" name="cpwd" class="form-control" id="custom5" placeholder="Password">
                    <div class="form-group fone mt-2">
                        <label for="customphone" class="form-label">Phone #</label>
                        <input type="text" name="phone" class="form-control" id="customphone" placeholder="Phone">
                    <div class="form-group fone mt-2">
                        <label for="customaddress" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control"id="customaddress" placeholder="Address">
                        
                    <label class="mt-16 checkbox-cus"> <input type="checkbox" name="check" class="form-check-input ml-0"
                            id="exampleCheck1"> <span class="form-check-label ml-3" for="exampleCheck1">I accept the
                            Terms of Use & Policy</span> </label>
                    <div class="col-12">
                        <button class="btn btn-success" type="submit" name="submit">Registration</button>
                    </div>
                </form>
                <p class="title-social">Or signup with </p>
                <div class="signup-other">
                    <div class="social"> <img src="https://www.svgrepo.com/show/13642/facebook.svg"
                            intrinsicsize="512 x 512" width="180" height="180"
                            srcset="https://www.svgrepo.com/show/13642/facebook.svg 4x" alt="Facebook SVG Vector"
                            title="Facebook SVG Vector">
                        <p>Facebook</p>
                    </div>
                    <div class="social"> <img src="https://www.svgrepo.com/show/223041/google.svg"
                            intrinsicsize="512 x 512" width="180" height="180"
                            srcset="https://www.svgrepo.com/show/223041/google.svg 4x" alt="Google SVG Vector"
                            title="Google SVG Vector">
                        <p>Google</p>
                    </div>
                </div>
                <p class="re-login">Already have account ? <a id="login-open2" href="my_login.php">Log In</a> </p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="crud_login.js"></script>
