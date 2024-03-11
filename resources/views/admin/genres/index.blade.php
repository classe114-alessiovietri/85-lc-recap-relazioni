@extends('layouts.app')

@section('page-title', 'Index Genre')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Index Genre
                    </h1>

                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Creato il</th>
                                <th scope="col">alle</th>
                                <th scope="col">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($genres as $genre)
                                    <tr>
                                        <th scope="row">
                                            {{ $genre->id }}
                                        </th>
                                        <td>
                                            <a href="{{ route('admin.genres.show', ['genre' => $genre->id]) }}">
                                                {{ $genre->name }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $genre->slug }}
                                        </td>
                                        <td>
                                            {{ $genre->created_at->format('d/m/Y') }}
                                        </td>
                                        <td>
                                            {{ $genre->created_at->format('H:i') }}
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
