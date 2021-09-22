@extends('layout.plantilla');
@section('titulo', 'GearsOFWar');
@section('contenido')

<div class="container" style="background-color: black">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h1 class="display-2 text-white text-center">¿Que es Gears Of War?</h1>
            <h5>
                <p class="text-white">Gears of War es un videojuego de disparos en tercera persona, del género
                    acción-aventura y estrategia, desarrollado por Epic Games utilizando el motor de videojuego Unreal
                    Engine 3. Gears of War fue publicado por Microsoft Game Studios para la consola Xbox 360 el 1 de
                    noviembre de 2006 en América del Norte, el 5 de noviembre en Europa, el 6 de noviembre en Australia
                    y el 10 de enero de 2007 en Japón.</p>
            </h5>
            <br>

            <h1 class="text-white">Historia</h1>
            <br>
            <p class="text-white text-justify">Todo comienza en un planeta ficticio llamado Sera, en la cual se gestaron
                las guerras del péndulo, la cual duró 79 años, cuando la CGO peleaba contra la URI (por sus siglas en
                español) o también conocida como Unión de Repúblicas Independientes, al querer su dominio sobre la
                inmulsion, una fuente de energía (similar al petroleo de la Tierra). la CGO robó el arma más poderosa de
                la URI, llamada Martillo del Alba, así la CGO podría causar más daño a la URI y obligarlos a rendirse.
                Tras la rendición de la URI, todo fue paz, pero solo dos semanas después, los locust, una especie de
                forma humanoide que vivía en el subsuelo de Sera, emergen a la superficie, ya que, con la minería de la
                imulsion, los tuneles Locust se ven afectados e inundados, y los lambent (Locusts infectados por la
                imulsion) les estaban ganando terreno a pasos agigantados. Los locust habían estado llevando una
                ensangrentada y cruda lucha contra los Lambents, así que la reina Myrrah (la reina de los Locusts)
                enfadada por ello reunió a sus tropas y los guio a la superficie bajo la excusa de que es la parte de
                Sera que los Locusts merecían. Ese día fue llamado "EL DÍA DE LA EMERGENCIA" o "DÍA E". Cuando eso pasó,
                los locust querían tomar todo el planeta, eliminando en tan solo las primeras 26 horas a un tercio de la
                población humana. Tras todo eso comienza el argumento del juego.
                Argumento</p>
            <br>
            <h1 class="text-white text-center">Personajes Principales</h1>
            <br>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-sm-3">
            <div class="card" style="height: 44rem;">
                <img class="card-img-top" src="{{asset('img/marcus.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text">Marcus Michael Fenix, líder del pelotón Delta e hijo del conocido científico
                        militar Adam Fenix, es un soldado decidido e ingenioso que no ve sus actos como algo heroico,
                        sino como una simple necesidad. Antes de su condena, Marcus era un soldado condecorado y un gran
                        líder. Ahora, este héroe caído podría ser la última esperanza de la supervivencia de la
                        humanidad.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem;">
                <img class="card-img-top" src="{{asset('img/dom.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text">Dominic "Dom" Santiago, Soldado Comando de las Fuerzas Armadas de la Coalición
                        de Gobiernos Ordenados. Es un duro guerrero que posee una actitud positiva incluso en los peores
                        momentos. Liberó a su mejor amigo, Marcus Fenix, de la Cárcel de Máxima Seguridad de Jacinto y
                        lo reclutó para el pelotón Delta. Luego de perder todo por lo que luchaba, Dom se descuidó
                        mucho, participó durante la Pandemia Lambent y se sacrifico para salvar a Delta en la Misión a
                        Mercy.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem;">
                <img class="card-img-top" src="{{asset('img/anto.png')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text">El Soldado Anthony Carmine fue el hermano de Benjamin Carmine y Clayton
                        Carmine. Fue el miembro más joven de Delta-Uno, Anthony compensa su falta de experiencia con un
                        entusiasmo desenfrenado y verdadero respeto por los veteranos de guerra como Marcus y Dom. De
                        hecho, él es tan entusiasta que que corre y no se cubre, desobedeciendo completamente la Regla
                        de oro de los Gears. </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem;">
                <img class="card-img-top" src="{{asset('img/any.png')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text">La Teniente Anya Stroud fue una oficial Gear del Ejército de la CGO y la única
                        hija de la comandante Helena Stroud. Se unió al ejército CGO para seguir los pasos de su madre,
                        pero a diferencia de ella, Anya se convirtió en una oficial de comunicaciones del CIC. Participo
                        en las Guerras del Péndulo, en la Guerra Locust y finalmente en la Pandemia Lambent solo que
                        durante la Pandemia ella se volvió Gear de Primera Línea.
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-3">
            <div class="card" style="height: 44rem;">
                <img class="card-img-top" src="{{asset('img/hoff.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text">El Coronel Victor Hoffman es un soldado inteligente, pragmático y un oficial
                        Gear de alto rango condecorado.
                        Hoffman es un guerrero natural, que surgió de las filas para ganar una comisión, y se hizo un
                        nombre como nuevo teniente de empuje en comando en el cerco de Anvil Gate. Él no tiene interés
                        en los trabajos de escritorio. Él prefería coger su rifle y encargarse de unos cuantos Locust.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem;">
                <img class="card-img-top" src="{{asset('img/au.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text">Augustus "El Tren" Cole, soldado especialista de las Fuerzas Armadas de la
                        Coalición de Gobiernos Ordenados, fue un exitoso jugador de Thrashball conocido por su
                        extravagante y contundente estilo. Después del Día de la Emergencia, Cole se unió al Ejército
                        CGO como un Gear donde se le conoce por su encantador carácter. Cole ha pasado la mayor parte de
                        su carrera militar junto a su amigo, Damon Baird.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem;">
                <img class="card-img-top" src="{{asset('img/damon.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text">El Cabo Damon S. Baird, anteriormente Teniente, fue un soldado Gear, genio en
                        varios campos técnicos, mecánicos y científicos. Es experto en recolectar, analizar y descifrar
                        tanto armas Locust, como otros tipos de equipos, artefactos y documentos, también se destaca por
                        ser un gran ingeniero, creando distintos artefactos y reparando maquinaria avanzada de la CGO.
                        Líder del Escuadrón Kilo junto a Sofía Hendrick, Garron Paduk y Augustus Cole.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem;">
                <img class="card-img-top" src="{{asset('img/my.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text">La Reina Myrrah (también conocida como el sujeto de prueba EV-184-9) fue la
                        principal líder de la Horda Locust, siendo la cabeza y eje del sistema de organización social de
                        los Locust. Curiosamente ella es humana, pero a pesar de esto representaba el centro de la
                        devoción y alabanzas de los Locust.

                        Myrrah formaba parte de los experimentos de Niles Samson destinados a crear soldados que no
                        desobedecieran órdenes a partir de niños enfermos por exposición prolongada a la Imulsión.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-white text-center">Criaturas</h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('img/des.png')}}" alt="First slide" height="700rem">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Los Desgraciados o Infames son criaturas provenientes de la Hondonada </h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('img/cor.png')}}" alt="Second slide" height="700rem">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Los Corpser son criaturas de la Hondonada esclavizadas por la Horda Locust.</h5>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('img/boo.png')}}" alt="Third slide" height="700rem">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Los Boomer son una de las variantes de dron más reconocibles dentro de la Horda Locust.
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('img/ber.png')}}" alt="Fourth slide" height="700rem">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Las Berserkers son la versión femenina de los Drones de la Horda Locust. </h5>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('img/kry.png')}}" alt="Fifth slide" height="700rem">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Las Berserkers son la versión femenina de los Drones de la Horda Locust. </h5>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('img/bru.png')}}" alt="First slide" height="700rem">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Los Brumaks fueron una de las especies más grandes de criaturas de la Hondonada</h5>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('img/rea.png')}}" alt="First slide" height="700rem">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Los Reavers o Buitres, como son llamados por algunos Gears como Dizzy Wallin, son
                                grandes</h5>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('img/hy.jpg')}}" alt="First slide" height="700rem">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>La Hydra es una criatura, por lo visto única, proveniente de la Hondonada y domesticada
                                por la Horda Locust</h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <h1 class="text-white text-center">Lugares Mas Famosos</h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center"> Jacinto</h3>
            </p>
            <p class="text-white text-justify">Jacinto fue una ciudad ubicada en la parte superior de la Meseta de
                Jacinto. Fue la base de la CGO y la ciudad más importante después del día de la emergencia. La ciudad
                fue considerada como una de las ciudades más bellas de Sera y fue la capital de la Operación: Tormenta
                en la Hondonada pero fue hundida por la CGO para hundir Nexus, la capital de la Horda Locust.</p>
            <img src="{{asset('img/jacinto.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center"> Cárcel de Máxima Seguridad de Jacinto</h3>
            </p>
            <p class="text-white text-justify">La Cárcel de Máxima Seguridad de Jacinto, conocida por el nombre de
                Establecimiento de servicios de prisión Hesketh o por su apodo "The Slab" es una prisión de Ephyra, la
                cual albergaba a los peores criminales, durante el periodo de las Guerras del Péndulo. El Sargento
                Marcus Fenix estuvo encerrado durante 4 años.</p>
            <img src="{{asset('img/carcel.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center"> Ephyra</h3>
            </p>
            <p class="text-white text-justify">Ephyra fue la capital de la CGO y la nación de Tyro durante las Guerras
                del Péndulo. La ciudad fue construida sobre el inexpugnable Meseta de Jacinto, pero una vez fue atacada
                por la Horda Locust en el Día de la Emergencia y cayó ante los Locust una década después, sufriendo
                daños catastróficos. Durante el día, gran parte de la ciudad estaba bajo el control total de los Locus
            </p>
            <img src="{{asset('img/ep.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center"> Tumba de los Desconocidos</h3>
            </p>
            <p class="text-white text-justify">La Tumba de los Desconocidos fue un gran cementerio en el cual yacían los
                cadáveres de los Gears más importantes en la historia de la Coalición de Gobiernos Ordenados. Tumba de
                los Desconocidos. Se situaba en la misma calle que la Casa de los Soberanos, en la ciudad de Ephyra. Fue
                construida en honor de todos los Gears caídos en las Guerras del Péndulo, y a los héroes que por su
                valentía y honor habían recibido la Estrella Embry.</p>
            <img src="{{asset('img/tu.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center"> Estación de Timgad</h3>
            </p>
            <p class="text-white text-justify">La Estación de Timgad fue una de las muchas estaciones en donde pasaban
                los Trenes de Levitación Magnética, como el Pilar de Tyro. Se encuentra en el Este de Timgad, y estaba
                cerca de la Academia de la Barricada Este. Esta estación vio mucha acción en las ultimas horas de la
                Ofensiva de Masa Ligera.
            </p>
            <img src="{{asset('img/ti.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center"> Central de Energía Timgad</h3>
            </p>
            <p class="text-white text-justify">La Central de Energía Timgad fue la principal fuente de poder del Este de
                Timgad, así como del Puente Timgad. Durante la Ofensiva de Masa Ligera la mayor parte de los mecanismos
                en la Central fueron seriamente dañados o incluso destruidos, Marcus y Dom fueron capaces de derrotar a
                un Brumak gracias a múltiples corrientes de energía en la central.</p>
            <img src="{{asset('img/cen.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
</div>
@endsection
