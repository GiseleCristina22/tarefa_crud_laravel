<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vitrine de livros</title>
</head>
    <body>
        <table>
        <tr><th>ISBN</th><th>Autor</th><th>Título</th><th>Preço</th><th></th><th></th></tr>
        @foreach($book as $book)
            <tr>
                <td>{{$book->isbn}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->price}}</td>
                <td><a href="{{ route('editar_livro', ['id'=>$book->id])}}"
                        title="Editar livro {{ $book->nome }}" >Editar</a></td>
                <td><a href="{{ route('excluir_livro', ['id'=>$book->id])}}"
                        title="Excluir livro {{ $book->name }}" >Excluir</a></td>
            </tr>
        @endforeach
    </body>
</html>