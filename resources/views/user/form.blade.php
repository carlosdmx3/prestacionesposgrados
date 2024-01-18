<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('oapellidopaterno') }}
            {{ Form::text('oapellidopaterno', $user->oapellidopaterno, ['class' => 'form-control' . ($errors->has('oapellidopaterno') ? ' is-invalid' : ''), 'placeholder' => 'Oapellidopaterno']) }}
            {!! $errors->first('oapellidopaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('oapellidomaterno') }}
            {{ Form::text('oapellidomaterno', $user->oapellidomaterno, ['class' => 'form-control' . ($errors->has('oapellidomaterno') ? ' is-invalid' : ''), 'placeholder' => 'Oapellidomaterno']) }}
            {!! $errors->first('oapellidomaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('orfc') }}
            {{ Form::text('orfc', $user->orfc, ['class' => 'form-control' . ($errors->has('orfc') ? ' is-invalid' : ''), 'placeholder' => 'Orfc']) }}
            {!! $errors->first('orfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ocurp') }}
            {{ Form::text('ocurp', $user->ocurp, ['class' => 'form-control' . ($errors->has('ocurp') ? ' is-invalid' : ''), 'placeholder' => 'Ocurp']) }}
            {!! $errors->first('ocurp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ocorreo') }}
            {{ Form::text('ocorreo', $user->ocorreo, ['class' => 'form-control' . ($errors->has('ocorreo') ? ' is-invalid' : ''), 'placeholder' => 'Ocorreo']) }}
            {!! $errors->first('ocorreo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ofolio') }}
            {{ Form::text('ofolio', $user->ofolio, ['class' => 'form-control' . ($errors->has('ofolio') ? ' is-invalid' : ''), 'placeholder' => 'Ofolio']) }}
            {!! $errors->first('ofolio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('istatus') }}
            {{ Form::text('istatus', $user->istatus, ['class' => 'form-control' . ($errors->has('istatus') ? ' is-invalid' : ''), 'placeholder' => 'Istatus']) }}
            {!! $errors->first('istatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iusrins') }}
            {{ Form::text('iusrins', $user->iusrins, ['class' => 'form-control' . ($errors->has('iusrins') ? ' is-invalid' : ''), 'placeholder' => 'Iusrins']) }}
            {!! $errors->first('iusrins', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iusrmod') }}
            {{ Form::text('iusrmod', $user->iusrmod, ['class' => 'form-control' . ($errors->has('iusrmod') ? ' is-invalid' : ''), 'placeholder' => 'Iusrmod']) }}
            {!! $errors->first('iusrmod', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>