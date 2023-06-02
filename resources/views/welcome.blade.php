<!DOCTYPE html>
<html lang="en">
<head>
  <title>Casecade</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style>
 
.navbar-expand-sm .navbar-collapse {
    display: contents !important;
    flex-basis: auto;
} * {
        margin: 0;
        padding: 0;
      }

      html {
        height: 100%;
      }


      #heading {
        text-transform: uppercase;
        color: #673ab7;
        font-weight: normal;
      }

      #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
      }

      #msform fieldset {
        background: #fafafaeb;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;

        /*stacking fieldsets above each other*/
        position: relative;
      }

      .form-card {
        text-align: left;
      }

      /*Hide all except first fieldset*/
      #msform fieldset:not(:first-of-type) {
        display: none;
      }

      #msform input,
      #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2c3e50;
        background-color: white;
        font-size: 16px;
        letter-spacing: 1px;
      }

      #msform input:focus,
      #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #673ab7;
        outline-width: 0;
      }

      /*Next Buttons*/
      #msform .action-button {
        width: 100px;
        background: #112b75;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 20px;
        float: left;
      }

      #msform .action-button:hover,
      #msform .action-button:focus {
        background-color: #311b92;
      }

      /*Previous Buttons*/
      #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right;
      }

      #msform .action-button-previous:hover,
      #msform .action-button-previous:focus {
        background-color: #000000;
      }

      /*The background card*/
      .card {
        z-index: 0;
        border: none;
        position: relative;
        background-color: transparent;
      }

      /*FieldSet headings*/
      .fs-title {
        font-size: 23px;
        color:#000000ad !important;
        margin-bottom: 15px;
        font-weight:500;
        text-align: left;
      }

      .purple-text {
        color: #673ab7;
        font-weight: normal;
      }

      /*Step Count*/
      .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right;
      }

      /*Field names*/
      .fieldlabels {
        text-align: left;
    color: #000000c2;
    font-weight: 500;
    font-size: 14px;
      }

      /*Icon progressbar*/
      #progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #85b1b3;
}

      #progressbar .active {
        color: #1c14a9;
      }

      #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400;
      }

      /*Icons in the ProgressBar*/
      #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e";
      }

      #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007";
      }

      #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030";
      }

      #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c";
      }

      /*Icon ProgressBar before any progress*/
      #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background:#85b1b3;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
      }

      /*ProgressBar connectors*/
      #progressbar li:after {
        content: "";
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1;
      }

      /*Color number of the step and the connector before it*/
      #progressbar li.active:before,
      #progressbar li.active:after {
        background: #1c14a9;
      }

      /*Animated Progress Bar*/
      .progress {
        height: 20px;
      }

      .progress-bar {
        background-color: #673ab7;
      }

      /*Fit image in bootstrap div*/
      .fit-image {
        width: 100%;
        object-fit: cover;
      }
  </style>
</head>
<body>
<div style="">
<nav class="navbar navbar-expand-sm  navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{ asset('image/imageedit_2_6154389925.png')}}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auto-coverage') }}" style="color:#0e2052;font-size: 35px;font-weight: 700;">Auto Coverage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('helth-coverage') }}" style="color:#0e2052;font-size: 35px;font-weight: 700;">&nbsp;&nbsp;&nbsp;&nbsp;Health Coverage</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bars" style="font-size:35px;color:#0e2052;margin-top:8px;"></i>
</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{ asset('image/MAN-WITH-SHIELD.png')}}" style="  width: 100%;
  height: auto;">
        </div>
        <div class="col-sm-6" >
        <div style="background-color:#0e2052;margin:20px;background-color: #0e2052;
    margin: 30px;
    border-radius: 50px;
    box-shadow: 0px 0px 5px black;"><BR><BR>
        <h1 style="font-size: 40px;
    color:white;
    font-weight: 700;
    margin-left: 88px;">EXPLORE THE WORLD<BR>OF INSURANCE WITH US<BR><BR>OVER 200+ BRANDS<br> TO CHOOSE FROM</h1>
    <br><br>
        <div class="row" style="background-color: #5197f3;
    padding: 20px;
    margin: 40px;
    border-radius: 28px;
    border: 5px solid #cecece;
">
            <div class="col-sm-6">
                            <center> <a class="nav-link" href="{{ route('auto-coverage') }}"> <img src="{{ asset('image/aaa.png')}}" style="width:50%;"></a></center>

            </div>
            <div class="col-sm-6">
              <center> <a class="nav-link" href="{{ route('helth-coverage') }}"> <img src="{{ asset('image/ss.png')}}" style="width:50%;"></a></center>
                            

            </div>
        </div>
        <br><br><br>
        </div>
        </div>
    </div>
</div>
</div>

<div style="background-color:#0e2052;">
<br><br>
<h1 style="font-size: 60px;
    color:white;
    font-weight: 700;
    margin-left: 88px;text-align:center;">OUR BENEFITS</h1>
    
<br><br>
<div class="container" style="text-align: center;">
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-4">
                <img src="{{ asset('image/ICON-3.png')}}" style="width:50%;">
                </div>
                <div class="col-sm-8">
                <h4 style="color:white;">PLANS TO ALIGN<BR>WITH YOUR <BR>PRIORITIES</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
        <div class="row">
                <div class="col-sm-4">
                <img src="{{ asset('image/SAVING-LOGO.png')}}" style="width:50%;">
                </div>
                <div class="col-sm-8">
                <h4 style="color:white;">TRANSPARENT <BR>PRICING STRUCTURE<BR>& COST-EFFECTIVE <BR>SOLUTION.</h4>
                </div>
            </div>
        </div>
    </div>
    <BR><BR>
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-4">
                <img src="{{ asset('image/ICON-2.png')}}" style="width:50%;">
                </div>
                <div class="col-sm-8">
                <h4 style="color:white;">24X7 EXCEPTIONAL<BR>CHAT SERVICES,<BR>READILY AVAILABLE<BR>FOR YOUR INQUERIES</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
        <div class="row">
                <div class="col-sm-4">
                <img src="{{ asset('image/AA.png')}}" style="width:50%;">
                </div>
                <div class="col-sm-8">
                <h4 style="color:white;">HASSLE-FREE<BR>CLAIMS,ENSURING<BR> SEAMLESS CLAIM <BR>PROCEDURE</h4>
                </div>
            </div>
        </div>
    </div>
    <BR><BR>
</div>
</div>
<div style="background-image:url('image/Untitled-1.jpg')background-size:cover;background-repeat:no-repeat;background-color:white;">


<div class="container-fluid mt-3" style="background-color: #eff7fa;">
  <div class="row">
    <div class="col-sm-6">
      <div class="bussiness" style="padding: 57px;
"><BR><BR>
    <h2 style="padding: 21px;">OUR BUSINESS PHILOSOPHY</h2>
    <p style="padding: 25px;">We are committed to building long-term relationships with our clients based on trust, reliability, and prompt assistance Our dedicated team of professionals is readily available to address your inquiries provide guidance, and offer support throughout your Insurance journey. We prioritize your satisfaction & strive to exceed your expectations at every interaction</p>
  <br><br>
   
    <br><br><br>
    </div>
    </div>
    <div class="col-sm-6" >
<img src="{{ asset('image/PAGE-1-PNG-2.png')}}" style="    width: 100%;
    height: auto;">
    </div>
  </div>
</div>
<div style="background-image:url('{{ asset('image/footer-no-content.jpg')}}');background-size:cover;background-repeat:no-repeat;">
<br><br>
<h1 style="font-size: 50px;
    color:white;
    font-weight: 700;
    text-align:center;">With Casecade Coverage your future is secure</h1>
  <p style="color:white;
    font-size: 20px;
    font-weight: 400;text-align:center">We have a strong track record of meeting our financial obligation and delivering <br>on our promises to policyholder</p>
<br>
<center><button class="btn" style="background-color:#cb961f;
    color: white;
    font-size: 30px;
    padding: 10px;
    font-weight: 600;
    padding-right: 30px;"><i class="fa fa-phone"></i>&nbsp;&nbsp;CONTACT US</button></center>
  <br><br>
</div>
</div>
</div>

    <script>
      $(document).ready(function () {
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function () {
          current_fs = $(this).parent();
          next_fs = $(this).parent().next();

          //Add Class Active
          $("#progressbar li")
            .eq($("fieldset").index(next_fs))
            .addClass("active");

          //show the next fieldset
          next_fs.show();
          //hide the current fieldset with style
          current_fs.animate(
            { opacity: 0 },
            {
              step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                  display: "none",
                  position: "relative",
                });
                next_fs.css({ opacity: opacity });
              },
              duration: 500,
            }
          );
          setProgressBar(++current);
        });

        $(".previous").click(function () {
          current_fs = $(this).parent();
          previous_fs = $(this).parent().prev();

          //Remove class active
          $("#progressbar li")
            .eq($("fieldset").index(current_fs))
            .removeClass("active");

          //show the previous fieldset
          previous_fs.show();

          //hide the current fieldset with style
          current_fs.animate(
            { opacity: 0 },
            {
              step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                  display: "none",
                  position: "relative",
                });
                previous_fs.css({ opacity: opacity });
              },
              duration: 500,
            }
          );
          setProgressBar(--current);
        });

        function setProgressBar(curStep) {
          var percent = parseFloat(100 / steps) * curStep;
          percent = percent.toFixed();
          $(".progress-bar").css("width", percent + "%");
        }

        $(".submit").click(function () {
          return false;
        });
      });
    </script>
</body>
</html>


