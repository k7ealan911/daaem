@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">بيانات الكافل</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@foreach ($giver as $item)


<table class="table table-striped">
    <thead>
      
        <tr><th scope="col">الرقم</th> <td> {{$item->id}}</td></tr>
        <tr><th scope="col">الاسم</th><td> {{$item->name}}</td></tr>
        <tr><th scope="col">رقم الجوال</th> <td> {{$item->jawal}}</td></tr>
        <tr><th scope="col">رقم الحساب</th><td> {{$item->bank_number}}</td></tr>
        <tr><th scope="col">اسم البنك</th><td> {{$item->bank_name}}</td></tr>
        <tr><th scope="col">اليوم</th>  <td> {{$item->day}}</td></tr>
        <tr><th scope="col">الشهر</th> <td> {{$item->Month}}</td></tr>
        <tr><th scope="col">السنة</th> <td> {{$item->Year}}</td></tr>
        <tr><th scope="col">عدد الطلاب</th> <td> {{$item->student}}</td></tr>
        <tr><th scope="col">تاريخ التسجيل</th>  <td> {{$item->date_k}}</td></tr>
        <tr><th scope="col">الحلقة</th>  <td> {{$item->school}}</td></tr>
        <tr><th scope="col">نوع الاستقطاع</th>    @if($item->transfer==1)  <td>استقطاع</td></tr> @endif @if($item->transfer==2)  <td>حوالة</td></tr>@endif

      
    
    
     
    </tbody>
  </table>

   
@endforeach






                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






