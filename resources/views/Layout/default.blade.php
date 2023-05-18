<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PI-3</title>
</head>
<body>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i></button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"  id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="background-color: ghostwhite">
      <div class="offcanvas-header" style="background-color:azure">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Estoque</h5>
        <button type="button" class="btn btn-primary" data-bs-dismiss="offcanvas"><i class="fa-solid fa-arrow-left-long"></i></button>
      </div>
      <div class="offcanvas-body">
        <a type="button" class="btn btn-link" href="">Fornecedores</a><br>
        <a type="button" class="btn btn-link" href="">Fornecedores</a><br>
        <a type="button" class="btn btn-link" href="">Fornecedores</a><br>
        <a type="button" class="btn btn-link" href="">Fornecedores</a><br>
        <a type="button" class="btn btn-link" href="">Fornecedores</a>
      </div>
      <div class="offcanvas-footer mb-3 ml-4">
        <button type="button" class="btn btn-primary mr-4"><i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180"></i> Logout</button>
      </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>