<main>

  @foreach ($paste as $pasta => $dettagli)
    <h2>{{$pasta}}</h1>
    <div class="card_container d-flex flex-wrap">

    @foreach ($dettagli as $dettaglio)
          <div class="card">
            <a href="#">
              <img src="{{$dettaglio['src']}}" alt="" class="pasta_img">
              <div class="hover_card">
                <div class="details_container">
                  <img src="{{asset('img/icon.svg')}}" alt="" class="icon_forks">
                  <h2>{{$dettaglio['titolo']}}</h2>
                  <h4>Tempo di cottura: {{$dettaglio['cottura']}}</h4>   
                </div>
              </div>
            </a>
          </div>
    @endforeach

  </div>
  @endforeach

</main>
