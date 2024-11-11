<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', '/resources/css/galeria-style.css'])
</head>
<body>
    
                        @if (Route::has('login'))
                            
                                @auth
                                <!--Mandar a la pagina inicial-->
                                <script>
                                    window.location.href = "{{ url('/home') }}"; // Redirige a la página de inicio
                                </script>
                                @else

                                <div class="flex min-h-screen justify-center items-center">
                                
                                <div class="gallery-wrap w-[60%] min-h-screen">
                                    <div class="item item-1" style="background-image: url('{{ asset('storage/artistas/billie.jpg') }}');">
                            
                                    </div>
                                    <div class="item item-2" style="background-image: url('{{ asset('storage/artistas/humbe.jpg') }}');">
                            
                                    </div>
                                    <div class="item item-3" style="background-image: url('{{ asset('storage/artistas/nsqk.jpg') }}');">
                            
                                    </div>
                                    <div class="item item-4" style="background-image: url('{{ asset('storage/artistas/radioheads.jpg') }}');">
                            
                                    </div>
                                    <div class="item item-5" style="background-image: url('{{ asset('storage/artistas/wos.jpg') }}');">
                                    </div>
                                </div>
                                
                                
                                <div class="register_login bg-gray-500 w-[70%] min-h-screen bg-center bg-cover bg-no-repeat flex flex-col items-center justify-center transition-all duration-300 filter grayscale hover:grayscale-0" style="background-image: url('{{ asset('storage/conciertos/concert.jpg') }}');">
                                <div class="mb-36 ml-3 mr-3 backdrop-blur-md bg-white/20 rounded-lg p-2">
                                    <h1 class="text-4xl font-semibold text-white">BOLETILANDIA</h1>
                                </div>
                                    <div class="w-full text-center">
                                    <a
                                        href="{{ route('login') }}"
                                    >
                                    <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                        <span class="relative px-6 py-3.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        Log in
                                        </span>
                                        </button>
                                    </a>
                                </div>

                                    

                                    @if (Route::has('register'))
                                    <div class="w-full text-center mb-36">
                                            <a
                                            href="{{ route('register') }}"
                                        >
                                        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                                            <span class="relative px-6 py-3.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                            Sign in
                                            </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                                    @endif
                                @endauth
                            
                        @endif
                    
</body>
</html>