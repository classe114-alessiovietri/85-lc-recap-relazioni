@extends('layouts.app')

@section('page-title', 'Index Album')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Index Album
                    </h1>

                    <div>
                        <style>
                            .published {
                                color: green !important;
                            }
                            .not-published {
                                color: red !important;
                            }
                        </style>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Artista</th>
                                <th scope="col">Generi</th>
                                <th scope="col">Pubblicato</th>
                                <th scope="col">Creato il</th>
                                <th scope="col">alle</th>
                                <th scope="col">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($albums as $album)
                                    <tr>
                                        <th scope="row">
                                            {{ $album->id }}
                                        </th>
                                        <td>
                                            <a href="{{ route('admin.albums.show', ['album' => $album->id]) }}">
                                                {{ $album->name }}
                                            </a>
                                        </td>
                                        <td>
                                            @if ($album->artist != null)
                                                {{ $album->artist->name }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @foreach ($album->genres as $genre)
                                                <span class="badge rounded-pill text-bg-primary">
                                                    {{ $genre->name }}
                                                </span>
                                            @endforeach
                                        </td>
                                        <td @class([
                                            'fw-bold',
                                            'published' => $album->published_at != null,
                                            'not-published' => $album->published_at == null,
                                        ])>
                                            @if ($album->published_at != null)
                                                SI
                                            @else
                                                NO
                                            @endif
                                        </td>
                                        <td>
                                            {{ $album->created_at->format('d/m/Y') }}
                                        </td>
                                        <td>
                                            {{ $album->created_at->format('H:i') }}
                                        </td>
                                        <td>
                                            AZIONI
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
