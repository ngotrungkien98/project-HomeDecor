@extends('layouts.app')
@section('content')
@foreach ($news as $news)
<html>
   {!! $news -> description !!}
</html>
@endforeach
@endsection
