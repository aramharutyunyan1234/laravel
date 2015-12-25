<html>
<div>
    {!! Form::open(array('url' => 'index/index','method'=>'post')) !!}
    {!! Form::label('login', 'Login', array('class' => 'awesome')) !!}
    {!! Form::text('name') !!}
    {!! Form::label('password', 'Password', array('class' => 'awesome trtr')) !!}
    {!! Form::password('password') !!}
    {!! Form::submit() !!}
    {!! Form::close() !!}
</div>
</html>
