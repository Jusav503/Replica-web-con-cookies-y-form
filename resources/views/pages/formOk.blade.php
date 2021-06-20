@extends('templates.notifications')
@section('title', 'Inntuyo')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="ok">
                        <div class="alert alert-success">Mensaje enviado correctamente, en breve contactaremos contigo.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="image">
                    <img src="https://www.bigg.ly/images/upload_success.png" alt="oso contento" width="350vw">
                </div>
            </div>
        </div>
    </main>
    <style>
        .image{display: block; margin: auto;}
    </style>
@endsection