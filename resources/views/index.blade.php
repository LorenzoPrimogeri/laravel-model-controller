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


    <div class="container-fluid bg-info">
        <div class="container">
            <div class="row gy-3 justify-content-between">
                @foreach ($film as $item)
                <div class="col-5">
                    <div class="row flex-column text-center card">
                        <div class="col-12">
                            <img src="/images/error.png" alt="iamges errror">
                        </div>
                        <div class="col-12">
                            {{$item['title']}}
                        </div>
                        <div class="col-12">
                            {{$item['nationality']}}
                        </div>
                        <div class="col-12">
                            {{$item['date']}}
                        </div>
                        <div class="col-12">
                            {{$item['vote']}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</body>

</html>