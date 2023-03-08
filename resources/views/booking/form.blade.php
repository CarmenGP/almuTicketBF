<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('userName') }}
            {{ Form::text('userName', $booking->userName, ['class' => 'form-control' . ($errors->has('userName') ? ' is-invalid' : ''), 'placeholder' => 'Username']) }}
            {!! $errors->first('userName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category') }}
            {{ Form::text('category', $booking->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => 'Category']) }}
            {!! $errors->first('category', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area') }}
            {{ Form::text('area', $booking->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location') }}
            {{ Form::text('location', $booking->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
            {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state') }}
            {{ Form::text('state', $booking->state, ['class' => 'form-control' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $booking->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('startTime') }}
            {{ Form::text('startTime', $booking->startTime, ['class' => 'form-control' . ($errors->has('startTime') ? ' is-invalid' : ''), 'placeholder' => 'Starttime']) }}
            {!! $errors->first('startTime', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('endTime') }}
            {{ Form::text('endTime', $booking->endTime, ['class' => 'form-control' . ($errors->has('endTime') ? ' is-invalid' : ''), 'placeholder' => 'Endtime']) }}
            {!! $errors->first('endTime', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numPeople') }}
            {{ Form::text('numPeople', $booking->numPeople, ['class' => 'form-control' . ($errors->has('numPeople') ? ' is-invalid' : ''), 'placeholder' => 'Numpeople']) }}
            {!! $errors->first('numPeople', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('room') }}
            {{ Form::text('room', $booking->room, ['class' => 'form-control' . ($errors->has('room') ? ' is-invalid' : ''), 'placeholder' => 'Room']) }}
            {!! $errors->first('room', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $booking->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comment') }}
            {{ Form::text('comment', $booking->comment, ['class' => 'form-control' . ($errors->has('comment') ? ' is-invalid' : ''), 'placeholder' => 'Comment']) }}
            {!! $errors->first('comment', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>