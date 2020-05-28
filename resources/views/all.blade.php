<html>
<head>
  

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   



</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="/Add"> <button type="button" class="btn btn-primary btn-lg btn-block">Add New type</button></a>



            <table class="table table-bordered">
                <thead>
                    <tr>


                        <th scope="col">Id</th>
                        <th scope="col">Regions</th>
                        <th scope="col">Confirmed</th>
                       <th scope="col">logitude</th>
                        <th scope="col">latitude</th>



                    </tr>
                </thead>
                <tbody>
                    @forelse ($show as $part)
                    <tr>



                        <th scope="row">{{$part->id}}</th>
                        <td>{{$part->Regions}}</td>
     <td>{{$part->Confirmed}}</td>

     <td>{{$part->logitude}}</td>


     <td>{{$part->latitude}}</td>





                        <td>
                            <a href="/type1/{{ $part->id }}"> <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                            </a>

                            <a href="/type1/{{ $part->id }}/Edit"><button type="button" class="btn btn-success"> <i class="fas fa-edit"></i></button></a>

                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @empty
                    <p>no type</p>

                    @endforelse


                </tbody>


            </table>
            {{ $show->render() }}
        </div>
    </div>
</div>

</body>
</html>