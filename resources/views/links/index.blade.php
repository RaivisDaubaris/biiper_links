@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Tavas saites</h2>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nosaukums</th>
                            <th>Url</th>
                            <th>Apmeklējumi</th>
                            <th>Pēdējais apmeklējums</th>
                            <th style="text-align: center;">Labot</th>
                            <th style="text-align: center;">Dzēst</th>
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($links as $link)
                                <tr>
                                    <td>{{ $link->name }}</td>
                                    <td><a href="{{ $link->link }}" target="_blank">{{ $link->link }}</a></td>
                                    <td>0</td>
                                    <td>15 feb. 2022</td>
                                    <td style="text-align: center;"><a href="/dashboard/links/{{ $link->id }}"><i class="fa fa-edit"></i></a></td>
                                    <td style="text-align: center;"><a href=""><i class="fa fa-trash"></i></a></td>
                                </tr>
                           @endforeach
                        </tbody>
                    </table>
                    <a href="/dashboard/links/new" class="btn btn-primary">Pievienot Saiti</a>
                </div>
            </div>
        </div>
    </div>
@endsection
