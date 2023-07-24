
<!DOCTYPE html>
<html lang="en">
  <head>

  
@include('admin.css')

<style type="text/css">
.title{
    coloriwhite;
     padding-top: 25px;
      font-size: 25px;
}
label{
    display: inline-block;
    width: 200px
}

</style>
</head>
  <body>
  
      <!-- partial -->
     
         @include('admin.sidebar')

         
      @include('admin.navbar')
      
      <!-- partial -->
    
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
        <h1 class="title">Add Product
        </h1>

<form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
   
    @csrf
   
<div style="padding:15px;">
   <label >Product Title</label>
    
    <input style="color:black;" type="text" name="title" placeholder="Give a product title"
 required="">
    </div>
    
<div style="padding:15px;">
   <label >Product Price</label>
    
    <input style="color:black;"  type="number" name="price" placeholder="Give a product Price"
 required="">
    </div>
    
<div style="padding:15px;">
   <label >Product description</label>
    
    <input style="color:black;"  type="text" name="des" placeholder="Give a product Description"
 required="">
    </div>
    
<div style="padding:15px;">
   <label >Product Quantity</label>
    
    <input style=" color:black;"  type="text" name="quantity" placeholder="Give a product Quantity"
 required="">
    </div>
    
<div style="padding:15px;">
 
    <input type="file" name="file""">
    </div>
    <div style="padding:15px;">
        
        <input class="btn btn-success" type="submit">
         </div>
  
</form>
</div>

      @include('admin.script')
      
  </body>
</html>