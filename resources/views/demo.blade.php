@extends('main')
@section('title', 'Demo')
@section('content')
<h1>Demo - Tutorial</h1>
<p>This is the demo page! </p>

<!-- Test -->


<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css"/>

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: #5c5c5c}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #8f001a !important;} .bootstrap-iso .btn-custom{background: #c8cabc} .bootstrap-iso .btn-custom:hover{background: #b4b6a8;}.bootstrap-iso .form-control:focus { border-color: #555555;  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(85, 85, 85, 0.6); box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(85, 85, 85, 0.6);} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#555555; background-color: #f2e3e3; border-radius: 4px; padding-left:12px}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="formden_header">
     <h2>
      OFF Desk Form
     </h2>
     <p>
      This is the OFF Desk Form
     </p>
    </div>
    <form class="form-horizontal" active="" method="post">
        {!! csrf_field() !!} <!-- protect form from cross site forgery -->
     <div class="form-group ">
      <label class="control-label col-sm-4 requiredField" for="location">
       Select a Location
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <select class="select form-control" id="location" name="location">
        <option value="First Choice">
         First Choice
        </option>
        <option value="Second Choice">
         Second Choice
        </option>
        <option value="Third Choice">
         Third Choice
        </option>
       </select>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="name">
       Select a Name (Optional)
      </label>
      <div class="col-sm-8">
       <select class="select form-control" id="name" name="name">
        <option value="First Choice">
         First Choice
        </option>
        <option value="Second Choice">
         Second Choice
        </option>
        <option value="Third Choice">
         Third Choice
        </option>
       </select>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="numberA">
       How many A
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="numberA" name="numberA" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="numberB">
       How many B
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="numberB" name="numberB" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="numberC">
       How many C
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="numberC" name="numberC" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="numberP">
       Number of presentations
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="numberP" name="numberP" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="numberPerson">
       Number of persons
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="numberPerson" name="numberPerson" type="text"/>
      </div>
     </div>
      <!-- Calling time picker layout -->
     <div class="form-group">
      <label class="control-label col-sm-4" data-placement="left" data-align="top" data-autoclose="true">
       Date
      </label>
      <div class="col-sm-8">
       <div class="input-group date">
        <div class="input-group-addon">
         <i class="glyphicon glyphicon-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
       </div>
      </div>
     </div>
     <!-- Revisit: Validate time and forbid letter injection -->
     <!-- ************************************************** -->
    <div class="form-group">
      <label class="control-label col-sm-4" data-placement="left" data-align="top" data-autoclose="true">
       Duration
      </label>
      <div class="col-sm-8">
       <div class="input-group clockpicker">
        <div class="input-group-addon">
         <i class="glyphicon glyphicon-time">
         </i>
        </div>
        <input class="form-control" id="duration" name="duration" value="01:30" type="text"/>
       </div>
      </div>
     </div>
      <!-- Revisit: Validate time and forbid letter injection -->
      <!-- ************************************************** -->
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <button class="btn btn-custom btn-lg" name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>

<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<!-- Bootstrap Clock Picker -->
<link rel="stylesheet" href="https://weareoutman.github.io/clockpicker/dist/bootstrap-clockpicker.min.css"/>
<script src="https://weareoutman.github.io/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
<!-- JS -->
<!-- JS call Date Picker -->
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy', //do not change format
        container: container,
        todayHighlight: true,
        autoclose: true,
        todayBtn: 'linked',
      };
      date_input.datepicker(options);
    })
</script>
<!-- JS call Clock Picker -->
<script>
    var clockpicker = $('.clockpicker').clockpicker({
      	placement: 'top',
	      align: 'left',
	      donetext: 'OK',
        'default': 'now'
}).find('input');
</script>
<!-- END JS -->
@endsection
