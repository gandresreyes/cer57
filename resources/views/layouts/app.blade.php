<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'cero57') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animation.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @livewire('footer')
        </div>

        @stack('modals')

        @livewireScripts
        <script>           
            document.addEventListener("DOMContentLoaded", function(event) {  
                //tooltip
                var interes = document.getElementById("interes");
                var subtotal = document.getElementById("subtotal");
                var iva = document.getElementById("iva");
                
                var valorPintado = document.querySelectorAll('.valorp');
                valorTotal = document.querySelectorAll('.valortotal'); 

                var valorslider = document.getElementById("barra");
                var fechaeslider = document.getElementById("fechaeslider");

                var dias = document.getElementById("dias");                
                var fecha = document.getElementById("fecha");                                             
                dias.innerHTML = fechaeslider.value;                           
                fecha.innerHTML = sumarDias(5);

                valorApagar( fechaeslider.value,valorslider.value);

                //eventos
                valorslider.addEventListener("input",function() {
                    var val = this.value;
                    var diassel = fechaeslider.value;
                    
                    console.log(valorApagar( diassel,val))
                                       
                })
                fechaeslider.addEventListener("input",function() {
                    var valordias = this.value;               
                    dias.innerHTML = valordias;                
                    var diassel = parseInt(this.value);
                    valors = valorslider.value;
                    fecha.innerHTML = sumarDias( diassel);                    
                    valorApagar( diassel,valors);
                   
                             
                })
                function sumarDias(dias){
                    var hoy = new  Date();
                    hoy.setDate(hoy.getDate() + dias);
                    var dia = hoy.getDate();
                    var mes = hoy.getMonth()+1;
                    var anio = hoy.getFullYear();                
                    var testfecha2 = (dia )+ "/" +(mes) +"/"+ (anio);   
                    return testfecha2;
                }
                function valorApagar(diassel, valorf){
                    var porvalor =  parseInt(valorf*0.1);
                    var pordias =  diassel*1200;
                    var ivas = valorf*(0.01); 
                    var intereses = parseInt(porvalor) + parseInt(pordias)
                    var subtotals =  parseInt(valorf) + parseInt(pordias)+ parseInt(porvalor) ;       
                    var totals = parseInt(subtotals)+parseInt(ivas);
                    valorPintado.forEach(element => {
                        element.innerHTML = Number(valorf).toLocaleString('es-ES');
                    });

                    interes.innerHTML = Number(intereses).toLocaleString('es-ES');
                    iva.innerHTML = Number(ivas).toLocaleString('es-ES');
                    subtotal.innerHTML = Number(subtotals).toLocaleString('es-ES');
                    valorTotal.forEach(element => {
                        element.innerHTML = Number(totals).toLocaleString('es-ES');
                    });
                     
                    
                }  
            });
        
          </script>
    </body>
</html>
