
<!DOCTYPE html>
<html lang="en">
  <head>

  
@include('admin.css')

</head>
  <body>
  
      <!-- partial -->
     
         @include('admin.sidebar')

         
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
<table>
    <tr>
        <td style="padding: 20px;">id</td>
        <td style="padding: 20px;">title</td>
        <td style="padding: 20px;">price</td>
        <td style="padding: 20px;">description</td>
        <td style="padding: 20px;">quality</td>
        <td style="padding: 20px;">image</td>
        <td style="padding: 20px;">update</td>
        <td style="padding: 20px;">delete</td>
    </tr>
    @foreach ($data as $p )
        
  
    <tr>
        <td style="padding: 20px;">{{$p->id}}</td>
        <td style="padding: 20px;">{{$p->title}}</td>
        <td style="padding: 20px;">{{$p->price}}</td>
        <td style="padding: 20px;">{{$p->description}}</td>
        <td style="padding: 20px;">{{$p->quantity}}</td>
        <td style="padding: 20px;"><img style="height: 100px;width=100px;" src="/productimage/{{$p->image}}" alt=""></td>
        <td ><a href="{{url('updateview',$p->id)}}" class="btn btn-primary">update</a></td>
        <td ><a href="{{url('deleteproduct',$p->id)}}" class="btn btn-primary">delete</a></td>
        
   
    </tr>
    @endforeach
</table>
        </div>
      </div>
      @include('admin.script')
      
  </body>
</html> 