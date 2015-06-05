        <!-- Header -->
        <header>
            <section id="company-logo">
                <div class="container">
                    <div class="pull-left">
                        <img src="<?php echo base_url('assets/images/logo.png');?>" alt="MPM Rent"> <span id="logo">MPM Rent</span>
                    </div>
                    <div class="pull-right">
                        <div id="nav-log">
                            <a href="<?php echo base_url('home/logout'); ?>"><span><i class="fa fa-lock"></i> LOGOUT</span></a>
                        </div>
                        <div id="nav-user">
                            <img src="<?php if ($this->session->userdata('avatar')) {echo base_url('uploads/avatar/'.$this->session->userdata('avatar')); } else { echo base_url('assets/images/avatar/default_avatar.gif');}?>" alt="user">
                            <span><?php echo strtoupper($this->session->userdata('name')); if($this->session->userdata('group')=="Admin") {echo " (ADMIN)"; }?></span>
                        </div>
                        <div id="nav-alert">
                            <a href="#"><i class="fa fa-comments"></i></a>
                            <a href="#"><i class="fa fa-warning"></i></a>
                            <a href="#"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
<!--                <section id="top-left-section">
                    <h4>MPM Portal</h4>
                </section>-->
                <section id="top-left-nav">
                    <ul class="nav nav-pills nav-custom">
                        <li class="<?php if($this->uri->segment(1) == 'dashboard') { echo "active"; } ?>"><a href="<?php echo base_url('dashboard'); ?>">The Company</a></li>
                        <li class="<?php if($this->uri->segment(1) == 'ticket') { echo "active"; } ?>"><a href="<?php echo base_url('ticket'); ?>">Vision Mission</a></li>
                        <li class="<?php if($this->uri->segment(1) == 'knowledgebase') { echo "active"; } ?>"><a target="_blank" href="<?php echo base_url('home/user_guide'); ?>">Services</a></li>                        
                    </ul>
                </section>
                <?php if($this->session->userdata('group')=="Admin") { ?>
                <section id="top-right-nav">
                    <ul class="nav nav-pills nav-custom">
                        <li><a href="#"><i class="fa fa-facebook-official"></i> Facebook</a></li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                    </ul>
                </section>
                <?php } ?>
            </div>
            
        </header>
        <!-- End Header -->