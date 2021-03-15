
<section class="w-full px-8 py-8 xl:px-8 bg-no-repeat bg-cover  bg-top bg-cero">
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col items-center md:flex-row space-x-5 space-y-5">

            <div class="w-full mt-16 md:mt-0 md:w-2/5  ">
                <div class=" relative z-10 h-auto p-8 py-10 overflow-hidden bg-white  border-gray-300 rounded-lg shadow-2xl px-7 text-center">
                      
                    <h3 class="text-xl text-center uppercase py-4">calcula tu Prestamo</h3>
                    <p class="text-left">¿Cuanto dinero necesitas?</p>
                    <p class="text-4xl text-center text-gray-500 py-4 px-4">$<span class="valorp" id="valor"></span></p>
                    <input class="w-full  " type="range" min="100000" max="3000000"  step="50000" value="300000"  id="barra" >
                    <p class="float-left text-sm text-gray-400">$300.000</p>
                    <p class="float-right text-sm text-gray-400">$3.000.000</P>
                    <br>
                    <p class="clear-both pt-6 text-left">¿Cuándo prefieres pagarlo?</p>
                    <br>                                    
                    <p class=" float-left"><span id="dias"></span>  Dias</p>
                    <p class="float-right" id="fecha"></p>
                             
                    
                    <input class="w-full " type="range" min="5" max="120"  step="1" value="5"  id="fechaeslider">
                    <p class="float-left text-sm text-gray-400">5 Dias</p>
                    <p class="float-right text-sm text-gray-400">120 Dias</P>  
                    <p class="px-4 pt-5"> Total a Pagar $<span  class="text-red-500 text-lg valortotal" id="total"></span></p>          
                    <div class="relative">                        
                        <div class="pb-8  w-full" >
                            <div x-data="{ tooltip: false }" class="inline-flex ">
                                <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="rounded-full px-3 cursor-pointer shadow-md bg-gray-300 ">
                                    !
                                </div>
                                <div class=" w-full " x-show="tooltip">
                                    <div class="absolute  bg-gray-200 top-0 p-2 mt-1 text-sm  w-full  transform -translate-x-1/2 -translate-y-full rounded-lg shadow-lg">
                                        <div class="flex flex-col">
                                            <p class="font-bold text-xl py-4">Resumen de la solicitud</p>      
                                            <div class="border-b border-red-700 py-3">                                    
                                                <div class="flex items-center justify-between ">
                                                    <p> Monto Solucitado</p>
                                                    <p>$<span class="valorp"></span></p>
                                                </div>
                                                <div class="flex items-center justify-between ">
                                                    <p> Interes</p>
                                                    <p> $<span id="interes"></span></p>
                                                </div>
                                          </div>    
                                            <div class="flex items-center justify-between ">
                                                <p > Subtotal</p>
                                                <p > $<span class="text-lg text-gray-600" id="subtotal"></span></p>
                                            </div>  
                                            <div class="flex items-center justify-between ">
                                                <p>Iva</p>
                                                <p> $<span id="iva"></p>
                                            </div> 
                                            <div class="flex items-center justify-between  py-5">
                                                <p >Total</p>
                                                <p >$<span class="text-red-500 text-lg valortotal"></span></p>
                                            </div> 
                                          
                                        </div>    
                                    </div>                
                                </div>
                            </div>  
                        </div>           
                        <button class=" rounded-md bg-gradient-to-r from-green-400 to-green-700 text-xl text-white pt-3 pb-4 px-8  uppercase">Solicitar Prestamo</button>
                    </div> 
                </div>
            </div>
            <div class="w-full space-y-5  md:w-3/5 bg-white bg-opacity-50 p-5  rounded-lg">                
                <h2 class="text-2xl font-extrabold leading-none text-gray-800 sm:text-3xl md:text-5xl">
                    CRÉDITOS ONLINE PARA LO QUE QUIERAS
                </h2>
                <p class="text-xl  md:pr-16 text-gray-800 ">Learn how to engage with your visitors and teach them about your mission. We're revolutionizing the way customers and businesses interact.</p>
            </div>        
        </div>
    </div>
</section>
<a href="https://web.whatsapp.com/?send=+573012277590" class=" rounded-full text-white bg-green-400 p-3 fixed bottom-16  right-2 z-50 focus:outline-none hover:bg-green-700  pulse"> 
    <svg  xmlns="http://www.w3.org/2000/svg" viewBox="-23 -21 682 682.66669"   class="w-10 h-10 "fill="currentColor">
        <path d="m544.386719 93.007812c-59.875-59.945312-139.503907-92.9726558-224.335938-93.007812-174.804687 0-317.070312 142.261719-317.140625 317.113281-.023437 55.894531 14.578125 110.457031 42.332032 158.550781l-44.992188 164.335938 168.121094-44.101562c46.324218 25.269531 98.476562 38.585937 151.550781 38.601562h.132813c174.785156 0 317.066406-142.273438 317.132812-317.132812.035156-84.742188-32.921875-164.417969-92.800781-224.359376zm-224.335938 487.933594h-.109375c-47.296875-.019531-93.683594-12.730468-134.160156-36.742187l-9.621094-5.714844-99.765625 26.171875 26.628907-97.269531-6.269532-9.972657c-26.386718-41.96875-40.320312-90.476562-40.296875-140.28125.054688-145.332031 118.304688-263.570312 263.699219-263.570312 70.40625.023438 136.589844 27.476562 186.355469 77.300781s77.15625 116.050781 77.132812 186.484375c-.0625 145.34375-118.304687 263.59375-263.59375 263.59375zm144.585938-197.417968c-7.921875-3.96875-46.882813-23.132813-54.148438-25.78125-7.257812-2.644532-12.546875-3.960938-17.824219 3.96875-5.285156 7.929687-20.46875 25.78125-25.09375 31.066406-4.625 5.289062-9.242187 5.953125-17.167968 1.984375-7.925782-3.964844-33.457032-12.335938-63.726563-39.332031-23.554687-21.011719-39.457031-46.960938-44.082031-54.890626-4.617188-7.9375-.039062-11.8125 3.476562-16.171874 8.578126-10.652344 17.167969-21.820313 19.808594-27.105469 2.644532-5.289063 1.320313-9.917969-.664062-13.882813-1.976563-3.964844-17.824219-42.96875-24.425782-58.839844-6.4375-15.445312-12.964843-13.359374-17.832031-13.601562-4.617187-.230469-9.902343-.277344-15.1875-.277344-5.28125 0-13.867187 1.980469-21.132812 9.917969-7.261719 7.933594-27.730469 27.101563-27.730469 66.105469s28.394531 76.683594 32.355469 81.972656c3.960937 5.289062 55.878906 85.328125 135.367187 119.648438 18.90625 8.171874 33.664063 13.042968 45.175782 16.695312 18.984374 6.03125 36.253906 5.179688 49.910156 3.140625 15.226562-2.277344 46.878906-19.171875 53.488281-37.679687 6.601563-18.511719 6.601563-34.375 4.617187-37.683594-1.976562-3.304688-7.261718-5.285156-15.183593-9.253906zm0 0" fill-rule="evenodd"/>
    </svg>
     
</a>








