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
  adding a new cat to the cat table will generate a third submit button automaticaly.
  if all cats are all active at the same time, then no problem. but it you want to display
  A, B and the newly added button...say D to make A, B and D instead of A, B and C then you
  might want to add a new col in cats table to flag the active and non active cats. Otherwise
  you will end up with A, B, C and D. 
  another option will be to hard-code the cats as suggested in previous comments.
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