@extends('layout.plantilla');
@section('titulo', 'GearsOFWar5');
@section('contenido')
<div class="container" style="background-color: black;">
    <div class="row ">
        <div class="col-sm-12">
            <h1 class="text-white text-center display-3"> Trailer</h1>
            <p class="text-center"><iframe width="560" height="315" src="https://www.youtube.com/embed/V1TeLxpEZNk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe></p>
            <br>
            <p>
            <h1 class="text-white text-center display-3">Portada</h1>
            </p>
            <p class="text-center">
                <img src="{{ asset('img/g5p.png')}}" alt="">
            </p>
            <p>
            <h1 class="text-white text-center text-justify">Historia</h1>
            </p>
            <p class="text-white  text-justify">
                Tras los eventos de Gears of War 4, el mundo se está desmoronando. La dependencia de la tecnología de
                los humanos se ha convertido en su caída y los enemigos se están uniendo para eliminar a todos los
                sobrevivientes.

                La narrativa del juego se centra en Kait Díaz, mientras viaja a través de Sera para descubrir los
                orígenes de Locust e intenta rescatar a los miembros de su pueblo que fueron secuestrados.
            </p>
            <p class="text-white text-justify">
                <img style="float:left; margin:10px;" src="{{ asset('img/g51.jpg')}}" height="200xp" />
                Kait, JD, Del y Marcus viajan hasta las ruinas de la instalación de Azura con el objeto de preparar el
                lanzamiento de un prototipo de satélite del Martillo del Alba para poder restaurar la red de control del
                arma de destrucción masiva. El grupo logra lanzar exitosamente el satélite y regresan a la capital de la
                CGO, Nueva Ephyra. Sin embargo cuando llegan, se enteran de que Baird no ha podido localizar el resto de
                satélites; para complicar más el asunto, Jinn descubre el lanzamiento y ordena a Baird apagar el
                sistema, ya que iría en contra de la última voluntad de Anya la cual pidió antes de morir que el
                martillo fuera desactivado permanentemente. En ese momento Jinn recibe un reporte de que el Asentamiento
                2 está bajo ataque por el Enjambre y envía al escuadrón de JD a ayudar en la evacuación la cual está
                siendo dirigida por Clayton Carmine y su sobrina, Lizzie.
            </p>
            <p class="text-white text-justify">
                <img style="float:right; margin:10px;" src="{{ asset('img/g52.png')}}" height="200xp" />
                JD y su equipo son asistidos por un Gear llamado Fahz Chutani el cual guarda un profundo resentimiento
                hacia JD y Del por un oscuro episodio del pasado que ocasionó que ambos decidieran desertar de la CGO.
                El incidente en cuestión ocurrió durante una manifestación anti gobierno en la cual Fahz ordenó a un
                escuadrón de drones abrir fuego contra los manifestantes. En un momento de tensión durante la lucha,
                Fahz revela que JD ordenó abrir fuego contra los revoltosos causando que Kait y Del perdieran la
                confianza en JD. Mientras los ataques del Enjambre se intensifican y amenazan con destruir el convoy de
                transporte de civiles evacuados, entonces JD, ordena a Baird disparar el Martillo contra las hordas del
                Enjambre usándose como señuelo destruyendo a las criaturas, pero el Martillo sufre una falla en su
                funcionamiento causando que dispare sin control ocasionando no solamente la muerte de Lizzie sino de
                cientos de civiles.
            </p>
            <br>
            <br>
            <p class="text-white text-justify">
                Cuatro meses después del desastre con el Martillo del Alba, Kait y Del logran llegar hasta una aldea de
                forasteros, construida sobre los restos del Gusano Perforador para intentar convencer a su líder quien
                resultó ser Oscar, de que se unan a la CGO en un intento por detener al Enjambre. Oscar se niega, pero
                la discusión se interrumpe cuando el Enjambre ataca la aldea, obligando a todos a defenderse;
                lamentablemente, Kait es abducida por un Raptor el cual entra en su mente obligándola a ver vividas
                visiones del Enjambre atacando a los aldeanos, incluyendo la muerte de su tío a manos de un Alcaide.
            </p>
            <p class="text-white text-justify">
                <img style="float:left; margin:10px;" src="{{ asset('img/g53.jpg')}}" height="200xp" />
                Los refuerzos de la CGO liderados por JD (quien tiene lastimado aun el brazo derecho a raíz del
                accidente con el Martillo del Alba) y Marcus llegan a tiempo para evacuar a los aldeanos que pudieron
                ser salvados. Kait, aún consternada por la muerte de su tío, les cuenta a todos sobre las visiones que
                tuvo, por lo que Marcus le aconseja buscar las instalaciones del Centro de Investigación Nueva Esperanza
                acompañada por Del. Una vez en las instalaciones, Marcus les explica que la instalación fue usada por el
                científico Niles Samson para experimentar con niños que resultaron infectados por la exposición directa
                a la Imulsión. Tras reunir una serie de pistas, la pareja se dirige al Monte Kadar, una antigua
                instalación controlada por los Locust.
            </p>
            <p class="text-white text-justify">
                <img style="float:right; margin:10px;" src="{{ asset('img/g54.jpg')}}" height="200xp" />
                Cuando Kait y Del ingresan al interior de un laboratorio secreto de la CGO oculto dentro de la montaña,
                allí descubren que Niles está vivo, en la forma de una Inteligencia Artificial. Niles revela que el
                resultado final de experimentar con niños infectados por la exposición directa a la Imulsión y las
                criaturas nativas de la Hondonada serían finalmente, los Locust. Myrrah era una humana la cual tenía una
                inmunidad completa a la Imulsión que fue usada para los experimentos que crearon a los Locust; al contar
                con su ADN, Myrrah podía controlar a las criaturas. Sin embargo, se vengó cuando su hija recién nacida,
                Reyna, la madre de Kait, fue expulsada del laboratorio por el padre de Reyna, lo que finalmente llevó a
                los Locust a volverse contra los científicos y obtener su independencia. Solo años más tarde, después de
                colonizar la Hondonada, los Lambent comenzaron a invadir.
            </p>
            <p class="text-white text-justify">
                <img style="float:left; margin:10px;" src="{{ asset('img/g55.jpg')}}" height="200xp" />
                El odio de Myrrah por la humanidad y la invasión de Lambent la llevaron a liderar un genocidio contra la
                humanidad. Kait queda horrorizada al descubrir que el Enjambre ha determinado que ella fue elegida para
                ser la reina y exige a Niles que le ayude a separar su conciencia de la mente colectiva del Enjambre.
                Niles pone a Kait en una máquina especial de escaneo cerebral, que separa con éxito a Kait de la red
                mental colectiva del Enjambre, pero también despierta la conciencia de Reyna, que se revela que está con
                vida, pero conectada por completo a la mente colectiva del Enjambre. Niles luego intenta huir pero es
                destruido por una de sus propias creaciones, la Matriarca. Al darse cuenta de que una Reyna renacida es
                ahora la nueva Reina del Enjambre, Kait reafirma la necesidad de la CGO de reactivar el Martillo del
                Alba.
            </p>
            <p class="text-white text-center">
            <h1 class="text-white text-center">
                jugadas de Multijugador
            </h1>
            </p>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/nXEqIIYOcS8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </p>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/DPRwG-aA3cg"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </p>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/dFaqmZgH5I4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </p>
        </div>
    </div>
</div>
@endsection
