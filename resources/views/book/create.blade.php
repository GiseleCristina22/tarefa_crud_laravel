<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar novo livro</title>
        <style>
            label{
                float: left;
                display: block;
                width:90px;
            }
        </style>
    </head>
    <body>
        <form action="{{ route('salvar_livro') }}" method="post">
        @csrf
            <div><label for="isbn">ISBN</label><input type="text" name="isbn" id="isbn"></div>
            <div><label for="name">Nome</label><input type="text" name="name" id="name"></div>
            <div><label for="author">Autor</label><input type="text" name="author" id="author"></div>
            <div><label for="price">Preço</label><input type="text" name="price" id="price"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>