<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0510089784.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app.css">
</head>

<body>


    <div class="container-fluid">
        <div class="container">
            <div class="row">
                @foreach ($film as $item)
                <div class="col-2">
                    <div class="row flex-column">
                        <div class="col-12">
                            {{$item['original_title']}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</body>

</html>