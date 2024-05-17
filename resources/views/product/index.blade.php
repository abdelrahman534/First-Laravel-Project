<style>
    * {
        text-align: center
    }

    body {
        background-color: rgb(79, 170, 140)
    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
</head>
<body>
<h1>products</h1>
<div><em>Welcome to the webpage</em></div>
<br>
<div>
    <!-- Button to navigate to the create view -->
    <a href="{{ route('product.create') }}">
        <button>Create Product</button>
    </a>
</div>
<div>
    <!-- Add this button to navigate to all products page -->
    <br>
    <a href="{{ route('product.all') }}" class="btn-primary"><button>View All Products</button></a>


</div>
</body>
</html>
