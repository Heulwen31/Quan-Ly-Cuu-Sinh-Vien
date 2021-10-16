<h1>{{ $pageName }}</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $row)
        <tr>
            <td><a href="/admin/info/{{$row->id}}">{{ $row->id }}</a></td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>
                <a href="/admin/info/edit/{{$row->id}}">Edit</a>
                <form method="POST" action="/admin/info/delete/{{$row->id}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>