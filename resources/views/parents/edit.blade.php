<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Parents</title>
</head>
<body>

    <h1>Edit Parents</h1>

    <form action="{{ route('parents.update', $parents->id) }}" method="post">
        @method('put')
        @csrf
        <label for="name">Name *</label> <br>
        <input type="text" name="name" value= "{{$parents->name}}">

        <br><br>
        <select name="gender" id= ""value= "{{$parents->name}}">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="N/A">N/A</option>
        </select>
        
        <br><br>
        <button type="submit">Edit Parents</button>
    </form>
</body>
</html>