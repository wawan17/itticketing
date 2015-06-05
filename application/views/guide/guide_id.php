<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Panduan Pengguna | Help Desk</title>
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
                    <span id="logo">Panduan Pengguna IT Help Desk</span>
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
                        <h4>Selamat datang di sistem IT Help Desk</h4>
                        <p>IT Help Desk System adalah aplikasi berbasis web yang dibuat 
                            untuk membantu Anda mengatur layanan IT di Mitra Pinasthika Mustika Rent PT, 
                            ketika kami mengembangkannya kami berpikir bahwa sangat penting untuk menciptakan 
                            sistem tiket untuk permintaan layanan dan bantuan dari tim kami. Anda tahu bawah permintaan bantuan melalui
                            telepon adalah cara lama dan menghabiskan banyak waktu karena kami harus mengingat apa 
                            masalah pada user dan kadang-kadang hal tersebut lupa tercatat.
                            Jadi kami berharap dengan sistem IT Help Desk ini user 
                            akan mendapat pelayanan yang lebih cepat dan memuaskan.                        
                        </p>
                    </div>-->
                    
                    <div class="breadcrumb">
                        <h4>Memulai IT Help Desk</h4>
                        <p>Bagaimana cara memulai IT Help Desk ?</p>
                        <p>
                            IT Help Desk dapat diakses melalui link: <a target="_blank" href="http://192.168.3.108/itsupport/home">http://192.168.3.108/itsupport/home</a> <br>
                            Atau dapat melalui web portal melalui link: <a target="_blank" href="http://192.168.3.107:81/mpmr-portal/">http://192.168.3.107:81/mpmr-portal/</a>
                            dan kemudian pada <strong>Main Menu</strong> pilih <strong>Helpdesk Support</strong>
                        </p>
<!--                        <p>
                            Buka portal pada browser Anda di <a target="_blank" href="http://192.168.3.107:81/mpmr-portal/">http://192.168.3.107:81/mpmr-portal/</a> 
                            dan kemudian pada <strong>Main Menu</strong> pilih <strong>Helpdesk Support</strong> atau Anda dapat mengakses langsung
                            melalui <a target="_blank" href="http://192.168.3.108/itsupport/home">http://192.168.3.108/itsupport/home</a>.
                        </p>-->
                        <p class="alert alert-danger">
                            IT Help Desk hanya kompatibel dengan penjelajah web modern. 
                            Telah dites dengan Chrome Versi 42 dan Firefox 35 atau yang lebih tinggi.  
                            <strong>Disarankan</strong> untuk menggunakan versi terakhir dari penjelajah web berikut  
                            <img src="<?php echo base_url('assets/images/ico-chrome.png');?>" alt="chrome"> 
                            <img src="<?php echo base_url('assets/images/ico-firefox.png');?>" alt="firefox">
                             . Menggunakan versi yang lebih rendah dapat menyebabkan beberapa fungsi tidak berjalan
                        </p>
                        
                        <p><img src="<?php echo base_url('assets/images/guide/IMG1.jpg');?>" alt="Guide1"></p>
                        
                        <br>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Masuk ke Aplikasi</h4>
                        <p>
                            Ketika apliaksi IT Heldesk sudah terbuka. Silakan mengetikan username dan password Anda. <strong>Ingat...!</strong> 
                            username dan password sama seperti ketika Anda masuk ke PC / Windows.
                        </p>
                        
                        <p><img src="<?php echo base_url('assets/images/guide/IMG2.jpg');?>" alt="Guide2"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Tampilan Panel Utama</h4>
                        <p>
                            Ketika username dan password benar, Anda akan dibawa ke halaman Panel Utama. 
                            Sebagai standar aplikasi web <strong>The IT Help Desk</strong> memiliki panel utama 
                            untuk mengatur semua proses bisnis aplikasi. Gambar di bawah ini memperlihatkan Anda panel utama. 
                        </p>
                        
                        <p><img src="<?php echo base_url('assets/images/guide/IMG3.jpg');?>" alt="Guide3"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Melihat Semua Tiket</h4>
                        <p>Pada panel utama pilih <strong>IT Ticketing</strong> atau Anda dapat 
                            melihat tikcet dengan memilih <strong>Ticket</strong> pada menu atas.
                        </p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG4.jpg');?>" alt="Guide4"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Melihat Detil Tiket</h4>
                        <p>Untuk melihat detil tiket. klik pada tiket yang Anda ingin lihat detilnya. Di bawah tabel tiket
                            akan terlihat detil dari tiket tersebut. Di sini Anda dapat menambahkan komentar, jadi tim IT bisa melihat komentar Anda. Hal itu akan
                            sangat menolong tim IT. Bahkan Anda bisa menyisipkan lampiran atau gambar untuk menjelaskan masalah Anda.
                        </p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG5.jpg');?>" alt="Guide5"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Membuat Tiket Baru</h4>
                        <p>
                            Klik <strong>New Ticket</strong> dan isi formulir dengan lengkap.                            
                        </p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG6.jpg');?>" alt="Guide6"></p>
                        
                        <br>
                        
                        <p>
                            <strong>Subject</strong>, judul tiket Anda. Sebagai contoh <strong>"Tidak bisa kirim Email"</strong>.<br>
                            <strong>Description</strong>, deskripsi masalah. Sebagai contoh  <strong>"Email tidak bisa terkirim, 
                            selalu muncul pesan error x025482  your attachment files  are too big"</strong>.<br>
                            <strong>Support Category</strong>, Kategori tiket. Sebagai contoh <strong>"Email"</strong>. <br>
                            <strong>Priority</strong>, Prioritas tiket. Sebagai contoh <strong>"Medium"</strong>. <br>
                            Dan klik <strong>Submit</strong> untuk mengirim tiket Anda.
                        </p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG7.jpg');?>" alt="Guide7"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Menambah Komentar</h4>
                        <p>Komentar akan membantu tim IT untuk memahami masalah Anda. 
                            Jadi jangan lupa untuk menambah komentar jika tim IT tidak merespon Anda dalam waktu lama.
                        </p>
                        <p>Untuk menambahkan komentar, tulis / ketik pada area teks dan kemudian klik pada tombol <strong>Add Comment</strong></p>
                        <p><img src="<?php echo base_url('assets/images/guide/IMG8.jpg');?>" alt="Guide8"></p>
                    </div>
                    
                    <div class="breadcrumb">
                        <h4>Menutup Tiket</h4>
                        <p>Jika masalah Anda sudah diselesaikan oleh tim IT. Mohon untuk menutup tiket. 
                            Ada dua cara untuk menutup tiket. <strong>Pertama</strong>, klik pada tiket yang akan ditutup. 
                            Pada detil tiket klik tombol <strong>Close Ticket</strong> di bawah tabel tiket. <strong>Cara kedua</strong>, 
                            Anda dapat menutup tiket dengan mengklik tombol <strong>Close Ticket</strong> di bawah  area teks ketiak Anda menambahkan komentar.                     
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
