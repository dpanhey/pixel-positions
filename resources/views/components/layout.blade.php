<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk">

    <div class="px-8">
        <nav class="flex items-center justify-between py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}"
                         alt="">
                </a>
            </div>

            <div class="flex items-center space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth()
                <div class="flex space-x-4 font-bold">
                    <a href="/jobs/create">Post a Job</a>
                    <form action="/logout"
                          method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Logout</button>
                    </form>
                </div>
            @endauth

            @guest()
                <div class="space-x-4 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[968px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
