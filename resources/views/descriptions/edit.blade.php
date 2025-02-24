@extends('layouts.app')

@section('content')
    <h1>Açıklama Düzenle</h1>

    <form action="{{ route('descriptions.update', $postDescription->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="description">Açıklama</label>
            <textarea name="description" id="description" rows="5" required>{{ old('description', $postDescription->description) }}</textarea>
        </div>

        <div>
            <label for="post_id">Post Seçin</label>
            <select name="post_id" id="post_id" required>
                @foreach($posts as $post)
                    <option value="{{ $post->id }}" {{ $post->id == $postDescription->post_id ? 'selected' : '' }}>
                        {{ $post->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit">Güncelle</button>
        </div>
    </form>

    <a href="{{ route('descriptions.index') }}">Geri Dön</a>
@endsection
