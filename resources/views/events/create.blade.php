@extends('layout.main')
@section('title','cadastro')
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
         <div class="form-group">
            <label for="title">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" id="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Nome da Cidade">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private"class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do Evento" ></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione Itens de Infraestrutura</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="cadeiras">Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="OpenBar">OpenBar
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Sorteio">Sorteios
            </div>
        </div>

        <input type="submit"class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection