<!-- Content -->
        <div class="container-fluid">
            <div class="content-container col-md-12">                
                <!-- IP Form -->
                <?php echo form_open(base_url('it_configuration/set_new_ip')); ?>
                    <div class="modal fade" id="IPForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="logo"> Set IP Address</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            Username                                      
                                        </div>
                                        <div class="col-md-6">
                                            <input readonly="" type="text" name="txtUsername" id="txtUsername" class="form-control input-xs">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            Name
                                        </div>
                                        <div class="col-md-6">
                                            <input readonly="" type="text" name="txtName" id="txtName" class="form-control input-xs">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            Location
                                        </div>
                                        <div class="col-md-6">
                                            <select required="" name="listLocation" class="form-control input-xs" id="listLocation">
                                                <option value="">Unlocated</option>
                                                <?php foreach ($loc->result() as $rows) { ?>
                                                <option value="<?php echo $rows->LOC_ID; ?>"><?php echo $rows->LOCATION; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            Taging                                  
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="txtTagging" id="txtEmail" class="form-control input-xs">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            New IP                                  
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="txtIP" id="txtEmail" class="form-control input-xs">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            Notes                           
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="txtNotes" id="txtEmail" class="form-control input-xs">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">                                    
                                    <button type="reset" class="btn btn-default btn-xs " data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close(); ?>
                <!-- End IP Form --> 
                
                <!-- Location Form -->
                <?php echo form_open(base_url('it_configuration/add_location')); ?>
                    <div class="modal fade" id="locationForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="logo"> New Location</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            Location                                      
                                        </div>
                                        <div class="col-md-6">
                                            <input required="" type="text" name="txtLocation" id="txtLocation" class="form-control input-xs">
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="modal-footer">                                    
                                    <button type="reset" class="btn btn-default btn-xs " data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close(); ?>
                <!-- End Location Form --> 
                
                <div class="row">
                    <div class="col-md-9">
                        <?php if ($this->session->flashdata('success_msg')) { ?>
                        <p class="bg-success col-md-12 flash-msg"><?php echo $this->session->flashdata('success_msg'); ?></p>
                        <?php } ?>
                        <?php if ($this->session->flashdata('success_update_msg')) { ?>
                        <p class="bg-success col-md-12 flash-msg"><?php echo $this->session->flashdata('success_update_msg'); ?></p>
                        <?php } ?>
                        
                        <h4 class=""><i class="fa fa-desktop"></i> IP Config</h4>
                        
                        <div class="input-group col-md-6 pull-left">
                            <ul class="nav nav-tabs nav-tabs-custom">
                                <?php foreach ($loc->result() as $rows) { ?>
                                <li class="<?php if($this->uri->segment(3)== $rows->LOC_ID) { echo "active"; } ?>"><a href="<?php echo base_url('it_configuration/config_ip/'.$rows->LOC_ID); ?>"><?php echo $rows->LOCATION; ?></a></li>    
                                <?php } ?>                               
                                <li class="<?php if($this->uri->segment(3)== null) { echo "active"; } ?>"><a href="<?php echo base_url('it_configuration/config_ip/'); ?>">Unlocated</a></li>
                                <li><a href="#" id="addLocation"><i class="fa fa-plus-circle"></i></a></li>
                            </u>                           
                        </div>
                        <div class="input-group col-md-2 pull-right">
                            <input type="search" placeholder="Search users..." id="search-ticket" class="form-control input-xs">
                            <div class="input-group-btn">
                                <button class="btn btn-xs btn-default"><i class="fa fa-search"></i></button>
                            </div>                           
                        </div>                                                        
                                              
                        <button class="hidden btn btn-primary btn-xs pull-right" id="updateUserBtn"><i class="fa fa-wrench"></i> Set New IP</button> 
                        
                        <a href="<?php echo base_url('it_configuration/retrive_user'); ?>">
                        <button class="btn btn-warning btn-xs pull-right" id="retrieveServerBtn"><i class="fa fa-refresh"></i> Retrieve AD Users</button>
                        </a>
                        
                        <div class="clearfix"></div>
                        
                        <br>
                        
                        <table id="datatable" class="table table-ticket table-condensed table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Taging</th>
                                    <th>IP Address</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                            <!-- Get Data From Active Directory -->
                            <?php //$no=1; for($i=0; $i < $entries['count']; $i++) { ?>    
<!--                                <tr>
                                    <td><?php //echo $no++; ?></td>
                                    <td><?php //echo $entries[$i]['samaccountname'][0]; ?></td>
                                    <td><?php //echo $entries[$i]['name'][0]; ?></td>      
                                    <td>
                                        <?php //if (isset($entries[$i]['userprincipalname'][0])) { 
                                            //$userprincipalname = $entries[$i]['userprincipalname'][0]; 
                                            //$email = str_replace(".local", ".com", $userprincipalname);
                                            //echo $email;
                                        //} ?>
                                    </td>     
                                    <td></td>
                                </tr>-->
                            <?php //} ?> 
                            <!-- End Data from Active Directory -->
                            
                            <!-- Get Data from MySQL Server -->
                            <?php $no=1; foreach ($entries as $rows) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $rows->USERNAME; ?></td>
                                    <td><?php echo $rows->NAME; ?></td>
                                    <td><?php echo $rows->LOC_ID; ?></td>      
                                    <td><?php echo $rows->TAGGING; ?></td>
                                    <td><?php echo $rows->IP_ADDRESS; ?></td>     
                                    <td><?php echo $rows->NOTES; ?></td>
                                </tr>
                            <?php } ?>
                            <!-- End Get Data from MySQL -->
                            </tbody>
                            <!--<tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Status</th>
                                    <th>Category</th>
                                    <th>Subject</th>
                                    <th>User</th>
                                    <th>Desc</th>
                                </tr>
                            </tfoot>-->
                        </table>                    
                        
                        
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
            $(document).ready(function(){
                $("#datatable").dataTable({
                    "iDisplayLength": 50,
                    "sPaginationType": "full_numbers"
                });
                
                $("#search-ticket").keyup(function(){
                    $(".dataTables_filter input[type='search']").val($(this).val());
                    $(".dataTables_filter input[type='search']").keyup();
                });
                
                $("#updateUserBtn").click(function() {
                    $("#IPForm").modal({
                        backdrop : "static"
                    });
                });
                
                $("#IPForm,#locationForm").draggable({
                    handle: ".modal-header"
                });       
                
                $("#ticketAttachment").click(function(){
                    $("#fileAttachment").click();            
                });
                
                $("#fileAttachment").change(function() {
                    $("#fileValue").html($(this).val());
                });               
                
                $('#datatable tbody').on('click', 'tr', function () {
                    $("#datatable tbody tr").removeClass("row-selected");
                    $(this).addClass("row-selected");
                    
                    $("#updateUserBtn").removeClass('hidden');
                    
                    var username = $('td', this).eq(1).text();
                    var name = $('td', this).eq(2).text();
                    var email = $('td', this).eq(3).text();
                    var user_group = $('td', this).eq(4).text();
                    
                    $("#txtUsername").val(username);
                    $("#txtName").val(name);
                    $("#txtEmail").val($.trim(email));                    
                    
                    $("select#listUserGroup option").filter(function() {
                        //may want to use $.trim in here
                        return $(this).text() == user_group; 
                    }).prop('selected', true);
                });
                
                $("#addLocation").click(function() {
                    $("#locationForm").modal({
                        backdrop : "static"
                    });
                });
                
            });
        </script>