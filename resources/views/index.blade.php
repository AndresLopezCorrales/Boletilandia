<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['/resources/css/galeria-style.css'])
</head>
<body>
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                <!--Mandar a la pagina inicial-->
                                <script>
                                    window.location.href = "{{ url('/home') }}"; // Redirige a la página de inicio
                                </script>
                                @else

                                <div class="gallery-wrap">
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
                                </div>
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
</body>
</html>