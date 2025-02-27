@extends('panel.layout.app')

@section('title')
    Blog Sayfam
@endsection

@section('content')
    <h1>Blog Gönderileri</h1>

    <a href="{{ route('descriptions.create') }}" class="btn btn-primary mb-3">Yeni Açıklama Ekle</a>

    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text">
                    <small class="text-muted">Oluşturulma Tarihi: {{ $post->created_at->format('d.m.Y H:i') }}</small>
                </p>
            </div>

            @if($post->descriptions->count() > 0)
                <ul class="list-group list-group-flush">
                    @foreach($post->descriptions as $description)
                        <li class="list-group-item">
                            {{ $description->description }}
                            - <a href="{{ route('descriptions.edit', $description->id) }}" class="btn btn-sm btn-warning">Düzenle</a>
                            - <form action="{{ route('descriptions.destroy', $description->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="card-text text-muted p-2">Bu posta ait açıklama bulunmamaktadır.</p>
            @endif

            <img class="card-img-bottom" src="{{asset('panel/assets/img/elements/1.jpg')}}" alt="Card image cap">
        </div>
    @endforeach
@endsection
