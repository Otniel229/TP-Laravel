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
              <h1 class="text-center text-primary">MODIFIER UN ARTICLE </h1>
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
               
                <form  action="/modifier/traitement" method="POST" class="form-group" >
                    @csrf

                    <input type="text" name="id" style="display: none;" value="{{$article->id}}">
                    <div class="mb-3">
                        <label  class="form-label">Titre de l'article</label>
                        <input type="text" class="form-control" id="titre" name="titre" value="{{$article->titre}}">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Contenu de l'article</label>
                        <input type="text" class="form-control" id="contenu" name="contenu" style="height: 100px" value="{{$article->contenu}}">
                    </div>
                   <br>
                    <button type="submit" class="btn btn-primary">MODIFIER L'ARTICLE</button>
                    <br> <br> 
                    <a href="/post" class="btn btn-danger" >REVENIR A LA LISTE </a>
                </form>
        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <br>  
  </body>
  @include('post.footer')
</html>