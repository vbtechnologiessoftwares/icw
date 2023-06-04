<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <!--   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
    {{-- <script type="text/javascript" src="js/jquery-1.9.0.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" /> --}}

    <style>
        .progress-bar {
            width: 100%;
            height: 20px;
            background-color: #b3b3df;
            border-radius: 15px;
            position: relative;
            margin-bottom: 20px;
        }

        .progress-bar__steps {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 100%;
            height: 100%;
            padding: 0 10px;
        }

        .progress-bar__step {
            width: 20px;
            height: 20px;
            background-color: #384fe9;
            border-radius: 50%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
            color: #fff;
        }

        .progress-bar__step.active {
            background-color: rgb(8, 17, 44);
        }

        .progress-bar__step i {
            font-size: 12px;
        }

        .progress-bar__progress {
            height: 100%;
            background-color: rgb(99, 117, 198);
            border-radius: 15px;
            width: 0;
            transition: width 0.8s ease;
        }


        a.btn.btn-primary.next {
            color: #fff;
            background-color: #102870;
            border-color: #0a1a4d;
        }

        a.btn.btn-primary.previous {
            color: #fff;
            background-color: #102870;
            border-color: #0a1a4d;
        }

        select.form-control {
            background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), radial-gradient(#ddd 70%, transparent 72%);
            background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 0.5em) 0.5em;
            background-size: 5px 5px, 5px 5px, 1.5em 1.5em;
            background-repeat: no-repeat;
        }

        label.col-lg-12.control-label {
            text-align: left;
            margin-bottom: 14px;
            margin-top: 14px;
        }

        form#myform {
            background: #fafafaeb;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative;
        }

        label.col-lg-4.control-label {
            float: left;
        }

        #personal_information,
        #coverage_information,
        #driver_information {
            display: none;
        }

        .navbar-expand-sm .navbar-collapse {
            display: contents !important;
            flex-basis: auto;
        }

        * {
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
            color: #000000ad !important;
            margin-bottom: 15px;
            font-weight: 500;
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

        
        /*Fit image in bootstrap div*/
        .fit-image {
            width: 100%;
            object-fit: cover;
        }

        .bb {
            text-align: right;
            font-size: 26px;
            font-weight: 700;
        }

        .aa {
            font-size: 65px;
            color: #0e2052;
            font-weight: 700;
            margin-left: 88px;
        }

        .cc {
            font-size: 60px;
            color: #0e2052;
            font-weight: 700;
            text-align: center;
        }


        @media screen and (max-width: 600px) {
            .aa {
                font-size: 25px !important;
                color: #0e2052;
                font-weight: 700;
                margin-left: 88px;
            }

            .bb {
                font-size: 18px;
                font-weight: 700;
                text-align: justify !important;
            }

            .cc {
                font-size: 30px;
                color: #0e2052;
                font-weight: 700;
                text-align: center;
                margin-top: 30px;
            }

            .xx {
                background-color: red !important;
            }
        }

        .xx {
            background-image: url('{{ asset('image/bg-auto.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div style="background-image:url('{{ asset('image/auto-cover-without-button.jpg') }}');background-size:cover;background-repeat:no-repeat;"
        class="d-none d-lg-block">
        <nav class="navbar navbar-expand-sm  navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{ asset('image/logo-dark-bg.png') }}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auto-coverage') }}"
                                style="color:#0e2052;font-size: 35px;font-weight: 700;">Auto Coverage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('helth-coverage') }}"
                                style="color:#0e2052;font-size: 35px;font-weight: 700;">&nbsp;&nbsp;&nbsp;&nbsp;Health
                                Coverage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                    class="fa fa-bars" style="font-size:35px;color:#0e2052;margin-top:8px;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6"><br><br>
                    <h1 class="aa d-lg-none">Auto COVERAGE</h1>
                    <h1 class="aa d-none d-lg-block">Auto COVERAGE</h1>
                    <br>
                    <p class="bb">Insurance plays a significant role in reducing the financial burden on individuals
                        and mitigating the risk of catastrophic medical expenses.By providing a safety net and ensuring
                        access to quality healthcare,health insurance contributes to the overall health and security of
                        individuals and communities.</p>
                    <br><br><br>
                    <div class="row">
                        <div class="col-sm-7">
                            <button class="btn"
                                style="background-color: #0e2052;
    color: white;
    font-size: 30px;
    padding: 10px;
    font-weight: 600;float:right;    padding-left: 30px;
    padding-right: 30px;"><i
                                    class="fa fa-phone"></i>&nbsp;&nbsp;CONTACT US</button>
                        </div>
                        <div class="col-sm-5">
                            <button class="btn"
                                style="background-color: #0e2052;
    color: white;
    font-size: 30px;
    padding: 10px;
    font-weight: 600;    padding-left: 30px;
    padding-right: 30px;float:right;">&nbsp;GET
                                A QUOTE</button>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <div style="" class="d-lg-none">
        <nav class="navbar navbar-expand-sm  navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{ asset('image/imageedit_2_6154389925.png') }}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">


                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-bars"
                                    style="font-size:35px;color:#0e2052;margin-top:8px;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-sm-6">
                    <center><img src="{{ asset('image/CAR-PAGE-2.png') }}" style="width:100%;"></center>
                </div>
                <div class="col-sm-6"><BR><br>
                    <h1 class="aa d-lg-none">Auto Coverage</h1>
                    <h1 class="aa d-none d-lg-block">Auto Coverage</h1>
                    <br>
                    <p class="bb">Insurance plays a significant role in reducing the financial burden on individuals
                        and mitigating the risk of catastrophic medical expenses.By providing a safety net and ensuring
                        access to quality healthcare,health insurance contributes to the overall health and security of
                        individuals and communities.</p>
                    <br><br><br>
                    <div class="row">
                        <div class="col-sm-7">
                            <button class="btn"
                                style="background-color: #0e2052;
    color: white;
    font-size: 18px;
    padding: 10px;
    font-weight: 600;float:left;   padding-left: 20px;
    padding-right: 20px;"><i
                                    class="fa fa-phone"></i>&nbsp;CONTACT US</button>
                        </div>
                        <div class="col-sm-5">
                            <button class="btn"
                                style="background-color: #0e2052;
    color: white;
    font-size: 18px;
    padding: 10px;
    font-weight: 600;    padding-left: 20px;
    padding-right: 20px;float:right;margin-top:-50px;">&nbsp;GET
                                A QUOTE</button>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="d-lg-none" style="background-color: #c1dcff;">
        <br>
        <h1 class="cc">Auto COVERAGE</h1>
        <br>
        
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-8 text-center p-0 mt-3 mb-2">
                    

                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="xx  d-lg-block">
        <br>
        <h1 class="cc">Auto COVERAGE</h1>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-8 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                      <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <div id="progressBar" class="progress-bar">
                          <div class="progress-bar__steps"></div>
                          <div class="progress-bar__progress"></div>
                      </div>

                        <form class="form-horizontal" method="POST" id="myform"
                            action="{{ route('auto.autosubmit') }}">
                            @csrf
                            <fieldset id="account_information" class="">

                                <div class="row" style="padding-left:30px;padding-right:30px;padding-top:30px">
                                    <div class="col-7">
                                        <h2 class="fs-title">Just give us some information so that we can find the most
                                            suitable plan for you:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="relationship_to_applicant"
                                                class="col-lg-12 control-label">Year</label>
                                            <select class="form-control" name="year">
                                                <option value="2000"> 2000 </option>
                                                <option value="2001"> 2001 </option>
                                                <option value="2002"> 2002 </option>
                                                <option value="2003"> 2003 </option>
                                                <option value="2004"> 2004 </option>
                                                <option value="2005"> 2005 </option>
                                                <option value="2006"> 2006 </option>
                                                <option value="2007"> 2007 </option>
                                                <option value="2008"> 2008 </option>
                                                <option value="2009"> 2009 </option>
                                                <option value="2010"> 2010 </option>
                                                <option value="2011"> 2011 </option>
                                                <option value="2012"> 2012 </option>
                                                <option value="2013"> 2013 </option>
                                                <option value="2014"> 2014 </option>
                                                <option value="2015"> 2015 </option>
                                                <option value="2016"> 2016 </option>
                                                <option value="2017"> 2017 </option>
                                                <option value="2018"> 2018 </option>
                                                <option value="2019"> 2019 </option>
                                                <option value="2020"> 2020 </option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="password" class="col-lg-12 control-label">Make</label>
                                            <select id="dispositions_name" name="make" required class="form-control" autocomplete="off" >
                                                    <option value="">Select List</option>
                                                    @foreach($automake as $ticketqueues)
                                                    <option value="{{$ticketqueues->id}}" >{{$ticketqueues->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>

                                    </div>
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="password" class="col-lg-12 control-label">Model</label>
                                            <select class="form-control subcategory" name="model" id="subcategory" >
                                                            <option value="" selected>Parent Disposition</option>
                                                        </select>
                                        </div>
                                        <div class="col">
                                            <label for="password" class="col-lg-12 control-label">Sub Model</label>
                                           <select class="form-control" name="sub_model" id="subcategorys">
                                                            <option value="" selected>Sub Model</option>
                                                        </select>
                                        </div>

                                    </div>

                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="conf_password" class="col-lg-12 control-label">VIN</label>
                                            <input type="text" class="form-control" id="vin" name="vin"
                                                placeholder="VIN Number">
                                        </div>

                                    </div>
                                    <br>


                                    <div class="row g-3">

                                        <p><a class="btn btn-primary next"> Continue <i class="fa fa-arrow-right"
                                                    aria-hidden="true"></i></a></p>



                                    </div>

                                </div>
                            </fieldset>

                            <fieldset id="driver_information" class="">
                                <div class="row" style="padding-left:30px;padding-right:30px;padding-top:30px">
                                    <div class="col-7">
                                        <h2 class="fs-title">Driver Details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div>




                                <div class="col-md-12">
                                    <div id="field">
                                        <div id="field0">


                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="relationship_to_applicant"
                                                        class="col-lg-12 control-label">Relationship To
                                                        Applicant</label>
                                                    <select class="form-control" name="relationship_to_applicant">
                                                        <option value="self">Self</option>
                                                        <option value="child">Child</option>
                                                        <option value="spouse">spouse</option>
                                                        <option value="grandchild">Grand Child</option>
                                                        <option value="grandparent">Grand Parent</option>
                                                        <option value="sibling">Sibling</option>
                                                        <option value="parent">Parent</option>
                                                        <option value="other">other</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="marital_status"
                                                        class="col-lg-12 control-label">Marital Status</label>
                                                    <select class="form-control" name="marital_status">
                                                        <option value="Single">Single</option>
                                                        <option value="married">married</option>
                                                        <option value="divorced">divorced</option>
                                                        <option value="Separated">Separated</option>
                                                        <option value="widowed">widowed</option>
                                                        <option value="domestic partner">domestic partner</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="marital_status"
                                                        class="col-lg-12 control-label">License Status</label>
                                                    <select class="form-control" name="license_status">
                                                        <option value="Active">Active</option>
                                                        <option value="International">International</option>
                                                        <option value="Learner">Learner</option>
                                                        <option value="probation">probation</option>
                                                        <option value="restricted">restricted</option>
                                                        <option value="suspended">suspended</option>
                                                        <option value="temporary">temporary</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="marital_status"
                                                        class="col-lg-12 control-label">License State</label>
                                                    <select class="form-control" name="license_state">
                                                        <option value="CA">CA</option>
                                                        <option value="AK">AK</option>
                                                        <option value="AL">AL</option>
                                                        <option value="etc">etc</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="first_name" class="col-lg-12 control-label">First
                                                        Name</label>
                                                    <input type="text" class="form-control" id="first_name_relationship"
                                                        name="first_name_relationship" placeholder="First Name">
                                                </div>
                                                <div class="col">
                                                    <label for="conf_password" class="col-lg-12 control-label">Last
                                                        Name</label>
                                                    <input type="text" class="form-control" id="last_name_relationship"
                                                        name="last_name_relationship" placeholder="Last Name">




                                                </div>

                                            </div>
                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="conf_password" class="col-lg-12 control-label">Date of
                                                        Birth</label>
                                                    <input type="date" class="form-control" id="dob"
                                                        name="bod" placeholder="Date of Birth">
                                                </div>
                                                <div class="col">
                                                    <label for="conf_password"
                                                        class="col-lg-12 control-label">Gender</label>
                                                    <select class="form-control" name="gender">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <br><br>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <p><a class="btn btn-primary previous"> <i class="fa fa-arrow-left"
                                                    aria-hidden="true"></i> Previous</a></p>
                                    </div>
                                    <div class="col">
                                        <p><a class="btn btn-primary next"> Continue <i class="fa fa-arrow-right"
                                                    aria-hidden="true"></i></a></p>
                                    </div>

                                </div>



                            </fieldset>

                            {{-- +++++++++++++++++++++++++++++++++++++++++start++++++++++++++++++++++++++ --}}

                            <fieldset id="coverage_information" class="">
                                <div class="row" style="padding-left:30px;padding-right:30px;padding-top:30px">
                                    <div class="col-7">
                                        <h2 class="fs-title">Coverage info:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div>




                                <div class="col-md-12">
                                    <div id="field">
                                        <div id="field0">

                                             
                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="relationship_to_applicant"
                                                        class="col-lg-12 control-label">Coverage type</label>
                                                    <select class="form-control" name="coverage_type">
                                                        <option value="State Minimum">State Minimum</option>
                                                        <option value="Standard">Standard</option>
                                                        <option value="Premium (Basic)">Premium (Basic)</option>
                                                        <option value="Preferred (Superior)">Preferred (Superior)
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="marital_status"
                                                        class="col-lg-12 control-label">Uninsured Motorist
                                                        cover</label>
                                                    <select class="form-control" name="uninsured_motorist_cover">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="marital_status"
                                                        class="col-lg-12 control-label">Current coverage type</label>
                                                    <select class="form-control" name="current_coverage_type">
                                                        <option value="Not currently insured">Not currently insured
                                                        </option>
                                                        <option value="State Minimum">State Minimum</option>
                                                        <option value="Standard">Standard</option>
                                                        <option value="Premium (Basic)">Premium (Basic)</option>
                                                        <option value="Preferred ">Preferred </option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="marital_status"
                                                        class="col-lg-12 control-label">Current Insurance
                                                        Company</label>
                                                    <select class="form-control" name="current_insurance_company">
                                                        <option value="21st Century Insurance">21st Century Insurance
                                                        </option>
                                                        <option value="AAA Insurance Co.">AAA Insurance Co.</option>
                                                        <option value="AABCO">AABCO</option>
                                                        <option value="AARP">AARP</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="password" class="col-lg-12 control-label">Current
                                                        Policy Expiry Date</label>
                                                    <select class="form-control" name="current_policy_expiry_date">
                                                        <option value="2000"> 2000 </option>
                                                        <option value="2001"> 2001 </option>
                                                        <option value="2002"> 2002 </option>
                                                        <option value="2003"> 2003 </option>
                                                        <option value="2004"> 2004 </option>
                                                        <option value="2005"> 2005 </option>
                                                        <option value="2006"> 2006 </option>
                                                        <option value="2007"> 2007 </option>
                                                        <option value="2008"> 2008 </option>
                                                        <option value="2009"> 2009 </option>
                                                        <option value="2010"> 2010 </option>
                                                        <option value="2011"> 2011 </option>
                                                        <option value="2012"> 2012 </option>
                                                        <option value="2013"> 2013 </option>
                                                        <option value="2014"> 2014 </option>
                                                        <option value="2015"> 2015 </option>
                                                        <option value="2016"> 2016 </option>
                                                        <option value="2017"> 2017 </option>
                                                        <option value="2018"> 2018 </option>
                                                        <option value="2019"> 2019 </option>
                                                        <option value="2020"> 2020 </option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="password" class="col-lg-12 control-label">Insured
                                                        Since (date)</label>
                                                    <select class="form-control" name="insured_Since">
                                                        <option value="2000"> 2000 </option>
                                                        <option value="2001"> 2001 </option>
                                                        <option value="2002"> 2002 </option>
                                                        <option value="2003"> 2003 </option>
                                                        <option value="2004"> 2004 </option>
                                                        <option value="2005"> 2005 </option>
                                                        <option value="2006"> 2006 </option>
                                                        <option value="2007"> 2007 </option>
                                                        <option value="2008"> 2008 </option>
                                                        <option value="2009"> 2009 </option>
                                                        <option value="2010"> 2010 </option>
                                                        <option value="2011"> 2011 </option>
                                                        <option value="2012"> 2012 </option>
                                                        <option value="2013"> 2013 </option>
                                                        <option value="2014"> 2014 </option>
                                                        <option value="2015"> 2015 </option>
                                                        <option value="2016"> 2016 </option>
                                                        <option value="2017"> 2017 </option>
                                                        <option value="2018"> 2018 </option>
                                                        <option value="2019"> 2019 </option>
                                                        <option value="2020"> 2020 </option>
                                                    </select>




                                                </div>

                                            </div>
                                           
                                        </div>

                                    </div>

                                    <br><br>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <p><a class="btn btn-primary previous"> <i class="fa fa-arrow-left"
                                                    ></i> Previous</a></p>
                                    </div>
                                    <div class="col">
                                        <p><a class="btn btn-primary next"> Continue <i class="fa fa-arrow-right"
                                                    ></i></a></p>
                                    </div>

                                </div>



                            </fieldset>


                            {{--         +++++++++++++++++++++++++++++++++++++++++End ++++++++++++++++++++++++++++ --}}

                            <fieldset id="personal_information" class="">
                                <div class="row" style="padding-left:30px;padding-right:30px;padding-top:30px">
                                    <div class="col-7">
                                        <h2 class="fs-title">Alright ! Seems like we have some good plans for you. Let
                                            us know to contact you to discuss more about them.</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div id="fielda">
                                        <div id="fielda0">
                                            <!-- Text input-->
                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="first_name" class="col-lg-12 control-label">First
                                                        Name</label>
                                                    <input type="text" class="form-control" id="first_name"
                                                        name="first_name" placeholder="First Name">
                                                </div>
                                                <div class="col">
                                                    <label for="last_name" class="col-lg-12 control-label">Last
                                                        Name</label>
                                                    <input type="text" class="form-control" id="last_name"
                                                        name="last_name" placeholder="Last Name">
                                                </div>

                                            </div>
                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="relationship_to_applicant"
                                                        class="col-lg-12 control-label">Email</label>
                                                    <input type="email" name="email" id="email"
                                                        class="form-control" placeholder="Email" required>
                                                </div>
                                                <div class="col">

                                                    <label for="relationship_to_applicant"
                                                        class="col-lg-12 control-label">Phone</label>
                                                    <input type="number" name="phone" id="phone"
                                                        class="form-control" placeholder="Phone" required>
                                                </div>

                                            </div>


                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="relationship_to_applicant"
                                                        class="col-lg-12 control-label">Address</label>
                                                    <input type="text" name="address" id="address"
                                                        class="form-control" placeholder="Address" required>
                                                </div>
                                                <div class="col">

                                                    <label for="relationship_to_applicant"
                                                        class="col-lg-12 control-label">city</label>
                                                    <input type="text" name="city" id="city"
                                                        class="form-control" placeholder="city" required>
                                                </div>

                                            </div>

                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="relationship_to_applicant"
                                                        class="col-lg-12 control-label">state</label>
                                                    <input type="text" name="state" id="state"
                                                        class="form-control" placeholder="State" required>
                                                </div>
                                                <div class="col">

                                                    <label for="relationship_to_applicant"
                                                        class="col-lg-12 control-label">Zip</label>
                                                    <input type="text" name="zip" id="zip"
                                                        class="form-control" placeholder="Zip" required>
                                                </div>

                                            </div>






                                            <hr>
                                        </div>

                                    </div>
                                    <br><br>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <p><a class="btn btn-primary previous"> <i class="fa fa-arrow-left"
                                                    aria-hidden="true"></i> Previous</a></p>
                                    </div>
                                    <div class="col">
                                        <p><input class="btn btn-success" type="submit" value="Submit"></p>
                                    </div>

                                </div>



                            </fieldset>
                            <div class="col-lg-8">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        style="background-image:url('{{ asset('image/footer-no-content.jpg') }}');background-size:cover;background-repeat:no-repeat;">
        <br><br>
        <h1 style="font-size: 50px;
    color:white;
    font-weight: 700;
    text-align:center;">With Cascade
            Coverage your future is secure</h1>
        <p style="color:white;
    font-size: 20px;
    font-weight: 400;text-align:center">We have a strong track
            record of meeting our financial obligation and delivering <br>on our promises to policyholder</p>
        <br>
        <center><button class="btn"
                style="background-color:#cb961f;
    color: white;
    font-size: 30px;
    padding: 10px;
    font-weight: 600;
    padding-right: 30px;"><i
                    class="fa fa-phone"></i>&nbsp;&nbsp;CONTACT US</button></center>
        <br><br>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $.validator.addMethod(
                "usernameRegex",
                function(value, element) {
                    return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
                },
                "Username must contain only letters, numbers"
            );

            $(".next").click(function() {
                var form = $("#myform");
                form.validate({
                    errorElement: "span",
                    errorClass: "help-block",
                    highlight: function(element, errorClass, validClass) {
                        $(element).closest(".form-group").addClass("has-error");
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).closest(".form-group").removeClass("has-error");
                    },
                    rules: {
                        username: {
                            required: true,
                            usernameRegex: true,
                            minlength: 6
                        },
                        password: {
                            required: true
                        },
                        conf_password: {
                            required: true,
                            equalTo: "#password"
                        },
                        company: {
                            required: true
                        },
                        url: {
                            required: true
                        },
                        name: {
                            required: true,
                            minlength: 3
                        },
                        email: {
                            required: true,
                            minlength: 3
                        }
                    },
                    messages: {
                        username: {
                            required: "Username required"
                        },
                        /* password: {
                           required: "Password required"
                         },
                         conf_password: {
                           required: "Password required",
                           equalTo: "Password don't match"
                         },*/
                        name: {
                            required: "Name required"
                        },
                        email: {
                            required: "Email required"
                        }
                    }
                });
                if (form.valid() === true) {
                    if ($("#account_information").is(":visible")) {
                        current_fs = $("#account_information");
                        next_fs = $("#driver_information");
                    } else if ($("#driver_information").is(":visible")) {
                        current_fs = $("#driver_information");
                        next_fs = $("#coverage_information");
                    } else if ($("#coverage_information").is(":visible")) {
                        current_fs = $("#coverage_information");
                        next_fs = $("#personal_information");
                    }

                    next_fs.show();
                    current_fs.hide();
                    if (currentStepIndex < steps.length - 1) {
                        currentStepIndex++;
                        updateProgressBar(currentStepIndex);
                    }
                }
            });

            $(".previous").click(function() {
              console.log("Previous called")
                if ($("#driver_information").is(":visible")) {
                  console.log("driver page visible")
                    current_fs = $("#driver_information");
                    next_fs = $("#account_information");
                } else if ($("#coverage_information").is(":visible")) {
                  console.log("coverage page visible")

                    current_fs = $("#coverage_information");
                    next_fs = $("#driver_information");
                } else if ($("#personal_information").is(":visible")) {
                  console.log("personal page visible")

                    current_fs = $("#personal_information");
                    next_fs = $("#coverage_information");
                }
                console.log(next_fs)
                next_fs.show();
                current_fs.hide();

                if (currentStepIndex > 0) {
                    currentStepIndex--;
                    updateProgressBar(currentStepIndex);
                }
            });



            var progressBar = document.getElementById("progressBar");
            var stepsContainer = progressBar.querySelector(".progress-bar__steps");
            var progressBarProgress = progressBar.querySelector(".progress-bar__progress");

            var steps = [{
                    icon: "fas fa-car fa-4x"
                },
                {
                    icon: "fas fa-car"
                },
                {
                    icon: "fas fa-car"
                },
                {
                    icon: "fas fa-car"
                },
            ];

            steps.forEach(function(step, index) {
                var stepElement = document.createElement("div");
                stepElement.className = "progress-bar__step";
                stepElement.innerHTML = `<i class="${step.icon}"></i>`;

                stepsContainer.appendChild(stepElement);
            });

            var currentStepIndex = 0;
            updateProgressBar(currentStepIndex);

            function updateProgressBar(currentStepIndex) {
                var stepElements = stepsContainer.querySelectorAll(".progress-bar__step");

                stepElements.forEach(function(stepElement, index) {
                    if (index < currentStepIndex) {
                        stepElement.classList.add("active");
                        stepElement.innerHTML = `<i class="fas fa-check-circle fa-2x"></i>`;
                    } else {
                        stepElement.classList.remove("active");
                        stepElement.innerHTML = `<i class="fas fa-car fa-2x"></i>`;
                    }
                });

                var progressPercentage = (currentStepIndex / (steps.length - 1)) * 100;
                progressBarProgress.style.width = progressPercentage + "%";
            }






        });
    </script>

<script type="text/javascript">
    

        $(document).ready(function() {
            $('#dispositions_name').on('change', function(e) {
                var cat_id = e.target.value;
                $.ajax({

                    url: "{{ route('testingsub') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
 
                        cat_id: cat_id
                    },
                    success: function(data) {
                        $('#subcategory').empty();
                        $.each(data.automodelmake, function(index, subcategory) {
                            $('#subcategory').append('<option value="' + subcategory
                                .id + '">' + subcategory.name + '</option>');
                        })
                    }
                })
            });
        });
</script>
<script type="text/javascript">
    

        $(document).ready(function() {
            $('.subcategory').on('change', function(e) {
                var cat_id = e.target.value;
                $.ajax({

                    url: "{{ route('testingsubsub') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
 
                        cat_id: cat_id
                    },
                    success: function(data) {
                        $('#subcategorys').empty();
                        $.each(data.autosubmodelmake, function(index, subcategorys) {
                            $('#subcategorys').append('<option value="' + subcategorys
                                .id + '">' + subcategorys.name + '</option>');
                        })
                    }
                })
            });
        });
</script>
</body>

</html>
