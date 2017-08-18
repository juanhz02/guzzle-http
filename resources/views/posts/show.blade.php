<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <h1>Publicaciones</h1>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>{{ $post->title }}</h4>
          </div>
          <div class="panel-body">
              {{ $post->body }}
              <br>
              <a href="/">Volver</a>
          </div>
        </div>
    </div>
  </body>
</html>
