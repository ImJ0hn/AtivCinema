@extends('padrao')

@section('content') 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/style.css" rel="stylesheet"> 

</head>
<body>
    
</body>
</html>
<form method = "post" action="{{route('cadastro-funcionario')}}">
    
    @csrf
            <div class="mb-3 form-check">
                <label for="nomeInput" class="form-label">Nome:</label>
                <input type="text" name="nomefun" class="form-control" id="nomeInput" >
            </div>

            <div class="mb-3 form-check">
                <label for="emailInput" class="form-label">Email:</label>
                <input type="email" name="emailfun" class="form-control" id="emailInput">
            </div>

            <div class="mb-3 form-check">
                <label for="whatsappInput" class="form-label">Whatsapp:</label>
                <input type="text" name="whatsappfun"class="form-control" id="whatsappInput" >
            </div>
            
            <div class="mb-3 form-check">
                <label for="cpfInput" class="form-label">CPF:</label>
                <input type="text" name="cpffun" class="form-control" id="cpfInput">
            </div>

            <div class="mb-3 form-check">
                <label for="senhaInput" class="form-label">Senha:</label>
                <input type="password" name="senhafun"class="form-control" id="senhaInput">
            </div>

           
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

@endsection