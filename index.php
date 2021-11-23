<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2013/07/12/19/32/rupees-154955_1280.png" type="image/x-icon">

  <title>XYZ BANK-HOME</title>
</head>
<style>
.img-fluids {
    max-width: 67%;
    height: auto;
}
.mm{
margin: 5px;
}
footer{
  background-color: black;
  position: relative;
  bottom: -50px;
}
</style>
<body>
  <header>
    <!-- navbarstarting -->
    <nav class="navbar  navbar-dark bg-dark navbar-expand-lg" >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">XYZ BANK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="transactionhistory.php">Transaction History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="viewallcustomer.php">View All Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
          </ul>
          <form class="d-flex">
                <!-- Button trigger modal -->
             <button type="button" class="btn btn-outline-success stylebutton mm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                   Login
             </button>
            <!-- Button trigger modal -->
           <button type="button" class="btn btn-outline-danger stylebutton mm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Signup
           </button>
          </form>
        </div>
      </div>
    </nav>
      <!-- navbar end   -->
 <!-- Button trigger modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Login To XYZ BANK</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
          <div class="modal-body">
          <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" Required>Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" Required>Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
     <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1" required>I accept term and condition</label>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
      </div>
    </div>
  </div>
</div>
<!-- signup Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signup in XYZ BANK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
      <div class="mb-3">
      <label for="exampleInputtext1" class="form-label" Required>Enter Your Full Name</label>
        <input type="text" class="form-control" id="exampleInputtext1">
      <label for="exampleInputtext1" class="form-label" Required>Username</label>
        <input type="text" class="form-control" id="exampleInputtext1">
        <div id="emailHelp" class="form-text">Your unique username must 4 - 10 characters (only lowecase letters, numbers & underscores allowed) with no spaces .</div>
        <label for="exampleInputEmail1" class="form-label" Required>Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" Required>Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <label for="exampleInputPassword1" class="form-label" Required>Confirm-Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
     <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1" required>I accept term and condition</label>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
      </div>
    </div>
  </div>
</div>

  </header>
  <!-- images 3 parts starts -->
  <main>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>WELCOME TO XYZ BANK</h1>
            <p>Everyday is a bank account, and time is our currency. No one is rich, no one is poor, we've got 24 hours
              each</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/6.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>XYZ BANK DEMAT ACCOUNT</h2>
            <p>XYZ Bank Provide You Demat and Trading Acoount Free</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/5.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>XYZ BANK ATM</h3>
            <p>XYZ BANK Give You Credit and debit Card </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- images 3 parts end -->
  
    <div _ngcontent-serverapp-c44="" class="row ">
      <div _ngcontent-serverapp-c44="" class="card mx-auto my-2 p-2 align-items-center" style="width: 18rem;"><img
          _ngcontent-serverapp-c44="" src="images/card4.jpg" alt="..." class="padded card-img-top">
        <div _ngcontent-serverapp-c44="" class="card-body">
          <h5 _ngcontent-serverapp-c44="" class="card-title text-center">Customers</h5>
          <p _ngcontent-serverapp-c44="" class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum debitis vel sed eius, libero mollitia esse reprehenderit commod.</p><a
            _ngcontent-serverapp-c44="" routerlink="/videos" class="btn btn-primary d-block" href="viewallcustomer.php">View All Customer</a>
        </div>
      </div>
      <div _ngcontent-serverapp-c44="" class="card mx-auto my-2 p-2 align-items-center" style="width: 18rem;"><img
          _ngcontent-serverapp-c44="" src="images/card5.jpg" alt="..." class="padded card-img-top">
        <div _ngcontent-serverapp-c44="" class="card-body">
          <h5 _ngcontent-serverapp-c44="" class="card-title text-center">All Transaction</h5>
          <p _ngcontent-serverapp-c44="" class="card-text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non architecto odit consequaturcati fuga sint qui!.</p><a
            _ngcontent-serverapp-c44="" routerlink="/blog" class="btn btn-primary d-block" href="transactionhistory.php">Transaction History</a>
        </div>
      </div>
      <div _ngcontent-serverapp-c44="" class="card mx-auto my-2 p-2 align-items-center" style="width: 18rem;"><img
          _ngcontent-serverapp-c44="" src="images/card2.jpg" alt="..." class="padded card-img-top">
        <div _ngcontent-serverapp-c44="" class="card-body">
          <h5 _ngcontent-serverapp-c44="" class="card-title text-center">Contact Us</h5>
          <p _ngcontent-serverapp-c44="" class="card-text text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint vitae ipsam facilis veritatis! Praese?
          </p><a _ngcontent-serverapp-c44="" routerlink="/contact" class="btn btn-primary d-block"
            href="https://www.linkedin.com/in/shailendra-tomar-34858a209/">Contact</a>
        </div>
      </div>
    </div>
    <!-- Responsive left-aligned hero with image -->
              <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                  <img src="images/card7.jpg" class="d-block mx-lg-auto img-fluids" alt="Bootstrap Themes" loading="lazy" width="700" height="500">
                </div>
                <div class="col-lg-6">
                  <h1 class="display-5 fw-bold lh-1 mb-3">Start Trading With XYZ Bank Demat Account</h1>
                  <p class="lead">People in the stock markets love to look at the historical prices of a share and make buy or sell decisions. This approach is, needless to say, a loss-making approach in the long term and even in the short term.</p>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Demat Account</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Trading Account</button>
                  </div>
                </div>
              </div>

            </main>
    <!-- Responsive left-aligned hero with image -->   
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="https://cdn.pixabay.com/photo/2013/07/12/19/32/rupees-154955_1280.png" alt="" width="24" height="19">
          <small class="d-block mb-3 text-muted">©2021-2021</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>
  <script src="bootstrap/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
</body>

</html>
