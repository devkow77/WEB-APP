@include('shared.html')

  @include('shared.head', ['pageTitle' => "Wycieczka {$trip->name}"])
  <body>
    @include('shared.navbar')

    <div id="wycieczki" class="container mt-5">
        <div class="row text-center">
          <h1>Wycieczka</h1>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-3 mx-auto">
            <div class="card">
              <img src="{{ asset($trip->img) }}" class="card-img-top" alt="{{ $trip->name }}">
              <div class="card-body">
                  <h5 class="card-title">{{$trip->name}}</h5>
                  <p class="card-text">{{$trip->description}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    @include('shared.footer')
</html>
