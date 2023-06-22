<div class="container">
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                    <div class="col-lg-3">
                      <br>
                      <img src="<?=base_url();?>/assets/frontend/images/logo.png" alt="Chain App Dev">
                      <img src="<?=base_url();?>/assets/frontend/images/slider-dec.png" alt="">
                    </div>
                  </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">CREATE NEW ADMIN</h1>
                            </div>
                            <form class="user" action="<?= base_url();?>index.php/insertadmin" method="post">
                            <hr/>
                                 <div class="row ">
                                    <div class="col-md-12 text-center">
                                        <label style="color: red;" ><?= $this->session->flashdata('msg_settings_error');?></label>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="afullname" id="FullName"
                                            placeholder="Fullname" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="aaddress" id="Address"
                                            placeholder="Address" required>
                                    </div>
                                    <div class="col-sm-6">
                                      <label class="form-label" for="birthdate"></label>
                                        <input type="date" class="form-control form-control-user" name="abirthdate" id="Birthdate"
                                            placeholder="Birthdate" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="gender">Gender</label>
                                        <select class="form-control" name="agender" required>
                                            <option value="" disabled selected >Gender</option>
                                            <option value="Male">MALE</option>
                                            <option value="Female">FEMALE</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                    <label class="form-label" for="gender"></label>
                                        <input type="number" class="form-control form-control-user" name="acontact" id="ContactNumber"
                                            placeholder="Contact Number" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label class="form-label" for="status">Status</label>
                                        <select class="form-control" name="astatus" required>
                                            <option value="" disabled selected >Click to Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Not Active">Not Active</option>
                                        </select>
                                    </div>
                                    
                                <div class="col-sm-6">
                                    <label class="form-label" for="email"></label>
                                        <input type="email" class="form-control form-control-user" name="aemail" id="InputEmail"
                                            placeholder="Email Address" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label class="form-label" for="type">User Type</label>
                                        <select class="form-control" name="atype" required>
                                            <option value="user">User</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="form-label" for="example"></label>
                                        <input type="password" class="form-control form-control-user" name="apassword"
                                            id="InputPassword" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label class="form-label" for="example"></label>
                                        <input type="password" class="form-control form-control-user" name="arepeatpassword"
                                            id="RepeatPassword" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                            <hr> 
                            <br><br>
                                <hr>
                                <br><br>
                            <div class="col-md-12 text-center">
                            <button type="submit" name="signup_btn"  class="btn btn-primary btn-user btn-block">
                                    Sign up Account
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url();?>/assets/backend/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>/assets/backend/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>/assets/backend/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>/assets/backend/js/sb-admin-2.min.js"></script>

</body>

</html>