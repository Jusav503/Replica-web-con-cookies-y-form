@extends('templates.notifications')
@section('title', 'Inntuyo')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="ko">
                        <div class="alert alert-warning">Ha ocurrido un error, por favor, vuélvelo a intentar o llámanos al 902 027 310 o envíanos un correo electrónico a <a href="mailto:info@studiogenesis.es" title="envíanos un correo electrónico">info@studiogenesis.es</a>.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="image">
                    <img src="https://cdn.dribbble.com/users/553713/screenshots/9804065/media/38eca43ccc0434c03ea4eff8e73cf893.png?compress=1&resize=400x300" alt="oso triste" width="350vw">
                </div>
            </div>
        </div>
    </main>
    <style>
        .image{display: block; margin: auto;}
    </style>
@endsection