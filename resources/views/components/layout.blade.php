<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>{{$title}}</title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-zinc-900 py-4 px-6 shadow-md font-sans">
        <nav>
            <!-- flex e gap-8 garantem que fiquem lado a lado com espaçamento -->
            <ul class="flex justify-center items-center gap-6 sm:gap-8 list-none m-0 p-0">

                <li>
                    <a href="/" title="Ir para a página inicial"
                        class="text-gray-200 font-medium px-4 py-2 rounded-md transition-colors duration-300 hover:bg-zinc-800 hover:text-sky-400">
                        Home
                    </a>
                </li>

                <li>
                    <a href="/" title="Calcular IMC"
                        class="text-gray-200 font-medium px-4 py-2 rounded-md transition-colors duration-300 hover:bg-zinc-800 hover:text-sky-400">
                        IMC
                    </a>
                </li>

                <li>
                    <a href="/dashboard" title="Acessar o painel"
                        class="text-gray-200 font-medium px-4 py-2 rounded-md transition-colors duration-300 hover:bg-zinc-800 hover:text-sky-400">
                        Dashboard
                    </a>
                </li>

                <!-- Botão de Login com destaque e efeito hover -->
                
                <li> 
                    @auth
                    <a href="/logout" class="bg-sky-500 text-white font-bold px-6 py-2 rounded-full shadow-lg shadow-sky-500/30 transition-all duration-300 hover:bg-sky-600 hover:scale-105 inline-block">Logout</a>
                    @else
                    <a href="/login" title="Fazer login"
                        class="bg-sky-500 text-white font-bold px-6 py-2 rounded-full shadow-lg shadow-sky-500/30 transition-all duration-300 hover:bg-sky-600 hover:scale-105 inline-block">
                        Login
                    </a>
                    @endauth
                </li>

                <li>
                    <a href="/registro" title="Fazer login"
                        class="bg-sky-500 text-white font-bold px-6 py-2 rounded-full shadow-lg shadow-sky-500/30 transition-all duration-300 hover:bg-sky-600 hover:scale-105 inline-block">
                        Registro
                    </a>
                </li>

                <li

            </ul>
        </nav>
    </header>

    {{$slot}}

    <footer>Entrou agua</footer>
</body>

</html>