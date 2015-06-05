<!-- Content -->
        <div class="container-fluid">
            <div class="content-container col-md-12">                
                <!-- Ticket Form -->
                <?php echo form_open(base_url('module/add')); ?>
                    <div class="modal fade" id="ticketForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="logo"> Create New Module</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            Module Name                                      
                                        </div>
                                        <div class="col-md-8">
                                            <input required="" type="text" name="txtModuleName" class="form-control input-xs">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            Module Description
                                        </div>
                                        <div class="col-md-8">
                                            <textarea required="" name="txtModuleDescription" rows="3" class="form-control input-xs"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            Link                               
                                        </div>
                                        <div class="col-md-8">
                                            <input required="" type="text" name="txtLink" class="form-control input-xs">
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            Group                               
                                        </div>
                                        <div class="col-md-8">
                                            <select name="listModuleGroup" id="listModuleGroup" class="form-control input-xs">
                                                <option value=""> -- Module Group -- </option>
                                                <?php foreach ($module_group->result() as $rows) { ?>
                                                <option value="<?php echo $rows->MODULE_GROUP_ID; ?>"><?php echo $rows->MODULE_GROUP_NAME; ?></option>
                                                <?php } ?>
                                            </select>
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
                <!-- End Ticket Form -->  
                
                <div class="row">           
                    <div class="col-md-9">
                        <?php if ($this->session->flashdata('success_msg')) { ?>
                        <p class="bg-success col-md-12 flash-msg"><i class="fa fa-check-circle"></i> <?php echo $this->session->flashdata('success_msg'); ?></p>
                        <?php } ?>
                        <?php if ($this->session->flashdata('error_msg')) { ?>
                        <p class="bg-danger col-md-12 flash-msg"><i class="fa fa-ban"></i> <?php echo $this->session->flashdata('error_msg'); ?></p>
                        <?php } ?>
                        <h4 class="pull-left"><i class="fa fa-sitemap"></i> Modules</h4>
                        <div class="pull-right">
                            <button class="btn btn-primary btn-xs" id="ticketFormBtn"><i class="fa fa-ticket"></i> New Module</button>                            
                        </div>
                        <table id="datatable" class="table table-ticket table-condensed table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Group</th>
                                    <th>Module</th>
                                    <th>Description</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($modules->result() as $rows) { ?>    
                                <tr>
                                    <td><?php echo $rows->MODULE_ID; ?></td>
                                    <td><?php echo $rows->MODULE_GROUP_NAME; ?></td>
                                    <td><?php echo $rows->MODULE_NAME; ?></td>
                                    <td><?php echo $rows->MODULE_DESC; ?></td>  
                                    <td><?php echo $rows->LINK; ?></td>  
                                </tr>
                            <?php } ?>                                                               
                            </tbody>
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
                    "aaSorting": [],
                    "iDisplayLength": 15,
                    "sPaginationType": "full_numbers"
                });
                
                $("#search-ticket").keyup(function(){
                    $(".dataTables_filter input[type='search']").val($(this).val());
                    $(".dataTables_filter input[type='search']").keyup();
                });
                
                $("#ticketFormBtn").click(function() {
                    $("#ticketForm").modal({
                        backdrop : "static"
                    });
                });
                
                $("#ticketForm").draggable({
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
                } );
                
                
                
            });
        </script>