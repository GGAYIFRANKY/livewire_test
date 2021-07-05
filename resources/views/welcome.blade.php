<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>LiveWire</title>
    <livewire:styles/>
</head>
<body>




    <livewire:comments  :initialComments="$comments" />

     
    


    <livewire:scripts />
</body>
</html>