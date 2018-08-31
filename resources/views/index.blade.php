<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> cliente Laravel</title>
        
       <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
<style>
    _content{
        width: 700px;
        display: flex;
        justify-content: center;
        margin-top: 100px;
</style>
    </head>
    <body>
        <div class="container_content">
            <h1>Sistema de clientes</h1>
            <div><a href="{{url('\createCliente')}}" class="btn btn-primary">Criar Cliente</a></div>
        </div>
        <div class="container_content">
            <table class="table">
            <thead>
            <tr>
            
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
                </tr>
        </thead>>
        <tbody>
            @foreach($cliente as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>
                <td>
                    <input type="button" value="Deletar" class="btn btn-danger">
                    <input type="button" value="Editar" class="btn btn-success">
                </td>
            </tr>
            @endforeach
        </tbody> 
        </table>
        </div>
            
    </body>
</html>