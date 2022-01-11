
@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">




        <div class=" col-md-8">
            <div class="card ">
                <div class="card-header">
                   الطلاب 
                </div>
                <div class="card-body">

                
                        @csrf
                        <div class="card-body">
@if (session('msg'))
<div class="alert alert-danger" role="alert">
{{ session('msg') }}
</div>
@endif
@if (session('ms'))
<div class="alert alert-primary" role="alert">
{{ session('ms') }}
</div>
@endif

@if (session('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif
                        <div class="form-group row">
                            <div class="col-md-12">
 
                  

		<table  class="table table-striped">
		
		  <tr>
			<th >م</th>
			
			<th >الاسم</th>
            <th >الجوال</th>
            
            <th >اسم الحلقة</th>
            <th >تعديل</th>
            <th >حذف</th>
		  </tr>
  @if($sum=0)@endif
  @foreach ($stud as $item)
@if($sum++)@endif

	<tr>
		<td>{{$sum}}</td>
		

		<td><a href="ones/{{$item->id}}">  {{$item->name}}  </a> </td>
        <td>  {{$item->jawal}}   </td>
        
      

       
        <td> {{$item->School}}   </td>
      
		<td><a href="/student/edit/{{$item->id}}"><i class='far fa-edit'>تعديل</i></a></td>
		

		 <td><a href="/student/delet/{{$item->id}}"onclick="return confirm('هل انت متاكد من حذف الكافل؟');" target="_top" ><i class='far fa-trash-alt' style='font-size:25px;color:red'></i> حذف </a></td>
	</tr>
@endforeach
    

</div>
                            <br>

                        </div>
                    

                </div>

            </div>
        </div>
    
    </div>
 
    </div>
	 </table>
      {{ $stud->links() }}  
      <a href="add_giver"><button style='font-size:24px;color:red' >اضافة <i class='fas fa-address-card'></i></button></a>
      @endsection



