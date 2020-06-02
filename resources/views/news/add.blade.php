<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <h1>C-19</h1>
    <div class="container">
        <div class="col-sm-4">
            <form action="/news/show" enctype="multipart/form-data" method="post" class="form-horizontal">
                @csrf

                <div class="form-group">
                    <label for="">title</label>

                    <input type="text" class="form-control input-sm" id="searchmap" name="title">


                    <div id="map-canvas"></div>
                </div>

                <div class="form-group">
                    <label for="">post</label>
                    <input type="text" class="form-control input-sm"  name="post" id="lat">




                </div>

                <div class="form-group">
                    <label for="">source</label>
                    <input type="text" class="form-control input-sm" name="source" id="lng">





                </div>


                <div class="form-group">
                    <label for=""> url</label>



                    <input type="text" class="form-control input-sm"  name="url">








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

