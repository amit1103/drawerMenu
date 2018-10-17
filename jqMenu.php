<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Demo Page</title>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <style>
        #container{
            max-width: 480px;
            width: 100%;
            margin: 20px auto;
        }
        #demo_box{
            width: 480px;
        }
        .fa{
            font-size: 40px;
            line-height: 70px;
			height:60px;
        }
        .fa-bars{
            color: #3498db;
        }
        pre{
            font-family: Consolas,Liberation Mono,Courier,monospace;
            font-size: 13px;
        }
		.demo_li {
			font-size:13px;
			font-family:Arial;
			font-weight:600;
		}
		
		.txtDiv {
			height:60px;
		}
		
       
    </style>
</head>
<body>
    <div id="container">
        <div id="demo_box">
            <div class="pop_ctrl"><i class="fa fa-bars" title="Click here to Apply"></i></div>
            <ul id="demo_ul">
                <li class="demo_li"><a href="leave_application"><div><i class="fa fa-flag-o"></i></div><div>Apply Leave</div></a></li>
                <li class="demo_li"><a href="out_of_office_new"><div><i class="fa fa-plane"></i></div><div>Out of Office</div></a></li>
                <li class="demo_li"><a href="lateby_request"><div><i class="fa fa-comment"></i></div><div>Late / Early Reason</div></a></li>
                <li class="demo_li"><a href="hardware_request"><div><i class="fa fa-mobile-phone"></i></div><div>Hardware Request</div></a></li>
                <li class="demo_li"><a href="kra_2015"><div><i class="fa fa-keyboard-o"></i></div><div>KRA</div></a></li>
                <li class="demo_li"><a href="employees"><div><i class="fa fa-book"></i></div><div>Address Book</div></a></li>
                <li class="demo_li"><a href="offices"><div><i class="fa fa-coffee"></i></div><div>Offices</div></a></li>
                <li class="demo_li"><a href="hr_holidaylist_main_2015?country=india"><div><i class="fa fa-heart-o"></i></div><div>Holiday List</div></a></li>
                <li class="demo_li"><a href="https://www.shobiziems.com/flipbooks/Hrmanual/SHOBIZMANUAL.html" target="_blank"><div><i class="fa fa-user"></i></div><div>Employee Manual</div></a></li>
            </ul>
        </div>
        
        
    </div>
    <script src="http://gucheen.github.io/jQueryPopMenu/lib/jquery/jquery.min.js"></script>
    <script src="jquery.popmenu.js"></script>
    <script>
        $(function(){
            $('#demo_box').popmenu();
            $('#demo_box_2').popmenu({'background':'#e67e22','focusColor':'#c0392b','borderRadius':'0'});
        })
    </script>
</body>
</html>