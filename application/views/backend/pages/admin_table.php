<div class="container">
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">            
                                <!-- Page-body start -->
                                <div class="page-body">
                                    <!-- Contextual classes table starts -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Admin List</h5>
                                            <span>This is the list of admins </span>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="icofont icofont-simple-left "></i></li>
                                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                    <li><i class="icofont icofont-error close-card"></i></li>
                                                </ul></div>
                                            </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Full Name</th>
                                                            <th>Address</th>
                                                            <th>Birthdate</th>
                                                            <th>Gender</th>
                                                            <th>Contact</th>
                                                            <th>Type</th>
                                                            <th>Email</th>
                                                            <th>Password</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            foreach ($users as $row) :?>
                                                        <tr class="table-active">
                                                            <th><?php echo $row->id; ?></th>
                                                            <th><?php echo $row->fullname; ?></th>
                                                            <th><?php echo $row->address; ?></th>
                                                            <th><?php echo $row->birthdate; ?></th>
                                                            <th><?php echo $row->gender; ?></th>
                                                            <th><?php echo $row->contact; ?></th>
                                                            <th><?php echo $row->type; ?></th>
                                                            <th><?php echo $row->email; ?></th>
                                                            <th><?php echo $row->password; ?></th>
                                                            <th><?php echo $row->status; ?></th>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contextual classes table ends -->
                                </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->
                        <div id="styleSelector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>