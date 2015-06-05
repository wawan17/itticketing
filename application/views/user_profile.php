<!-- Content -->
        <div class="container-fluid">
            <div class="content-container col-md-12">                
               
                <div class="row">           
                    <div class="col-md-9">
                        <?php if ($this->session->flashdata('success_msg')) { ?>
                        <p class="bg-success col-md-12 flash-msg"><i class="fa fa-check-circle"></i> <?php echo $this->session->flashdata('success_msg'); ?></p>
                        <?php } ?>
                        <?php if ($this->session->flashdata('error_msg')) { ?>
                        <p class="bg-danger col-md-12 flash-msg"><i class="fa fa-ban"></i> <?php echo $this->session->flashdata('error_msg'); ?></p>
                        <?php } ?>
                        <h4 class="pull-left"><i class="fa fa-user-secret"></i> User Profile</h4>
                        <div class="pull-right">
                            
                        </div> 
                        <div class="clearfix"></div>
                        
                        <!-- Profile -->
                        <?php
                        foreach ($user as $row) {
                            $email = $row->EMAIL;
                            $phone = $row->MOBILE;
                            $bio = $row->BIO;
                            $avatar = $row->AVATAR;
                        }
                        ?>
                        <?php $attrib=array('id'=>'form','name'=>'form'); echo form_open_multipart(base_url('user/update_profile'),$attrib); ?>
                        <div class="profile-wrapping">                            
                            <div class="col-md-3 profile-avatar">
                                <img id="avatar" class="media-object" src="<?php if ($this->session->userdata('avatar')) {echo base_url('uploads/avatar/'.$this->session->userdata('avatar')); } else { echo base_url('assets/images/avatar/default_avatar.gif');}?>" alt="user">                                
                                <button type="button" id="btnTriggerAvatar" class="btn btn-primary btn-xs"><i class="fa fa-photo"></i> Change</button>
                                <input class="hidden" type="file" id="fileAvatar" name="fileAvatar" accept="image/*">
                            </div>
                            
                            <div class="col-md-9 user-info">
                                <table class="table">
                                    <tr>
                                        <td>Name</td>
                                        <td><?php echo $this->session->userdata('name'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td><?php echo $this->session->userdata('username'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input class="form-control input-xs" type="text" name="txtEmail" value="<?php echo $email; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile</td>
                                        <td><input class="form-control input-xs" type="text" name="txtMobile" value="<?php echo $phone; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Bio</td>
                                        <td><textarea rows="3" class="form-control" name="txtBio"><?php echo $bio; ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-save"></i> Save Profile</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- End Profile -->
                        
                        
                        
                        
                        
                    </div>
                    
                    <!-- Right content -->
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="search" placeholder="Search..." id="search-ticket" class="form-control input-xs">
                            <div class="input-group-btn">
                                <button class="btn btn-xs btn-default"><i class="fa fa-search"></i></button>
                            </div>                           
                        </div>                        
                        <br>
                        <img src="<?php echo base_url('assets/images/information/avanza1_b.jpg');?>" alt='...' class="img-responsive">
                        <br>
                        <h5 class="widget-heading"><i class="fa fa-comment-o"></i> Announcements</h5>
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <div class="widget-content">
                                        <span class="widget-content-title">Server CarPro Under Maintenance</span>
                                        <p class="widget-content-content">
                                            Diberitahukan kepada seluruh user bahwa CarPro saat ini tidak bisa digunakan
                                            dikarenakan server sedang down dan dalam masa perbaikan.
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
                                        <span class="widget-content-title">Jaringan Bermasalah</span>
                                        <p class="widget-content-content">
                                            Mohon maaf kepada seluruh user dikarenakan jaringan
                                            sedang bermasalah.
                                        </p>
                                        <p class="widget-content-desc">
                                            <span><i class="fa fa-clock-o"></i> 3 hour ago</span>                                                                                            
                                            <span><i class="glyphicon glyphicon-user"></i> Reply88</span>                                        
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
                        <br>
                        <img src="<?php echo base_url('assets/images/information/Federal-Oil-Y-Matic-1.jpg');?>" alt='...' class="img-responsive">
                        <br>
                        
                    </div>
                    <!-- End right content -->
                    
                </div>
            </div>
        </div>
        <!-- End Content -->
        
        <!-- Footer -->
        <footer>
            <section>
                
            </section>
        </footer>
        <!-- End Footer -->
        
        <!-- Load Javascript -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/datatables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
        
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $(document).ready(function(){       
                $("#fileAvatar").change(function(){
                    readURL(this);
                });
                
                $("#btnTriggerAvatar").click(function(){
                    $("#fileAvatar").click();
                });
            });
        </script>