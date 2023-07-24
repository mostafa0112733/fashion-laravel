
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
        <td style="padding: 20px;">name</td>
        <td style="padding: 20px;">email</td>
        <td style="padding: 20px;">phone</td>
        <td style="padding: 20px;">address</td>
        <td style="padding: 20px;">password</td>
       
    </tr>
    @foreach ($data as $p )
        
  
    <tr>
        <td style="padding: 20px;">{{$p->id}}</td>
        <td style="padding: 20px;">{{$p->name}}</td>
        <td style="padding: 20px;">{{$p->email}}</td>
        <td style="padding: 20px;">{{$p->phone}}</td>
        <td style="padding: 20px;">{{$p->address}}</td>
        <td style="padding: 20px;">{{$p->password}}</td>
        
        
   
    </tr>
    @endforeach
</table>
        </div>
      </div>
      @include('admin.script')
      
  </body>
</html> 