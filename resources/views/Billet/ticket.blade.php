   <h1> Ticket pour match </h1>
      {{$mtcheequipe->equipe->nom}}  VS
      {{$mtcheequipe->equipeB->nom}}<br/>
{{$b->user->name}}<br/>
{{$b->user->prenom}}<br/>


<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate('{{$b->user->cin}}{{$b->user->id}}')) !!} ">


<h3>test  qr code</h3>


