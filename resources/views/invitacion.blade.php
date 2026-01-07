<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body>
    <div class="relative">
        <img src="{{asset('img/headerboda.jpg')}}" alt="">
    </div>

    <!-- principal -->
    <div style="font-family: 'Cinzel', serif;" class="w-full flex items-center justify-center flex-col mt-10 px-5 pb-12 text-center">
        <p class="text-2xl font-medium" style="color: #323B60"> ISABEL <br>& <br> JONATHAN </p><br>

        <p class="text-xs font-light px-12">Te invitamos a celebrar nuestra union matrimonial</p><br>

        <div class="grid grid-cols-3 py-4">
            <div>
                <p class="text-sm border-t-2 border-b-2 border-gray-400 px-2">SABADO</p>
            </div>
            <div class="flex items-start justify-center">
                <p class="text-3xl mt-[-5px]">25</p>
            </div>
            <div>
                <p  class="text-sm border-t-2 border-b-2 border-gray-400 px-2">ABRIL</p>
            </div>
        </div><br>

        <div class="w-full text-center">
            <p class="text-xs font-medium tracking-[3px] pb-1">RECEPCION</p>
            <p class="text-xs font-light">6:30 PM</p>
            <p class="text-xs font-medium">CASINO TERRAZA EL CIELO</p>

            <a href="https://goo.gl/maps/3y7YkZ6gk3U5Yk9X9" target="_blank" class="text-xs font-extralight underline mt-2 inline-block">
                VER UBICACION
            </a>
        </div>

    </div><br><br><br><br><br>

    <!-- programa -->
    <div class="bg-[#98b3c8] py-8 px-8 text-center" style="font-family: 'Cinzel', serif;">
        <img src="{{asset('img/polaroids.png')}}" alt="" class="mt-[-140px]">

        <p class="text-xs text-white">Celebramos nuestra union en la cercania de las personas que mas nos quieren</p>
        <br><br><b><br>
            
        <p class="text-xl text-white font-extralight">Nuestro Programa</p><br>

        <div class="w-full flex items-center justify-center">
            <img src="{{asset('img/lugar.png')}}" alt="">
        </div>
        <p class="text-xs text-white">7:00 PM</p>
        <p class="text-xs text-white font-extralight px-12">llegada y entrada de los novios</p><br>

        <div class="w-full flex items-center justify-center">
            <img src="{{asset('img/copas.png')}}" alt="">
        </div>
        <p class="text-xs text-white">7:15 PM</p>
        <p class="text-xs text-white font-extralight px-12">Banquete, brindis y palabras de los invitados</p><br>

        <div class="w-full flex items-center justify-center">
            <img src="{{asset('img/pareja.png')}}" alt="">
        </div>
        <p class="text-xs text-white">7:15 PM</p>
        <p class="text-xs text-white font-extralight px-12">Vals de los novios con los padres</p><br>
    </div><br><br>

    <div class="w-full text-center" style="font-family: 'Cinzel', serif;">
        <div class="w-full flex justify-center p-4">
            <img src="{{asset('img/calendario.png')}}" width="60" alt="" class="bg-[#98b3c8] p-2 rounded-full">
        </div>
        <p class="font-medium text-sm pb-1">CONFIRMAR ASISTENCIA</p>
        <p class="font-extralight text-[10px] px-8 pb-4">AGRADECEMOS QUE CONFIRMES TU ASISTENCIA ANTES DEL 25 DE MARZO</p>
        <div class="pb-3">
            <a href="" class="text-sm p-1 font-extralight rounded-md mt-4 bg-[#98b3c8] text-white underline">Contacto con la novia</a><br>
        </div>
        <a href="" class="text-sm p-1 font-extralight rounded-md mt-4 bg-[#98b3c8] text-white underline">Contacto con el novio</a>
    </div><br><br>

    <div class="w-full text-center" style="font-family: 'Cinzel', serif;">
        <div class="w-full flex justify-center p-4">
            <img src="{{asset('img/regalo.png')}}" width="60" alt="" class="bg-[#98b3c8] p-2 rounded-full">
        </div>
        <p class="font-medium text-sm pb-1">SUGERENCIA DE REGALOS</p>
        <p class="font-extralight text-[10px] px-8 pb-4">EL MEJOR REGALO ES TU PRESENCIA, PERO SI DESEAS TENER UN DETALLE CON NOSOTROS, TE DEJAMOS ESTAS OPCIONES:</p>
        <div class="pb-3">
            <a href="" class="text-sm p-1 font-extralight rounded-md mt-4 bg-[#98b3c8] text-white underline">LIVERPOOL</a><br>
        </div>
    </div><br><br>

    <div class="w-full text-center" style="font-family: 'Cinzel', serif;">
        <p class="font-medium text-sm pb-1">SIN NIÑOS</p>
        <p class="font-extralight text-[10px] px-8 pb-4">DEJEMOS A LOS NIÑOS EN CASA ESTA VEZ Y DISFRUTEMOS DE LA NOCHE JUNTOS</p>
    </div><br><br>

    <div class="w-full h-[300px] text-center" style="font-family: 'Cinzel', serif;">
        <p class="font-extralight text-[12px] px-8 pb-2">ESPERAMOS CONTAR  CON SU PRESENCIA</p>
        <p class="font-medium text-xl pb-1">MUCHAS GRACIAS</p>
    </div>
</body>
</html>