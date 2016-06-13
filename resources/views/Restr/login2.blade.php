
<div class="container" style="font-family: 'Kanit', sans-serif;margin-top:4%;">
  {!!Form::open(array('url' => 'adminpg'))!!}
      {{ Form::text('password','',array('class'=>'form-control','placeholder'=>'Password')) }}
  <input type="submit" value="login">
  {{ Form::close() }}
</div>
