<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>User Guide | Help Desk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/logo.png'); ?>">
        
        <!-- Load CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/mpmstyle-guide.css');?>">
        
        <!-- Load Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="col-md-6 pull-left">
                    <img src="<?php echo base_url('assets/images/logo.png');?>" alt="MPM Rent">
                    <span id="logo">IT Help Desk User Guide</span>
                </div>
                <div class="col-md-2 pull-right">                    
                    <div id="lang" class="pull-right">
                        <a href="<?php echo base_url('home/user_guide/en'); ?>"><img src="<?php echo base_url('assets/images/flag_en.png'); ?>" alt="flag-en"> EN</a> / 
                        <a href="<?php echo base_url('home/user_guide/id'); ?>"><img src="<?php echo base_url('assets/images/flag_id.png'); ?>" alt="flag-id"> ID</a>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container-fluid">
                <div class="col-md-12">
                    <br>
<!--                    <div class='breadcrumb'>
                        <h4>Welcome to IT Help Desk System</h4>
                        <p>IT Help Desk System is a web based application made 
                            to help you to manage your IT services
                            in Mitra Pinasthika Mustika Rent PT, when we develop it
                            we think that is very important to create a ticketing system
                            for request services from our team. You know that support by phone
                            is very traditional and spent much time because we must to remember
                            what user problem and it did not write. So we hope with the IT Help Desk System, 
                            the user can get services more fast and satisfied.                        
                        </p>
                    </div>-->
                    
                    <div class="breadcrumb">
                        <h4>Getting Started</h4>
                        <p>How to start IT Help Desk ?</p>
                        <p>
                            You can access IT Help Desk at <a target="_blank" href="http://192.168.3.108/itsupport/home">http://192.168.3.108/itsupport/home</a> <br>
                            or by open web portal at <a target="_blank" href="http://192.168.3.107:81/mpmr-portal/">http://192.168.3.107:81/mpmr-portal/</a> 
                            and then in the <strong>Main Menu</strong> select <strong>Helpdesk Support</strong> 
                        </p>
<!--                        <p>
                            Open The Portal at <a target="_blank" href="http://192.168.3.107:81/mpmr-portal/">http://192.168.3.107:81/mpmr-portal/</a> 
                            and then in the <strong>Main Menu</strong> select <strong>Helpdesk Support</strong> or you can direct 
                            access to <a target="_blank" href="http://192.168.3.108/itsupport/home">http://192.168.3.108/itsupport/home</a>.
                        </p>                        -->
                        <p class="alert alert-danger">
                            IT Help Desk only compatible with modern web browser. 
                            It has tested with Chrome Version 42 and Firefox 35 or higher.  
                            <strong>Recommended</strong> to use the latest version of these modern web browser 
                            <img src="<?php echo base_url('assets/images/ico-chrome.png');?>" alt="chrome"> 
                            <img src="<?php echo base_url('assets/images/ico-firefox.png');?>" alt="firefox">
                             . Using lower version browser may some function not working
                        </p>
                        
                        <p><img src="<?php echo base_url('assets/images/guide/IMG1.jpg');?>" alt="Guide1"></p>
                        
                        <br>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Login Into Application</h4>
                        <p>
                            When help desk opened. Please type your username and password. <strong>Remember...!</strong> 
                            username and password like when you logged in into your PC.
                        </p>
                        
                        <p><img src="<?php echo base_url('assets/images/guide/IMG2.jpg');?>" alt="Guide2"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Dashboard View</h4>
                        <p>
                            When username and password are correct, it will bring you to dashboard. 
                            As a standard web application <strong>The IT Help Desk</strong> have dashboard 
                            to manage all of business process. This picture below show you the dashboard. 
                        </p>
                        
                        <p><img src="<?php echo base_url('assets/images/guide/IMG3.jpg');?>" alt="Guide3"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>View All Tickets</h4>
                        <p>On Dashboard select <strong>IT Ticketing</strong> or you can 
                            view ticket via select <strong>Ticket</strong> on Top Menu
                        </p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG4.jpg');?>" alt="Guide4"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>View Ticket Detail</h4>
                        <p>To view detail of ticket. click the ticket you want to view details. Below ticket table
                            will show you detail of ticket. Here you can add comments, so IT team can see your comments. It may be
                            help IT team. Even you can attach file or some picture to describe your problem.
                        </p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG5.jpg');?>" alt="Guide5"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Create New Ticket</h4>
                        <p>
                            Click <strong>New Ticket</strong> and fill the form completely.                            
                        </p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG6.jpg');?>" alt="Guide6"></p>
                        
                        <br>
                        
                        <p>
                            <strong>Subject</strong>, your tikcet title. E.g <strong>"Tidak bisa kirim Email"</strong>.<br>
                            <strong>Description</strong>, your ticket/problem description. E.g <strong>"Email tidak bisa terkirim, 
                            selalu muncul pesan error x025482  your attachment files  are too big"</strong>.<br>
                            <strong>Support Category</strong>, your ticket category support. E.g <strong>"Email"</strong>. <br>
                            <strong>Priority</strong>, ticket priority. E.g <strong>"Medium"</strong>. <br>
                            And click <strong>Submit</strong> to submit your ticket.
                        </p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG7.jpg');?>" alt="Guide7"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Add Comments</h4>
                        <p>Comment will help IT team to understand your problem. 
                            So don't forget add comment if IT team doesn't respond too long.
                        </p>
                        <p>To add comment write in the textarea and then click <strong>Add Comment</strong> button</p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG8.jpg');?>" alt="Guide8"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Close Ticket</h4>
                        <p>If you problem has solved by IT team. Please close your ticket. 
                            There are two ways to close your ticket. <strong>First</strong>, click on ticket you want to close. 
                            In ticket detail click button <strong>Close Ticket</strong> below ticket table. <strong>The second way</strong>, 
                            you can close ticket by click button <strong>Close Ticket</strong> below textarea when you add comment.                     
                        </p>
                        
                        <p><img src="<?php echo base_url('assets/images/guide/IMG9.jpg');?>" alt="Guide9"></p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG10.jpg');?>" alt="Guide10"></p>
                    </div>
                    
                    
                    
                </div>                
            </div>
        </section>
        <footer>
            
        </footer>
    </body>
</html>
