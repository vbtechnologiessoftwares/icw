<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid">

  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
      <h2>Logo</h2>
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="active"><a href="{{ route('auto.index') }}">Auto Insurance</a></li>
        <li class="active"><a href="{{ route('helth.index') }}">Heth Insurance</a></li>
        <li><a class="btn btn-info" href="{{ route('logout') }}">logout</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-10">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Auto Profile</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('auto.index') }}"> Back</a>
            </div>
        </div>
    </div>
   



    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year:</strong>
                {{ $autoshow->year }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Make:</strong>
                {{ $autoshow->make }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Model:</strong>
                {{ $autoshow->model }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sub Model:</strong>
                {{ $autoshow->sub_model }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>VIN:</strong>
                {{ $autoshow->vin }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Relationship To Applicant:</strong>
                {{ $autoshow->relationship_to_applicant }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marital Status:</strong>
                {{ $autoshow->marital_status }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>License Status:</strong>
                {{ $autoshow->license_status }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>License State:</strong>
                {{ $autoshow->license_state }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name Relationship :</strong>
                {{ $autoshow->first_name_relationship }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name Relationship :</strong>
                {{ $autoshow->last_name_relationship }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Coverage type:</strong>
                {{ $autoshow->coverage_type }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Uninsured Motorist cover:</strong>
                {{ $autoshow->uninsured_motorist_cover }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current coverage type:</strong>
                {{ $autoshow->current_coverage_type }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current Insurance Company:</strong>
                {{ $autoshow->current_insurance_company }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current Policy Expiry Date:</strong>
                {{ $autoshow->current_policy_expiry_date }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Insured Since (date):</strong>
                {{ $autoshow->insured_Since }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $autoshow->first_name }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                {{ $autoshow->last_name }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $autoshow->email }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                {{ $autoshow->phone }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $autoshow->address }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>city:</strong>
                {{ $autoshow->city }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>state:</strong>
                {{ $autoshow->state }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zip:</strong>
                {{ $autoshow->zip }}
            </div>
        </div>
    </div>
    </div>
  </div>
</div>

</body>
</html>
