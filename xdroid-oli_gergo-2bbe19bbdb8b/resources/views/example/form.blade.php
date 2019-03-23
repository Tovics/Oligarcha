<p class="h2 mt-5">Form</p>
<div class="card bg-light">
    <div class="card-body">
        <form>
            <div class="form-group">
                {{ Form::label('name', 'Text', ['class' => '']) }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Select', ['class' => '']) }}
                {{ Form::select('name', ['key' => 'value'], null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Textarea', ['class' => '']) }}
                {{ Form::textarea('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="text-right">
                {{ Form::submit('Submit!', ['class' => 'btn btn-primary']) }}
            </div>
        </form>
    </div>
</div>