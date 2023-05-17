<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Bcketlist</title>
</head>

<body class=" ">
    <header>

    </header>
    <main class=" flex justify-center items-center h-screen p-5 ">
        <div class="w-2/3 h-full p-5  shadow-lg">
            {{ $slot }}
        </div>

    </main>
    <footer></footer>

</body>

</html>
