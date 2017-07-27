
<!--هذه الصفحة ليست من اختراعي  مدرس الكورس هو من رتبها بهذا الشكل -->
<!--انا فهمت ماذا فعل فقد استخدم البلايد لعرض المستخدمين-->


@extends('layouts.main')

@section('content')
    
    <a href="/users/create" class="btn btn-sm btn-success">
        Create a User
    </a>


    <table class="table table-hover table-striped table-border">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Joined</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
                           <td>
                    <ul class="list-inline list-unstyled">

                        <li><form action="/users/{{ $user->id }}" method="POST">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-link">Delete</button>
                        </form></li>
                    </ul>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>

@endsection
