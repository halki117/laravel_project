@extends('layouts.app')

@section('content')
<div class="container">
  <div class="top-content">
      <h1>topです</h1>
      <p>リーリーステストします</p>
  </div>
</div>
@endsection
<script>
  function play(){
    var music = new Audio('yume.mp3');
    music.play();
  }
</script>