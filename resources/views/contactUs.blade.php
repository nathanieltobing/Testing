<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giant Book Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="text-center bg-primary" style="display : flex; justify-content : center; font-size:5vh; color:white">
        
        Giant Book Supplier
      </div>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav fs-4">
                      <li class="nav-item mx-5">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item dropdown mx-5">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                        </a>
                        <ul class="dropdown-menu fs-4">
                          @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="/category/{{$category->id}}">{{$category->name}}</a></li>
                          @endforeach
                        </ul>
                      </li>
                      <li class="nav-item mx-5">
                        <a class="nav-link active" href="/publisher">Publisher</a>
                      </li>
                      <li class="nav-item mx-5">
                        <a class="nav-link active" href="/contact-us">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
             
              </div> 
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


              <div class="container d-flex justify-content-center flex-column">
                <div class="d-flex justify-content-center my-4 ">
                  <h1>Contact Us</h1>
                </div>
                          
                <div class="d-flex justify-content-center ">                                  
                    <h2>Store Address :</h2>                                                                                                        
                </div>

                <h3 class = "text-center">Jalan Pembangunan Baru Raya,</h3>
                <h3 class = "text-center">Kompleks Pertokoan Emerald Blok III/12,</h3>    
                <h3 class = "text-center">Bintaro, Tangerang Selatan</h3>  
                <h3 class = "text-center">Indonesia</h3>    

                <div class="d-flex justify-content-center mt-4">                                  
                    <h2>Open Daily:</h2>                                                                                                        
                </div>
                <h3 class = "text-center">08:00 - 20:00</h3>

                <div class="d-flex justify-content-center mt-4">                                  
                    <h2>Contact :</h2>                                                                                                        
                </div>
                
                <h3 class = "text-center">Phone : 021-08899776655</h3>
                <div class="d-flex justify-content-center mb-4">                                  
                    <h3 class = "text-center">Email : happybookstore@happy.com</h3>                                                                                                    
                </div>              
              </div>       
                                                
        </div>
              
             
              
            
</body>
<footer class="bg-primary text-center text-lg-start d-flex justify-content-center ">
  <div class="row d-flex flex-column p-4 fs-3 text-white">
    <div class="col text-center">
      ©Giant Book Supplier 2022
    </div>
    <p>2440004855 - Nathaniel Kevin Pardomuan</p>

  </div> 
</footer>
</html>