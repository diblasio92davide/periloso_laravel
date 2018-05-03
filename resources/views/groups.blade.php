@extends('master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">PERICOLI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($groups as $group)
                    <tr>
                        <td>
                            <a href="/groups/{{ $group->id }}/edit">
                                {{ $group->id }}
                            </a>
                        </td>
                        <td>
                            <a href="/groups/{{ $group->id }}/edit">
                                {{ $group->name }}
                            </a>
                        </td>
                        <td>
                            <form action="/groups/{{ $group->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn-outline-danger" value="CANCELLA">
                            </form>
                        </td>
                    </tr>
                </a>
            @endforeach
        </tbody>
    </table>
@endsection