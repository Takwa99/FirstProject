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
          <div class="row pt-3 justify-content-center">
             <div class="card" style="width: 50%">
                <div class="card-header text-center">
                    <h1>*_* All Notes *_*</h1>
                </div>
                <div class="card-body">
                   <ul class="list-group">
                      @foreach($notes as $note)
                   <li class="list-group-item text-muted">
                       {{ $note->title }}
                       <span class="float-right">
                         <a href="#" style="color:#f4436">
                           <i class="fa fa-trash-o" aria-hidden="true"></i>
                         </a>
                       </span>
                       <span class="float-right mr-2">
                         <a href="#" style="color:#f4436" >
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                         </a>
                       </span>
                         <span class = "float-right mr-2">
                         <a href="/notes/{{$note->id}}" style="color:#f4436">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                         </a>
                       </span>
                       
                   </li>
                   @endforeach
                   </ul>
                </div>
             </div>
          </div>
      </div>
</body>
</html>