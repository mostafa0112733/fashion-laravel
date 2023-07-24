
<!DOCTYPE html>
<html lang="en">
  <head>
<base href="/public">
  
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
      
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
        <h1 class="title">Add Product
        </h1>

<form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
   
    @csrf
   
<div style="padding:15px;">
   <label >Product Title</label>
    
    <input style="color:black;" type="text" name="title" value="{{$data->title}}"
 required="">
    </div>
    
<div style="padding:15px;">
   <label >Product Price</label>
    
    <input style="color:black;"  type="number" name="price" value="{{$data->price}}"
 required="">
    </div>
    
<div style="padding:15px;">
   <label >Product description</label>
    
    <input style="color:black;"  type="text" name="des" value="{{$data->description}}"
 required="">
    </div>
    
<div style="padding:15px;">
   <label >Product Quantity</label>
    
    <input style=" color:black;"  type="text" name="quantity" value="{{$data->quantity}}"
 required="">
    </div>
<div style="padding:15px;">
   <label >Old image</label>
    
    <img style="height: 100px;width:100px;" src="/productimage/{{$data->image}}" alt="">
    </div>
    
<div style="padding:15px;">
 
    <input type="file" name="file""">
    </div>
    <div style="padding:15px;">
        
        <input class="btn btn-success" type="submit">
         </div>
  
</form>
</div></div>


      @include('admin.script')
      
  </body>
</html>