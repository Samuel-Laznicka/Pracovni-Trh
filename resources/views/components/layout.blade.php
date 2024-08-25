<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Pracovní trh</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" 
        rel="stylesheet">
    @vite(['resources/js/app.js'])

</head>
    <body class="bg-black text-white font-Montserrat pb-20">

        <div class="px-10">
            <nav class="flex justify-between items-center py-4 border-b border-white/10">
                <div>
                    <a href="/">
                        <img src="resources/images/logo.png" alt="Logo webových stránek">
                    </a>
                </div>

                <div class="space-x-6 font-bold">
                    <x-nav-link href="/" :active="request()->is('/')">Domovksá stránka</x-nav-link>
                    <x-nav-link href="/jobs-index" :active="request()->is('jobs-index')">Nabízené pracovní pozice</x-nav-link>
                    <x-nav-link href="/companies" :active="request()->is('companies')">Firmy</x-nav-link>
                </div>

                @auth
                    <div class="space-x-6 font-bold flex">
                        <form method="POST" action="/logout">
                            @csrf
                            @method('DELETE')
                            
                            <button>Odhlásit se</button>
                        </form>
                    </div>
                @endauth    
                
                @guest
                    <div class="space-x-6 font-bold">
                        <a href="/register">Registrace</a>
                        <a href="/login">Přihlášení</a>
                    </div>
                @endguest
            </nav>

            <main class="mt-10 max-w-[986px] mx-auto">
                {{ $slot }}
            </main>
        </div>
        
    </body>
</html>
