



<!DOCTYPE html>
<html lang="en">

<head
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="/css/style.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online boat_booking system</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="{{asset('asset/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('asset/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
             

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                       
                <div class="container">
		<div class="title">Registration Form</div>
		
			<form action="{{url('/form_action')}}" method="post">
			@csrf
            <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
              <label class="form-label" for="form7Example1" placeholder="FirstName">First name</label>
                <input type="text" id="form7Example1" name="name" class="form-control" />
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
              <label class="form-label" for="form7Example2">Last name</label>
                <input type="text" id="form7Example2" name="name" class="form-control" />
              </div>
            </div>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form7Example3">Boat Type</label>
            <input type="text" id="form7Example3" name="name" class="form-control" />
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form7Example4">Address</label>
            <input type="text" id="form7Example4" name="name" class="form-control" />
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form7Example5">Email</label>
            <input type="email" id="form7Example5" name="name" class="form-control" />
          </div>

          <!-- Number input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form7Example6">Phone</label>
            <input type="number" id="form7Example6" name="name" class="form-control" />
          </div>

          <!-- Message input -->
    

          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-2">
          <label class="form-check-label" for="form7Example8">
            <input class="form-check-input me-2" type="checkbox" value="" id="form7Example8" checked />
					
        
                          <div class="button">
	                             <input type="submit" name="submit" value="Register">
	                             </div>
								
								
            </form>
        </div><br>
                </div>
                <!-- /.container-fluid -->    <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &Khairiya Kombo; My Web 2023</span>
                    </div>
                </div>
            </footer>

            </div>
            <!-- End of Main Content -->

        
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

</body>

</html>