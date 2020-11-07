@extends ('layouts.master2')

@section('tittle', 'Loging')
@section('navbar')
<h3>Usuario: {{$user}}</h3>
<h4>Key: {{$key}} </h4>

@stop 

@section('made')
<center><div><h1 style="font-size: 800%" >Pintoras Y Pintores</h1></div></center>
<br><br><br>

<div class="card mb-3" style="max-heihgt: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img src="https://scontent.fcuu1-1.fna.fbcdn.net/v/t1.0-9/96363735_1898770320253691_41258641256349696_o.jpg?_nc_cat=109&ccb=2&_nc_sid=9267fe&_nc_ohc=Uc3jtZaswJ0AX90ZWK1&_nc_ht=scontent.fcuu1-1.fna&oh=ea0f5fc13abaa5f8f6bbf281f4f34207&oe=5FCD6EE4" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Koi Samsa</h5>
        <p class="card-text">
            _id: 5ed8175a91abbafcb010a22e <br>
            Española<br>
            Patricia es diseñadora especializada en branding, y comunicación corporativa, docente, twittera, directora de arte, vlogger… Esto es sólo una parte de lo que es Koi Samsa.
            Actual Talent Manager de Tuiwok Estudios, se dedica a encontrar y potenciar talento en YouTube. </p>
        <p class="card-text"><small class="text-muted"><em>"...la palabra y el discurso son imprescindibles en todo lo que hago..."</em></small></p>
      </div>
    </div>
  </div>
</div>

        
<div class="card mb-3" style="max-heihgt: 540px;">
<div class="row no-gutters">
  <div class="col-md-4">
    <img src="https://static.wixstatic.com/media/defe22_2b3e6514a869472e8cf4a16827dec68e~mv2_d_2774_2119_s_2.jpg/v1/fill/w_635,h_485,al_c,q_90,usm_0.66_1.00_0.01/defe22_2b3e6514a869472e8cf4a16827dec68e~mv2_d_2774_2119_s_2.webp" class="card-img" alt="...">
  </div>
  <div class="col-md-8">
    <div class="card-body">
      <h5 class="card-title">Elly Smallwood</h5>
      <p class="card-text">
          _id: 5ed8175a91abbafcb010a230<br>
          Canadiense <br>
          Corriente: Moderno-Impresionismo <br>
          Se graduó con su BFA en Dibujo y Pintura en 2011. Sus pinturas son intensamente personales, una exploración visual de su mente y cuerpo, y los de las personas que la rodean.
      <p class="card-text"><small class="text-muted"><em>"I aim to break down my own personal boundaries and push myself to use abandon when I would normally use caution, to destroy those marks which I begin to hold as precious. These pieces are an exploration of the innocent and the grotesque; delicate figures become unnerving and soft colours are smeared across figures. In my works I see a twisted view of self, a visceral representation of how I view humanity, particularly in regards to my own body."</em></small></p>
    </div>
  </div>
</div>
</div>


<div class="card mb-3" style="max-heihgt: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://wallup.net/wp-content/uploads/2016/01/41765-Zdzis%C5%82aw_Beksi%C5%84ski-fantasy_art-artwork.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Zdzislaw Beksinski</h5>
        <p class="card-text">
            Polaco <br>
            Corriente: Surrealismo, Arte Contemporaneo <br>
            Ejecutó sus dibujos y pinturas de un género que él mismo llamó barroco o gótico. El primer estilo es dominado por la representación, los mejores ejemplos vienen de su periodo de Realismo fantástico, cuando pintó imágenes distorsionadas de un ambiente surrealista y de pesadillas. El segundo estilo es más abstracto, siendo dominado por la forma, y está tipificado por las últimas pinturas de Beksínski.
        <p class="card-text"><small class="text-muted"><em></em></small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-heihgt: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/edf00730248953.561a99826290b.jpg" class="card-img" alt="..." height= "50%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Jaime Ruíz</h5>
        <p class="card-text">
            _id: 5ed8175a91abbafcb010a231<br>
            Colombiano <br>
            Corriente: Impresionismo-Charcoal <br>
        <p class="card-text"><small class="text-muted"><em>"La abstracción, la disminución a los rasgos fisionómicos, es sin lugar a duda un intento por transcribir el cúmulo de sensaciones que el individuo retratado suscita en mí, y esta reacción emocional y subjetiva condiciona el conjunto de las formas de cada pintura dentro de un compendio lingüístico determinado. Busco además transformar el estereotipo de un retrato convencional, que únicamente simula la individualidad concreta en una imagen, proceso donde el rostro humano aparece en los límites de su disolución."</em></small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-heihgt: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://i.pinimg.com/236x/4a/b0/11/4ab011e33a4c5d55e15606e8c86f4ccb.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">La Rouille (Liam Decay)</h5>
        <p class="card-text">
            _id: 5ed8175a91abbafcb010a232<br>
            Frances <br>
            Corriente: Moderno-Charcoal<br>
            Autodidacta, La rouille descubrió la pintura tarde en las exploraciones urbanas. Atraído por las atmósferas únicas que emergen de estos espacios urbanos abandonados por el hombre, su enfoque se centra en el daño relacionado con la historia y el tiempo, así como con el físico y el memorial.
        <p class="card-text"><small class="text-muted"><em>"The silhouettes bring to life for a brief moment, to these forgotten places. Often resonate with his own ghosts and those who haunt these various locations."</em></small></p>
      </div>
    </div>
  </div>
</div>
@stop

@section('by', 'Jaime Obbed Tarango Ramírez 5°E')