@extends('layouts.app')
@section('content')
<center><h1>bukti transfer</h1>
    {{-- <img src="images/1668240353165-book_7.jpg" alt=""> --}}
        @foreach ($image as $item)
        <img src="{{ asset("/images/$item->data_file") }}" alt="{{ $item->updated_at }}"><br>
        @endforeach</center>
@endsection