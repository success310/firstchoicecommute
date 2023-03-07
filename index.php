<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>First Choice Commute</title>
    <link href="./styles.css" rel="stylesheet" type="text/css" />
  <style>
    body {
    	background: #000;
    }
    #form {
  	max-width: 50%;
    width: 100%;
    margin: 10px auto;
    padding: 20px;
    border: solid 1px #f1f1f1;
    background: #fbfbfb;
    box-shadow: #e6e6e6 0 0 4px;
    border-radius: 0.25rem;
    }
    #CashAPP {
        top: 810px;
    }
    #CashAPP img {
        width: 59px;
        height: 59px;
    }
    #zelle {
        left: 775px;
        top: 810px;
        position: absolute;
        z-index: 27;
    }
    #zelle img {
        width: 59px;
        height: 59px;
    }
  </style>
</head>

<body>
    <div id="background">
        <div id="Header"><img src="images/Header.png" /></div>
        <div id="FirstChoiceCommute">
            <img src="images/FirstChoiceCommute.png" />
        </div>
        <div id="ServicingJBSASanAnto">
            <img src="images/ServicingJBSASanAnto.png" />
        </div>
        
        <div id="Rectangle12"><img src="images/Rectangle12.png" /></div>
        <div id="Road"><img src="images/Road.png" /></div>
        <div id="Rectangle9"><img src="images/Rectangle9.png" /></div>
        <div id="Rectangle10"><img src="images/Rectangle10.png" /></div>
        <div id="Rectangle11"><img src="images/Rectangle11.png" /></div>
        <div id="Rectangle5"><img src="images/Rectangle5.png" /></div>
        <div id="Rectangle8"><img src="images/Rectangle8.png" /></div>
        <div id="ProudlyServicingthos">
            <img src="images/ProudlyServicingthos.png" />
        </div>
        <div id="Rectangle7"><img src="images/Rectangle7.png" /></div>
        <div id="FirstChoiceCommuteis">
            <img src="images/FirstChoiceCommuteis.png" />
        </div>
        <div id="Rectangle6"><img src="images/Rectangle6.png" /></div>
        <div id="ScheduleaRideToday">
            <img src="images/ScheduleaRideToday.png" />
        </div>
        <div id="ClickBelowtocallorch">
            <img src="images/ClickBelowtocallorch.png" />
        </div>
        <a href="tel:12108638499">
            <div id="PhoneICON"><img src="images/PhoneICON.png" /></div>
        </a>
        <a href="https://wa.me/12108638499">
            <div id="WhatsappICON"><img src="images/WhatsappICON.png" /></div>
        </a>
        <a href="https://line.me/ti/p/GQWCIJdTnX">
            <div id="LineICO"><img src="images/LineICO.png" /></div>
        </a>
        <div id="Rectangle3"><img src="images/Rectangle3.png" /></div>
        <div id="WeAccept"><img src="images/WeAccept.png" /></div>
        <div id="CashICO"><img src="images/CashICO.png" /></div>
        <div id="VisaICO"><img src="images/VisaICO.png" /></div>
        <div id="ApplepayICO"><img src="images/ApplepayICO.png" /></div>
        <div id="GpayICO"><img src="images/GpayICO.png" /></div>
        <div id="CashAPP"><img src="images/CashAPP.png" /></div>
        <div id="zelle"><img src="images/zelle.png" /></div>

        
        <div id="Line2"><img src="images/Line2.png" /></div>
        <div id="Line2copy2"><img src="images/Line2copy2.png" /></div>
        <div id="Line2copy"><img src="images/Line2copy.png" /></div>
        <a href="./index.php">
            <div id="Button1"><img src="images/Button1.png" /></div>
        </a>
        <a href="./aboutus.php">
            <div id="Button2"><img src="images/Button2.png" /></div>
        </a>
        <a href="./view.php">
            <div id="Button3"><img src="images/Button3.png" /></div>
        </a>
        <div id="Navy"><img src="images/Navy.png" /></div>
        <div id="Marines"><img src="images/Marines.png" /></div>
        <div id="Airforce"><img src="images/Airforce.png" /></div>
        <div id="Army"><img src="images/Army.png" /></div>
        <div id="Spaceforce"><img src="images/Spaceforce.png" /></div>
        <div id="Coastguard"><img src="images/Coastguard.png" /></div>
    </div>

    <h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
    <h6 id="fh6">
       
    </h6>

    <form action="./reviews.php" id="form" method="post" >
        <div class="pinfo">Your First Name</div>

        <div class="form-group">
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input name="name" placeholder="John Doe" class="form-control" type="text" id="name" required />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4 inputGroupContainer"></div>
        </div>

        <div class="pinfo">Rate our overall services. (1 to 5 Stars)</div>

        <div class="form-group">
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-heart"></i></span>
                    <select class="form-control" name="rate" id="rate" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="pinfo">Write your feedback.</div>

        <div class="form-group">
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                    <textarea class="form-control" name="feedback" rows="3" required></textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>