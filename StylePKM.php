*{
	margin:0;
	padding:0;
	list-style:none;
}
body{background:#ffc; color:#555;;  font:14px/20px Arial, Helvetica, sans-serif; margin:32px 0 0; padding:0;}

#main{width:1150px;height:800px; position:relative; margin:0 auto; padding:0; }
#main span, #main p {
	
    color: #aeb4b4;
	font-size: 14px;
	line-height: 20px;
	margin: 0;
	padding-right: 20px;
	text-align: justify;}
#header {width:100%;height:100px;margin:0 auto; padding :0; border-bottom:1px solid #AEAEAE; }
#user {width:300px; float:right; }
#logo{width:100px; height:80px;float:left;margin:15px;}

div, ul, h1, h2, h3, li, p, img{margin:0ss; padding:0;}
ul{list-style-type:none;}

/* MENU PANEL
#header ul{display:block; width:787px; height:36px; position:absolute; top:0; right:0; margin:55px 0 0; padding:0 29px 0 0; border-bottom:1px solid #AEAEAE;}
#header ul li{float:right; font:12px/36px "Trebuchet MS",Arial, Helvetica, sans-serif; font-weight:bold;}
#header ul li a{width:120px; height:36px; display:block; padding:0; color:#555; background:#fff; text-decoration:none; text-align:center; margin:0 1px 0 0; top:0px; left:0px;}
#header ul li a:hover{width:120px; height:36px; text-decoration:none; background:url(images/button.gif) no-repeat 0 0 #AEAEAE; color:#fff;}
/*#header ul li.active{width:120px; display:block; height:36px; background:url(images/button.gif) no-repeat 0 0 #AEAEAE; color:#fff; text-align:center; margin:0 1px 0 0;}

/* BODY PANEL*/
#bodyPanel{ width:100%;position:relative; margin:0 auto; padding:0;margin-top:20px;}

    #bodyPanel #left{width:180px;height:500px; float:left ;display:block; border-right:1px solid #AEAEAE;}

#leftMenu{margin-left:30px; margin-top:10px;}
#leftMenu ul{width:114px;}
#leftMenu ul li{width:114px; height:40px;}
#leftMenu ul li a{width:114px; height:40px; display:block; background:url(images/bullet2-normal.gif) 0 10px no-repeat #fff; color:#5F7A77; text-decoration:none; line-height:24px; padding:0 0 0 12px;}
#leftMenu ul li a:hover{background:url(images/bullet2-hover.gif) 0 10px no-repeat #fff; color:#5F7A77; text-decoration:none;}
#leftMenu ul li span{text-decoration:underline;}
/*style Sub Menu*/
#menu {width:800px;float:right;  }
#menu ul {
    font-family: Arial, Verdana;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
}
/*membuat menu menjadi horizontal dengan display block*/
#menu ul li {
    display: block;
    position: relative;
    float: left;
    font:12px/18px "Trebuchet MS",Arial, Helvetica, sans-serif; font-weight:bold;
}

/*Untuk menyembunyikan ul li (submenu)*/

#menu li ul {
    display: none;
}
/*style awal seblum cursor mouse di arahkan (menu utama)*/
#menu ul li a {
    display: block;
    width:74px;
    text-decoration: none;
    text-align:center;
    color: #ffffff;
    padding: 5px 15px 5px 15px;
    background:url(images/button1.gif);

    /*margin-left: 1px;*/
    white-space: nowrap;
}
/*style setelah cursor diarahkan*/
#menu ul li a:hover {
background: #666;
}
/*untuk memunculkan submenu jika pada sebuah menu utama ada tag il ul (maksudnya ada tag ul dai dalam tag li)*/
#menu li:hover ul {
    display: block;
    position: absolute;
}
/*meratakan sub menu kanan kiri dan menghilangkan fungsi float left (mengembalikan ke default)*/
#menu li:hover li {
    float: none;
    font-size: 11px;
}
/*style awal seblum cursor mouse di arahkan (submenu)*/
#menu li:hover a { background: #3b3b3b; }
/*style setelah cursor diarahkan (submenu)*/
#menu li:hover li a:hover {
    background: #666;
}

#bodyPanel #centerPan{width:750px;float:left ; margin-left:15px; }
#bodyPanel #centerPan h2{  display:block; width:400px; height:50px; margin:0; font:30px/30px Georgia, "Times New Roman", Times, serif; font-weight:normal; padding:4px 0 0 100px; color:#FF7113;}
#centerPan img{margin:10px;float:left ;}
#centerPan p{ margin:0 0 0 10px; padding:0 42px 35px 20px; color:#0F0F0F; }
#centerPan h3{font:30px/30px Georgia, "Times New Roman", Times, serif; font-weight:normal; padding:4px 0 0 202px; color:#FF7113;}
#centerPan #kontak {width:400px;margin:0 0 0 25px;padding-top:10px; padding-bottom:10px; border:1px solid;}
#centerPan #pesankontak{margin:0 0 0 25px; padding:0 42px 35px 20px; color:#555;}
            #pesankontak .txtfield {
                background: url(../images/input.gif) no-repeat;
                color: #9c9c9c;
                height: 25px;
                line-height: 25px;
                width: 200px;
                border: 1px;
                margin: 0 6px 0 0;
                padding: 0 10px;
                }
p {
	margin:5px 0;
	line-height:19px;
}
 input {
	width:205px;
	background:url(images/input.jpg) top no-repeat;
	font: 100% "Lucida Grande","Lucida Sans Unicode",geneva,verdana,sans-serif;
	color:#333;
	border:0;
	padding:7px 10px;
	margin:5px;
	color:#777;
}
select {
	width:205px;
	background:url(images/input.jpg) top no-repeat;
	font: 100% "Lucida Grande","Lucida Sans Unicode",geneva,verdana,sans-serif;
	color:#333;
	border:0;
	padding:7px 10px;
	margin:5px;
	color:#777;
}
textarea {
	width:373px;
	height:127px;
	background:url(images/textarea.jpg) top no-repeat;
	font: 100% "Lucida Grande","Lucida Sans Unicode",geneva,verdana,sans-serif;
	color:#333;
	border:1px;
	padding:0px;
	margin:5px;
	color:#777;
}

input[type=submit] {
	 cursor:pointer;
	 background:#ff9900;
	 color:#fff;
	 font-weight:bold;
	 width:182px;
	 height:33px;
	 padding:7px 10px;
	 background:url(images/submit.jpg) top no-repeat;
}
input[type=button] {
	 cursor:pointer;
	 background:#ff9900;
	 color:#fff;
	 font-weight:bold;
	 width:150px;
	 height:33px;
	 padding:7px 10px;
	 background:url(images/submit.jpg) top no-repeat;
}

table {
	font-family: Tahoma;
	font-size: 8pt;
	border-width: 0px;
	border-style: solid;
	border-color: #999999;
	border-collapse: collapse;
	margin: 10px 0px;

}
th{
	color: #FFFFFF;
	font-size: 7pt;
	text-transform: uppercase;
	text-align: center;
	padding: 0.5em;
	border-width: 1px;
	border-style: solid;
	border-color: #969BA5;
	border-collapse: collapse;
	background-color: #265180;

}
td{
	padding: 0.5em;
	vertical-align: top;
    
	border-color: #969BA5;
	border-collapse: collapse;

}

#bodyPanel #right{width:180px;height:500px;float:left ;float:right;border-left:1px solid #AEAEAE; }
#bodyPanel #right #ads{width:100px;margin:0 auto;margin:10px; }
            #ads p {width:100px;}
            #ads h2{width:85px; height:74px; background:url(images/icon4.gif) 0 0 no-repeat #fff; color:#3A3A3A; font:14px/18px Arial, Helvetica, sans-serif; padding:8px 0 0 66px; text-transform:uppercase; margin:10px 0 0 10px; }
            #ads h2 span{font-size:48px; line-height:32px; background:#fff; color:#61A804; text-transform:none;}

#footerPanel{width:100%;  background:#DCDCDC; color:#4C4C4C; font-size:22px;}
#footerbodyPanel{width:762px;height:133px; position:relative; margin:0 auto; padding:0;}
#footerPanel ul{
	width: 390px;
	display: block;
	position: absolute;
	right: 185px;
	top: 36px;
}
#footerPanel li{float:left; font:12px/15px Arial, Helvetica, sans-serif; font-weight:normal;}
#footerPanel ul li a{padding:0 6px; color:#4C4C4C; background:#DCDCDC; text-decoration:none;}
#footerPanel ul li a:hover{text-decoration:underline;}
#footerPanel ul li a.padl{padding:0 0 0 6px;}
#footerPanel p.copyright{
	background: #DCDCDC;
	display: block;
	position: absolute;
	top: 62px;
	right: 77px;
	color: #A64200;
	width: 187px;
}
