<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">REST API</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- Blog Post -->
                @foreach($articles as $a)
                <div class="card mb-4">
                    <img class="card-img-top img1" src="{{ $a->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{ $a->title}}</h2>
                        <p class="card-text">{{ $a->description}}</p>
                        <a href="{{ $a->url}}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $a->publishedAt}}
                        <a href="#"></a>
                    </div>
                </div>
                @endforeach
                

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search Article</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <form class="form-inline" action="/search">@csrf 
                             <label for="keyword">Languages :</label> 
                            <!--<input type="text" class="form-control" name="keyword">-->
												<select class="w-full sm:w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-1 leading-8 transition-colors duration-200 ease-in-out" name="language" id="language">
                                                    <option disabled="disabled" selected label="Languages"></option>
                                                    <option value="hi">Hindi</option>
                                                    <option value="en">English</option>
                                                    <option value="ta">Tamil</option>
                                                    <option value="pt">Portuguese</option>
                                                    <option value="ru">Russian</option>
                                                    <option value="mr">Marathi</option>
                                                </select>
												<br>
							<label for="keyword">Country :</label> 
                            <!--<input type="text" class="form-control" name="keyword">-->
												<select class="w-full lg:w-1/3 sm:w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-1 leading-8 transition-colors duration-200 ease-in-out" name="country" id="country">
                                                    <option disabled="disabled" selected label="Country"></option>
                                                    <option value="ar">Argentina </option>
                                                    <option value="au">Australia</option>
                                                    <option value="at">Austria</option>
                                                    <option value="be">Belgium</option>
                                                    <option value="br">Brazil</option>
                                                    <option value="bg">Bulgaria</option>
                                                    <option value="ca">Canada</option>
                                                    <option value="cn">China</option>
                                                    <option value="co">Colombia</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="eg">Egypt</option>
                                                    <option value="fr">France</option>
                                                    <option value="de">Germany</option>
                                                    <option value="gr">Greece</option>
                                                    <option value="hk">Hong Kong</option>
                                                    <option value="hu">Hungary</option>
                                                    <option value="in">India</option>
                                                    <option value="id">Indonesia</option>
                                                    <option value="ie">Ireland</option>
                                                    <option value="il">Israel</option>
                                                    <option value="it">Italy</option>
                                                    <option value="lv">Latvia</option>
                                                    <option value="lt">Lithuania</option>
                                                    <option value="my">Malaysia</option>
                                                    <option value="mx">Mexico</option>
                                                    <option value="ma">Morocco</option>
                                                    <option value="nl">Netherlands</option>
                                                    <option value="nz">New Zealand</option>
                                                    <option value="ng">Nigeria</option>
                                                    <option value="no">Norway</option>
                                                    <option value="ph">Philippines</option>
                                                    <option value="pl">Poland</option>
                                                    <option value="pt">Portugal</option>
                                                    <option value="ro">Romania</option>
                                                    <option value="ru">Russia</option>
                                                    <option value="sa">Saudi Arabia</option>
                                                    <option value="rs">Serbia</option>
                                                    <option value="sg">Singapore</option>
                                                    <option value="sk">Slovakia</option>
                                                    <option value="si">Slovenia</option>
                                                    <option value="za">South Africa</option>
                                                    <option value="kr">South Korea</option>
                                                    <option value="se">Sweden</option>
                                                    <option value="ch">Switzerland</option>
                                                    <option value="tw">Taiwan</option>
                                                    <option value="th">Thailand</option>
                                                    <option value="tr">Turkey</option>
                                                    <option value="ua">Ukrain</option>
                                                    <option value="uk">United Kingdom</option>
                                                    <option value="us">United States</option>
                                                    <option value="ve">Venezuela</option>
                                                </select>
							<button type="submit"
                                    class="btn btn-primary">Search</button>
                            </form>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
               
                <!-- Side Widget -->
                

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
