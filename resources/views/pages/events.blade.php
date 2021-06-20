@extends('templates.home')
@section('title', 'Eventos')

@section('headerText')
    <div class="caption">
        <h2>Próximos eventos</h2>
    </div>
@endsection

@section('content')
<main>
    <div class="container">
        <div class="row">
            @foreach ($events as $event)    
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$event->title}}</h4>
                            <h6>{{$event->subtitle}}</h6>
                            <h6>{{$event->date}}</h6>
                            <div class="form-group">
                                <span>{{$event->city}},</span>
                                <span> {{$event->province}}</span>
                            </div>
                            <h6>{{$event->description}}</h6>
                            <h6>{{$event->organizer_name}}</h6>
                            <h6>{{$event->organizer_phone}}</h6>
                            <h6>{{$event->organizer_email}}</h6>
                            <h6>{{$event->organizer_website}}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row soon">
            <div class="comingSoon">
                <h3>Próximamente muchos más eventos en nuestra web.</h3>
                <h3>¡¡¡NO TE LO PIERDAS!!!</h3>
            </div>
        </div>
    </div>
</main> 
<style>
    .card{margin: 20px 0 20px 0;}
    .soon{display: flex; justify-content: center}
    .comingSoon{margin: 20px 0 20px 0; text-align: center}
</style>
@endsection