<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="/js/main.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="/stylesheets/global.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="wrapper">
    	<form enctype="application/json" action='http://sheetsu.com/apis/b4817d23' method="post">
    	<div class="label">Diver</div>
    	<select name="diver" type="select" class="diver" />
    		<option selected value="Matt Graham">Matt Graham</option>
    		<option value="Mike Bricker">Mike Bricker</option>
    		<option value="Wayne Brusate">Wayne Brusate</option>
    		<option value="Eric Pfeifer">Eric Pfeifer</option>
    		<option value="Andrew Wagner">Andrew Wagner</option>
    	</select>
    	<br /><br />

    	<div class="label">Location</div>
    	<input type="text" name="location" value=""/>

    	<div class="label">Date</div>
      <input type="date" name="date" value="">

    	<div class="label">Time in</div>
    	<input type="time" name="time-in" />

    	<div class="label">Time out</div>
    	<input type="time" name="time-out" />

    	<h3>Conditions</h3>
    	<div for="">Visability (Feet)</div>
    	<input type="text" name="visability" value=""/>

    <div for="">Air Temp</div>
    	<input type="text" name="air" value=""/>

    	<div for="">Surface Temp</div>
    	<input type="text" name="surface" value=""/>

    	<div for="">Bottom Temp</div>
    	<input type="text" name="bottom" value=""/>

    	<br />

    	<input type="radio" name="water-type" value="Fresh"><span class="radio">Fresh Water</span>
    	<input type="radio" name="water-type" value="Salt"><span class="radio">Salt Water</span>
    	<br />

    	<input type="radio" name="entry" value="shore dive"><span class="radio">Shore Dive</span>
    	<input type="radio" name="entry" value="boat dive"><span class="radio">Boat Dive</span>
    	<br />

    	<input type="radio" name="water-cond" value="Waves"><span class="radio">Waves</span>
    	<input type="radio" name="water-cond" value="Surf"><span class="radio">Surf</span>
    	<input type="radio" name="water-cond" value="Surge"><span class="radio">Surge</span>
    	<br />

    	<input type="radio" name="current-drift" value="Current"><span class="radio">Current</span>
    	<input type="radio" name="current-drift" value="Drift"><span class="radio">Drift</span>
    	<br />

    	<h3>Details</h3>
    	<div for="">Max-Depth</div>
    	<input type="text" name="max-depth" value=""/>

    	<div for="">Starting PSI</div>
    	<input type="text" name="psi-start" value=""/>

    	<div for="">Ending PSI</div>
    	<input type="text" name="psi-end" value=""/>

    	<div for="">Weight (lbs)</div>
    	<input type="text" name="weight" value=""/>
    	<br /><br /><br />
      <button type="submit">Submit Dive</button>
    	</form>
    </div>
    <footer></footer>
  </body>
</html>
