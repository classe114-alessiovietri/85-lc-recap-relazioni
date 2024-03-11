@extends('layouts.app')

@section('page-title', $album->name)

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        {{ $album->name }}
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
                                <th scope="col">Slug</th>
                                <th scope="col">Pubblicato</th>
                                <th scope="col">Creato il</th>
                                <th scope="col">alle</th>
                                <th scope="col">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        {{ $album->id }}
                                    </th>
                                    <td>
                                        {{ $album->name }}
                                    </td>
                                    <td>
                                        {{ $album->slug }}
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
