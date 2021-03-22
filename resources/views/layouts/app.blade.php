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
            window.addEventListener("DOMContentloaded", function() {  
                //tooltip
                var interes = document.getElementById("interes");
                var subtotal = document.getElementById("subtotal");
                var iva = document.getElementById("iva");
                
                var valorPintado = document.querySelectorAll('.valorp');
                var valorTotal = document.querySelectorAll('.valortotal'); 

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
                
                //////slider
                const imagenes = ['https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940','https://images.pexels.com/photos/1323550/pexels-photo-1323550.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                'https://images.pexels.com/photos/2478248/pexels-photo-2478248.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940','https://images.pexels.com/photos/3075993/pexels-photo-3075993.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940','https://images.pexels.com/photos/1509582/pexels-photo-1509582.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940' ];
                let i = 1;

                const img1 = document.querySelector('#img1')
                const img2 = document.querySelector('#img2')
                const divindicadores = document.querySelector('#indicadores')

                imagenes.forEach(function(value, index, array){                                       
                    const div = document.createElement('div');
                    div.classList.add('w-3','h-3','inline-block','my-1','mx-2', 'rounded-full','bg-gray-300','circulos');
                    div.id = index;
                    divindicadores.appendChild(div);                   
                });
                
                img1.src = imagenes[0];
                const circulos = document.querySelectorAll('.circulos')
                circulos[0].classList.add('resaltado')

                const slidershow = function(){                    
                    img2.src = imagenes[i];
                    const circulo_actual = Array.from(circulos).find(e=>e.id == i)
                    Array.from(circulos).forEach(cir => cir.classList.remove('resaltado'))
                    circulo_actual.classList.add('resaltado');
                    img2.classList.add('active');
                    i++;
                    if(i == imagenes.length){
                        i = 0;
                    }                   
                    setTimeout(function(){
                        img1.src = img2.src;
                        img2.classList.remove('active')
                    },1000)
                };
                setInterval(slidershow, 4000); 



              
                var texto = "¿Que necesitas  para  Solicitar un prestamo?";
                maquina(texto,100);
            
                function maquina(texto,intervalo){
                    var i=0,
                    // Creamos el timer
                    timer = setInterval(function() {
                        if ( i<texto.length ) {
                        // Si NO hemos llegado al final del texto..
                        // Vamos añadiendo letra por letra y la _ al final.
                        var pos = document.getElementById('typer');                
                        pos.innerHTML = (texto.substr(0,i++) + "|")  
                        
                        } else {
                            // En caso contrario..
                            // Salimos del Timer y quitamos la barra baja (_)
                            clearInterval(timer);
                            var pos = document.getElementById('typer');                
                            pos.innerHTML = (texto) 
                            setTimeout(function() {
                                maquina(texto,100);
                            },3600);                                                 
                                                     
                        }
                    },intervalo);
                };
                            
            

            });        
        </script>    
    </body>
</html>
