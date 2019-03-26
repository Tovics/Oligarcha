@extends('layouts.app')
@section('content')
    <h2>Debts</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Payee</th>
            <th scope="col">Payer</th>
            <th scope="col">Title</th>
            <th scope="col">Amount</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->email_verified_at}}</td>
                <td>{{ $user->password}}</td>
                <td><button type="button">Edit</button><button type="button">Delete</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection