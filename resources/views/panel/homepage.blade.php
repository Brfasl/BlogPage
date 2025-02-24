@extends('panel.layout.app')

@section('title')
Blog Sayfam
@endsection

@section('content')


    <h1>Açıklamalar</h1>
    <a href="{{ route('descriptions.create') }}">Yeni Açıklama Ekle</a>

    <ul>
        
    </ul>

@endsection

