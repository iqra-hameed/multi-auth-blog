@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Xtra Blog</title>
        <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <!-- https://fonts.google.com/ -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
        <!--

        TemplateMo 553 Xtra Blog

        https://templatemo.com/tm-553-xtra-blog

        -->
    </head>

    <body>



        <div class="container-fluid">
            <main>
                <!-- Search form -->
                <div class="row ">
                    <div class="col-12">
                        <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                            <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..."
                                aria-label="Search">
                            <button class="tm-search-button" type="submit">
                                <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row ">
                    @foreach ($blogs as $blog)
                        <article class="col-12 col-md-6 tm-post">
                            <hr class="tm-hr-primary">
                            <a href="{{ url('details', $blog->id) }}" class="effect-lily tm-post-link tm-pt-60">
                                <div class="tm-post-link-inner">
                                    <img src="/image/{{ $blog->Image }}" width="50px" alt="" class="img-fluid">
                                </div>
                                <span class="position-absolute tm-new-badge">New</span>
                                <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{ $blog->Title }}</h2>
                            </a>

                        </article>
                    @endforeach

                </div>

                </footer>
            </main>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/templatemo-script.js"></script>
    </body>

    </html>
@endsection
