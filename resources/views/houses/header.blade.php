<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <h4 style="margin-right: 30px;">Vakantiewoningen</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto"> <!-- Align items to the right with ml-auto -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('houses.index') }}">Home</a>
        </li>
        <li class="nav-item">
          @if (Auth::check())
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="nav-link active" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); this.closest('form').submit();">
                  Logout
              </a>
            </form> 
          @else
            <a href="{{ route('login') }}">Login</a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
