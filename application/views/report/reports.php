<!-- Content -->
<div class="container-fluid">
    <div class="content-container col-md-12">                
        <!-- Ticket Form -->
        <?php
        $attrib = array('id' => 'form', 'name' => 'form');
        echo form_open_multipart('ticket/add', $attrib);
        ?>
        <div class="modal fade" id="ticketForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo"> Create Ticket</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                Subject                                      
                            </div>
                            <div class="col-md-8">
                                <input required="" type="text" name="txtSubject" class="form-control input-xs">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                Description                                       
                            </div>
                            <div class="col-md-8">
                                <textarea required="" class="form-control input-xs" rows="3" name="txtDescription"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                Support Category                                  
                            </div>
                            <div class="col-md-8">
                                <select required="" class="input-xs form-control" name="listCategory">
                                    <option value=""> -- Select Category --</option>
                                    <?php //foreach ($ticket_category->result() as $rows) { ?>
                                        <option value="<?php //echo $rows->TICKET_CATEGORY_ID; ?>"><?php //echo $rows->TICKET_CATEGORY; ?></option>                                                
                                    <?php //} ?>
                                </select>
                            </div>
                        </div>

<!--                        <div class="row">
                            <div class="col-md-4">
                                Assign To                            
                            </div>
                            <div class="col-md-4">
                                <select class="input-xs form-control" name="listUser">
                                    <option value="">IT Department</option>                                    
                                </select>
                            </div>
                        </div>-->

                        <div class="row">
                            <div class="col-md-4">
                                Priority                                  
                            </div>
                            <div class="col-md-3">
                                <select class="input-xs form-control" name="listPriority">
                                    <option value="1">Low</option>
                                    <option value="2" selected="">Medium</option>
                                    <option value="3">High</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">                                    
                        <input type="file" name="fileAttachment" id="fileAttachment">
                        <button type="button" class="btn btn-default btn-xs pull-left" id="ticketAttachment"><i class="fa fa-paperclip"></i> Attach File</button>
                        <span id="fileValue" class="pull-left"></span>
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

                <h4 class="pull-left"><i class="fa fa-ticket"></i> Report <small>All Reports</small></h4>
                <div class="pull-right">
                    <button class="btn btn-primary btn-xs" id="ticketFormBtn"><i class="fa fa-ticket"></i> New Ticket</button>
                    <?php if($this->session->userdata('group')=="Admin") { ?><button class="btn btn-primary btn-xs"><i class="fa fa-gear"></i> Setting</button><?php } ?>
                </div>
                <div class="clearfix"></div>
                <!-- Ticket table -->
                <table id="datatable" class="table table-ticket table-condensed table-striped table-responsive table-hover">
                    <thead>
                        <tr>
                            <th><i class='fa fa-star'></i></th>
                            <th>#</th>
                            <th>Status</th>                            
                            <th>Category</th>
                            <th>Subject</th>
                            <th>Assignee</th>
                            <th>Desc</th>
                            <th>Created</th>
                            <th><i class="fa fa-paperclip"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //foreach ($tickets->result() as $rows) { ?>   
                            <tr>                                
                                <td>
                                    <?php
//                                    if ($rows->PRIORITY == '3') {
//                                        echo "<span class='fa-red'><i class='fa fa-star'></i></span>";
//                                    } else if ($rows->PRIORITY == '2') {
//                                        echo "<span class='fa-yellow'><i class='fa fa-star'></i></span>";
//                                    } else if ($rows->PRIORITY == '1') {
//                                        echo "<span class='fa-green'><i class='fa fa-star'></i></span>";
//                                    }
                                    ?>
                                </td>
                                <td><?php //echo $rows->TICKET_ID; ?></td>
                                <td><span class="ticket-status <?php //echo $rows->TICKET_ID; ?>"><?php //echo $rows->TICKET_STATUS; ?></span></td>                                
                                <td><?php //echo $rows->TICKET_CATEGORY; ?></td>
                                <td><?php //echo $rows->SUBJECT; ?></td>
                                <td>
                                    <?php //if($rows->ASSIGNED_BY!="")  {echo $rows->ASSIGNED_BY; } else { ?>
                                    <?php //if ($this->session->userdata('group')=="Admin") { ?><a href="#" id="<?php //echo $rows->TICKET_ID; ?>" class="assign">Assign</a> <?php //} else {echo "-";} ?>
                                    <?php //} ?>
                                </td>
                                <td><?php //if(strlen($rows->DESCRIPTION) > 50) { echo substr($rows->DESCRIPTION,0,50)."..."; } else {echo $rows->DESCRIPTION;} ?></td>
                                <td><?php //echo date('m/d/Y', strtotime($rows->CREATE_DATE)); ?></td>
                                <td><?php
//                                    if ($rows->ATTACHMENT != "") {
//                                        echo "<a download href='" . base_url('uploads/ticket/' . $rows->ATTACHMENT) . "'><i class='fa fa-paperclip'></i></a>";
//                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php //} ?>                                   
                    </tbody>                    
                </table>
                <!-- End Table -->

                <div id="ticket-detail-container"></div>
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
                <img src="<?php echo base_url('assets/images/information/avanza1_b.jpg'); ?>" alt='...' class="img-responsive">
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
                                    <span><i class="glyphicon glyphicon-user"></i> The Sruntuls</span>                                        
                                </p>
                            </div>
                        </a>
                    </li>
<!--                    <li>
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
                    </li>-->
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
                <img src="<?php echo base_url('assets/images/information/Federal-Oil-Y-Matic-1.jpg'); ?>" alt='...' class="img-responsive">
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
    $(document).ready(function () {
        $("#datatable").dataTable({
            "aaSorting": [],
            "iDisplayLength": 20,
            "sPaginationType": "full_numbers"
        });

        $("#search-ticket").keyup(function () {
            $(".dataTables_filter input[type='search']").val($(this).val());
            $(".dataTables_filter input[type='search']").keyup();
        });

        $("#ticketFormBtn").click(function () {
            $("#ticketForm").modal({
                backdrop: "static"
            });
        });

        $("#ticketForm").draggable({
            handle: ".modal-header"
        });

        $("#ticketAttachment").click(function () {
            $("#fileAttachment").click();
        });

        $("#fileAttachment").change(function () {
            $("#fileValue").html($(this).val());
        });

        $('#datatable tbody').on('click', 'tr', function () {
            $("#datatable tbody tr").removeClass("row-selected");
            $(this).addClass("row-selected");
            var ticket_id = $('td', this).eq(1).text();
            $("#ticket-detail-container").load('<?php echo base_url('ticket/ticket_detail'); ?>/' + ticket_id);
        });

        $(".assign").click(function () {
            var ticketId = this.id;
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('ticket/ticket_assign'); ?>/' + ticketId,
                success: function () {
                    $(".ticket-status."+ticketId).html('Assigned');
                    $("a#"+ticketId).replaceWith('<?php echo $this->session->userdata('username'); ?>');
                    $("#ticket-detail-container").load('<?php echo base_url('ticket/ticket_detail'); ?>/' + ticketId);
                }
            });
        });




    });
</script>