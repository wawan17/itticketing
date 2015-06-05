        <!-- Content -->
        <div class="container-fluid">
            <div class="content-container col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        <h4 class="pull-left"><i class="fa fa-dashboard"></i> Dashboard</h4>
                        <div class="pull-right">
                            
                        </div> 
                        
                        <!-- Nav Group -->
                        <div class="nav-group">
                            <h4>Getting Started</h4>
                            <div class="row">
                                <a href="<?php echo base_url('ticket'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/ticket.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">IT Ticketing</h4>
                                            <p>Manage user ticket and help desk</p>
                                        </div>                                    
                                    </div>   
                                </a>  
                                <?php if ($this->session->userdata('group')=="Admin") { ?>
                                <a href="<?php echo base_url('ticket_category'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/ticket2.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">Ticket Category</h4>
                                            <p>Manage help desk ticket category</p>
                                        </div>                                    
                                    </div>   
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                        
                        <?php if ($this->session->userdata('group')=="Admin") { ?>
                        <!-- Nav Group -->
                        <div class="nav-group">
                            <h4>IT Form</h4>
                            <div class="row">
                                <a href="<?php echo base_url('home/under_construction'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/ink.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">Ink / Toner Request Form</h4>
                                            <p>Manage ink / toner inventory</p>
                                        </div>                                    
                                    </div>
                                </a>
                                
                                <a href="<?php echo base_url('home/under_construction'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/form_access.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">Access Submission Form</h4>
                                            <p>Manage user access (Internet, email, application )</p>
                                        </div>                                    
                                    </div>
                                </a>
                                
                                <a href="<?php echo base_url('home/under_construction'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/projector.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">IT Assets Borrowing Form</h4>
                                            <p>Form for borrowing IT assets (projector, laptop, modem etc)</p>
                                        </div>                                    
                                    </div>
                                </a>
                                
                                <a href="<?php echo base_url('home/under_construction'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/reset_password.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">Password Reset Form</h4>
                                            <p>Form submission for reset user password</p>
                                        </div>                                    
                                    </div> 
                                </a>                                                               
                            </div>
                        </div>
                        <?php } ?>
                        
                        <?php if($this->session->userdata('group')=="Admin") { ?>
                        <!-- Nav Group -->
                        <div class="nav-group">
                            <h4>IT Configuration</h4>
                            <div class="row">
                                <a href="<?php echo base_url('it_configuration/software_license'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/license.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">Software License List</h4>
                                            <p>Manage software license, notification via email when license will expire about 30 days</p>
                                        </div>                                    
                                    </div>
                                </a>
                                
                                <a href="<?php echo base_url('it_configuration/config_ip'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/ip.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">IP Address Configuration</h4>
                                            <p>Manage IP address configuration for all user and device (PC, Laptop, Modem, Server, Switch, etc)</p>
                                        </div>                                    
                                    </div>
                                </a>
                                
                                <a href="<?php echo base_url('it_configuration/under_construction'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/email.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">Setting IT Email</h4>
                                            <p>Setting main email as IT support email</p>
                                        </div>                                    
                                    </div> 
                                </a>
                                
                                <a href="<?php echo base_url('it_configuration/under_construction'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/device.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">Device Setting</h4>
                                            <p>Setting and configuration each device</p>
                                        </div>                                    
                                    </div>
                                </a>                                  
                            </div>
                        </div>
                        <?php } ?>
                        
                        <!-- Nav Group -->
                        <div class="nav-group">
                            <h4>User Management</h4>
                            <div class="row">
                                <?php if($this->session->userdata('group')=="Admin") { ?>
                                <a href="<?php echo base_url('user'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/user.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">User Accounts</h4>
                                            <p>Manage all user, add, edit, activate or inactivate</p>
                                        </div>                                    
                                    </div>
                                </a>
                                
                                <a href="<?php echo base_url('user_group'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/user_group.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">User Groups</h4>
                                            <p>Manage user group access</p>
                                        </div>                                    
                                    </div>
                                </a>
                                
                                <a href="<?php echo base_url('module'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/module.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">Module</h4>
                                            <p>Manage application modules</p>
                                        </div>                                    
                                    </div>
                                </a> 
                                <?php } ?>
                                
                                <a href="<?php echo base_url('user/user_profile'); ?>">
                                    <div class="col-md-5 media nav-icon">                                    
                                        <div class="media-left">                                        
                                            <img class="media-object" src="<?php echo base_url('assets/images/icon/user.png');?>" alt="...">                                        
                                        </div>
                                        <div class="media-body">
                                            <h4 class="icon-title">Profile</h4>
                                            <p>Setting account profile, phone, email</p>
                                        </div>                                    
                                    </div>
                                </a> 
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    <!-- Right content -->
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="search" placeholder="Search..." class="form-control input-xs">
                            <div class="input-group-btn">
                                <button class="btn btn-xs btn-default"><i class="fa fa-search"></i></button>
                            </div>                           
                        </div>                        
                        <br>
                        <img src="<?php echo base_url('assets/images/information/microsoft.jpg');?>" alt='...' class="img-responsive">
                        <br>
                        <h5 class="widget-heading"><i class="fa fa-comment-o"></i> Announcements</h5>
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <div class="widget-content">
                                        <span class="widget-content-title">IT Help Desk System Development</span>
                                        <p class="widget-content-content">
                                            Diberitahukan kepada seluruh user bahwa saat ini IT help desk masih dalam tahap pengembangan sisitem.
 Sehingga mohon maaf apabila ada beberapa fungsi yang masih belum berjalan dengan baik. Namun untuk
proses ticketing sudah bisa digunakan mulai hari ini, Senin 11 Mei 2015. Demikian disampaikan dan terima kasih.
                                        </p>
                                        <p class="widget-content-desc">
                                            <span><i class="fa fa-clock-o"></i> 3 minutes ago</span>                                                                                            
                                            <span><i class="glyphicon glyphicon-user"></i> IT Admin</span>                                        
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="widget-content">
                                        <span class="widget-content-title">Pengembalian Modem IT</span>
                                        <p class="widget-content-content">
                                            Diberitahukan kepada seluruh user yang meminjam modem harap segera
                                            dikembalikan jika sudah selesai digunakan, Terima kasih.
                                        </p>
                                        <p class="widget-content-desc">
                                            <span><i class="fa fa-clock-o"></i> 5 hour ago</span>                                                                                            
                                            <span><i class="glyphicon glyphicon-user"></i> BamsSeruntul</span>                                        
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="widget-content">                                        
                                        <p class="widget-content-content">
                                            <i class="fa fa-lg fa-ellipsis-h"></i>
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>                       
                        
                    </div>
                    <!-- End right content -->
                    
                </div>
            </div>
        </div>
        <!-- End Content -->