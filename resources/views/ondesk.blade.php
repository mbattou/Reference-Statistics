<!--
  ondesk page view
 -->
@extends('main')
@section('title', 'On Desk')
@section('content')
<!-- 
  the category values could be hard-coded using these three lines of code:
<button style="height:50px; width:60px" type="submit" name="categoryID" class="btn btn-primary btn-lg" value="1">A</button>
<button style="height:50px; width:60px" type="submit" name="categoryID" class="btn btn-primary btn-lg" value="1">A</button>
<button style="height:50px; width:60px" type="submit" name="categoryID" class="btn btn-primary btn-lg" value="1">A</button>
I have decide to not hard-code the button and instead dinamically generate the buttons acoording to the available cats in table
These values are saves in the $cats variable and passed to both Get and Post views. See withCats($cats).
-->

<!-- WARNING -->
<!-- 
  adding a new cat to the cats table will not generate a fourth submit button automaticaly.
  to unable and disable cats buttons make sure cat status is set to 1 (active) else it 
  will not be displayed
 
-->
<h1>Au Comptoir - On Desk</h1>

<!-- check if cookie is set or not -->
@if(app('request')->cookie('LocationCookie') == null)
 @include('no-location')
<!-- stats side bar -->
 @include('sidebar')
 @else
 <p>Appuyez sur le bouton de la catégorie voulue (ex: « A ») pour soumettre.<br/> Simply press on the desired category button (ie. "A") to submit.</p>
<div class="col-md-3"> <!-- to centre: col-md-4 col-md-offset-4 -->
<form action="ondesk" method="POST">
    {!! csrf_field() !!} <!-- protect form from cross site forgery -->
<hr>
  @for ($i=0; $i<count($cats); $i++)
  <button style="height:50px; width:60px" type="submit" name="categoryID" class="btn btn-primary btn-lg" value="{{ $id = $cats[$i]['id'] }}">{{ $name = $cats[$i]['categoryname'] }}</button>
  @endfor
<hr>
</form>
</div>
<!-- End Div from col-md-3 class -->

<!-- empty div for adjustment -->
<div class="col-md-4"></div>
<!-- category reminder -->
@include('definition')

@endif
<!-- end of check if cookie is set or not -->
@endsection