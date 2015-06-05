        <div class="home-container">
            <?php echo form_open(base_url('home/login_process')); ?>
                <div class="" id="home-login">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">                                
                                <h4 class="modal-title" id="myModalLabel"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo"> Help Desk Login</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        Username                                      
                                    </div>
                                    <div class="col-md-8">
                                        <input required="" type="text" name="txtLDAPus" id="txtLDAPus" class="form-control input-xs" placeholder="Please type your username (e.g. wawan.setiawan)">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Password                                       
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input required="" type="password" name="txtLDAPp" id="txtLDAPp" placeholder="Please type your password (e.g. r@haS!4)" id="search-ticket" class="form-control input-xs">
                                            <div class="input-group-btn">
                                                <button type="button" id="btnEye" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></button>
                                            </div>                           
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                            <div class="modal-footer">
                                <!--<button type="button" class="btn btn-default btn-xs pull-left" id="ticketAttachment"><i class="fa fa-question-circle"></i> Forgot Password?</button>-->
                                <a href="http://192.168.3.107:81/mpmr-portal"><button type="button" class="btn btn-default btn-xs " data-dismiss="modal"><i class="fa fa-reply"></i> Back To Portal</button></a>
                                <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-lock"></i> Log In</button>
                            </div>                            
                        </div>
                    </div>
                    
                    <div class="modal-dialog">
                        <?php if ($this->session->flashdata('login_error_msg')) { ?>
                        <p class="bg-danger col-md-12 flash-msg"><?php echo $this->session->flashdata('login_error_msg'); ?></p>
                        <?php } ?>
                    </div>
                    
                </div>
            <?php echo form_close(); ?>
            
            <div class="home-footer">
                <section id="home-footer-content">
                    <div class="container-fluid">
                        <div class="pull-left">
                            <img src="<?php echo base_url('assets/images/logo.png');?>" alt="MPM Rent"> <span id="logo">IT Support Center</span>
                        </div>
                        <div class="pull-left footer-link">
                            <ul class="nav nav-pills nav-custom">
                                <li><a href="http://192.168.3.107:81/mpmr-portal/">MPM Portal</a></li>
                                <li><a href="<?php echo base_url('home/under_construction'); ?>">SOP & Procedures</a></li>
                                <li><a target="_blank" href="<?php echo base_url('home/user_guide'); ?>">User Guide</a></li>                                                           
                            </ul>
                        </div>
                        <div class="pull-right copyright">
                            Copyright 2015. PT. Mitra Pinasthika Mustika Rent. <br>Developed By IT Team
                        </div>
                        
                    </div>
                </section>
            </div>
        </div> 
        
        <script>
            $(document).ready(function(){
                $("#btnEye").mousedown(function() {
                    $("#txtLDAPp").attr({type:'text'});
                });
                $("#btnEye").mouseup(function(){
                    $("#txtLDAPp").attr({type:'password'});
                });
                
                // check browser
                
            });
        </script>