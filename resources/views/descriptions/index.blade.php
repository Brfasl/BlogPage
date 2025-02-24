@extends('layouts.app')

@section('content')
    <h1>Açıklamalar</h1>

    @foreach($descriptions as $description)
        <div class="card bg-dark border-0 text-white">
            <img class="card-img" src="../assets/img/elements/11.jpg" alt="Card image">
            <div class="card-img-overlay">
                <h5 class="card-title">{{ $description->title }}</h5>
                <p class="card-text">
                    {{ $description->description }}
                </p>
                <p class="card-text">Son güncellenme: {{ $description->updated_at->diffForHumans() }}</p>
                <a href="{{ route('descriptions.edit', $description->id) }}" class="btn btn-primary">Düzenle</a>
            </div>
        </div>
    @endforeach
@endsection

