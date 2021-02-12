<main>

  @foreach ($paste as $pasta => $dettagli)
    <h2>{{$pasta}}</h1>
    <div class="card_container d-flex flex-wrap">
    @foreach ($dettagli as $dettaglio)

          <div class="card">
            <a href="#">
              <img src="{{$dettaglio['src']}}" alt="">
            </a>
          </div>

    @endforeach
  </div>
  @endforeach

</main>
