<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .chat-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .chat-message {
            margin-bottom: 20px;
        }
        .chat-message .message-content {
            padding: 10px;
            border-radius: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            display: inline-block;
            max-width: 80%;
        }
        .chat-message.user .message-content {
            background-color: #dcf8c6;
            border-color: #c1e1a5;
            margin-left: auto;
        }
        .chat-message .message-author {
            font-size: 0.8rem;
            color: #999;
            margin-bottom: 5px;
        }
    </style>
    <title class="text-primary mr-2" >{{ $article->titre }}</title>
</head>
<body>
    <h1 class="text-center text-primary text-decoration-underline">{{ $article->titre }}</h1>
   <br> <br>
    <p class="text-decoration-none">{{ $article->contenu }}</p> <br>

    <h2  class="text-center text-danger text-decoration-underline">Commentaires</h2> <br>
    <div class="chat-container">
        @foreach($article->comments as $comment)
            <div class="chat-message {{ $comment->user_id == auth()->id() ? 'user' : '' }}">
                <div class="message-author">{{ $comment->author }}</div>
                <div class="message-content">{{ $comment->content }}</div>
            </div>
        @endforeach
    </div>

    <h2>Ajouter un commentaire</h2>
    <form action="{{ route('comments.store', $article->id) }}" method="POST" class="form-group">
        @csrf
        <div class="mb-3">
            <label  class="form-label" for="author">Nom de l'auteur</label>
            <input type="text" class="form-control"  name="author">
        </div>
        <div class="mb-3">
            <label  class="form-label" for="content">Commentaire:</label>
            <input type="text" class="form-control" name="content" style="height: 100px">
        </div>
       <br>
        <button type="submit" class="btn btn-primary">AJOUTER CE COMMENTAIRE</button>
      
    </form> <br> <br>
    <a href="/post" class="btn btn-danger" >REVENIR A LA LISTE </a>
    <br>        
    @include('post.footer')
</body>
</html

