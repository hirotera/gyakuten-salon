<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


  <title>人生逆転サロン</title>
</head>
<body>
  <header class="navbar navbar-dark bg-danger">
      <div class="container">
          <a class="navbar-brand" href="{{ url('') }}">
              Gyakuten
          </a>
      </div>
  </header>
 
  @yield('content');
  
</body>
</html>