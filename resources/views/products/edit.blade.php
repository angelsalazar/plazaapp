@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <h1 class="page-header">Editar arreglo</h1>
            @include('partials.errors')
            {!! Form::model($product,['method' => 'PUT','files' => 'true', 'action' => ['AdminProductsController@update',$product->id]]) !!}
            {!! Form::input('hidden','enabled',null,null) !!}
            <div class="form-group">
                {!! Form::label('img_url','Ruta de la imagen:')!!}
                {!! Form::file('img_url') !!}
            </div>
            <div class="form-group">
                {!! Form::label('product_name','Nombre del producto:')!!}
                {!! Form::input('text','product_name',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category','Seleccione una categoría:')!!}
                {!! Form::select('category', [''=>'- Selecciona una categoría -','Artificiales' => 'Artificiales','Espectaculares' =>'Espectaculares','Fruteros' => 'Fruteros' ],null,['class' => 'form-control input-sm']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description','Descripción del producto:')!!}
                {!! Form::textarea('description',null,['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Actualizar',['class' => 'btn btn-success form-control']) !!}

            {!! Form::close() !!}

        </div>
    </div>
@endsection