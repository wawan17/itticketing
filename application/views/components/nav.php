        <!-- Header -->
        <header>
            <section id="company-logo">
                <div class="container-fluid">
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
            <div class="container-fluid">
                <section id="top-left-section">
                    <h4>Help Desk</h4>
                </section>
                <section id="top-left-nav">
                    <ul class="nav nav-pills nav-custom">
                        <li class="<?php if($this->uri->segment(1) == 'dashboard') { echo "active"; } ?>"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="<?php if($this->uri->segment(1) == 'ticket') { echo "active"; } ?>"><a href="<?php echo base_url('ticket'); ?>">Ticket</a></li>
                        <li class="<?php if($this->uri->segment(1) == 'knowledgebase') { echo "active"; } ?>"><a target="_blank" href="<?php echo base_url('home/user_guide'); ?>">User Guide</a></li>
                        <li class="<?php if($this->uri->segment(1) == 'userportal') { echo "active"; } ?>"><a href="http://192.168.3.107:81/mpmr-portal/">MPM Portal</a></li>
                        <?php if($this->session->userdata('group')=="Admin") { ?><li class="<?php if($this->uri->segment(1) == 'report') { echo "active"; } ?>"><a href="<?php echo base_url('report'); ?>">Report</a></li><?php } ?>
<!--                        <li class="<?php if($this->uri->segment(1) == 'purchase') { echo "active"; } ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Purchasing</a>
                            <ul class="dropdown-menu dropdown-custom" role="menu">
                                <li><a href="#">Purchasing List</a></li>
                                <li><a href="#">Vendors</a></li>
                                <li><a href="#">Quotes</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </section>
                <?php if($this->session->userdata('group')=="Admin") { ?>
                <section id="top-right-nav">
                    <ul class="nav nav-pills nav-custom">
                        <li><a href="#"><i class="fa fa-wrench"></i> Setting</a></li>
                        <li><a href="#"><i class="fa fa-question-circle"></i> Help</a></li>
                    </ul>
                </section>
                <?php } ?>
            </div>
            
        </header>
        <!-- End Header -->