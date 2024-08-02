<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container ">
        <div class="row">
              <h1 class="text-center text-primary">AJOUTER UN ARTICLE </h1>
                <hr> <br>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <ul>
                    @foreach ($errors->all() as $errors )
                        <li class="alert alert-danger"> {{$errors}} </li>
                    @endforeach 
                </ul>
               
                <form  action="/ajouts/traitement" method="POST" class="form-group" >
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Titre de l'article</label>
                        <input type="text" class="form-control" id="titre" name="titre">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Contenu de l'article</label>
                        <input type="text" class="form-control" id="contenu" name="contenu" style="height: 100px">
                    </div>
                   <br>
                    <button type="submit" class="btn btn-primary">AJOUTER L'ARTICLE</button>
                    <br> <br> 
                    <a href="/post" class="btn btn-danger" >REVENIR A LA LISTE </a>
                </form>
        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <br>  @include('post.footer')
  </body>
</html>