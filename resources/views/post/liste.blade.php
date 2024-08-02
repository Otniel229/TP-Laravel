<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
      <div class="container text-center">
        <div class="row">
          <div class="col s12">
            <h1 class="text-primary">Bienvenu sur Mon BLOG </h1>
            <hr> <br>
              <a href="/ajouts" class="btn btn-primary">Ajouter un article</a>
            <hr>
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
              <table class="table table-striped table-bordered table-hover">
               <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Titre de l'article</th>
                  <th>Nombres de commentaires</th>
                  <th>ACTIONS</th>
                </tr>
               </thead>
               <tbody>
                @foreach($articles as $article)
                  <tr>
                    <td>{{ $article->id }}</td>
                    <td>
                        <a href="{{ route('post.affichage', $article->id) }}">{{ $article->titre }}</a>
                    </td>
                    <td>{{ $article->comments_count }}</td>
                    <td>
                      <a href="{{ route('post.modifier', $article->id) }}" class="btn btn-secondary">Modifier</a>
                      <a href="{{ route('post.supprimer', $article->id) }}" class="btn btn-danger">Supprimer</a>
                    </td>
                  </tr>
                @endforeach
               </tbody>
              </table>
          </div>
        
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <br>
  </body>
  @include('post.footer')
</html>