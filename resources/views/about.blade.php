@extends('layouts.main')
@section('content')

<h3>Halaman About</h3>
<h1> <?= $name?> </h1>
<h1>
    <?= $email?>
</h1>
<img src="{{('p.jpeg')}}" alt="Bayu" width="200" class="rounded-circle img-thumbnail">
@endsection