<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.0-web/css/fontawesome.min.css') }}">
    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="bg-white">
    <div class="container-sm" style="width: 80%">
        <div class="py-1 d-flex justify-content-between align-items-center">
            <h6>Subs</h6>
            <h3 style="font-family:Times new roman,serif">Large</h3>
            <div class="icon-bar">
                <a><i class="fa fa-search"></i></a>
                <button class="btn btn-sm btn-light btn-outline-dark"><a>Sign up</a></button>
            </div>
        </div>
        <div>
            <ul class="nav nav-pills nav-justified border-top">
                <li class="nav-item"><a class="nav-link active link-dark" data-bs-toggle="pill" href="#">World</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">U.S.</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">Technology</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">Design</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">Culture</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">Business</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">Politics</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">Opinion</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">Science</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">Health</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">Style</a></li>
                <li class="nav-item"><a class="nav-link link-dark" data-bs-toggle="pill" href="#">Travel</a></li>
            </ul>
        </div>
        <div class="card mt-2 mb-2">
            <div  class="card-body rounded bg-light rounded-end-circle pt-5 pb-5">
                <h1 class="display-4" style="font-family:san-serif"><i>Title of a longer<br>featured blog post</i></h1>
                <p>Multiple lines of text that form the lede, informing new readers quickly<br>
                    and efficiently about what's most interesting in this post's contents.</p>
                <p><b><u><a href="#">Continue reading...</a></u></b></p>
            </div>

        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body pt-3">
                        <h6>World</h6>
                        <h3 class="card-title">Featured post</h3>
                        <h6 class="card-subtitle">Nov 12</h6>
                        <div class="card-text">
                            <p>This is a wider class with supporting text below as a<br>
                                natural lead-in to additional content</p><br>
                            <a><b><u>Continue reading</u></b></a>
                        </div>
                    </div>
                    <embed class="card-img-left bg-white">
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body pt-3">
                        <h6>Country</h6>
                        <h3 class="card-title">Sport Post</h3>
                        <p class="card-subtitle">Nov 13</p>
                        <div class="card-text">
                            <p>This is a smaller class with supporting text below as a<br>
                                natural lead-in to additional content</p><br>
                            <a><b><u>Continue reading</u></b></a>
                        </div>
                    </div>
                    <embed class="card-img-left bg-white">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
