<html>
<title></title>
<body style="background-color:#e1e1e1;">
    <div style="width:600px; border:none; height:900px; margin:0px auto; background-color:white;">
        <div>
            <div style="border:none; padding:13px;">
                <div style="border:none;">
                    <img src="<?php echo site_url()?>assets/img/lbp-transparency.png" style="width:70px;">
                    <div style="float:right;">
                        <ul style="list-style:none;">
                            <li style="display:inline; padding:15px; "><a href="#">Home</a></li>
                            <li style="display:inline; padding:15px; "><a href="#">Fasilitas</a></li>
                            <li style="display:inline; padding:15px; "><a href="#">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <img src="<?php echo site_url()?>assets/img/running-street.png" style="width:100%;">
            </div>
            <div name="content" style="padding:30px;">
                <p>
                    Hi, user
                </p>
                
                <p>
                    Terima kasih atas keputusan Anda menjadi member LBP Learning Center. Silakan tekan tombol dibawah untuk mengaktifkan akun Anda
                </p>
                
                <div name="verify" align="center" style="margin-top:50px; margin-bottom:50px;">
                    <a href='<?php echo site_url()?>verify/<?php echo $email;?>/<?php echo $token;?>' id="person" class="activate">Verifikasi &amp; Aktivasi
                        <span>
                            <img src="<?php echo site_url()?>img/button-go.png" style="position:relative; z-index:99; width:32px; top:9px; left:6px;">
                        </span>
                    </a>
                </div>
                
                <p>
                    Anda baru bisa menggunakan fasilitas kami setelah mengaktifkan akun Anda.<br><br>
                    Thanks,<br>
                    <strong>LBP Learning Center Team</strong>
                </p>
                
                
                
                
                <style>
                    .activate {
                        text-decoration: none;
                        font-family: Segoe ui;
                        font-size: 16px;
                        padding: 20px 17px;
                        background-color: blue;
                        color: white;
                        font-weight: 700;
                        border-radius:5px;
                    }
                    
                    #person:hover { background-color:black; color:white; }
                    
                    p { font-family: segoe ui; font-size: 16px; line-height:30px; text-decoration:none; color:black; }
                    
                    li a { font-family: segoe ui; font-size: 16px; line-height:30px; text-decoration:none; color:blue; }
                    
                    li:hover { background-color:blue;  }
                    
                    li:hover a { color:white; font-weight:700; }
                    
                </style>
            </div>
            
            <div style="background-color:#f4f4f4; height:150px;">
                
                <div style="width:49%; float:left; margin-top:15px; margin-bottom:15px;">
                    <a href="" style="font-family:segoe ui; font-size:17px; text-decoration:none; color:blue; margin-left:30px;">www.lbpcenter.co.id</a>
                </div>
                
                <div style="width:49%; float:right;">
                    <div style="width:12.5%; height:70px; margin-top:10px; margin-right:10px;float:right;">
                        <div style="width:100%; height:50%; border-radius:50%; background-color:white; border:0px solid blue; text-align: center; line-height:34px; font-size:16px; color:white; font-family:segoe ui; font-weight:700;">
                            <a href="#"><img src="<?php echo site_url()?>img/fesbuk-socmed.png" style="width:50%; margin-top:8px;"></a>
                        </div>
                    </div>
                    <div style="width:12.5%; height:70px; margin-top:10px; float:right; margin-right:10px; ">
                        <div style="width:100%; height:50%;  border-radius:50%; background-color:white; border:0px solid blue;">
                            <a href="#"><img src="<?php echo site_url()?>img/twitter-socmed.png" style="width:50%; margin-top:8px; margin-left:9px;"></a>
                        </div>
                    </div>
                    <div style="width:12.5%; height:70px; margin-top:10px; float:right; margin-right:10px;">
                        <div style="width:100%; height:50%;  border-radius:50%; background-color:white; border:0px solid blue;">
                            <a href="#"><img src="<?php echo site_url()?>img/linkedin-socmed.png" style="width:50%; margin-top:8px; margin-left:9px;"></a>
                        </div>
                    </div>
                    <div style="width:12.5%; height:70px; margin-top:10px; float:right; margin-right:10px;">
                        <div style="width:100%; height:50%; border-radius:50%; background-color:white; border:0px solid blue;">
                            <a href="#"><img src="<?php echo site_url()?>img/instagram-socmed.png" style="width:50%; margin-top:8px; margin-left:9px;"></a>
                        </div>
                    </div>
                </div>
                
                <div style="clear:both;"></div>
                
                <div style="padding:0px 30px;">
                    <a href="" style="font-family:segoe ui; font-size:13px; text-decoration:none; color:blue;">hello@lbpcenter.co.id</a>
                    <p style="font-family:segoe ui; font-size:13px; margin-top:0px;">Copyright@2017&nbsp;<a href="" style="text-decoration:none; color:blue;">lbpcenter.co.id</a>, All right Reserved</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
