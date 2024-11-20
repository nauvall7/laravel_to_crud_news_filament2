<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</headp>
<body>
    <h1>Ini news</h1>
    @foreach ($news as $row)
    <div>
        <div style="width: 10%;">
            <img src="storage/{{ $row->picture }}"/>
        </div>
        <div style="width: 90%">
            <span>{{ $row->title }}</span><br>
            <p style="display: inline-block">{{ $row->content }}</p>
        </div>
    </div>  
    @endforeach

</body>
</html>