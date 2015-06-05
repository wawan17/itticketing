<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Ticket #<?php echo $this->uri->segment(3); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/logo.png'); ?>">
        
        <!-- Load CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ticketprint.css');?>">
        
        <!-- Load Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        
        <script>
            
        </script>
        <script type="text/javascript">
            var isClosed = false;
            window.print();
            window.onfocus = function() {
              if(isClosed) { // Work around IE11 calling window.close twice
                return;
              }
              window.close();
              isClosed = true;
            }
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-md-6 pull-left">
                <img class="pull-left" src="<?php echo base_url('assets/images/logo.png');?>" alt="MPM Rent">
                <h4>IT Help Desk Ticket</h4>
                
                <hr>
                
                <p>
                    Terima kasih telah menggunakan IT Help Desk System 
                    untuk setiap permintaan perbaikan / troubleshooting / 
                    bantuan IT. Kami akan senantiasa membantu Anda untuk 
                    keperluan layanan IT di PT. Mitra Pinasthika Mustika Rent.                   
                </p>
                
                <p>Berikut ini detil tiket Anda</p>
                
                <hr>
                
                <!-- Data Here -->
                <?php
                foreach ($ticket->result() as $t) {
                    $id = $t->TICKET_ID;
                    $status = $t->TICKET_STATUS;
                    $category = $t->TICKET_CATEGORY;
                    $subject = $t->SUBJECT;
                    $description = $t->DESCRIPTION;
                    $assign = $t->ASSIGNED_BY;
                }                
                ?>                
                <!-- /Data Here -->
                
                <table>
                    <tbody>
                        <tr>
                            <td>Nomor</td>
                            <td>:</td>
                            <td>#<?php echo $id; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?php echo $status; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td><?php echo $category; ?></td>
                        </tr>
                        <tr>
                            <td>Subyek</td>
                            <td>:</td>
                            <td><?php echo $subject; ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td><?php echo $description; ?></td>
                        </tr>                        
                        <tr>
                            <td>Ditangani oleh</td>
                            <td>:</td>
                            <td><?php echo $assign; ?></td>
                        </tr>                        
                    </tbody>
                </table>
                
                <hr>
                
                <p>
                    Mohon tunggu sebentar. Kami akan segera memperbaiki masalah Anda.
                </p>
                
                <hr>
                
                <h5>Sejarah Tiket</h5>
                <?php foreach($comment->result() as $rows) { ?>
                <p><i class="fa fa-level-up"></i> <strong><?php echo date('d/m/Y H:i:s', strtotime($rows->CREATE_DATE)); ?></strong> <?php echo $rows->COMMENT; ?></p>
                <?php } ?>                
            </div>                
        </div>
    </body>
</html>
