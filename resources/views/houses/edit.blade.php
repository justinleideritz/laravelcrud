<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @include('/houses/header')
    <br>
    <h1>Edit</h1>
    <br>
    <form action="{{route('houses.update', ['house' => $house])}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="titel" class="form-label">Titel</label>
            <input type="text" class="form-control" id="titel" aria-describedby="emailHelp" name="titel" value="{{$house->titel}}">
        </div>
        <div class="mb-3">
            <label for="oppervlakte" class="form-label">Oppervlakte</label>
            <input type="text" class="form-control" id="oppervlakte" name="oppervlakte" value="{{$house->oppervlakte}}">
        </div>
        <div class="mb-3">
            <label for="prijs" class="form-label">Prijs</label>
            <input type="number" class="form-control" id="prijs" name="prijs" value="{{$house->prijs}}">
        </div>
        <div class="mb-3">
            <label for="beschrijving" class="form-label">Beschrijving</label>
            <input type="text" class="form-control" id="beschrijving" name="beschrijving" value="{{$house->beschrijving}}">
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
        <br>
        @include('/houses/back')
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>