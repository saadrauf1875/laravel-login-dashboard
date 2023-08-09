<!doctype html>
<html lang="en" dir="ltr">

<head>

   @include('librarian.css')

</head>

<body class="app sidebar-mini ltr light-mode">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('librarian.header')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
           @include('librarian.sidebar')
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Books Dashboard</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Books</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Books-Layouts</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                 
                        <!-- End Row -->

                        <!--Row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Books Detals</h3>
                                    </div>

                                    <form action="{{url('/add_books')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
             
                                    <div class="card-body">
                                        <div class="form-row">
                                        <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-12 form-label" for="example-email">Book Name:</label>
                                                <div class="col-md-12">
                                                <input type="text"  class="form-control" value="@if(isset($data2->book_name)){{$data2->book_name}} @endif" name="book_name" id="field" placeholder="Enter Book  Name:" required>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6  mb-0">
                                                <div class="form-group">
                                                <label class="col-md-12 form-label" for="example-email">Category Name:</label>
                                                <div class="col-md-12">
                                                <input type="text"  class="form-control" value="@if(isset($data2->book_category)){{$data2->book_category}} @endif" name="book_category" id="field" placeholder="Enter Book Category:" required>
                                                </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-12 form-label" for="example-email">Book Author:</label>
                                                <div class="col-md-12">
                                                <input type="text"  class="form-control" value="@if(isset($data2->book_author)){{$data2->book_author}} @endif"   name="book_author" id="field" placeholder="Enter Book Author:" required>
                                                </div>
                                                </div>
                                            </div>
                                       
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-12 form-label" for="example-email">Rack No:</label>
                                                <div class="col-md-12">
                                                <input type="text"  class="form-control" value="@if(isset($data2->rack_no)){{$data2->rack_no}} @endif"  name="rack_no" id="field" placeholder="Enter Rack No:" required>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-12 form-label" for="example-email">Book Edition:</label>
                                                <div class="col-md-12">
                                                <input type="text"  class="form-control" value="@if(isset($data2->book_edition)){{$data2->book_edition}} @endif"  name="book_edition" id="field" placeholder="Enter  Book Edition:" required>
                                                </div>
                                                </div>
                                            </div>


                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-12 form-label" for="example-email">Date Of Publication:</label>
                                                <div class="col-md-12">
                                                <input type="text"  class="form-control" value="@if(isset($data2->date_of_publication)){{$data2->date_of_publication}} @endif"  name="date_of_publication" id="field" placeholder="Enter  Book Publishion Date:" required>
                                            </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-12 form-label" for="example-email">Book Publisher:</label>
                                                <div class="col-md-12">
                                                <input type="text"  class="form-control" value="@if(isset($data2->book_publisher)){{$data2->book_publisher}} @endif" name="book_publisher" id="field" placeholder="Enter  Book Publisher:" required>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-12 form-label" for="example-email">Book Status:</label>
                                                <div class="col-md-12">
                                                <input type="text"  class="form-control" value="@if(isset($data2->book_status)){{$data2->book_status}} @endif" name="book_status" id="field" placeholder="Enter  Book Status:" required>
                                                </div>
                                                </div>
                                            </div>



                                       
                                        </div>
                                      
                                        
                                      
             
                                        <div class="row mb-4 ">
                                             <div class="col-md-12 ">
                                             <div class="d-flex justify-content-center">
                                             <button type="submit" value="Add Products" name="submit" class="btn btn-lg btn-primary">Submit</button>
                                             </div>
                                            
                                        </div>

                                       </div>
                                    </div>
                                    </form>
                                </div>
                              
                               
                            </div>
                           
                        </div>
                        <!--End Row-->





 <div class="row   mt-2">
  <div class="col-xl-12 col-12 ">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">View Books</h3>
          </div>
          <div class="card-body">
              
              <div class="table-responsive">
                  <table class="table border text-nowrap text-md-nowrap table-bordered mb-0">
                      <thead>
                        <tr>
                          <th>Book Name</th>
                          <th>Category Name</th>
                          <th>Book Author</th>
                          <th>Rack No</th>
                          <th>Book Edition</th>
                          <th>Date Of Publication</th>
                          <th>Book Publisher</th>
                          <th>Book Staus</th>
                          
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                          
                         
                       
       @forelse ($data as $data)
       <tr>
           <td >{{$data->book_name}}</td>
           <td >{{$data->book_category}}</td>
           <td >{{$data->book_author}}</td>
           <td >{{$data->rack_no}}</td>
           <td >{{$data->book_edition}}</td>
           <td >{{$data->date_of_publication}}</td>
           <td >${{$data->book_publisher}}</td>
           <td >{{$data->book_status}}</td>
           <td><a class="btn btn-warning"  href="{{url('/update',$data->id)}}" >Edit</button></td>
           <td><a class="btn btn-danger" href="{{url('/delete_books',$data->id)}}" >Delete</button></td>
                  
           
           </tr>

           @empty

           <tr>
             <td colspan="16">
               <p>Record Not Found!</p>
             </td>
              
            
             
           </tr>
       @endforelse
      
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  
</div>
                        
                            


                        <!--Row -->
                   
                        <!--End Row-->
                    </div>
                    <!-- CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content close-->

        </div>

        <!-- Sidebar-right -->
 
        <!--/Sidebar-right-->

        <!-- Country-selector modal-->
        @include('librarian.countryselector')
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        @include('librarian.footer')
        <!-- FOOTER END -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

   @include('librarian.javascript')

</body>

</html>