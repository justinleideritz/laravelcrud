<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .create-btn {
            text-decoration: none;
            border: solid 1px;
            border-radius: 5px;
            margin-left: 5px;
            padding: 5px;
        }
        .create-btn:hover{
            background-color: blue;
            color: white;
            border: none;
        }
        .bekijk,
        .edit,
        .delete {
            display: inline-block;
            padding: 1px 10px;
            margin: 5px;
            border: none;
            color: #fff;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }   

        .bekijk {
            background-color: #14b36e;
            border-radius: 5px;
        }

        .edit {
            background-color: #2c58bf;
            border-radius: 5px;
        }

        .delete {
            background-color: #bf542c;
            border-radius: 5px;
        }

        .bekijk:hover {
            background-color: #128e54;
        }

        .edit:hover {
            background-color: #1f428a;
        }

        .delete:hover {
            background-color: #a53d1f;
        }
    </style>
</head>
<body>
   @include('/houses/header')
   <br>
    <h1>Beschikbare woningen</h1>
    <br>
    <div>
        <a class="create-btn" href="{{route('houses.create')}}">Woning toevoegen</a>
    </div>
    <br>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titel</th>
      <th scope="col">Oppervlakte</th>
      <th scope="col">Prijs</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($houses as $house)
                <tr>
                    <td>{{$house->id}}</td>
                    <td>{{$house->titel}}</td>
                    <td>{{$house->oppervlakte}} m2</td>
                    <td>€ {{$house->prijs}}</td>
                    <td>
                        <form action="{{route('houses.show', $house->id)}}" method="get">
                            <input class="bekijk" type="submit" value="Bekijk  ">
                        </form>
                    </td>
                    <td>
                    <form action="{{route('houses.edit', ['house' => $house])}}" method="get">
                            <input class="edit" type="submit" value="Edit">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('houses.delete', ['house' => $house])}}" method="post">
                            @csrf
                            @method("delete")
                            <input class="delete" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
   </div>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>