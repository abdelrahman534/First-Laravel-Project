<style>
     *{
        text-align: center
    }

body{

}

h1{
    color: rgb(79, 170, 140);
}
.parent{
    background-color: rgb(79, 170, 140);
    border: 3px solid black;
    width: 600px;
    height: 600px;
    margin: auto;
}

.error_ul{
    list-style: none;
    color: red;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create A Product :</h1>

    @if ($errors->any())
    <div>
        <strong>Validation errors:</strong>
        <ul class="error_ul">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('product.store')}}" method="post" class="parent">
        @csrf
        @method('post')
        
        <div>
            <label for="name"><strong>name:</strong></label><br>
            <input type="text" name="name" placeholder="Enter the name">
        </div>
        <br>
        <div>
            <label for="Qty"><strong>Quantity:</strong></label><br>
            <input type="name" name="Qty" placeholder="Enter the Quantity">
        </div>
        <br>
        <div>
            <label for="price"><strong>Price:</strong></label><br>
            <input type="name" name="price" placeholder="Enter the Price">
        </div>
        <br>
        <div>
            <label for="description"><strong>Description:</strong></label><br>
            <input type="name" name="description" placeholder="Enter the Description">
        </div>
        <br>
        <div>
            <input type="submit" value="Save Product">
        </div>
    </form>
    <div>
        <!-- Button to navigate to the index view -->
        <a href="{{ route('product.index') }}">
            <button>Cancel</button>
        </a>
    </div>
</body>
</html>
    