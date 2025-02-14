<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <style>
        body{
            font-family: "Arial", "sans-serif";
            margin: 0;
            padding: 0;
            background-color: white;
        }

        .container{
            max-width: 800px;
            margin: 5px auto;
            background-color: aliceblue;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }

        h1{
            text-align: center;
            margin-bottom: 20px;
        }

        .post{
            padding: 20px;
            border: 1px solid white;
            border-radius: 5px;
            background-color: #fafafa;
        }

        .post img{
            max-width: 100%;
            border-radius: 5px
        }

        .post-content{
            margin-bottom: 20px;
        }

        .post-content h2{
            margin-bottom: 10px;
        }

        .post-content p{
            margin-bottom: 10px;
        }

        .back-btn{
            background-color: rgb(0, 95, 211);
            display: block;
            width: 100px;
            margin: 0 auto;
            padding:  10px 20px;
            text-align: center;
            color: #fafafa;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Post Detail</h1>
        <div class="post">
            <img src="{{asset('storage/posts/'. $posts->images)}}" class="w-100 rounded" alt="Post Image">
        <div class="post-content">
            <hr>
            <h2>{{$posts->judul}}</h2>
            <p class="tmt-3">
                Harga : {{$posts->harga}}
                <br>
                Genre : {{$posts->genre}}
                <br>
            </p>
        </div>
        </div>
        <a href="{{route('admin')}}" class="back-btn">Back</a>
    </div>
</body>
</html>