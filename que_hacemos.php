<html>
    <head>
        <title>Que Hacemos</title>
        <style>
            @import "css/jquery-ui-1.10.4.custom.min.css";
            @import "css/base.css";
            @import "css/component.css";
        </style>
        <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/jquery.grid.thumbnail.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#accordion").accordion({
                    event: "click hoverintent",
                    heightStyle: "content"
                });
                initGrids();               
            });

            function initGrids() {
                $("#og-grid1").thumbnail();
                $("#og-grid2").thumbnail();
                $("#og-grid3").thumbnail();
            };

            $.event.special.hoverintent = {
                setup: function () {
                    $(this).bind("mouseover", jQuery.event.special.hoverintent.handler);
                },
                teardown: function () {
                    $(this).unbind("mouseover", jQuery.event.special.hoverintent.handler);
                },
                handler: function (event) {
                    var currentX, currentY, timeout,
                            args = arguments,
                            target = $(event.target),
                            previousX = event.pageX,
                            previousY = event.pageY;

                    function track(event) {
                        currentX = event.pageX;
                        currentY = event.pageY;
                    }
                    ;

                    function clear() {
                        target
                                .unbind("mousemove", track)
                                .unbind("mouseout", clear);
                        clearTimeout(timeout);
                    }

                    function handler() {
                        var prop,
                                orig = event;

                        if ((Math.abs(previousX - currentX) +
                                Math.abs(previousY - currentY)) < 7) {
                            clear();

                            event = $.Event("hoverintent");
                            for (prop in orig) {
                                if (!(prop in event)) {
                                    event[ prop ] = orig[ prop ];
                                }
                            }
                            // Prevent accessing the original event since the new event
                            // is fired asynchronously and the old event is no longer
                            // usable (#6028)
                            delete event.originalEvent;

                            target.trigger(event);
                        } else {
                            previousX = currentX;
                            previousY = currentY;
                            timeout = setTimeout(handler, 100);
                        }
                    }

                    timeout = setTimeout(handler, 100);
                    target.bind({
                        mousemove: track,
                        mouseout: clear
                    });
                }
            };
        </script>
    </head>
    <body>
        <div id="accordion">
            <h3 class="s1">Levantamiento / Modelajes Acústicos</h3>
            <div class="text-accordion">
                <p>
                    Nuestro departamento de Integración de Audio y Video, recopila la información suficiente para realizar una simulación del 
                    recinto y con la ayuda de la exclusiva herramienta de diseño acústico Modeler® de BOSE se determinar la configuración y 
                    ubicación ideal de los equipos y altavoces; previendo así que se reduzcan ecos indeseados, excesiva reverberación y espacios 
                    con caídas de sonido. 
                </p>
                <div class="main">
                    <ul id="og-grid1" class="og-grid">
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://worldwide.bose.com/pro/en_us/web/modeler_software/page.html')" data-largesrc="img/hacemos/modelaje/01.jpg" data-title="Bose Modeler®" data-description="Bose® Modeler Software System, es un programa de diseño y análisis acústico para los diseñadores de sistemas de sonido o consultores acústicos. Utilizando un modelo 3D computarizado, del espacio acústico y algoritmos acústicos de avanzada, Modeler puede predecir el rendimiento de un sistema de sonido. El primer software de sistema de sonido para ofrecer la predicción completa STI, Modeler ha sido un líder en la predicción del rendimiento del sistema de sonido durante más de 25 años.">
                                <img src="img/hacemos/modelaje/01.jpg" alt="Bose Modeler®"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://worldwide.bose.com/pro/en_us/web/modeler_software/page.html')" data-largesrc="img/hacemos/modelaje/02.jpg" data-title="Bose Modeler®" data-description="Bose® Modeler Software System, es un programa de diseño y análisis acústico para los diseñadores de sistemas de sonido o consultores acústicos. Utilizando un modelo 3D computarizado, del espacio acústico y algoritmos acústicos de avanzada, Modeler puede predecir el rendimiento de un sistema de sonido. El primer software de sistema de sonido para ofrecer la predicción completa STI, Modeler ha sido un líder en la predicción del rendimiento del sistema de sonido durante más de 25 años.">
                                <img src="img/hacemos/modelaje/02.jpg" alt="Bose Modeler®"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://worldwide.bose.com/pro/en_us/web/auditioner_playback_system/page.html')" data-largesrc="img/hacemos/modelaje/03.jpg" data-title="Bose Auditioner®" data-description='Bose Auditioner system technology permite al diseñador del sistema, consultor acústico y cliente, "pasear dentro" del modelo y experimentar con precisión el rendimiento del sistema de sonido propuesto. El sistema de reproducción Auditioner patentado, utiliza una disposición específica de los altavoces de campo cercano y procesamiento de señales patentado, para ofrecer con precision ondas de sonido a los oídos de los oyentes, por lo que se puede escuchar el sonido como lo harían en el lugar real. Tecnología Auditioner está habilitado con el software Bose® Modeler® Plus.'>
                                <img src="img/hacemos/modelaje/03.jpg" alt="Bose Auditioner®"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://worldwide.bose.com/pro/en_us/web/auditioner_playback_system/page.html')" data-largesrc="img/hacemos/modelaje/04.jpg" data-title="Bose Auditioner®" data-description='La implementacion de esta tecnologia, brinda a nuestros clientes la alternativa de poder escuchar la solucion final planteada mucho antes de realizar la inversion. De esta forma se garantiza que la solucion planteada cumple con las espectativas. De la mano de nuestros Ingenieros, se ralizan las modificaciones al modelo hasta alcanzar la calidad requerida.'>
                                <img src="img/hacemos/modelaje/04.jpg" alt="Bose Auditioner®"/>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://www.sketchup.com/es/products/sketchup-pro')" data-largesrc="img/hacemos/modelaje/05.jpg" data-title="Arquitectura" data-description="Trabajamos con Arquitectos y software de diseño de arquitectura, para diseñar modelos semejantes a las areas de interes. De esta forma grarantizamos, en todo momento, la calidad y fidelidad de nuestras propuestas.">
                                <img src="img/hacemos/modelaje/05.jpg" alt="Modeler"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://www.autodesk.es/products/autocad/overview')" data-largesrc="img/hacemos/modelaje/06.jpg" data-title="Modelado Arquitectónico" data-description="Trabajamos con Arquitectos y software de diseño de arquitectura, para diseñar modelos semejantes a las areas de interes. De esta forma grarantizamos, en todo momento, la calidad y fidelidad de nuestras propuestas.">
                                <img src="img/hacemos/modelaje/06.jpg" alt="Modeler"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('img/hacemos/modelaje/07.jpg')" data-largesrc="img/hacemos/modelaje/07.jpg" data-title="Levantamiento" data-description="Nuestros asesores, les visitaran para recopilar los datos necesarios y realizar los modelos computarizados. Podemos trabajar sobre planos existentes del area o diseños realizados con softwares de diseños arquitectonicos">
                                <img src="img/hacemos/modelaje/07.jpg" alt="Modeler"/>
                            </a>
                        </li>                      
                    </ul>
                </div>
            </div>

            <h3 class="s2">Altavoces, Sistemas Lineales</h3>
            <div class="text-accordion">
                <p>
                    Entendemos la importancia de que tiene el mensaje a transmitir y que se logre entender con absoluta claridad. 
                    En Akustik trabajamos con las principales marcas que existen (ver nuestras marcas), para poder cumplir con este objetivo. 
                    Tenemos alternativas para lugares con acústica incontrolables como lo son iglesias,
                    estos sistemas permiten un resultado sorprendentemente eficaz, que reproduce la voz
                    de forma clara e inteligible.
                </p>
                <div class="main">
                    <ul id="og-grid2" class="og-grid">
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://worldwide.bose.com/pro/en_us/web/l1_model2/page.html')" data-largesrc="img/hacemos/speakers/01.jpg" data-title="Bose® L1" data-description="Aumente su rendimiento con el sistema L1 Modelo II, nuestro más avanzado sistema de amplificación portátil para músicos, DJs y oradores públicos. El altavoz ofrece 180 grados de cobertura de sonido horizontal y nuestra más suave equilibrio tonal-a través del escenario y en toda la habitación. Incluye un módulo de graves B2 para una mayor flexibilidad y un mayor poder en el extremo inferior. </br> Al igual que el galardonado sistema original Bose L1, el sistema de sonido Modelo II es una innovación de todo-en-uno que reemplaza los monitores convencionales, mezcladoras y altavoces PA.">
                                <img src="img/hacemos/speakers/01.jpg" alt="Bose® L1"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://worldwide.bose.com/pro/en_us/web/fs_ds_16s_16se_loudspeakers/page.html')" data-largesrc="img/hacemos/speakers/02.jpg" data-title="Bose® FreeSpace®" data-description="Altavoces de montaje en superficies, entry-level de rango completo, diseñados para música de fondo y reproducción de voz en una amplia gama de aplicaciones instaladas. Amplio (170° x 160°) patrón de cobertura y rango de frecuencia hasta 80 Hz. La mejor opcion para pequeños y medianos locales comerciales">
                                <img src="img/hacemos/speakers/02.jpg" alt="Bose® FreeSpace®"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://worldwide.bose.com/pro/en_us/web/roommatch_rm5505/page.html')" data-largesrc="img/hacemos/speakers/03.jpg" data-title="Bose® RoomMatch®" data-description="RoomMatch® array ofrece una calidad de sonido excepcional, para el personal de las instalaciones fijas, en casi cualquier tamaño de habitación, forma, requisito acústico o presupuesto. La superación de las limitaciones acústicas de los diseños convencionales tanto de arreglo lineal y de fuentes puntuales, los módulos RoomMatch® forman una nueva clase de arreglo curvilíneo que permite una calidad de sonido sin fisuras, con el equilibrio tonal uniforme de adelante hacia atrás y de lado a lado.">
                                <img src="img/hacemos/speakers/03.jpg" alt="Bose® RoomMatch®"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://yorkville.com/installation/coliseum_mini/product/c120/')" data-largesrc="img/hacemos/speakers/04.jpg" data-title="Yorkville Coliseum Mini Series" data-description="Trabajamos con diferentes marcas para ofrecer la mejor solucion que se adapte a su presupuesto y necesidad. Nuestros productos son garantizados directamente desde el fabricante y con garantia real, desde 1 a 5 años">
                                <img src="img/hacemos/speakers/04.jpg" alt="Yorkville Coliseum Mini Series"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://worldwide.bose.com/pro/en_us/web/panaray_ma12_modular_line_array_loudspeaker/page.html')" data-largesrc="img/hacemos/speakers/05.jpg" data-title="Bose® Panaray" data-description="Los parlantes modulares Panaray, son especialmente diseñados para ambientes de mucha reverberacion y con acusticas incontrolables. Su diseño en forma de cilindro, ademas de su ingenieria, lo hacen la opcion perfecta para aplicaciones en iglesias y lugares donde la linea de vision se pueda ver obstruida, como es el caso de anfiteatros.">
                                <img src="img/hacemos/speakers/05.jpg" alt="Bose Modeler®"/>
                            </a>
                        </li>
                        
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://www.yamahaproaudio.com/global/en/products/speakers/vxc/index.jsp')" data-largesrc="img/hacemos/speakers/06.jpg" data-title="Yamaha®" data-description="Yamaha ha diseñado los nuevos altavoces VXC y VXS para dar cabida a una creciente lista de aplicaciones en el mercado de la instalación. Aunque estos altavoces ofrecen una calidad de sonido Yamaha por excelencia, también han sido cuidadosamente diseñados para una instalación segura y fácil. Con dos opciones, de techo y montaje de pared, estas series de altavoces incluyen una amplia gama de modelos que están disponibles en negro o blanco, o se pueden pintar para que coincida con el interior de cualquier aplicación.">
                                <img src="img/hacemos/speakers/06.jpg" alt="Yamaha®"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://worldwide.bose.com/pro/en_us/web/modeler_software/page.html')" data-largesrc="img/hacemos/speakers/07.jpg" data-title="Yamaha®" data-description="Por más de 30 años de Yamaha ha entregado la más alta calidad para aplicaciones de audio profesionales. Los amplificadores de la serie TN recientes, alcanzaron nuevas alturas en el poder, la eficiencia, la calidad de sonido y una alimentación de baja impedancia. Y ahora los amplificadores de la serie TXn pueden reunir varias tecnologías Yamaha líderes en la industria para lograr la máxima potencia, procesamiento y rendimiento de la red.">
                                <img src="img/hacemos/speakers/07.jpg" alt="Yamaha®"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <h3 class="s3">Microfonía y Sistemas de Votación</h3>
            <div class="text-accordion">
                <p>
                    De acuerdo a la necesidad  del cliente ofrecemos la línea de microfonía adecuada para asegurar la calidad y 
                    confiabilidad en la voz.</br>
                    Utilizamos sistemas de votación con opciones de hardware y software integrales, potentes, escalables y flexibles
                    que puede ajustarse a las necesidades o protocolos específicos de cualquier grupo u organización, desde los ayuntamientos
                    a las empresas globales. 
                </p>
                <div class="main">
                    <ul id="og-grid3" class="og-grid">
                        <li>
                            <a href="javascript:void(0)" data-click="open_win('http://worldwide.bose.com/pro/en_us/web/l1_model2/page.html')" data-largesrc="img/hacemos/speakers/01.jpg" data-title="Bose® L1" data-description="Aumente su rendimiento con el sistema L1 Modelo II, nuestro más avanzado sistema de amplificación portátil para músicos, DJs y oradores públicos. El altavoz ofrece 180 grados de cobertura de sonido horizontal y nuestra más suave equilibrio tonal-a través del escenario y en toda la habitación. Incluye un módulo de graves B2 para una mayor flexibilidad y un mayor poder en el extremo inferior. </br> Al igual que el galardonado sistema original Bose L1, el sistema de sonido Modelo II es una innovación de todo-en-uno que reemplaza los monitores convencionales, mezcladoras y altavoces PA.">
                                <img src="img/hacemos/speakers/01.jpg" alt="Bose® L1"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <h3 class="s4">Sistemas de Video Conferencia</h3>
            <div class="text-accordion">
                <p>
                    Los sistemas de videoconferencia y su aplicación, ha sido un reto que hemos asumido en los últimos años para brindar 
                    a nuestros clientes soluciones de alta calidad de la mano de marcas reconocidas a nivel mundial, dando respaldo y garantía.
                </p>

            </div>

            <h3 class="s5">Procesamiento y Automatización de Sonido</h3>
            <div class="text-accordion">
                <p>
                    La tecnología está en constante avance, y el audio no se escapa de eso!</br>
                    Por lo que sistemas programados mediante red en cualquier lugar, acceso controlado al  equipo, estética, 
                    ahorro de espacio, son algunos de los beneficios de los sistemas de procesamiento y automatización, simplificando su 
                    uso y haciendo que el usuario pueda utilizarlo sin inconveniente después de una breve explicación. 
                </p>
            </div>

            <h3 class="s6">Sistemas de Voceo y Evacuación</h3>
            <div class="text-accordion">
                <p>
                    La seguridad no tiene precio! Proporcionar a recintos de cualquier tamaño un sistema de megafonía y evacuación por voz eficiente y flexible, 
                    con la seguridad y confianza que usted necesita, localizar a personas en cualquier lugar del establecimiento, dar indicaciones
                    claras ante cualquier suceso, evacuar de la forma correcta ante cualquier emergencia y mantener la comunicación aún 
                    entre edificios es posible mediante los sistemas que BIAMP nos brinda, y que a través de Bansbach Acoustics da la solución integral.
                </p>

            </div>

            <h3 class="s7">Tratamientos Acústicos</h3>
            <div class="text-accordion">
                <p>           
                    El ruido en algunos lugares ha sido una limitante para aprovechar el espacio, un obstáculo para lograr alcanzar la 
                    satisfacción de quienes lo habitan o bien un reto para los que desean llevar a cabo algún proyecto personal o profesional.</br> 
                    ¡Lo entendemos! Por lo que diseñar soluciones apropiadas de control de sonido para todo tipo de espacios comerciales, 
                    independientemente de su tamaño o presupuesto; ofreciendo una amplia gama de productos atractivos y rentables de todas 
                    las categorías que le ayudará a maximizar la apariencia y el sonido de cualquier diseño.
                </p>

            </div>

            <h3 class="s8">Servicio de Instalación y Mantenimiento</h3>
            <div class="text-accordion">
                <p>
                    En cada instalación, procuramos dejar nuestra marca de excelencia.</br> 
                    Personal altamente capacitado por nuestras marcas 
                    así como la experiencia de 17 años en diferentes proyectos como gimnasios, colegios, iglesias católicas y cristianas, 
                    salas de reuniones, municipalidades, etc nos da la oportunidad de asegurar que nuestro servicio de instalación y 
                    mantenimiento dará una solución que se ajuste al presupuesto, necesidad y expectativa de nuestros clientes.
                </p>

            </div>

        </div>
    </body>
</html>
