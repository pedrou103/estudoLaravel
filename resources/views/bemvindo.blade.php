<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
</head>

<body>
    @foreach($pessoas as $pessoa)
        @component('components.card')
            @slot('image')
                {{$pessoa['image']}}
            @endslot
            @slot('nome')
                {{$pessoa['nome']}}
            @endslot
            @slot('idade')
                {{$pessoa['idade']}}
            @endslot
            @slot('birth')
                {{$pessoa['birth']}}
            @endslot
        @endcomponent
    @endforeach
</body>

</html>
