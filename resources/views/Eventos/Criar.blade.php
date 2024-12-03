@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')
    <div id="criar-evento-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/Eventos" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="titulo">Data:</label>
                <input type="date" class="form-control" id="data" name="data">
            </div>
            <div class="form-group">
                <label for="titulo">Evento:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="titulo">O evento é privado ?</label>
                <select name="privado" id="privado" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" class="form-control" cols="30" rows="3" placeholder="o que vai acontecer no evento"></textarea>
            </div>
            <div class="form-group">
                <label for="itens">Adicione itens de infraestrutura: </label>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Cerveja gratis"> Cerveja gratis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Open food"> Open food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Brindes"> Brindes
                </div>
            </div>
            <input type="submit" value="criar evento" class="btn btn-primary">
        </form>   
    </div> 
@endsection