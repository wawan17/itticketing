<!DOCTYPE html>

<html>
    <head>
        <title>Ticket | Help Desk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        
        <!-- Load Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        
        
        <style>
        /* Email */
        .header {
            background: #f8b230;
            height: 42px;
        }
        h2 {
            font-family: 'Lato', sans-serif;
            color: #222;
        }
        p {
            font-family: 'Lato', sans-serif;
            color: #333;
        }
        .screen {
            margin-top: 0;
            height: 200px;
            overflow: hidden;
        }
        .screen img {
            width: 100%;
        }

        .email-signature {
            margin-top: 120px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }       
        
        .line {
            width: 100%;
            height: 15px;
            border-bottom: 1px solid #337ab7;
        }

        /* End Email */
            
        </style>
    </head>
    <body>
        <!-- Header -->
        
        <p class="header">
            <img src="http://mpm-rent.co.id/itsupport/assets/images/email_logo.png" alt="MPM Rent">
        </p>
                
        <!-- End Header -->
        
        <!-- Content -->
        <div class="container-fluid">
            <div class="col-md-12 email-content">                
                <h2>Hi <?php echo $name; ?>,</h2>
                
                <p>
                    Your ticket number #<?php echo $ticket_id; ?> has solved by IT team. 
                    Please confirm that your problem has solved with click link below. <br><br><br>
                    <a href="<?php echo base_url('home/closed_ticket/'.$ticket_id.'/'.$username); ?>">Click here to confirm or close your ticket</a><br><br><br>
                    Thank you.
                </p>
                
                <p>
                    If you need more help. Please do not hesitate to call us back, 
                    or you can create a new ticket for a new assistance. 
                    Thank you for using IT helpdesk system. It will inform you whenever ticket status has been changed.
                
                <p class="email-signature">
                    Warm Regards,<br>
                    All of Nice People at IT Department
                </p>                
            </div>
            <div class="email-footer col-md-12">
                <p>
                    PT. MITRA PINASTHIKA MUSTIKA RENT,<br>
                    Sunburst, CBD Lot II No. 10, Jl. Kapten Soebijanto Djojohadikusumo, BSD City, Tangerang 15322<br>
                    Telp:  +62-21-53157668 Ext. 2028 | Ext. 2035 | Ext. 2036
                </p>
            </div>
        </div>
        <!-- End Content -->        
    </body>
</html>
