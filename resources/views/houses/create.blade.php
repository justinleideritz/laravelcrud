<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('/houses/header')
    <br>
    <h1>Woning toevoegen</h1>
    <br>
    <form action="{{route('houses.store')}}" method="post">
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="titel" class="form-label">Titel</label>
            <input type="text" class="form-control" id="titel" aria-describedby="emailHelp" name="titel">
        </div>
        <div class="mb-3">
            <label for="oppervlakte" class="form-label">Oppervlakte</label>
            <input type="text" class="form-control" id="oppervlakte" name="oppervlakte">
        </div>
        <div class="mb-3">
            <label for="prijs" class="form-label">Prijs</label>
            <input type="number" class="form-control" id="prijs" name="prijs">
        </div>
        <div class="mb-3">
            <label for="beschrijving" class="form-label">Beschrijving</label>
            <input type="text" class="form-control" id="beschrijving" name="beschrijving">
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
    @include('/houses/back')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>