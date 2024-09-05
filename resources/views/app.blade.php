<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL::asset('/images/kopnus.jpg') }}" type="image/x-icon">

    @vite('resources/js/app.js')
    @inertiaHead
    @routes
</head>

<body>
    @inertia
</body>

</html>
