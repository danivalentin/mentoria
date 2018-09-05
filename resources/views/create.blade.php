<div class="container">
    @if(session('success'))
    <p class="alert-success">
        {{session('success')}} 
    </p>
       @endif
    <form action="{{url('/createCliente')}} " method="post">
        {{csrf_field()}}
        <div class="col-lg-3">
            <div class="form-group">
                <label for="nome"> Digite o nome-nome</label>
                <input type="text" name="nome" placeholder="Digite o nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="nome"> Digite o e-mail</label>
                <input type="text" name="email" placeholder="Digite o e-mail" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Salvar" class="btn btn-primary">
            </div> 
        </div>
    </form>
</div>

