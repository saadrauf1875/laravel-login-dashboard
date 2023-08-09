<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css" integrity="sha256-SMGbWcp5wJOVXYlZJyAXqoVWaE/vgFA5xfrH3i/jVw0=" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

    <form action="{{url('/add_books')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
             @csrf
             
             
               <div class="row mb-4">
                    <label class="col-md-3 form-label" for="example-email">Book Name:</label>
                    <div class="col-md-9">
                    <input type="text"  class="form-control" name="book_name" id="field" placeholder="Enter Book  Name:" required>
                 </div>
               </div>
                <div class="row mb-4">
                    <label class="col-md-3 form-label" for="example-email">Category Name:</label>
                    <div class="col-md-9">
                    <input type="text"  class="form-control" name="book_category" id="field" placeholder="Enter Book Category:" required>
                 </div>
                 </div>
    
                 <div class="row mb-4">
                    <label class="col-md-3 form-label" for="example-email">Book Author:</label>
                    <div class="col-md-9">
                    <input type="text"  class="form-control" name="book_author" id="field" placeholder="Enter Book Author:" required>
                 </div>
                 </div>

                 <div class="row mb-4">
                    <label class="col-md-3 form-label" for="example-email">Rack No:</label>
                    <div class="col-md-9">
                    <input type="text"  class="form-control" name="rack_no" id="field" placeholder="Enter Rack No:" required>
                 </div>
                 </div>

                 <div class="row mb-4">
                    <label class="col-md-3 form-label" for="example-email">Book Edition:</label>
                    <div class="col-md-9">
                    <input type="text"  class="form-control" name="book_edition" id="field" placeholder="Enter  Book Edition:" required>
                 </div>
                 </div>

                 <div class="row mb-4">
                    <label class="col-md-3 form-label" for="example-email">Date Of Publication:</label>
                    <div class="col-md-9">
                    <input type="text"  class="form-control" name="date_of_publication" id="field" placeholder="Enter  Book Publishion Date:" required>
                 </div>
                 </div>

                 <div class="row mb-4">
                    <label class="col-md-3 form-label" for="example-email">Book Publisher:</label>
                    <div class="col-md-9">
                    <input type="text"  class="form-control" name="book_publisher" id="field" placeholder="Enter  Book Publisher:" required>
                 </div>
                 </div>

                 <div class="row mb-4">
                    <label class="col-md-3 form-label" for="example-email">Book Status:</label>
                    <div class="col-md-9">
                    <input type="text"  class="form-control" name="book_status" id="field" placeholder="Enter  Book Status:" required>
                 </div>
                 </div>
    
                 <div class="row mb-4">
                     <div class="col-md-9">
                    <button type="submit" value="Add Products" name="submit" class="btn btn-primary">Submit</button>
                     </div>
                 </div>
         
     </form>

     <script>
    $('.datepicker').datepicker({
    startDate: '-3d'
});
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>