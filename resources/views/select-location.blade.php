<!-- 
    select-location view is displayed when no location
    has been selected - no location cookie set yet! 
    Form: calls the setCookie() method in the PagesController
-->

<h3>Please select your location  from the dropdown menu bellow.</h3>
<!-- dropdown -->
<div class="col-md-8">
 <form action="setCookie" method="POST">
{!! csrf_field() !!} <!-- protect form from cross site forgery -->
<div class="form-group row">
  <label for="location-input" class="col-xs-2 col-form-label">Location</label>
  <div class="col-xs-5">
    <select class="form-control" id="location-input" name="locationID">
         @for ($i=0; $i<count($locations); $i++)
         {{ $id = $locations[$i]['id'] }}
         {{ $name = $locations[$i]['locationtag'] }}
         <option value="{{$id}}">{{ $name }}</option>
         @endfor
    </select>
  </div>
    <button type="submit" class="btn btn-primary btn-md" value="submit">Submit</button>
</div>
</form>
</div>