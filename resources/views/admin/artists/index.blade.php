@extends('layouts.app')

@section('page-title', 'Index Artist')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Index Artist
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
                                @foreach ($artists as $artist)
                                    <tr>
                                        <th scope="row">
                                            {{ $artist->id }}
                                        </th>
                                        <td>
                                            <a href="{{ route('admin.artists.show', ['artist' => $artist->id]) }}">
                                                {{ $artist->name }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $artist->slug }}
                                        </td>
                                        <td>
                                            {{ $artist->created_at->format('d/m/Y') }}
                                        </td>
                                        <td>
                                            {{ $artist->created_at->format('H:i') }}
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
