<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel to database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</head>
<body>
    <h1>all posts </h1>
    @foreach ($posts as $dbtable)

     <h3>{{$dbtable->id}}</h3>
     <h3>{{$dbtable->title}}</h3>
     <p>{{$dbtable->body}}</p>
     @endforeach
table only for try and successed.*
     <table class="table">
  <thead>
    <tr>
     
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">Body</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
            @foreach ($posts as $dbtable)
            <h3>{{$dbtable->id}}</h3>
            @endforeach
      
      </th>
      <td>
            @foreach ($posts as $dbtable)
            <h3>{{$dbtable->title}}</h3>
            @endforeach
      </td>
      <td>
            @foreach ($posts as $dbtable)
            <p>{{$dbtable->body}}</p>
            @endforeach
      </td>
      
    </tr>
    
  </tbody>
</table>
     
</body>
</html>