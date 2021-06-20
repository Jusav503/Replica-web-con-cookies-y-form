@extends('templates.home')
@section('title', 'Inntuyo')

@section('headerText')
    <div class="caption">
        <h2>Crea y organiza tus eventos en minutos</h2>
        <p><a href="" title="contacta con nosotros" class="btn btn-primary rounded-pill btn-lg">Contacta</a></p>
    </div>
@endsection

@section('content')
    <main>
        <section id="introduction">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6">
                        <h3>Inntuyo es una herramienta para profesionales que quieren tener el control absoluto</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-9">
                        <h4>Como profesional organizador de eventos necesitas una herramienta fácil, intuitiva y que te permita la máxima flexibilidad a la hora de gestionar la venta de entradas e invitaciones.</h4>
                        <p>Inntuyo es la herramienta que se adapta a tus necesidades y que evoluciona constantemente gracias a las peticiones de nuestros clientes para que puedas hacer más cosas en menos tiempo y no tengas que preocuparte por la plataforma de ticketing.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h5>Tantos eventos como necesites</h5>
                        <p>Inntuyo se adapta a tus necesidades, desde un sólo evento a tantos como necesites.</p>
                    </div>
                    <div class="col-sm-3">
                        <h5>Conecta cada evento con su pasarela de pago</h5>
                        <p>Cada evento puedes conectarlo con la plataforma de pago que desees. Ideal si quieres que los pagos vayan directos a tus clientes.</p>
                    </div>
                    <div class="col-sm-3">
                        <h5>Tipos de entradas ocultas para público seleccionado</h5>
                        <p>Puedes generar entradas sólo accesibles desde una url concreta. ideal para ofrecer entradas especiales a colectivos, etc.</p>
                    </div>
                    <div class="col-sm-3">
                        <h5>Diseño libre de las entradas</h5>
                        <p>Sólo respeta un espacio para el QR y los datos básicos, el resto usa tu creatividad.</p>                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-7">
                            <h5>Y muchas más funcionalidades, no dudes en contactar con nosotros y te proporcionaremos un acceso a nuestro entorno de pruebas.</h5>
                        </div>
                    </div>
                </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6">
                        <h3>Contacta con nosotros</h3>
                        <p>Rellena el siguiente formulario o llámanos al 902 027 310 o por correo electrónico a <a href="mailto:info@studiogenesis.es">info@studiogenesis.es</a>.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form action="{{route('inntuyo.addData')}}" method="POST">
                            @csrf
							<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Escribe tu nombre" required="required" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        <input type="text" class="form-control" placeholder="Escribe tus apellidos" name="surname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Empresa</label>
                                        <input type="text" class="form-control" placeholder="Nombre de tu empresa" required="required" name="company">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Sitio web</label>
                                        <input type="text" class="form-control" placeholder="Sitio web de tu empresa" name="companyWebsite">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        <input type="text" class="form-control" placeholder="Escribe tu teléfono" required="required" name="phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Correo electrónico</label>
                                        <input type="text" class="form-control" placeholder="Escribe tu correo electrónico" required="required" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">¿Qué necesitas?</label>
                                        <textarea id="" rows="5" class="form-control" placeholder="Explicanos cuales son tus necesidades" name="requests"></textarea>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">¿Quieres dejarnos un comentario?</label>
                                        <textarea id="" rows="5" class="form-control" placeholder="Añade un comentario" name="commentary"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="textolegal">
                                        <label class="form-check-label" for="textolegal">He leído y acepto la <a href="texto-legal.php" title="Leer la política de privacidad">política de privacidad</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary rounded-pill">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <style>
        /* main */
        main {padding: 3rem 0 0 0;}
        main h4 {color: #666;}
        main p {color: #666; font-size: 1.2rem;}

        #introduccion {padding-top: 3rem; padding-bottom: 5rem;}
        #introduccion h3 {font-size: 2.5rem; margin-bottom: 2rem;}

        #features {padding-top: 3rem; padding-bottom: 3rem;}
        #features .row {padding-bottom: 3rem;}
        #features h5 {font-size: 1.3rem; font-weight: 600;}

        #contact {background: #8011BA; padding-top: 3rem; padding-bottom: 3rem; color: #fff;}
        #contact p {color: #fff; margin-bottom: 2rem;}
        #contact a {color: #fff; text-decoration: underline;}
        #contact .alert a {color: #856404;}
        .form-control {opacity: .8;}
        .form-control:focus {outline: none;}

        #ok, #ko {padding-top: 2rem;}
    </style>
@endsection

