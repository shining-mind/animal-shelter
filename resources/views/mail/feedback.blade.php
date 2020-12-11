@extends('layouts.mail')
@section('content')
    <h1>Обратная связь</h1>
    <p><strong>От:&nbsp;</strong>{{ $email }}</p>
    <div><strong>Предложение:</strong></div>
    <pre>{{ $text }}<pre>
@endsection
