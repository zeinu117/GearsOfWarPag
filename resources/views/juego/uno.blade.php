@extends('layout.plantilla');
@section('titulo', 'GearsOFWar 1');
@section('contenido')

<div class="container" style="background-color: black;">
    <div class="row ">
        <div class="col-sm-12">
            <h1 class="text-white text-center display-3"> Trailer</h1>
            <p class="text-center"><iframe width="560" height="315" src="https://www.youtube.com/embed/GQ0gm6C0NLQ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe></p>
            <br>
            <p>
                <h1 class="text-white text-center display-3">Portada</h1>
            </p>
            <p class="text-center">
                <img src="{{ asset('img/g1p.png')}}" alt="">
            </p>
            <p>
            <h1 class="text-white text-center text-justify">Historia</h1>
            </p>
            <p class="text-white text-justify">
                El argumento de la entrega comienza 14 años después del Día de la Emergencia, en la Cárcel de Máxima
                Seguridad de Jacinto. En ella se encuentra aún preso el Cabo Marcus Michael Fenix por desobedecer
                órdenes a principios de la Guerra Locust. Es entonces inesperadamente liberado por el también Cabo y
                viejo amigo de Fenix, Dominic Santiago, bajo un nuevo mandato de la CGO de indultar a los prisioneros
                para reclutarlos en el ejército. Marcus es incorporado al pelotón Delta. Después de un combate contra
                Drones Locust, ambos consiguen escapar de la cárcel en un Helicóptero Multipropósito King Raven, en el
                cual se encuentran también el Teniente Minh Young Kim y el Cabo Anthony Carmine.

            </p>
            <p class="text-white text-justify">
                <img style="float:right; margin:10px;" src="{{ asset('img/g1.png')}}" />Más adelante, el Raven aterriza
                y Delta se encuentra con el Coronel Victor Hoffman y la Teniente Anya
                Stroud en la Plaza de Embry, donde son súbitamente emboscados por unidades Locust. Durante el tiroteo,
                Hoffman le explica a Kim su plan para acabar con la Horda Locust usando una Bomba de Masa Ligera, para
                el cual requiere que Delta busque al pelotón Alfa dentro de la Plaza de Embry y, junto con ellos,
                obtengan el Resonador Sónico que los ayudará a escanear los túneles de la Hondonada, hábitat de la Horda
                Locust.
            </p>
            <br>
            <br>
            <p class="text-white text-justify">
                Después de despejar e inspeccionar la Plaza de Embry y de no obtener resultados positivos, el escuadrón
                recibe órdenes para alargar la búsqueda a la Casa de los Soberanos. Al arribar al edificio, descubren
                que el lugar fue tomado por los Locust, y deben enfrentar a unos cuantos de ellos. Cuando creen haber
                limpiado el lugar, el Cabo Anthony Carmine es asesinado por el disparo de un Francotirador durante un
                descuido. Delta debe entonces contener a los refuerzos Locust.
            </p>
            <p class="text-white text-justify">
                <img style="float:left; margin:10px;" src="{{ asset('img/g12.png')}}" /> Dentro de la Casa de los
                Soberanos, el pelotón encuentra y rescata al supuesto único sobreviviente de Alfa, el soldado Augustus
                Cole. Debido a la interferencia provocada por los Sembradores, el objetivo prioritario de los Gears se
                vuelve el acabar con las mencionadas criaturas para restablecer la comunicación, haciendo uso del
                Martillo del Alba. Una vez restaurada la conexión, Delta tiene contacto con otro miembro de Alfa, el
                soldado Damon Baird, quien conserva el Resonador Sónico y aguarda apoyo junto con otros dos Gears. Delta
                se apresura y se reúne con Alfa fuera de la Casa de los Soberanos, encontrando únicamente vivo a Baird.
            </p>
            <br>
            <p class="text-white text-justify">
                <img style="float:right; margin:10px;" src="{{ asset('img/g13.png')}}" />Mientras esperan su extracción,
                numerosos Locust preparan una emboscada a sus alrededores, y, cuando el King Raven finalmente aparece,
                es derribado por Nemacysts. El Tte. Kim es sorprendido por la espalda por el General RAAM, quien lo
                ejecuta a sangre fría. Los Gears restantes, superados en número y siguiendo el objetivo de obtener el
                Resonador, se resguardan en la Tumba de los Desconocidos. Dentro de este sitio, el equipo debe lidiar
                con una Berserker, a quien deben encaminar al patio para poder eliminarla con el Martillo del Alba.
            </p>
            <p class="text-white text-justify">
                Una vez calcinada la Berserker, Delta se comunica con Control para reportar su situación. El Cnel.
                Hoffman ordena al pelotón dirigirse a la Fábrica de Imulsión de Lethia para activar el Resonador, no sin
                antes ascender a Marcus Fenix al rango de Sargento. No serían transportados en helicóptero al lugar, por
                lo que Dominic Santiago tiene la idea de visitar a un conocido superviviente y pedirle un Junker.
            </p>


            <p class="text-white text-justify">
                <img style="float:left; margin:10px;" src="{{ asset('img/g14.png')}}" />En el refugio de supervivientes,
                Dom conversa con un viejo conocido suyo, Franklin Tsoko, para conseguir el vehículo. Él accede
                obteniendo a cambio el quedarse temporalmente con Cole y Baird como guardaespaldas. Marcus y Dom tienen
                entonces que ir por el Junker a la Gasolinera de Chaps, siendo dirigidos por Franklin mediante el
                Comunicador. La caída de la noche provoca inconvenientes a Delta pues la aparición del Kryl hace que
                demoren más de lo esperado.
            </p>
            <br>
            <br>
            <p class="text-white text-justify">
                Tras superar dos puntos de control, Marcus y Dom llegan finalmente a la gasolinera, donde se encuentran
                con Chaps, el dueño del lugar. Debido a que éste pensó que los Gears no conseguirían llegar por la
                presencia de los Kryl, no cargó de gasolina el vehículo, por lo que tuvo que hacerlo a destiempo.
                Mientras Chaps hacía su trabajo, ocurrió un inesperado ataque Locust que debieron repeler Marcus y Dom.
                Al estar listo el Junker, ambos lo abordaron en dirección al asentamiento de supervivientes, dejando a
                Chaps solo e indefenso ante un gran número de enemigos.
            </p>
            <p class="text-white text-justify">
                <img style="float:right; margin:10px;" src="{{ asset('img/g15.png')}}" />De vuelta en el refugio, Marcus
                y Dom se encuentran con un tiroteo entre los supervivientes y fuerzas Locust, por lo que deben ayudar.
                Después de despejar el lugar, Delta sube al Junker y emprende su camino a la fábrica. Poco antes de
                llegar, el vehículo se descompone y deben continuar a pie. En la entrada de la fábrica, se dividen en
                dos grupos para conseguir más rápido el objetivo. Durante el operativo, descubren que dentro del lugar
                hay unidades Locust, así como Desgraciados Lambent. Logran satisfactoriamente llegar al cuarto de
                control de la fábrica y usar carros de mina para ser transportados a la Hondonada Exterior mediante
                elevadores y acercarse más a su objetivo.
            </p>
            <p class="text-white text-justify">
                <img style="float:left; margin:10px;" src="{{ asset('img/g16.png')}}" />Una vez bajo tierra y aún
                separados en grupos, coinciden en una estación de bombeo subterránea, en la cual pretenden activar el
                Resonador Sónico y escanear los túneles de la Hondonada. Acabados todos los Locust que se encontraban en
                la estación, pusieron en marcha el Resonador mientras volvían a la superficie mediante un elevador.

                Fuera de la Hondonada, el Resonador detona, y por un momento los Gears suponen que la misión está
                terminada.
            </p>
            <p class="text-white text-justify">
                <img style="float:right; margin:10px;" src="{{ asset('img/g17.png')}}" />Sin embargo, en seguida son
                contactados por Control para informarles que las ondas del Resonador no habían sido capaces de explorar
                completamente los túneles de la Hondonada, y que ni siquiera 100 de ellos lo lograrían. No obstante, el
                soldado Damon Baird pronto ofrece una solución demostrando que un Geobot puede escanear más datos de los
                túneles que el Resonador. Los datos del Resonador que le muestra a su equipo y a Control mediante JACK
                provienen de la Academia de la Barricada Este, específicamente de la Mansión Fenix. Delta recibe
                entonces órdenes de dirigirse ahí para obtener más datos, y para ello, son recogidos por dos King
                Ravens. Desafortunadamente, dentro de la Hondonada el General RAAM escucha la conversación a través de
                un Casco CGO de un Gear capturado, y tiene la oportunidad de mandar unidades a obstaculizar la misión.
            </p>
            <p class="text-white text-justify">
                Uno de los King Ravens es derribado, por lo que el King Raven de Delta aterriza con la intención de
                ayudar a los afectados. Después de atravesar la Academia y encontrarse con los sobrevivientes al
                accidente, Delta se separa nuevamente, y mientras que Cole y Baird se quedan a apoyar a los heridos,
                Marcus y Dom continúan a la Mansión Fenix.
            </p>
            <p class="text-white text-justify">
                <img style="float:left; margin:10px;" src="{{ asset('img/g18.png')}}" />Para llegar a su nuevo objetivo,
                Marcus y Dom deben cruzar un invernadero, en el cual se encuentran con otra Berserker. Tras conseguir
                erradicarla con el Martillo del Alba, avanzan para encontrarse con más unidades de infantería Locust.
                Después de llegar a la mansión, se reencuentran con Baird y Cole, al tiempo en que Anya les comunica que
                hay actividad sísmica dentro del lugar. Dom y Marcus toman el riesgo y entran en ella, encontrándose
                evidentemente con una gran defensiva Locust.
            </p>
            <p class="text-white text-justify">
                Mientras combatían a los hostiles, se encaminaron al sótano para encontrar el laboratorio de Adam Fenix,
                el padre de Marcus, pues ahí encontrarían los datos. Anya se muestra sorprendida al descubrir la enorme
                cantidad de túneles que existían en la Hondonada, una vez que JACK entró al sistema. Debido a la gran
                suma de datos, JACK debe quedarse a descargarlos mientras que Marcus y Dom se reagrupan con el resto de
                Delta en la parte posterior de la Mansión.
            </p>
            <p class="text-white text-justify">
                <img style="float:right; margin:10px;" src="{{ asset('img/g19.png')}}" />Al reencontrarse, Delta se
                encuentra con numerosas tropas Locust asediando la Mansión. Afortunadamente, Baird había reparado un APC
                y lo pudieron usar como vehículo de escape una vez que JACK terminó la recopilación de datos. Casi antes
                de partir, un Brumak aparece y Delta apenas logra huir de él.
                A salvo de la batalla, Delta se comunica con Control, y este les avisa que la Bomba de Masa Ligera se
                encuentra en un tren en dirección a un sumidero de Imulsión. Por ello, son mandados a la Estación de
                Timgad, pues por ahí pasaría el Tren de Tyro que deberían abordar para ingresar los datos recopilados en
                la Mansión Fenix y que así la Bomba detonara satisfactoriamente en la Hondonada.
            </p>
            <p class="text-white text-justify">
                En su camino hacia la estación, se encuentran con un puente levadizo averiado, por lo que deben, como
                objetivo secundario, reactivar los cables eléctricos para seguir el camino. El pelotón se separa
                continuamente para llegar a los cables, pero sin embargo, el Brumak de la Mansión Fenix reaparece y
                dificulta en diversas ocasiones los movimientos del escuadrón.
            </p>
            <p class="text-white text-justify">
                <img style="float:left; margin:10px;" src="{{ asset('img/g110.png')}}" />Reparados los cables, Anya les
                comunica que con ello no sería suficiente, y debían ahora trasladarse a la Central Eléctrica de Timgad y
                restablecer la energía. Después de activar unas válvulas de la central, Baird comunica que aún
                necesitarían algo grande para conectar dos transformadores y la energía volviera. Marcus tiene una idea,
                y para ello enfrentan al Brumak que los había estado persiguiendo para usarlo como enlace entre los
                transformadores.
            </p>
            <p class="text-white text-justify">
                <img style="float:right; margin:10px;" src="{{ asset('img/g111.png')}}" />Después de desarmarlo, Marcus
                y
                Dom provocaron al Brumak para que los persiguiera, logrando así que se atorara con los cables, conectara
                los transformadores y muriera electrocutado, mientras al mismo tiempo restablecía la electricidad.
                Gracias a ello, el puente levadizo bajó y los Gears pudieron finalmente atravesarlo en el
                Transportatropas Blindado. Delta entonces recibe indicaciones de que el control del tren había sido
                perdido, y ahora deberían abordarlo mientras cruzara por la estación Timgad. El pelotón se apresura para
                llegar a tiempo.
            </p>
            <p class="text-white text-justify">
                Ya en la estación, Delta se encuentra con Francotiradores y Drones esperándolos. En pleno combate, el
                tren comienza a pasar, así que Marcus y Dom se acercan esperando el momento adecuado para subir a él.
                Consiguen saltar y caer dentro, pero Cole y Baird no lo logran y se quedan en la estación.
            </p>
            <p class="text-white text-justify">
                <img style="float:left; margin:10px;" src="{{ asset('img/g112.png')}}" />A bordo del Pilar de Tyro,
                Marcus y Dom se comunican con Control, quien les informa que el tren está repleto de unidades Locust.
                Los Gears se encuentran en el último vagón del vehículo, por lo que deben avanzar a través de los demás
                vagones para alcanzar la Bomba de Masa Ligera. Después de limpiar varios carros de unidades Locust,
                entre las que se sumaron una Berserker, Reavers y Desgraciados Lambent, llegan al carro en el que se
                encuentra la Bomba, donde también estaba esperándolos el infame General RAAM.
            </p>
            <br>
            <br>
            <p class="text-white text-justify">
                <img style="float:right; margin:10px;" src="{{ asset('img/g113.png')}}" />Con ayuda de un King Raven de
                apoyo tripulado por Cole, Baird y Hoffman, Marcus y Dom logran acabar con RAAM después de un largo y
                arduo combate. Marcus se encarga de colocar los datos en la Bomba, y es recogido por el Raven justo
                antes de que el tren cayera al sumidero de Imulsión.

                Dentro del sumidero, la Bomba detonó satisfactoriamente y cuantiosos misiles fueron disparados hacia
                puntos estratégicos de la Hondonada donde moraban los Locust. El bombardeo fue un éxito, y una gran
                cantidad de Locust murieron, incluyendo a los Kryl quienes se extinguieron.

                La historia concluye con un discurso optimista del Coronel Victor Hoffman, quien se muestra complacido
                con los resultados de la ofensiva. Sin embargo, la Reina Myrrah también tiene un breve diálogo, en el
                que menciona que no se rendirán y continuarán la batalla hasta ganarla o morir. Desaparece montando al
                Hydra, mientras observa a la lejanía el bombardeo.
            </p>
            <p class="text-white text-center">
            <h1 class="text-white text-center">
                jugadas de Multijugador
            </h1>
            </p>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZKXX4KQNoQg"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </p>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/8V46gb2ao_4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </p>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/evOAQl4oz44"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </p>
        </div>
    </div>

</div>

@endsection
