<style>
    *{
       text-align: center;
   }

body{


}

.parent{
    background-color: rgb(79, 170, 140);
    border: 3px solid black;
    width: 600px;
    height: 600px;
    margin: auto;
}


</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You</title>
</head>
    <body>
        <form action="{{route('product.index')}}" class="parent" method="GET">
            <h1>Thank You For Purchasing :)</h1>
        <br>
        <br>
        <input type="submit" value="Back To Home" class="btn btn-primary"></button>
        </form>
</body>
</html>
