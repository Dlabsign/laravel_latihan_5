<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    @vite([])
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .header {
            margin: 0;
            padding: 5px 20px;
            font-size: 14px;
            border-bottom: 2px solid #e5e5e5;
            background-color: #373A40;
            border-radius: 10px;
            color: #fff;
            font-weight: lighter;
        }

        .header h4 {
            font-weight: 500;
        }


        .content h1 {
            color: #007BFF;
            margin-left: 20px;
            font-size: 34px;
            font-weight: 500;
            margin-top: 30px;
        }

        .content .message {
            color: #373A40;
            font-weight: 500;
            line-height: 2;
            font-size: 14px;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h4>Email : {{$user->email}}</h4>
            <h4>Nama Pengirim : {{$user->nama}}</h4>
        </div>
        <div class="content">
            <h1>{{$user->judul_pesan}}</h1>
            <h4 class="message">{{$user->isi_pesan}}</h4>
        </div>
    </div>
</body>

</html>