<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <title>Your Page Title</title>
</head>
<body>
    @include('/houses/header')
    <br>
    <h1>Details</h1>
    <br>
    <ul class="list-group">
        <li class="list-group-item"><strong>Titel:</strong> {{$house->titel}}</li>
        <li class="list-group-item"><strong>ID:</strong> {{$house->id}}</li>
        <li class="list-group-item"><strong>Oppervlakte:</strong> {{$house->oppervlakte}} m2</li>
        <li class="list-group-item"><strong>Prijs:</strong> € {{$house->prijs}}</li>
        <li class="list-group-item"><strong>Beschrijving:</strong> {{$house->beschrijving}}</li>
    </ul>
    @include('/houses/back')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
