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
            <div class="mt-0 main-content app-content">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Categories Dashboard</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Categories</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Categories-Layouts</li>
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
                                        <h3 class="card-title">Categories Detals</h3>
                                    </div>

                                    <form action="{{url('/add_categories')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
             
                                    <div class="card-body">
                                        <div class="form-row">
                                        <div class="mb-0 form-group col-md-6">
                                                <div class="form-group">
                                                <label class="col-md-12 form-label" for="example-email">Category Name:</label>
                                                <div class="col-md-12">
                                                <input type="text"  class="form-control" value="@if(isset($data2->category_name)){{$data2->category_name}} @endif" name="category_name" id="field" placeholder="Enter Book  Name:" required>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="mb-0 form-group col-md-6">
                                                <div class="form-group">
                                                <label class="col-md-12 form-label" for="example-email">Category Description:</label>
                                                <div class="col-md-12">
                                                <input type="text"  class="form-control" value="@if(isset($data2->categry_description)){{$data2->categry_description}} @endif" name="categry_description" id="field" placeholder="Enter Book Category:" required>
                                                </div>
                                                </div>
                                            </div>
                                           
                                          
                                       
                                          



                

                                       
                                        </div>
                                      
                                        
                                      
             
                                        <div class="mb-4 row ">
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





 <div class="mt-2 row">
  <div class="col-xl-12 col-12 ">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">View Books</h3>
          </div>
          <div class="card-body">
              
              <div class="table-responsive">
                  <table class="table mb-0 border text-nowrap text-md-nowrap table-bordered">
                      <thead>
                        <tr>
                          <th>Book Name</th>
                          <th>Category Name</th>
                          
                          
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                          
                         
                       
       @forelse ($data as $data)
       <tr>
           <td >{{$data->category_name}}</td>
           <td >{{$data->categry_description}}</td>
          
           <td><a class="btn btn-warning"  href="{{url('/update_categories',$data->id)}}" >Edit</button></td>
           <td><a class="btn btn-danger" href="{{url('/delete_categories',$data->id)}}" >Delete</button></td>
                  
           
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