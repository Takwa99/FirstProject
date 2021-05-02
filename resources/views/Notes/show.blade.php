<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
</head>
<body>
     <div class="container">
      <h1 class="mt-5 text-center">{{$note->title}}</h1>
       <div class="row pt-5 justify-content-center">
         <div class="col-md-8">
           <div class="card">
             <div class="card-header">
              <span>Details</span>
              <span class="badge badge-warning float-right"> {{ boolval($note->completed)? 'completed' : 'Non completed' }}</span>
             </div>
             <div class="card-body">
             {{$note->description}}
             </div>
           </div>
          </div>
       </div>
    
 </div>
</body>
</html>