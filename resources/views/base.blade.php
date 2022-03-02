<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container mx-5">
            <a href="" class="navbar-brand">Stop</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link underline hover:decoration-dashed">Home</a></li>
                <li class="nav-item"><a href="/product" class="nav-link underline hover:decoration-dashed">Insert Product</a></li>
                <li class="nav-item"><a href="/category" class="nav-link underline hover:decoration-dashed">Insert Category</a></li>
                <li class="nav-item"><a href="" class="nav-link underline hover:decoration-dashed">about</a></li>
                <li class="nav-item"><a href="" class="nav-link underline hover:decoration-dashed">login</a></li>
            </ul>
        </div>
    </nav>
    @section('content')
        
    @show
</body>
</html>