<html lang="en">

<head>

<meta charset="UTF-8">
<title>Report</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/dashboard.css">

</head>

<body>

<div class="jumbotron">
    
  <h1 align="center">REPORT GENERATION</h1>
  
</div>
<div id="date">
        <h3 align="left">Today is <?php echo date("l, d M Y"); ?></h3>

        
        {!!  Form::open(['route' => 'back_button']) !!}
        <div id="back_button">
        {!!Form::submit('BACK', array('class' => 'btn btn-primary ', 'id' => 'backButton')  ) !!}
        </div>
        {!! Form::close() !!}
        {!!  Form::open(['route' => 'logout_submit']) !!}
        <div id="Late_entry_button">
        <center>
        {!!Form::submit('LOGOUT', array('class' => 'btn btn-primary btn-lg', 'id' => 'logoutButton')  ) !!}
        </center>
        {!! Form::close() !!}
        </div>
        </div>
        {!!  Form::open(['route' => 'generate_report']) !!}
        <div id="Generate_report_button">
        <center>
        {!!Form::submit('Three Entries Report', array('class' => 'btn btn-primary btn-lg', 'id' => 'report_Button')  ) !!}
        </center>
        <div id="Datewise_report_field">
            <p>From Date </p>
        {!! Form::input('date', 'reportFromDate', null, ['class' => 'form-control']) !!}
        <p>To Date </p>
        {!! Form::input('date', 'reportToDate', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>
    <div id="Branch_report_field">
       <p>Select Branch(es)</p>

     {!! Form::select('branch', ['ALL', 'CS', 'IT', 'EC', 'EN', 'EI', 'CE', 'ME', 'MCA', 'MBA']) !!}
    </div>
               <center>
        {!!Form::submit('Range Entries Report', array('class' => 'btn btn-primary btn-lg', 'id' => 'report_Button')  ) !!}
        </center>
  
        {!! Form::close() !!}
        </div>


       

       

           






</body>
<html>