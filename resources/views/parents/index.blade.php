<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero Parents</title>
</head>
<body>
    <br><a href="{{ route('parents.create') }}">Create Parents</a>
    <h1>Parents</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>

        <tbody>
            @forelse($parents as $parent)
            <tr>
                <td>{{ $parents->id }}</td>
                <td>
                    <a href="{{  route('parents.show', $parents->id) }}">{{ $parents->name }}</a>
                </td>
                <td>{{ $parents->gender }}</td>
            </tr>
            @empty
                <p>No record found</p>
            @endforelse
        </tbody>
    </table>

    <br><a href=" {{ route('parents.create') }}">Create Parents</a>

</body>
</html>