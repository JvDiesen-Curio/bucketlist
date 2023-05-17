<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="p-5">
    <div class=" flex flex-wrap  h-full  ">
        @foreach ($data as $item)
            <div class=" m-5 shadow-md rounded-md p-5 flex justify-center flex-nowrap">
                <div>
                    <p> ID: {{ $item['id'] }}</p>
                    <p> SOL: {{ $item['sol'] }}</p>
                    <p> DATE: {{ $item['earth_date'] }}</p>
                    <img class="h-40
                     " src="  {{ $item['img_src'] }}" alt="">

                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
