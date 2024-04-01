<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
    }
    th, td {
        padding: 12px 15px;
        text-align: left;
    }
    th {
        background-color: #3498db;
        color: #fff;
        text-transform: uppercase;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #e2e2e2;
    }
 
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #ecf0f1;
    }
    h1 {
        text-align: center;
        margin-bottom: 30px;
    }
    </style>

</head>
<body>
<h2>Cities</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
        
        
    @foreach ($cities as $item)

    <tr>
        <td>{{ $item->id}} </td>
        <td>{{ $item->name }} </td>
    </tr>

    @endforeach
    
        
    </tbody>
</table>
</body>
</html>