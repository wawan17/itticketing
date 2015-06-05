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
                                    <?php foreach ($ticket_category->result() as $rows) { ?>
                                        <option value="<?php echo $rows->TICKET_CATEGORY_ID; ?>"><?php echo $rows->TICKET_CATEGORY; ?></option>                                                
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                Priority                                  
                            </div>
                            <div class="col-md-3">
                                <select class="input-xs form-control" name="listPriority">
                                    <option value="1">Low</option>
                                    <option value="2">Medium</option>
                                    <option value="3">High</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                Phone / Ext.
                            </div>
                            <div class="col-md-3">
                                <input required="" type="text" name="txtUserContact" class="form-control input-xs">
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

                <h4 class="pull-left"><i class="fa fa-ticket"></i> Ticket 
                    <li class="select-ticket-status">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <?php
                            $ar_status = array ("All Tickets",
                                "Open Tickets",
                                "Assigned Tickets",
                                "Tickets On Progress",
                                "Tickets Closed By IT",
                                "Tickets Closed By User");                
                            echo $ar_status[$this->uri->segment(3)];
                            ?>
                        </a> 
                        <i class="fa fa-caret-down"></i>
                        <ul class="dropdown-menu dropdown-custom" role="menu">
                            <li><a href="<?php echo base_url('ticket'); ?>">All Tickets</a></li>
                            <li><a href="<?php echo base_url('ticket/status/1'); ?>">Open Tickets</a></li>
                            <li><a href="<?php echo base_url('ticket/status/2'); ?>">Assigned Tickets</a></li>
                            <li><a href="<?php echo base_url('ticket/status/3'); ?>">Tickets On Progress</a></li>
                            <li><a href="<?php echo base_url('ticket/status/4'); ?>">Tickets Closed By IT</a></li>
                            <li><a href="<?php echo base_url('ticket/status/5'); ?>">Tickets Closed By User</a></li>
                        </ul>
                    </li>
                </h4>
                <div class="pull-right">
                    <button class="btn btn-primary btn-xs" id="ticketFormBtn"><i class="fa fa-ticket"></i> New Ticket</button>
                    <?php if($this->session->userdata('group')=="Admin") { ?><button class="btn btn-primary btn-xs"><i class="fa fa-gear"></i> Setting</button><?php } ?>
                </div>
                <div class="clearfix"></div>
                <!-- Ticket table -->
                <table id="datatable" class="table table-striped table-responsive table-condensed table-ticket table-hover">
                    <thead>
                        <tr>
                            <th><i class='fa fa-star'></i></th>
                            <th>#</th>
                            <th>Status</th>                            
                            <th>Category</th>
                            <th>Subject</th>
                            <th>Desc</th>
                            <?php if($this->session->userdata('group')=="Admin") { ?>
                            <th>User</th>
                            <?php } ?>
                            <th>Assignee</th>                            
                            <th>Created</th>
                            <th><i class="fa fa-paperclip"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tickets->result() as $rows) { ?>   
                            <tr>                                
                                <td>
                                    <?php
                                    if ($rows->PRIORITY == '3') {
                                        echo "<span class='fa-red'><i class='fa fa-star'></i></span>";
                                    } else if ($rows->PRIORITY == '2') {
                                        echo "<span class='fa-yellow'><i class='fa fa-star'></i></span>";
                                    } else if ($rows->PRIORITY == '1') {
                                        echo "<span class='fa-green'><i class='fa fa-star'></i></span>";
                                    }
                                    ?>
                                </td>
                                <td><?php echo $rows->TICKET_ID; ?></td>
                                <td><span class="ticket-status <?php echo $rows->TICKET_ID; ?>"><?php echo $rows->TICKET_STATUS; ?></span></td>                                
                                <td style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap; max-width: 120px"><?php echo $rows->TICKET_CATEGORY; ?></td>
                                <td><?php if(strlen($rows->SUBJECT) > 30) { echo substr($rows->SUBJECT,0,30)."..."; } else {echo $rows->SUBJECT;} ?></td>
                                <td <?php if($this->session->userdata('group')=="Admin") { ?> style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap; max-width: 120px" <?php } ?>><?php if(strlen($rows->DESCRIPTION) > 40) { echo substr($rows->DESCRIPTION,0,40)."..."; } else {echo $rows->DESCRIPTION;} ?></td>
                                <?php if($this->session->userdata('group')=="Admin") { ?>
                                <td><?php echo $rows->CREATED_BY; ?></td>
                                <?php } ?>
                                <td>
                                    <?php if($rows->ASSIGNED_BY!="")  {echo $rows->ASSIGNED_BY; } else { ?>
                                    <?php if ($this->session->userdata('group')=="Admin") { ?><a href="#" id="<?php echo $rows->TICKET_ID; ?>" class="assign">Assign</a> <?php } else {echo "-";} ?>
                                    <?php } ?>
                                </td>
                                <td><?php echo date('m/d/Y', strtotime($rows->CREATE_DATE)); ?></td>                              
                                <td><?php
                                    if ($rows->ATTACHMENT != "") {
                                        echo "<a download href='" . base_url('uploads/ticket/' . $rows->ATTACHMENT) . "'><i class='fa fa-paperclip'></i></a>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>                                   
                    </tbody>                    
                </table>
                <!-- End Table -->

                <div id="ticket-detail-container"></div>
            </div>

            <!-- Right content -->
            <?php $this->load->view('components/right_sidebar');  ?>
            <!-- End right content -->

        </div>
    </div>
</div>
<!-- End Content -->

<!-- Footer -->
<footer>
    <section>
        <audio id="notifSound" onended="window.location.reload()" src="<?php echo base_url('assets/sounds/notification.mp3'); ?>"></audio>
    </section>
</footer>
<!-- End Footer -->

<!-- Load Javascript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>

<script>
    function checkTicket() {
        var oTable = $("#datatable").dataTable();
        var countRow = oTable.fnGetData().length;
        $.ajax({
            method : 'POST',
            url: '<?php echo base_url('ticket/check_new_ticket'); ?>',
            success : function (data) {
                if (countRow!=data) {
                    var notif = document.getElementById("notifSound");
                    notif.play();
                }
            }            
        });         
    }
    
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
            if (ticket_id !== "") {
                $("#ticket-detail-container").load('<?php echo base_url('ticket/ticket_detail'); ?>/' + ticket_id);
            }
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

        // check new ticket
        <?php if($this->session->userdata('group')=="Admin") { ?>
        setInterval(checkTicket,180000);
        <?php } ?>


    });
</script>