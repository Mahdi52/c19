<!DOCTYPE html>
<html>
<head>
<style>
 

</style>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">






</head>

<body>

                   <h1>C-19</h1>
<div class="container">
    <div class="col-sm-4"> 
         <form action="/show" enctype="multipart/form-data" method="post" class="form-horizontal">
             @csrf 


       

        <div class="form-group">
            <label for="">Regions</label>

            <input type="text" class="form-control input-sm" id="searchmap" name="Regions">


            <div id="map-canvas"></div>
        </div>

        <div class="form-group">
            <label for="">Lat</label>
            <input type="number" class="form-control input-sm" step="0.000000000001" max="9999999999" name="latitude" id="lat">




        </div>

        <div class="form-group">
            <label for="">Lng</label>
            <input type="number" class="form-control input-sm" step="0.00000000001" max="9999999999" name="logitude" id="lng">




        </div>
      

  <div class="form-group">
      <label for=""> Confirmed</label>



      <input type="number" class="form-control input-sm" step=5 max="9999999999" name="Confirmed">








  </div>


       <button type="submit" class="btn btn-primary">save</button>

 
      </form>
  </div>

</div> 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>

