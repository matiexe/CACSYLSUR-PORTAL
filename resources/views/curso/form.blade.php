<div class=" section box box-info padding-1">
    <h5 class="display-5">Grupo</h5>
    <div class="row ">
        <div class="col">
            <div class="form-group">
                {{ Form::label('nombre_curso') }}
                {{ Form::text('mes_dictado', $curso->mes_dictado, ['class' => 'form-control' . ($errors->has('mes_dictado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre curso']) }}
                {!! $errors->first('mes_dictado', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                {{ Form::label('fecha_dictado') }}
                {{ Form::date('mes_dictado', $curso->mes_dictado, ['class' => 'form-control' . ($errors->has('mes_dictado') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Dictado']) }}
                {!! $errors->first('mes_dictado', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col">

            <div class="form-group">
                {{ Form::label('Curso') }}
                {{ Form::select('certificacion_id',$certificado, $curso->nombre_grupo, ['class' => 'form-control' . ($errors->has('nombre_curso') ? ' is-invalid' : ''), 'placeholder' => 'seleccionar curso']) }}
                {!! $errors->first('curso', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <!-- <div class="col">
            <div class="form-group">
                {{ Form::label('Estado') }}
                {{ Form::select('estado',['F' => 'Finalizado', 'A' => 'Activo'], $curso->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado del grupo']) }}
                {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
            </div>

        </div> -->

    </div>
    <div class="clearfix"></div>

    <h5 class="display-5">Alumnos</h5>



</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('mes_dictado', $curso->mes_dictado, ['class' => 'form-control' . ($errors->has('mes_dictado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre curso']) }}
            {!! $errors->first('mes_dictado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col">
        <br>
        <button type="button" class="btn btn-primary">Guardar</button>
    </div>


    <!-- <div class="col">
        <div class="form-group">
            {{ Form::label('dni') }}
            {{ Form::text('mes_dictado', $curso->mes_dictado, ['class' => 'form-control' . ($errors->has('mes_dictado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre curso']) }}
            {!! $errors->first('mes_dictado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('empresa') }}
            {{ Form::text('mes_dictado', $curso->mes_dictado, ['class' => 'form-control' . ($errors->has('mes_dictado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre curso']) }}
            {!! $errors->first('mes_dictado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div> -->

</div>
<div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</div>