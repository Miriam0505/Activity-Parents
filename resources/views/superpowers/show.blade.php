<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superpowers Name</title>
</head>
<body>
    <h1>{{ $superpowers->name }}</h1>
    <p>{{ $superpowers->description}}</p>

    <a href="{{ route('superpowers.edit', $superpower->id)}}">Edit superpowers</a>
    <for action="{{ route('superpowers.destroy', $superpowers->id) }}" method="pots">
        @method('delete')
        @csrf

        <br><button type="submit" onclick="return confirm('Are you sure you want to delete this record?')">Delete superpowers</button>
    </form>
    
</body>
</html>