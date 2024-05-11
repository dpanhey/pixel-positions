<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>

<body class="bg-black text-white">

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

            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[968px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>