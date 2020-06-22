<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>

    <style>
        h4 {
            margin: 5px 0px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h4>CLIENTE: {{$username}}</h4>
        <h4>E-MAIL: {{$email}}</h4> 
        <h4>Telefone Whatsapp: {{$whatsapp}}</h4> <br>
        <h4>DATA: {{$date}}</h4>
        <h4>HORA: {{$time}}</h4> <br>
        <h4>CIDADE DE SAIDA: {{$city}}</h4>
        <h4>PASSAGEIROS: {{$passenger_num}}</h4>
        <h4>{{$hotel}}</h4>
        <h4>BAGAGENS: {{$luggage}}</h4> <br>
        <h4>DESTINO: {{$destination}}</h4> <br>
        <h4>DATAS: {{$trip_period}}</h4>
        <h4>{{$datestr}}</h4>
        <h4>VOO: {{$flight}}</h4>
    </div>
</body>
</html>
