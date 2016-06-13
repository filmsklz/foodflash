@extends('layouts.layout')

@section('title')
Delivery food | take away food  | foodflash Ubonratchathani
@stop
@section('body')
<?php $i=0 ?>
@foreach ($Restr as $data)
<?php $i+=1 ?>
@endforeach
<div style="margin-top:-18%;text-align:center;">
  <img src = {{asset('images/banner.jpg')}}>
</div>
<h3 style="margin-top:2%;text-align:center;">Order from {{$i}}restaurant. </h3>
<div class="container" style="font-family: 'Kanit', sans-serif;margin-top:4%;">
  <div class="row">

    @foreach ($Restr as $data)
        <?php $j='images/p'.$data->id ?>
    <div class="4u">
      <section class="special box" style="height:440px;">
        <i class="icon"> <img src="{{asset('images/'.$data->pid)}}"></i>
        <h3><a href="{{ URL::to('orders='.$data->id) }}" >{{$data->namerest}}</a></h3>
        <p>{{$data->inforestr}}</p>
      </section>
    </div>

    @endforeach
  </div>
</div>
@stop
