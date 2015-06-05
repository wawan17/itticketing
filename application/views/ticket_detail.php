                    <?php if (isset($ticket)) {
                        foreach($ticket->result() as $row) {
                            $ticket_id = $row->TICKET_ID;
                            $subject = $row->SUBJECT;
                            $description = $row->DESCRIPTION;
                            $ticket_category = $row->TICKET_CATEGORY;
                            $priority = $row->PRIORITY;
                            $user_contact = $row->USER_CONTACT;
                            $create_date = $row->CREATE_DATE;
                            $time_standard = $row->TIME_STANDARD;
                            $uom = $row->LONG_UOM;
                            $ticket_status_id = $row->TICKET_STATUS_ID;
                            $assigned_by = $row->ASSIGNED_BY;
                        }

                    } ?>
                    <div class="ticket-details">
                        <div class="ticket-number pull-left">
                            #<?php echo $ticket_id; ?>
                        </div>
                        <div class="btn-group pull-right">
                            <?php if($this->session->userdata('group')=="Admin") { ?>
                                <?php if($ticket_status_id==2) { ?>
                                    <button class="btn btn-warning btn-xs" id="btnTakeIt"><i class="fa fa-ticket"></i> Take It</button>
                                <?php } ?>
                            <button class="<?php if($ticket_status_id>=4) {echo "hidden";} ?> btn btn-default btn-xs" id="btnCloseTicket"><i class="fa fa-close"></i> Close Ticket</button>
                            <?php } else { ?>
                            <button class="<?php if($ticket_status_id==5) {echo "hidden";} ?> btn btn-default btn-xs" id="btnCloseTicketUser"><i class="fa fa-close"></i> Close Ticket</button>
                            <?php } ?>
                            <button class="btn btn-default btn-xs" id="btnPrint"><i class="fa fa-print"></i> Print</button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share Ticket</button>
                        </div>
                        <div class="ticket-desc">
                            <h3><?php echo $subject; ?></h3>
                            <p><?php echo $description; ?></p>
                        </div>                           
                    </div>
                    <div class="ticket-summary">
                        <table class="table table-condensed">
                            <tr>
                                <td>Priority</td>
                                <td>Created Date</td>
                                <td>Assignee</td>
                                <td>Category</td>
                                <td>Standard Time</td>
                                <td>User Contact</td>
                            </tr>
                            <tr>
                                <td>
                                    <?php if ($priority=="1") {
                                        echo "<i class='fa fa-star fa-green'></i> Low";                                         
                                    } else if($priority=="2") {
                                        echo "<i class='fa fa-star fa-yellow'></i> Medium";     
                                    } else if($priority=="3") {
                                        echo "<i class='fa fa-star fa-red'></i> High";     
                                    } else {
                                        echo "<i class='fa fa-star fa-yellow'></i>";     
                                    } ?>
                                </td>
                                <td><?php echo $create_date; ?></td>
                                <td><?php echo $assigned_by; ?></td>
                                <td><?php echo $ticket_category; ?></td>
                                <td><?php echo $time_standard," ".$uom; if($time_standard>1) { echo "s"; } ?></td>
                                <td><i class="fa fa-phone"></i> <?php echo $user_contact; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="ticket-comment">
                        <h5><i class="fa fa-comments"></i> User Comments</h5>
                        <?php if($ticket_status_id!=5) { echo "<hr>"; } ?>
                        <?php
                        if ($ticket_status_id==5) {
                            $attrib = array('id' => 'formComment', 'name' => 'formComment', 'class'=>'hidden');
                        } else {
                            $attrib = array('id' => 'formComment', 'name' => 'formComment');
                        }
                        echo form_open_multipart('ticket_comment/add', $attrib);
                        ?>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="<?php if($this->session->userdata('avatar')) {
                                        echo base_url('uploads/avatar/'.$this->session->userdata('avatar'));                                        
                                    } else { echo base_url('assets/images/avatar/default_avatar.gif');} ?>" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <input type="hidden" name="txtHiddenTicketId" id="txtHiddenTicketId" value="<?php echo $ticket_id; ?>">
                                <textarea name="txtComment" class="form-control" placeholder="Type a comments here..."></textarea>
                                <div class="comment-button">
                                    <div class="pull-left btn-group">
                                        <button type="button" class="btn btn-xs btn-primary btn-add-comment"><i class='fa fa-comment'></i> Add comment</button>                                        
                                        <?php if($this->session->userdata('group')=="Admin") { ?>
                                        <button type="button" class="<?php if($ticket_status_id>=4) {echo "hidden";} ?> btn btn-xs btn-warning btn-close-it"><i class='fa fa-close'></i> Close Ticket</button>
                                        <?php } else { ?>
                                        <button type="button" class="btn btn-xs btn-warning btn-close-user"><i class='fa fa-close'></i> Close Ticket</button>
                                        <?php } ?>
                                    </div>
                                    <div class="pull-right">
                                        <input type="file" name="commentFileAttachment" id="commentfileAttachment">                                        
                                        <span id="commentFileValue" class="pull-left"></span>
                                        <button type="button" class="btn btn-xs btn-default" id="commentAttachment"><i class="fa fa-paperclip"></i> Attach File</button>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                        <hr>
                        <?php if(isset($comment)) { foreach($comment->result() as $row) { ?>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php if($row->AVATAR!='') {echo base_url('uploads/avatar/'.$row->AVATAR);} else {echo base_url('assets/images/avatar/default_avatar.gif');} ?>" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body mb-custom">
                                        <h4 class="media-heading pull-left"><?php echo $row->NAME; ?> <span>add a comment</span></h4>
                                        <h4 class="media-time pull-right"><i class="fa fa-clock-o"></i> <span class="time-ago" title="<?php echo date('Y-m-d H:i:s', strtotime($row->CREATE_DATE)); ?>"></span></h4>
                                        <div class="comment-content">
                                            <?php if($row->COMMENT != "<pre></pre>") {echo $row->COMMENT;}else {echo "...";} ?>
                                            <?php if($row->ATTACHMENT != '') {
                                                $info = new SplFileInfo($row->ATTACHMENT);
                                                //$ext = $info->getExtension();
                                                
                                                $ext = substr($row->ATTACHMENT, strrpos($row->ATTACHMENT, '.') + 1);                         
                                                
                                                if($ext=="jpg" || $ext=="JPG" || 
                                                        $ext=="jpeg" || 
                                                        $ext=="JPEG" || $ext=="png" || $ext=="PNG" || 
                                                        $ext=="gif" || $ext=="GIF" || $ext=="bmp" || 
                                                        $ext=="BMP") {
                                                    echo "<img src='".  base_url("uploads/comment/$row->ATTACHMENT")."'>";
                                                    echo "<br><br><i class='fa fa-lg fa-photo'></i> Attachment <a download href='".  base_url("uploads/comment/$row->ATTACHMENT")."'>".$row->ATTACHMENT."</a>";
                                                } else if($ext=="doc" || $ext=="docx") {
                                                    echo "<br><br><i class='fa fa-lg fa-file-word-o'></i> Attachment <a download href='".  base_url("uploads/comment/$row->ATTACHMENT")."'>".$row->ATTACHMENT."</a>";
                                                } else if($ext=="xls" || $ext=="xlsx") {
                                                    echo "<br><br><i class='fa fa-lg fa-file-excel-o'></i> Attachment <a download href='".  base_url("uploads/comment/$row->ATTACHMENT")."'>".$row->ATTACHMENT."</a>";
                                                } else if($ext=="pdf") {
                                                    echo "<br><br><i class='fa fa-lg fa-file-pdf-o'></i> Attachment <a download href='".  base_url("uploads/comment/$row->ATTACHMENT")."'>".$row->ATTACHMENT."</a>";
                                                }
                                                
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                        <?php } } ?>                      
                        
                    </div>

                    <script src="<?php echo base_url('assets/js/timeago.js'); ?>"></script>
                    <script>
                    $(document).ready(function() {                        
                        $('.media-body textarea').focus(function(){
                            $(this).addClass('area-medium');
                            $(".comment-button").addClass("button-visible");
                        });
                        
                        $("#commentAttachment").click(function () {
                            $("#commentfileAttachment").click();
                        });

                        $("#commentfileAttachment").change(function () {
                            $("#commentFileValue").html($(this).val());
                        });
                        
                        $(".btn-add-comment").click(function () {
                            var formData = new FormData($("#formComment")[0]);
                            $.ajax({
                                type:'POST',
                                data: formData,
                                url:'<?php echo base_url('ticket_comment/add'); ?>',
                                async: false,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function() {
                                    var ticket_id = $("#txtHiddenTicketId").val();
                                    $("#ticket-detail-container").load('<?php echo base_url('ticket/ticket_detail'); ?>/' + ticket_id);
                                }
                            });
                        });
                        
                        $(".btn-close-it").click(function(){
                            var formData = new FormData($("#formComment")[0]);
                            $.ajax({
                                type:'POST',
                                data: formData,
                                url:'<?php echo base_url('ticket_comment/add'); ?>',
                                async: false,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function() {
                                    
                                }
                            });
                            
                            var ticket_id = $("#txtHiddenTicketId").val();
                            $.ajax({
                                type: 'POST',
                                url:'<?php echo base_url('ticket/ticket_close'); ?>/'+ticket_id,
                                success:function() {
                                    $(".ticket-status."+ticket_id).html('Complete');
                                    $("#ticket-detail-container").load('<?php echo base_url('ticket/ticket_detail'); ?>/' + ticket_id);
                                }
                            });
                        });
                        
                        $(".btn-close-user").click(function(){
                            var formData = new FormData($("#formComment")[0]);
                            $.ajax({
                                type:'POST',
                                data: formData,
                                url:'<?php echo base_url('ticket_comment/add'); ?>',
                                async: false,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function() {
                                    
                                }
                            });
                            
                            var ticket_id = $("#txtHiddenTicketId").val();
                            $.ajax({
                                type: 'POST',
                                url:'<?php echo base_url('ticket/ticket_close_user'); ?>/'+ticket_id,
                                success:function() {
                                    $(".ticket-status."+ticket_id).html('Closed');
                                    $("#ticket-detail-container").load('<?php echo base_url('ticket/ticket_detail'); ?>/' + ticket_id);
                                }
                            });
                        });
                        
                        $("#btnTakeIt").click(function(){
                            var ticket_id = $("#txtHiddenTicketId").val();
                            $.ajax({
                                type: 'POST',
                                url:'<?php echo base_url('ticket/ticket_do'); ?>/'+ticket_id,
                                success:function() {
                                    $(".ticket-status."+ticket_id).html('Progress');        
                                    $("#ticket-detail-container").load('<?php echo base_url('ticket/ticket_detail'); ?>/' + ticket_id);
                                }
                            });
                        });
                        
                        $("#btnCloseTicket").click(function(){
                            var ticket_id = $("#txtHiddenTicketId").val();
                            $.ajax({
                                type: 'POST',
                                url:'<?php echo base_url('ticket/ticket_close'); ?>/'+ticket_id,
                                success:function() {
                                    $(".ticket-status."+ticket_id).html('Complete');
                                    $("#ticket-detail-container").load('<?php echo base_url('ticket/ticket_detail'); ?>/' + ticket_id);
                                }
                            });
                        });
                        
                        $("#btnCloseTicketUser").click(function(){
                            var ticket_id = $("#txtHiddenTicketId").val();
                            $.ajax({
                                type: 'POST',
                                url:'<?php echo base_url('ticket/ticket_close_user'); ?>/'+ticket_id,
                                success:function() {
                                    $(".ticket-status."+ticket_id).html('Closed');
                                    $("#ticket-detail-container").load('<?php echo base_url('ticket/ticket_detail'); ?>/' + ticket_id);
                                }
                            });
                        });
                        
                        $(".time-ago").timeago();
                        
                        $("#btnPrint").click(function(){
                            window.open('<?php echo base_url('ticket/ticket_print'); ?>/'+$("#txtHiddenTicketId").val());
                        });
                    });        
                </script>             
                
                
                