{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('category', 'Categorías') }}
	<select class="form-control" name="category" id="category">
        <option value="">-- Seleccione una opción --</option>
        <option value="Queques"
        @if($image->category == 'Queques') selected="selected"@endif> Queques & Pies</option>
        <option value="Cupcakes"
        @if($image->category == 'Cupcakes') selected="selected"@endif> Cupcakes & otros</option>
    </select>
</div> 
<div class="form-group">
    {{ Form::label('image', 'Imagen') }}
    {{ Form::file('image') }}
</div>
@if($image != null)
    <img id="image" src="{{$image->file}}" width="150px" height="100px" alt="">
@endif
<br><br>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
