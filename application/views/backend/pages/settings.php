   <!-- Pre-loader end -->
    <?php foreach ($web_info as $row) :
        $web_name =$row->web_name;
        $web_description=$row->web_description;
        $contact_num=$row->contact_num;
        $email=$row->email;
        $address=$row->address;
        endforeach;
    ?>

                    <!-- Main-body start -->
                    <div class="container">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-center">
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Website Information</h5>
                                                        <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
                                                        <div class="card-header-right"><i
                                                            class="icofont icofont-spinner-alt-5"></i></div>
                                                            <div class="card-header-right">
                                                                <i class="icofont icofont-spinner-alt-5"></i>
                                                            </div>
                                                        </div>
                                                        <div class="container ">
                                                            <div class="row justify-content-center">
                                                             <div class="col-xl-10 col-lg-9 col-md-6">
                                                        <div class="card-block">
                                                                    <label style="color: red; " ><?= $this->session->flashdata('msg_settings_error');?></label>
                                                                    <label style="color: green;" ><?= $this->session->flashdata('msg_settings');?></label>
                                                                </div>
                                                            <form action="<?= base_url();?>index.php/insertFROMsettings" method="post">
                                                                <div class="form-group row" id="webname">
                                                                    <label class="col-sm-2 col-form-label">Website Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input value="<?php echo isset($web_name) ? $web_name : ''; ?>" name="name" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">About us</label>
                                                                    <div class="col-sm-10">
                                                                        <textarea 
                                                                            name="about" rows="10" cols="15" size="1000" class="form-control"
                                                                            placeholder="Your About us" required> <?php echo isset($web_description) ? $web_description : ''; ?></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row" id="contact">
                                                                    <label class="col-sm-2 col-form-label">Contact Number</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number_format" value="<?php echo isset($contact_num) ? $contact_num : ''; ?>" name="contact" type="number_format" class="form-control"
                                                                        placeholder="Input number" required> 
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row" id="email">
                                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" value="<?php echo isset($email) ? $email : ''; ?>" name="email" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row" id="address">
                                                                    <label class="col-sm-2 col-form-label">Address</label>
                                                                    <div class="col-sm-10">
                                                                        <input value="<?php echo isset($address) ? $address : ''; ?>" name="address" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                    <br>
                                                                <div class="row justify-content-center">
                                                                <div class="col-lg-6">
                                                                        <button type="submit" name="settings_btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" >Save</button>
                                                                    </div>
                                                                 </div>
                                                                    <br>
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