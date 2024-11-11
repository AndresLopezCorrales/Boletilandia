<div class="min-h-screen bg-cover bg-center bg-no-repeat flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image: url('{{ asset('storage/conciertos/nsqk_concert.jpeg') }}');">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white bg-opacity-5 backdrop-blur-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
