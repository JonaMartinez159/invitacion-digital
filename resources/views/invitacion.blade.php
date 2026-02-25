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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    @vite('resources/css/app.css')
</head>
<body class="w-screen">
   
  <div class="relative w-screen h-[400px] bg-cover bg-center" style="background-size: cover; background-image: url('{{ asset('img/headerbodanos.jpeg') }}');">
    <div class="absolute inset-0 bg-gradient-to-t from-white to-transparent"></div>
  </div>
   <!--
    <div class="relative">
        <img src="{{asset('img/headerbodanos.jpeg')}}" alt="">
    </div> -->

    <!-- principal -->
    <div style="font-family: 'Cinzel', serif;" class="w-full flex items-center justify-center flex-col mt-10 px-5 pb-12 text-center" data-aos="fade-up" data-aos-delay="1000">
        <p class="text-2xl font-medium" style="color: #323B60"> ISABEL <br>& <br> JONATHAN </p><br>

        <p class="text-xs font-light px-12">Te invitamos a celebrar nuestra union matrimonial</p><br>

        <div class="grid grid-cols-3 py-4" data-aos="fade-up" data-aos-duration="2000">
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
    <div class="w-full bg-[#98b3c8] py-8 px-6 text-center" style="font-family: 'Cinzel', serif;" data-aos="fade-up" data-aos-duration="2000">
        <div class="flex w-full items-center justify-center">
          <img src="{{asset('img/polaroids2.png')}}" alt="" class="mt-[-140px] h-[220px]">

        </div>

        <p class="text-xs text-white">Celebramos nuestra union en la cercania de las personas que mas nos quieren</p>
        <br><br><b><br>
            
        <p class="text-xl text-white font-extralight">Nuestro Programa</p><br>

        <div class="relative w-full" data-aos="fade-up" data-aos-duration="2000">
            <!-- Línea central -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full border-l-2 border-white"></div>
        
            <!-- Evento 1 -->
            <div class="mb-5 flex justify-start" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
              <div class="w-1/2 pr-8 text-right">
                <div class="flex justify-end">
                  <img src="{{asset('img/lugar.png')}}" alt="" class="w-12 h-12">
                </div>
                <p class="text-xs text-white mt-2">7:00 PM</p>
                <p class="text-xs text-white font-extralight">Llegada y entrada de los novios</p>
              </div>
              <div class="w-1/2"></div>
            </div>
        
            <!-- Evento 2 -->
            <div class="mb-5 flex justify-end" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
              <div class="w-1/2"></div>
              <div class="w-1/2 pl-8 text-left">
                <div class="flex justify-start">
                  <img src="{{asset('img/copas.png')}}" alt="" class="w-12 h-12">
                </div>
                <p class="text-xs text-white mt-2">7:15 PM</p>
                <p class="text-xs text-white font-extralight">Banquete, brindis y palabras de los invitados</p>
              </div>
            </div>
        
            <!-- Evento 3 -->
            <div class="mb-5 flex justify-start" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
              <div class="w-1/2 pr-8 text-right">
                <div class="flex justify-end">
                  <img src="{{asset('img/pareja.png')}}" alt="" class="w-12 h-12">
                </div>
                <p class="text-xs text-white mt-2">7:15 PM</p>
                <p class="text-xs text-white font-extralight">Vals de los novios con los padres</p>
              </div>
              <div class="w-1/2"></div>
            </div>

            <!-- Evento 4 -->
            <div class="mb-5 flex justify-end" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
                <div class="w-1/2"></div>
                <div class="w-1/2 pl-8 text-left">
                  <div class="flex justify-start">
                    <img src="{{asset('img/baile.png')}}" alt="" class="w-12 h-12">
                  </div>
                  <p class="text-xs text-white mt-2">7:30 PM</p>
                  <p class="text-xs text-white font-extralight">Se abre a pista de baile</p>
                </div>
              </div>
        </div>
        
    </div><br><br>

    <div class="w-full text-center" style="font-family: 'Cinzel', serif;" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">
        <div class="w-full flex justify-center p-4">
            <img src="{{asset('img/calendario.png')}}" width="60" alt="" class="bg-[#98b3c8] p-2 rounded-full">
        </div>
        <p class="font-medium text-sm pb-1">CONFIRMAR ASISTENCIA</p>
        <p class="font-extralight text-[10px] px-8 pb-4">AGRADECEMOS QUE CONFIRMES TU ASISTENCIA ANTES DEL 25 DE MARZO</p>
        <div class="pb-3">
            <a href="https://wa.me/5213112384139?text=Hola,%20Quiero%20confirmar%20mi%20invitacion%20a%20la%20boda" class="text-xs p-2 font-medium rounded-md mt-4 bg-[#98b3c8] text-white underline">Contacto con la novia</a><br>
        </div>
        <a href="https://wa.me/5213112568280?text=Hola,%20Quiero%20confirmar%20mi%20invitacion%20a%20la%20boda" class="text-xs p-2 font-medium rounded-md mt-4 bg-[#98b3c8] text-white underline">Contacto con el novio</a>
    </div><br><br>

    <div class="w-full text-center" style="font-family: 'Cinzel', serif;" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">
        <div class="w-full flex justify-center p-4">
            <img src="{{asset('img/regalo.png')}}" width="60" alt="" class="bg-[#98b3c8] p-2 rounded-full">
        </div>
        <p class="font-medium text-sm pb-1">SUGERENCIA DE REGALOS</p>
        <p class="font-extralight text-[10px] px-8 pb-4">EL MEJOR REGALO ES TU PRESENCIA, PERO SI DESEAS TENER UN DETALLE CON NOSOTROS, TE DEJAMOS ESTAS OPCIONES:</p>
        <div class="pb-3 space-x-2 flex direction-row items-center justify-center w-full">
            <a href="https://www.amazon.com.mx/wedding/guest-view/3I7T00SG3BTDV" target="_blank" class="text-xs p-2 font-medium rounded-md mt-4 bg-[#98b3c8] text-white underline">AMAZON</a><br>
            <a href="https://mesaderegalos.liverpool.com.mx/milistaderegalos/51874512" target="_blank" class="text-xs p-2 font-medium rounded-md mt-4 bg-[#98b3c8] text-white underline">LIVERPOOL</a><br>
        </div>
    </div><br><br>

    <div class="w-full text-center" style="font-family: 'Cinzel', serif;" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">
        <p class="font-medium text-sm pb-1">SIN NIÑOS</p>
        <p class="font-extralight text-[10px] px-8 pb-4">DEJEMOS A LOS NIÑOS EN CASA ESTA VEZ Y DISFRUTEMOS DE LA NOCHE JUNTOS</p>
    </div><br><br>

    <div class="w-full text-center" style="font-family: 'Cinzel', serif;" data-aos="fade-zoom-in" data-aos-delay="2000" data-aos-duration="3000">
        <p class="font-extralight text-[12px] px-8 pb-2">ESPERAMOS CONTAR  CON SU PRESENCIA</p>
        <p class="font-medium text-xl pb-1">MUCHAS GRACIAS</p>        
    </div>

    <img src="{{asset('img/bodanoscentro.jpeg')}}" alt="" class="mt-[20px] w-full">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>