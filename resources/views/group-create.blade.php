@extends('master')

@section('content')
    <form action="/groups" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nome</label>
            <input name="name" type="text" class="form-control" placeholder="Name">

            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <small class="text-danger">{{ $error }}</small>
                @endforeach
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
@endsection
