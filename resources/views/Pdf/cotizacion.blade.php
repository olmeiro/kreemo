<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .page-break {
            page-break-after: always;
        }

        /* .titulo{
            border:2px solid #616A6B;
            /* border-radius: 15px; */
            padding: 10px;
            background-color: red;
        } */

        .titulo h1{
            text-align:  center;
        }
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 4.6cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3.6cm;
            background-color: #C0504D;
            color: white;
            padding: 20px;
            /* text-align: center; */
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1.7cm;
            background-color: #C0504D;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        .p1 {
            text-align:  right;
            color: rgb(207, 7, 7);
        }
        table.vini,tr.vini, td.vini {
            border: 5px solid white;
            border-collapse: collapse;
            text-align: center;
        }

        table.v2,tr.v2, td.v2, th.v2{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
        }
        table.v3,tr.v3, td.v3, th.v3{
            border: 1px solid black;
            border-collapse: collapse;

        }
        tr.v3{
            text-align: center;
        }

        th, td {
            padding: 5px;
        }
        .PCA {
            text-align:  center;
            color: rgb(66, 9, 223);
        }

        .PCB {
            text-align:  left;
            color: rgb(66, 9, 223);
        }

        .p2 {
            color: rgb(66, 9, 223);
        }
        .p3 {
            color: red;
        }

        /* td.v2{
            text-align: center;
        } */

        .fz {
        font-size: 65%;
        }
        .fz2 {
        font-size: 80%;
        text-align: justify;
        }

        .fz3 {
        font-size: 75%;
        }
        .Pag{
            text-align: right;
        }

    </style>
    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(270, 820, "P??g $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
    </script>

</head>
<body>
    <header class="titulo">
        {{-- <h1>Informe de Cotizaci??n</h1>
        <p>Cotizaci??n N?? {{$input["txtNumeroCotizacion"]}}</p> --}}
        <table class="vini" style="width:100%">
            <tr class="vini" >
            <!-- <th class="foto" rowspan="3"><img src="{{ asset('http://127.0.0.1:8000/assets/dashboard/assets/img/logovinicol.jpg') }}" style="width: 150px; height: 100px"></th> -->
            <th class="foto" rowspan="3"><img src="" style="width: 150px; height: 100px">Vinicol</th>
            <td class="vini" >PROPUESTA COMERCIAL</td>
                <td class="vini" >VERSI??N 001</td>
            </tr>
            <tr>

                <td class="vini"  rowspan="2">POR D??AS</td>
                <td class="vini" >FECHA Agosto 3 2018</td>
            </tr>
            <tr>
                <td class="vini" >C??DIGO: F-CM -010</td>
            </tr>
        </table>
    </header>
    @foreach($cotizacion as $value)
    <H4>Medell??n, {{$value->fechaCotizacion}}</H4>
    @endforeach
    <br>
    <br>
    <p class="p1">PROPUESTA N?? {{$input["id"]}}</p>
    <b>Se??ores</b><br>
    @foreach($cotizacion as $value)
    <b>{{$value->nombre_obra}}</b>
    @endforeach
    <br>
    @foreach($cotizacion as $value)
    <b>{{$value->nombre_empresa}}</b>
    @endforeach
    <br>
    <br>
    <p> VINICOL BOMBEOS tiene el gusto de presentar la siguiente propuesta de servicios de transporte de concreto al interior de la obra.</p>
    <br>
    <p>Esperamos que la soluci??n presentada cumpla con los requerimientos y expectativas de ustedes.</p>
    <br>
    <p>Estamos atentos a resolver las inquietudes que consideren necesarias.</p>
    <br>
    <p>Atentamente,</p>
    <br>
    <p>BIBIANA SANCHEZ</p>
    <p>DIRECTORA COMERCIAL</p>
    <footer>
        <strong class="Pag">Pag 1</strong>
    </footer>
    <div class="page-break"></div>
    <br>
    <br>
    <p class="p2" >TABLA DE CONTENIDO</p>
    <br>

    <table style="width:100%">
        <tr>
            <td>1.  INFORMACI??N DE LA EMPRESA </td>
            <td class="text-align:  right";>3</td>
        </tr>
        <tr>
            <td>2.  INFORMACI??N DE LA OBRA </td>
            <td class="text-align:  right";>4</td>
        </tr>
        <tr>
            <td>3.  PROPUESTA ECON??MICA </td>
            <td class="text-align:  right";>4</td>
        </tr>
        <tr>
            <td>4.  ALCANCE DEL SERVICIO  </td>
            <td class="text-align:  right";>5</td>
        </tr>
        <tr>
            <td>5.  RESPONSABILIDAD VINICOL BOMBEOS </td>
            <td class="text-align:  right";>5</td>
        </tr>
        <tr>
            <td>6.  RESPONSABILIDAD DE LA OBRA</td>
            <td class="text-align:  right";>7</td>
        </tr>
        <tr>
            <td>7.  ESPECIFICACIONES DEL CONCRETO </td>
            <td class="text-align:  right";>8</td>
        </tr>
        <tr>
            <td>8.  QU?? HACER EN CASO DE VARADAS O TAPONAMIENTOS</td>
            <td class="text-align:  right";>13</td>
        </tr>
        <tr>
            <td>9.  CONDICIONES COMERCIALES </td>
            <td class="text-align:  right";>14</td>
        </tr>
        <tr>
            <td>10. CONTACTOS </td>
            <td class="text-align:  right";>14</td>
        </tr>
    </table>

    <footer>
        <strong class="Pag">Pag 2</strong>
    </footer>
    <div class="page-break"></div>

    <p class="PCA">1. INFORMACI??N DE LA EMPRESA</p>
    <br>
    <p>Fundada en el a??o 2012 en la ciudad de Medell??n dedicada a:</p>
    <p>Prestar servicios de alquiler de equipos de construcci??n: Bomba estacionaria de concreto por d??as o por mes.</p>
    <p>VINICOL est?? encaminada en la conquista de nuevas plazas para que nuestros productos y servicios puedan satisfacer las necesidades de los clientes de forma oportuna y con precios justos.</p>
    <b class="p2">Nombre de la empresa y ubicaci??n de sus oficinas principales</b>
    <p class="p3">VINICOL BOMBEOS</p>
    <p>Oficina principal: 57+4924439</p>
    <p>Cl 40 N?? 86 A- 57 Barrio La Am??rica</p>
    <b class="p2">Raz??n social:</b><b> VINICOL BOMBEOS S.A.S</b>
    <br>
    <b class="p2">Nit:</b><b> 900555303-3</b>
    <br>
    <b class="p2">R??gimen Com??n</b>
    <br>
    <br>
    <b class="p2">Correo electr??nico</b>
    <br>
    <u class="p2">bibiana@vinicolbombeos.com</u>
    <p>EQUIPOS DE LA EMPRESA</p>
    <b>??? 8 SCHWING 750-18</b><br>
    <b>??? 4 SCHWING 750-15</b><br>
    <b>??? 2 SCHWING SP 500</b><br>
    <footer>
        <strong class="Pag">Pag 3</strong>
    </footer>
    <div class="page-break"></div>
    <p class="PCA">2. INFORMACI??N DE LA OBRA</p>
    <table class="v2" style="width:100%">
        <tr>
            <th class="v2">CONCEPTO</th>
            <th class="v2">DESCRIPCI??N</th>
        </tr>
        <tr>
            <td class="v2" width="45%">Modalidad (mensualidad o d??as)</td>
            @foreach($cotizacion as $value)
            <td class="v2" style="text-align:center">{{$value->modalidad}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="v2">Etapa de la obra (Pilas o estructura)</td>
            @foreach($cotizacion as $value)
            <td class="v2" style="text-align:center">{{$value->etapa}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="v2">Inicio de bombeos (fecha)</td>
            @foreach($cotizacion as $value)
            <td class="v2" style="text-align:center">{{$value->inicioBombeo}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="v2"># Losas</td>
            @foreach($cotizacion as $value)
            <td class="v2" style="text-align:center">{{$value->losas}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="v2">Volumen promedio (mes o d??as)</td>
            @foreach($cotizacion as $value)
            <td class="v2" style="text-align:center">{{$value->metrosCubicos}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="v2">Tipo de concreto</td>
            @foreach($cotizacion as $value)
            <td class="v2" style="text-align:center">{{$value->tipo_concreto}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="v2">Tuber??a (Distancia)</td>
            @foreach($cotizacion as $value)
            <td class="v2" style="text-align:center">{{$value->tuberia}} Mts</td>
            @endforeach
        </tr>
        <tr>
            <td class="v2">Jornada laboral</td>
            @foreach($cotizacion as $value)
            <td class="v2" style="text-align:center">{{$value->jornada_nombre}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="v2">Correo electr??nico</td>
            @foreach($cotizacion as $value)
            <td class="v2" style="text-align:center">{{$value->correo1}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="v2">Celular</td>
            @foreach($cotizacion as $value)
            <td class="v2" style="text-align:center">{{$value->telefono1}}</td>
            @endforeach
        </tr>
    </table>
    <p class="PCA">3. PROPUESTA ECON??MICA</p>
    @foreach($cotizacion as $value)
    <b>POR {{$value->modalidad}} </b>
    @endforeach
    <table class="v3" style="width:100%">
        <tr>
            <th colspan="5" class="v3">PAGO ANTICIPADO</th>

        </tr>
        <tr class="v3 fz">
            <td class="v3">PROGRAMA D??AS</td>
            <td class="v3">PRECIO M3 ANTES DE IVA</td>
            <td class="v3">AIU (UTILIDAD 5%)</td>
            <td class="v3">IVA 19% DE LA UTILIDAD</td>
            <td class="v3">TOTAL</td>
        </tr>
        <tr class="v3">
            @foreach($cotizacion as $value)
            <td class="v3">Cantidad de {{$value->metrosCubicos}} m3</td>
            @endforeach

            @foreach($cotizacion as $value)
            <td class="v3">{{$value->subtotal}}</td>
            @endforeach
            @foreach($cotizacion as $value)
            <td class="v3">{{$value->AIU}}</td>
            @endforeach
            @foreach($cotizacion as $value)
            <td class="v3">{{$value->ivaAIU}}</td>
            @endforeach
            @foreach($cotizacion as $value)
            <td class="v3">{{$value->valorTotal}}</td>
            @endforeach
        </tr>
        <tr class="v3">
            <td class="v3">M3 adicional</td>
            <td class="v3">25.000</td>
            <td class="v3">1.250</td>
            <td class="v3">238</td>
            <td class="v3">25.238</td>
        </tr>
        <tr class="v3">
            <td class="v3">Transporte (un solo trayecto) Vinicol Bombeos asume el transporte de regreso a la bodega.</td>
            @foreach($cotizacion as $value)
            <td class="v3">{{$value->valorTransporte}}</td>
            @endforeach
            @foreach($cotizacion as $value)
            <td class="v3">{{$value->AIUtrans}}</td>
            @endforeach
            @foreach($cotizacion as $value)
            <td class="v3">{{$value->ivaAIUtrans}}</td>
            @endforeach
            @foreach($cotizacion as $value)
            <td class="v3">{{$value->valorTotaltrans}}</td>
            @endforeach
        </tr>
    </table>
    <br>
    <b> Nota: Estos precios est??n sujetos a visita t??cnica.</b>
    <br>
    <br>

    <footer>
        <strong class="Pag">Pag 4</strong>
    </footer>

    <div class="page-break"></div>
    <br>
    <br>

    @foreach($cotizacion as $value)
            <b><mark>Nota:{{$value->observaciones}} </mark></b>
    @endforeach

    <br>
    <br>
    <b>LETRA CHICA</b>
    <br>
    <br>
    <b> PARA PROYECTOS QUE REQUIERAN MAS DE 80 MTS DE TUBER??A Y ACCESORIOS (60 MT DE TUBOS DE 3MTS + ACCESORIOS Y MANGUERA)</b>
    <br>
    <p class="fz2">??? El transporte de la tuber??a o accesorios necesarios adicionales en la obra deben ser asumidos por la obra, PARA CASOS QUE SUPEREN EL KIT DE TUBERIA DE 80 m (60 m de tuber??a m??s 20 m de accesorios)</p>
    <p class="fz2">??? El transporte de tuber??a adicional tiene un costo de $ 80.000 por trayecto (carro de estacas caben 15 tubos =45 metros lineales)</p>
    <p class="fz2">??? Metros de tuber??a adicional al kit de la mensualidad se cotiza por aparte.</p>

    @foreach($cotizacion as $value)
            <b><mark>Nota:{{$value->observaciones2}} </mark></b>
    @endforeach


    <footer>
        <strong class="Pag">Pag 5</strong>
    </footer>
    <div class="page-break"></div>



    <p class="PCA">4. ALCANCE DEL SERVICIO</p>
    <p class="fz2">??? Se entrega la bomba con operador y auxiliar con toda la dotaci??n necesaria para la actividad del bombeo: casco, arn??s, tapa o??dos, gafas, guantes, botas platineras, botas pantaneras, uniforme de la empresa.</p>
    <p class="fz2">??? La bomba llega con el ACPM necesario para prestar el servicio.</p>
    <p class="fz2">??? Kit de tuber??a 80 metros (incluye accesorios, tubos, manguera).</p>
    <p class="fz2">??? Los empleados tienen vinculaci??n laboral a Vinicol Bombeos y se entrega Copia de la cedula, certificado de seguridad social, curso de altura y certificado de operador al ingresar la bomba.</p>
    <p class="fz2">??? VINICOL BOMBEOS cuenta con equipos suplementarios, personal de mantenimiento y soporte en obra en caso de requerirse.</p>
    <p class="fz2">??? En caso de necesitar m??s tuber??a se debe hacer solicitud al Director de Operaciones con anterioridad para su gesti??n seg??n disponibilidad en inventarios.</p>
    <p class="fz2">??? Si la obra lo solicita, se entrega hoja de vida y ficha t??cnica de la bomba y programa de mantenimiento preventivo durante el tiempo que este en la obra.</p>
    <p class="fz2">??? El alcance del servicio es de transporte de concreto, no de colocaci??n del concreto y su riego. La obra acepta hacerse responsable de cualquier imprevisto ocasionado en la colocaci??n del concreto.</p>

    <p class="PCA">5. RESPONSABILIDAD VINICOL BOMBEOS</p>

    <p class="fz2">??? En caso de presentarse da??os de la bomba se har?? proceso de mantenimiento en sitio.</p>
    <p class="fz2">??? Todos los d??as el personal nuestro entregaran informe de la labor diaria, la cual debe ser firmada por el Ingeniero encargado y tendr?? un espacio para las recomendaciones y sugerencias (es muy importante la revisi??n de la planilla diaria de trabajo, ya que se reporta el horario de los trabajadores en obra y los m3 bombeados)</p>
    <p class="fz2">??? Una vez se ha aceptado el servicio Vinicol Bombeos hace una visita para inspeccionar el terreno y definir las condiciones necesarias (terreno firme y suficiente para una operaci??n segura).</p>
    <footer>
        <strong class="Pag">Pag 6</strong>
    </footer>
    <div class="page-break"></div>
    <p class="PCB">5.1 PERSONAL DE LA BOMBA</p>
    <p class="fz2">??? Los empleados cumplen con la reglamentaci??n legal en salud ocupacional y seguridad social para el trabajo en alturas, certificados de altura y programa de salud ocupacional.</p>
    <p class="fz2">??? La documentaci??n de seguridad social del personal se enviar?? a los correos de la obra desde el d??a anterior para su revisi??n, no se enviar?? f??sica.</p>
    <p class="fz2">??? Para jornadas que superen las 7:00 pm la obra deber?? suministrar comida a los operarios.</p>
    <p class="fz2">??? Para jornadas que superen las 10:00 pm la obra deber?? asumir el auxilio de transporte de los operarios.</p>
    <p class="fz2">??? La divulgaci??n y protocolo de cualquier programa que tenga la obra de seguridad y salud en el trabajo es considerada como tiempo del servicio de la bomba.</p>
    <p class="fz2">??? Las horas extras son asumidas por la obra, si el equipo permanece varios d??as continuo.</p>
    <b class="fz3">Hora extra diurna $ 5.000</b><br>
    <b class="fz3">Hora extra nocturna $ 8.000 (Despu??s de las 10:00 pm)</b><br>
    <b class="fz3">Hora dominical diurna $ 6.000</b><br>
    <b class="fz3">Hora dominical extra diurna $ 7.000</b><br>
    <b class="fz3">Hora extra dominical nocturna $9.000</b>

    <p class="PCB">5.2 POL??TICAS EN EL MANEJO DEL PERSONAL</p>
    <p class="fz2">??? Los empleados de Vinicol Bombeos tienen un perfil de responsabilidades y tareas para los cuales han sido capacitados y entrenados para la operaci??n de bombeo y limpieza como tal y tienen prohibido manipular maquinaria interna de la obra como: Malacates, machines, plumas, taladros, etc.</p>
    <p class="fz2">??? Los empleados tienen prohibido dar ??rdenes o pedir ayuda a cualquier empleado de la obra.</p>
    <p class="fz2">??? La obra debe apoyar el proceso de instalaci??n de la tuber??a y desinstalaci??n de la misma y es responsabilidad expresa de la obra la colocaci??n del concreto en los diferentes frentes.</p>
    <p class="fz2">??? Vinicol Bombeos tendr?? dos empleados dentro del proceso de bombeo: un operador y un auxiliar en la coordinaci??n, por medio de radios de comunicaci??n el descargue y lavada de concreto</p>
    <p class="fz2">??? El manejo de la manguera pertenece al proceso de colocaci??n de concreto en la losa.</p>
    <p class="fz2">??? Uso de Epp en todo momento: casco, barbiquejo, guantes, gafas, tapaoidos, uniforme y botas con platina, equipo contracaidas en casos de trabajo en altura.</p>
    <p class="fz2">??? Respeto de horarios y orientaci??n del encargado en obra (Ver comunicado de horas extras).</p>
    <p class="fz2">??? El operador tiene prohibido adicionar agua al concreto, las decisiones del concreto son netamente de la obra.</p>
    <p class="fz2">??? Vinicol Bombeos como Contratista no se hace responsable del trabajo realizado por Terceros o colaboradores que ponga la obra u otros contratistas, subcontratistas o empleados de los mismos en las labores de colocaci??n del concreto y o similares.</p>
    <p class="fz2">??? El personal siempre debe estar acompa??ado de un encargado hasta que el personal termine su labor de lavado de la tuber??a.</p>
    <footer>
        <strong class="Pag">Pag 7</strong>
    </footer>
    <div class="page-break"></div>
    <p class="PCA">6. RESPONSABILIDAD DE LA OBRA</p>
    <p class="fz2">1. La obra debe entregar las herramientas y adecuaciones del terreno y espacios para la instalaci??n de la tuber??a y ubicaci??n de la bomba. Piso firme y techo para la bomba. Si esta queda a la intemperie corre el riesgo de da??o en su sistema el??ctrico.</p>
    <p class="fz2">2. El movimiento interno de la bomba en la obra corre por cuenta de la obra, en caso de necesitar alg??n otro equipo para su movimiento, la obra debe gestionarlo, estos movimientos deben ser autorizados por el Director de Operaciones de Vinicol Bombeos y hacerse bajo supervisi??n y en presencia del operador de la bomba.</p>
    <p class="fz2">3. En caso de que la m??quina sufra atascamientos por dificultades en el terreno la obra debe colaborar con su remoci??n o reconocer los gastos que genere la actividad.</p>
    <p class="fz2">4. La obra debe asegurar la salida de la bomba el mismo d??a que se presta el servicio en modalidad metros c??bicos. La cancelaci??n del servicio se har?? con 48 horas ANTES como m??nimo.</p>
    <p class="fz2">5. Si la bomba est?? ubicada en la obra y el servicio es cancelado despu??s de las 10 am, se cobrar?? la disponibilidad de la bomba en la obra del d??a siguiente.</p>
    <p class="fz2">6. La obra debe garantizar que se den las condiciones para que se cumpla la hora de ingreso de la bomba establecida en la negociaci??n.</p>
    <p class="fz2">7. La obra debe suministrar agua suficiente al inicio para alimentar los ??mbolos de la m??quina y al final para el lavado de la bomba y tuber??a.</p>
    <p class="fz2">8. El desecho de concreto que sobra en el momento de lavado de la maquina ser?? colocado cercano a la bomba para que la obra lo transporte hasta el acopio o zona de desechos.</p>
    <p class="fz2">9. El movimiento de tuber??a para diferentes frentes es coordinado directamente por la obra y debe proporcionar personal de apoyo de la misma obra para dichos movimientos.</p>
    <p class="fz2">10. El retraso del descargue de concreto por movimiento de tuber??a en diferentes frentes NO es responsabilidad del personal de la bomba. Tener en cuenta los tiempos de llegada entre los mixer.</p>
    <p class="fz2">11. En la actividad del bombeo se tiene como posible suceso el taponamiento u obstrucci??n del concreto en la tuber??a, las causas pueden ser diferentes, tipo de concreto, dise??o del tramo de la tuber??a, desajuste de las abrazaderas sin intenci??n. En el momento que ocurra la obra debe proporcionar personal para la desarmada, lavada y armada de la tuber??a. Dando soluci??n en el menor tiempo posible y continuando con la actividad como tal. Teniendo en cuenta que este evento es algo fortuito, Vinicol Bombeos no ser?? responsable del concreto que se pierda, la obra deber?? colocar personal que colabore con el desarme de la tuber??a para la limpieza de este.</p>
    <p class="fz2">12. El primer servicio se realizar?? con la Directora Comercial, las siguientes programaciones se deben realizar con el Director de Operaciones telef??nicamente, o por medio de un correo electr??nico a <u class="p2">logistica@vinicolbombeos.com</u> , o whatsApp, quien les dar?? respuesta en el momento.</p>
    <p class="fz2">13. Una vez se termine el bombeo la obra debe garantizar la salida de la bomba para no quedarle mal al cliente del siguiente d??a. Especialmente los d??as en los que el bombeo supere las 6:00 pm.</p>
    <p class="fz2">14. Si la bomba queda en la obra durante toda la semana y hay alg??n d??a que no se utilice, se factura el d??a con valor del m??nimo.</p>
    <p class="fz2">15. Es responsabilidad de la obra el velar por la seguridad del equipo de bombeo y sus accesorios cuando la m??quina se encuentre en las instalaciones de la obra.</p>
    <footer>
        <strong class="Pag">Pag 8</strong>
    </footer>
    <div class="page-break"></div>
    <p class="fz2">16. La obra deber?? suministrar los lazos y/o las herramientas necesarias para fijar la tuber??a en la estructura.</p>
    <p class="fz2">17. La obra debe estar preparada para recibir la bomba, si la gr??a tiene tiempos de espera porque la obra no puede recibirla, se cobrar?? el mismo valor del transporte por cada hora de espera.</p>
    <p class="fz2">18. Dentro de esta propuesta econ??mica no est?? incluido el valor de ninguna p??liza, Vinicol bombeos cuenta con un seguro para las bombas. Si la constructora exige la expedici??n de p??lizas de cualquier tipo, este valor se recargar?? en la primera factura.</p>
    <p class="fz2">19. Teniendo en cuenta que es un servicio que queda a satisfacci??n y se puede evaluar d??a a d??a, que paga las prestaciones sociales mes a mes y de igual forma el FIC, no es viable hacer ning??n porcentaje de los contratos como retenidos.</p>
    <p class="PCA">7. ESPECIFICACIONES DEL CONCRETO</p>
    <p class="fz2">??? Triturado (agregado)no mayor a 3/4 de pulgada para tramos hasta piso 12.</p>
    <p class="fz2">??? Triturado (agregado) no mayor a 3/8 de pulgada para tramos del piso 12 o m??s.</p>
    <p class="fz2">??? Concreto bombeable: Pl??stico o Fluido.</p>
    <p class="fz2">??? Arena de playa.</p>
    <p class="fz2">??? El operario estar?? atento para dar aviso en caso de encontrar concretos no bombeables o situaciones que pongan en riesgo la bomba y suspender la actividad.</p>
    <p class="fz2">??? Asentamiento entre 13-17.</p>
    <p class="fz2">??? Los concretos con asentamiento mayor a 15 pueden presentar taponamientos debido al lavado del triturado, a pesar de que son concretos bombeables no se descarta que pueda haber taponamientos o atascamientos de la tuber??a y Vinicol Bombeos no se hace responsable de p??rdidas de concreto por este motivo.</p>
    <p class="fz2">??? Los concretos con asentamiento menor a 13 ponen en riesgo algunas partes de la m??quina y el ??xito del vaciado, este tipo de concretos ocasionan rupturas y da??os que imposibilitaran continuar con el vaciado, Adicional hay riesgos de taponamiento y obstrucci??n de tuber??a como tal.</p>
    <p class="fz2">??? Despu??s de la losa # 20 el lavado de la tuber??a debe hacerse hacia abajo, el concreto que este en la tuber??a quedar?? debajo de la tolva y la obra lo deber?? reubicarlo. Vinicol bombeo no se har?? responsable de este concreto.</p>
    <p class="fz2">??? Los concretos con fibra de pol??mero, debe tener una coordinaci??n especial, se debe pedir el suministro como m??nimo, con 40 minutos entre carro y carro, ya que se tiene mayor riesgo de taponamiento y manejabilidad.</p>
    <p class="PCB">7.1 ANTES DEL BOMBEO</p>
    <p class="fz2">??? Verificar e informar la existencia de l??neas el??ctricas cerca del lugar de bombeo.</p>
    <p class="fz2">??? Si existen l??neas energizadas informar al encargado para retirarlas o desactivarlas.</p>
    <p class="fz2">??? Detectar personas cercanas alrededor del punto de operaci??n y solicitarle su retiro a prudente distancia, al menos a 3mts para no interferir con los equipos de bombeo, con tuber??as y dem??s accesorios.</p>
    <p class="fz2">??? Dar aviso oportuno de alguna novedad o irregularidad en el bombeo o que pueda ocasionar un accidente (taponamientos, fugas, etc).</p>
    <footer>
        <strong class="Pag">Pag 9</strong>
    </footer>
    <div class="page-break"></div>
    <p class="PCB">EXCLUSIONES</p>
    <p class="fz2">??? No se bombea concretos con fibra met??lica.</p>
    <p class="fz2">??? Concretos con arenas de cantera.</p>
    <p class="PCB">BOMBEOS ESPECIALES</p>
    <p class="fz2">Alturas de m??s de 12 pisos o largos trayectos: Se debe realizar una evaluaci??n del dise??o, el concreto debe tener un triturado de 3/8 y debe ser fluido.</p>
    <p class="PCB">7.2 ACONDICIONAMIENTO DEL TERRENO PARA LA UBICACI??N DE LA BOMBA</p>
    <p class="fz2">??? El equipo de bombeo debe estar en un sitio ventilado.</p>
    <p class="fz2">??? Cuando las condiciones de bombeo ameritan meter el equipo a un hueco las dimensiones m??nimas son: siete (7) metros de largo y cuatro (4) de ancho para poder manipular el equipo y hacer los respectivos mantenimientos y supervisiones.</p>
    <p class="fz2">??? El equipo de bombeo debe tener un techo de una altura como m??nimo de dos (2) metros de altura y luz para trabajos nocturnos, adicional debe tener un ducto de salida del humo para evitar que se acumule el humo en el lugar de trabajo del operador.</p>
    <p class="fz2">??? Desag??e con desarenadero, este con el fin de evitar inundaciones y da??os en el equipo.</p>
    <p class="fz2">??? Despejar el ??rea cuando la bomba este ingresando al hueco.</p>
    <p class="fz2">??? Acondicionar el equipo con PH, nunca acondicionar con personar ya que puede ocasionar sobre esfuerzos del personal.</p>
    <p class="fz2">??? Conservar Las medidas m??nimas de ubicaci??n cuando hay vac??os (ver en presentaci??n)</p>
    <p class="fz2">??? Si por condiciones de obra, la m??quina debe ser metida con PH a un hueco y se tiene una emergencia para sacar la m??quina y llevar otra, la obra debe asumir el costo de la PH, es por esto que se recomienda hacer los huecos con rampla y evitar sobrecostos.</p>
    <p class="PCB">7.3 POL??TICAS DE SEGURIDAD</p>
    <p class="fz2">??? Nunca sentarse en la tuber??a y estar como m??nimo tres (3) metros aislado de la misma, mientras est?? operando la bomba.</p>
    <p class="fz2">??? Nunca doblar la manguera, puede explotar y golpear una persona.</p>
    <p class="fz2">??? Realizar capacitaci??n al personal en obra de los riesgos en la colocaci??n del concreto en obra y las medidas de seguridad a todos los colaboradores en el proceso de colocaci??n del concreto (ver presentaci??n y manual de seguridad).</p>
    <p class="fz2">??? Asegurar que las l??neas de alta tensi??n y baja a distancias de diez (10) metros por encima del ??rea de trabajo.</p>
    <p class="fz2">??? Verificar que siempre salga de la manguera la salida de los diablos y tacos en las lavadas.</p>
    <p class="fz2">??? Acompa??ar a los empleados en la lavada y recogida de tuber??a por parte de la obra, debe haber un l??der en este proceso.</p>
    <p class="fz2">??? Todos los empleados en la losa deben usar gafas, ya que puede salpicar en la cara el concreto.</p>
    <footer>
        <strong class="Pag">Pag 10</strong>
    </footer>
    <div class="page-break"></div>
    <p class="PCB">SEGURIDAD DURANTE LA DESCARGA Y CARGUE DE LA BOMBA CON LA GRUA O CAMA BAJA</p>
    <p class="fz2">??? Despejar el ??rea de cargue y descargue de la bomba estacionaria en la cama baja, durante la reversa y acomodaci??n del equipo, la gr??a emitir?? un sonido tipo sirena para alertar que est?? en movimiento, las personas que est??n transitando dentro de la obra mientras se est?? descargando la m??quina, debe siempre estar al lado de la gr??a nunca detr??s ya que la visual es limitada en ese espacio, esta labor es realizada por VINICOL BOMBEOS.</p>
    <p class="PCB">7.4 POL??TICAS DURANTE LA LAVADA</p>
    <p class="fz2">??? Suministro de agua suficiente para realizar la lavada, a medida que se avance en altura m??s agua es necesaria para limpiar la tuber??a.</p>
    <p class="fz2">??? Se debe verificar la salida de todas las bolas de limpieza esta operaci??n es coordinada por el personal de Vinicol Bombeos.</p>
    <p class="fz2">??? En las lavadas no debe haber personal cerca de la salida de la manguera.</p>
    <p class="fz2">??? Nunca extender la manguera vertical de forma manual desde pisos altos, el peso de la misma puede hacer caer a quien la est?? manipulando.</p>
    <p class="fz2">??? El operador y el auxiliar de la m??quina tienen prohibido meter las bolas de limpieza con la maquina prendida y deben tener el accesorio tipo T para que esta labor sea segura.</p>
    <p class="fz2">??? Despu??s de la losa N?? 20 el lavado de la tuber??a debe hacerse hacia abajo, el concreto que est?? en la tuber??a quedar?? debajo de la tolva y la obra lo deber?? reubicarlo. Vinicol Bombeo no se har?? responsable de este concreto.</p>
    <p class="fz2">??? Instrucciones del maestro y contratistas: Para evitar taponamientos, los operadores no pueden parar el bombeo al inicio hasta que salga la primera mezcla y tampoco puede parar en la lavada, en ocasiones los maestros y contratistas quieren parar para reubicar concreto que est?? en la tuber??a y cuando paran el bombeo en medio de la lavada, la m??quina no responde y se bloquea el concreto en la tuber??a.</p>
    <p class="fz2">??? La forma de lavar la tuber??a correctamente seg??n el fabricante es hacia abajo, las pr??cticas de lavado hacia arriba con agua son pr??cticas para bombeos de corto alcance y para ellos se usan bolsas de cemento hechas con material reciclable.</p>
    <b>NOTA IMPORTANTE:</b><p class="fz2">Las normas de seguridad dadas a SISOS y DIRECTORES DE OBRA debe extenderse al personal asociado al bombeo y frentes de trabajo que puedan estar expuestos a dichos riesgos.</p>
    <b>MATERIAL RECOMENDADO PARA HACER CONCRETO EN OBRA</b>
    <p class="fz2">Arenas de playa</p>
    <p class="fz2">Triturado no mayor a ?? de pulgada</p>
    <b>MATERIALES NO RECOMEDADOS</b>
    <p class="fz2">Arenas con mezcla de piedra presentan probabilidad de taponamiento</p>
    <p class="fz2">Triturados con piedras de 1 pulgada o mas</p>
    <footer>
        <strong class="Pag">Pag 11</strong>
    </footer>
    <div class="page-break"></div>

    <p class="PCB">7.5 RECOMENDACIONES PARA BOMBEO DE CONCRETO EN OBRAS</p>
    <p class="fz2">1. Triturado (agregado)no mayor a 3/4 de pulgada para tramos hasta piso 12.</p>
    <p class="fz2">2. Triturado (agregado) no mayor a 3/8 de pulgada para tramos del piso 12 o m??s.</p>
    <p class="fz2">3. Concreto bombeable: Pl??stico o Fluido.</p>
    <p class="fz2">4. Arena de playa.</p>
    <p class="fz2">5. El operario estar?? atento para dar aviso en caso de encontrar concretos no bombeables o situaciones que pongan en riesgo la bomba y suspender la actividad.</p>
    <p class="fz2">6. Asentamiento entre 13-17.</p>
    <p class="fz2">7. Los concretos con asentamiento mayor a 15 pueden presentar taponamientos debido al lavado del triturado, a pesar de que son concretos bombeables no se descarta que pueda haber taponamientos o atascamientos de la tuber??a y Vinicol Bombeos no se hace responsable de p??rdidas de concreto por este motivo.</p>
    <p class="fz2">Estas son recomendaciones para evitar taponamiento y bombeabilidad del concreto, en caso de no cumplirse estas recomendaciones, los riesgos de dicha operaci??n son netamente de la obra como tal.</p>
    <p class="PCB">ESPECIFICACIONES DEL CONCRETO:</p>
    <p class="fz2">Los concretos con asentamiento menor a (13) ponen en riesgo algunas partes de la m??quina y el ??xito del vaciado, este tipo de concretos ocasionan rupturas y da??os que imposibilitar??n continuar con el vaciado, Adicional hay riesgos de taponamiento y obstrucci??n de tuber??a como tal.</p>
    <p class="PCB">EXCLUSIONES</p>
    <p class="fz2">??? No se bombea concretos con fibra met??lica</p>
    <p class="fz2">??? Concretos con arenas de cantera</p>
    <p class="PCB">BOMBEOS ESPECIALES</p>
    <p class="fz2">Para bombeos especiales se debe informar a la empresa cambios en las condiciones del concreto, cambios de lugar de la bomba y si es necesario visita t??cnica para asegurar un bombeo exitoso.</p>
    <p class="PCB">ALTURAS DE 12 PISOS EN ADELANTE</p>
    <p class="fz2">Alturas de mas de 12 pisos o largos trayectos: Se debe realizar una evaluaci??n del dise??o, el concreto debe tener un triturado de 3/8 y debe ser fluido.</p>
    <footer>
        <strong class="Pag">Pag 12</strong>
    </footer>
    <div class="page-break"></div>
    <p class="PCB">BOMBEOS EN BAJADA (CON SIFON)</p>
    <p class="fz2">En este tipo de dise??os, el concreto tiende a taponarse, se debe evitar siempre este tipo de dise??o y realizar un montaje especial para evitar taponamientos.</p>
    <p class="PCB">AGREGADOS ESPECIALES</p>
    <p class="fz2">El agregado angular tiene mayor ??rea superficial por unidad de volumen en comparaci??n con las redondeadas, as?? que requieren m??s mortero para cubrir la superficie. Se debe estudiar cuidadosamente el mortero y las cantidades y tama??os de los agregados seg??n el equipo de bombeo que se utilice, as?? como la altura o distancia que debe bombearse el concreto.</p>
    <b class="fz2">FUENTE:</b>  <u class="fz3 p2">http://blog.360gradosenconcreto.com/seguridad-en-la-colocacion-de-concreto-con-equipo-de-bombeo/%20</u>
    <p class="PCB">BOMBEOS CON CONCRETO CON POLIMEROS</p>
    <p class="fz2">Los concretos con fibra de pol??mero, debe tener una coordinaci??n especial, se debe pedir el suministro como m??nimo, con 40 minutos entre carro y carro, ya que se tiene mayor riesgo de taponamiento y manejabilidad y en caso de haber inconvenientes se podr?? parar el suministro de los mixer.</p>
    <p class="PCB">7.6 QUE HACER EN CASO DE VARADAS O TAPONAMIENTOS</p>
    <p class="fz2">La obra debe tener un encargado asignado para pedir y cancelar el concreto ante eventualidades en estos casos la coordinaci??n de la obra es clave, cancelar el suministro a tiempo evita p??rdidas econ??micas para todos, el tiempo de cancelaci??n debe ser medido en obra, hasta que se pueda reanudar el concreto y se tenga superado el inconveniente, cabe resaltar que la empresa no podr?? asumir perdidas de concreto por taponamiento ya que los motivos de taponamiento por lo general son de manejabilidad del concreto y no de la bomba.</p>
    <p class="PCB">Para destaquear la tuber??a se sigue el siguiente protocolo:</p>
    <p class="fz2">1. Alejar al personal de la tuber??a y la manguera, m??nimo a 3 metros de distancia.</p>
    <p class="fz2">2. El operador debe despresurizar la tuber??a y dar unos ciclos en reversa y solo cuando encuentra la tuber??a despresurizada apaga la bomba.</p>
    <p class="fz2">3. El operador sube y se encuentra con el auxiliar y busca el taco con el m??todo de golpe de almadana en la tuber??a e identifica por medio del sonido el lugar donde esta atascado el concreto</p>
    <p class="fz2">4. El operador y el auxiliar desacoplan la tuber??a</p>
    <p class="fz2">5. El personal de la obra solo en este momento entra y apoya la operaci??n de destaqueo de tubos.</p>
    <p class="fz2">6. La obra debe suministrar pl??stico personal y carretas para reubicar el concreto.</p>
    <p class="fz2">7. La obra debe tener un plan de reubicaci??n del concreto para evitar desperdicios, en algunas obras hemo identificado que lo usan para hacer topellantas, mesas para el caspete o bordillos separadores.</p>
    <footer>
        <strong class="Pag">Pag 13</strong>
    </footer>
    <div class="page-break"></div>
    <p class="PCB">7.7 POL??TICAS EN LA COLOCACI??N DEL CONCRETO</p>
    <p class="fz2">??? El bombeo hacia abajo debe tener una supervisi??n adicional y poner la tuber??a con guillotina en la parta horizontal, se debe bombear muy lento, para evitar que las piedras por gravedad se separen.</p>
    <p class="fz2">??? Suministrar suficiente lechada para lubricar el total de la tuber??a, si tiene suficiente lechada se asegura que haya menos probabilidad de taponamiento.</p>
    <p class="fz2">??? La tolva debe quedar entre carros con un nivel m??nimo para poder cebar la tuber??a.</p>
    <p class="fz2">??? Nunca permitir que la manguera sea cargada por un empleado, puede da??ar la columna y afectar a la persona que la manipula, esta labor la debe realizar varias personas.</p>
    <p class="fz2">??? Verificar que siempre salga de la manguera la salida de los diablos y tacos en las lavadas (exclusivo de Vinicol Bombeos).</p>
    <p class="fz2">??? Acompa??ar a los empleados en la lavada y recogida de tuber??a por parte de la obra.</p>
    <p class="fz2">??? Alertar a todo el personal en obra de la operaci??n de bombeo.</p>
    <p class="fz2">??? No transitar encima de la tuber??a de descarga, siempre estar alejado por lo menos 3 metros de distancia.</p>
    <p class="fz2">??? Nunca se debe doblar la manguera, puede explotar y causar heridas graves o mortales.</p>
    <p class="fz2">??? Informar al personal que manipula la manguera que esta no debe desacoplarse.</p>
    <p class="fz2">??? Verificar que la tuber??a est?? amarrada en el trayecto vertical, como m??nimo cada piso.</p>
    <p class="fz2">??? No desacoplar la tuber??a ni quitar los puntos de amarre de la tuber??a, puede ocasionar accidentes, en ocasiones personal diferente a los del equipo de bombeo quitan los amarres de anclaje de la tuber??a, esta labor es supervisada por nuestro personal, pero no es garant??a ya que puede haber momentos en que no se den cuenta.</p>
    <p class="fz2">??? El personal que est?? en la losa debe estar con el equipo anticaidas ya que la manguera puede coletear y tumbarlos.</p>
    <p class="fz2">??? Las mangueras delgadas pueden presentar taponamiento ya que se usan con una reducci??n de di??metro, cuando el bombeo sea con este tipo de manguera y est??n en vaciados superiores a 30 metros de altura se debe iniciar el bombeo sin la manguera y luego acoplarla cuando salga el concreto, esto con el fin de evitar taponamientos.</p>
    <p class="fz2">??? Entregar informaci??n diaria en planillas del trabajo y horarios realizados</p>
    <p class="PCA">8 QUE HACER EN CASO DE VARADAS O TAPONAMIENTOS</p>
    <p class="fz2">La obra debe tener un encargado asignado para pedir y cancelar el concreto ante eventualidades, Vinicol Bombeos se hace responsable del 1er carro, el resto es coordinaci??n de la obra cancelar el suministro hasta que se pueda reanudar el concreto, cabe resaltar que Vinicol Bombeos no podr?? asumir perdidas de concreto por taponamiento ya que los motivos de taponamiento por lo general son de manejabilidad del concreto y no de la bomba, para los casos que no sea el concreto se debe demostrar que es causa de la bomba.</p>
    <footer>
        <strong class="Pag">Pag 14</strong>
    </footer>
    <div class="page-break"></div>
    <p class="PCA">9 CONDICIONES COMERCIALES</p>
    <p class="fz2">OBJETO DEL CONTRATO: Se factura como contrato de obra civil, con un AIU del 5%.</p>
    <p class="fz2">En el contrato se define como partes: Contratista y Contratante</p>
    <p class="fz2">FORMA DE PAGO: CONTADO</p>
    <p class="fz2">DESCUENTO CONDICIONADO POR CUMPLIMIENTO DE PAGO</p>
    <p class="fz2">INCREMENTOS ANUALES: Cambio de a??o se incrementa el IPC</p>
    <p class="fz2">VALIDEZ DE LA OFERTA: Noventa d??as (90) contados a partir de la fecha de presentaci??n de la propuesta.</p>
    <p class="fz2">INICIO DEL SERVICIO: 24 horas antes de iniciar el servicio de bombeo, se debe enviar el comprobante de pago a los correos electr??nicos <u class="p2">bibiana@vinicolbombeos.com</u> y <u class="p2">administraci??n@vinicolbombeos.com</u>.</p>

    <p class="PCA">10 CONTACTOS</p>

    <table class="v3" style="width:100%">
        <tr>
            <th colspan="4" class="v3">CONTACTOS</th>
        </tr>
        <tr class="v3">
            <td class="v3">NOMBRE</td>
            <td class="v3">CARGO</td>
            <td class="v3">CELULAR</td>
            <td class="v3">CORREO ELECTRONICO</td>
        </tr>
        <tr class="v3">
            <td class="v3">Bibiana S??nchez</td>
            <td class="v3">Directora comercial</td>
            <td class="v3">3004249699</td>
            <td class="v3"><u class="p2">bibiana@vinicolbombeos.com</u></td>
        </tr>
        <tr class="v3">
            <td class="v3">Santiago Cano</td>
            <td class="v3">Director de Operaciones</td>
            <td class="v3">3006557143</td>
            <td class="v3"><u class="p2">log??stica@vinicolbombeos.com</u></td>
        </tr>
    </table>

    <footer>
        <strong class="Pag">Pag 15</strong>
    </footer>
</body>
</html>
