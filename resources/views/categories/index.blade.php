<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        [<a href='/posts/create'>create</a>]
        
        
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                    <a href ="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
                    <p class='body'>{{ $post->body }}</p>
                        
                                        
                    <script type="text/javascript">
                        function delete_alert(e){
                           if(!window.confirm('本当に削除しますか？')){
                              window.alert('キャンセルされました'); 
                              return false;
                           }
                           document.deleteform.submit();
                        };
                    </script>
                    
                    
                    <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onClick="delete_alert(event);return false;">delete</button>
                        
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$posts->links()}}
        </div>
    </body>
</html>