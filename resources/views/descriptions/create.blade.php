@extends('layouts.app')

@section('content')
    <h1>Yeni Açıklama Ekle</h1>

    <form action="{{ route('descriptions.store') }}" method="POST">
        @csrf

        <div>
            <label for="description">Açıklama</label>
            <textarea name="description" id="description" rows="5" required></textarea>
        </div>

        <div>
            <label for="post_id">Post Seçin</label>
            <select name="post_id" id="post_id" required>
                @foreach($posts as $post)
                    <option value="{{ $post->id }}">{{ $post->title }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit">Ekle</button>
        </div>
    </form>

    <a href="{{ route('descriptions.index') }}">Geri Dön</a>
@endsection
