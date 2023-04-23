<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Parents</title>
</head>
<body>

    <h1>Create Parents</h1>

    <form action="{{ route('parents.store') }}" method="post">
        @csrf
        <label for="name">Name *</label>
        <input type="text" name="name">

        <br><br>
        <select name="gender" id=" ">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="N/A">N/A</option>
        </select>
        
        <br><br>
        <button type="submit">Create Parents</button>
    </form>
</body>
</html>