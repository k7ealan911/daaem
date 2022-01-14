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


{{--<table class="table table-striped">--}}
{{--    <thead>--}}
{{--      --}}
{{--        <tr><th scope="col">الرقم</th> <td> {{$item->id}}</td></tr>--}}
{{--        <tr><th scope="col">الاسم</th><td> {{$item->name}}</td></tr>--}}
{{--        <tr><th scope="col">رقم الجوال</th> <td> {{$item->jawal}}</td></tr>--}}
{{--        <tr><th scope="col">رقم الحساب</th><td> {{$item->bank_number}}</td></tr>--}}
{{--        <tr><th scope="col">اسم البنك</th><td> {{$item->bank_name}}</td></tr>--}}
{{--        <tr><th scope="col">اليوم</th>  <td> {{$item->day}}</td></tr>--}}
{{--        <tr><th scope="col">الشهر</th> <td> {{$item->Month}}</td></tr>--}}
{{--        <tr><th scope="col">السنة</th> <td> {{$item->Year}}</td></tr>--}}
{{--        <tr><th scope="col">عدد الطلاب</th> <td> {{$item->student}}</td></tr>--}}
{{--        <tr><th scope="col">تاريخ التسجيل</th>  <td> {{$item->date_k}}</td></tr>--}}
{{--        <tr><th scope="col">الحلقة</th>  <td> {{$item->school}}</td></tr>--}}
{{--        <tr><th scope="col">نوع الاستقطاع</th>    @if($item->transfer==1)  <td>استقطاع</td></tr> @endif @if($item->transfer==2)  <td>حوالة</td></tr>@endif--}}

{{--      --}}
{{--    --}}
{{--    --}}
{{--     --}}
{{--    </tbody>--}}
{{--  </table>--}}

{{--   --}}







{{--                   --}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
                        <section style="background-color: #eee;">
                            <div class="container py-5">
                            

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4">
                                            <div class="card-body text-center">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                                <h5 class="my-3">John Smith</h5>
                                                <p class="text-muted mb-1">Full Stack Developer</p>
                                                <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                                                <div class="d-flex justify-content-center mb-2">
                                                    <button type="button" class="btn btn-primary">Follow</button>
                                                    <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-4 mb-lg-0">
                                            <div class="card-body p-0">
                                                <ul class="list-group list-group-flush rounded-3">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                        <i class="fas fa-globe fa-lg text-warning"></i>
                                                        <p class="mb-0">https://mdbootstrap.com</p>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                                        <p class="mb-0">mdbootstrap</p>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                                        <p class="mb-0">@mdbootstrap</p>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                                        <p class="mb-0">mdbootstrap</p>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                                        <p class="mb-0">mdbootstrap</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">الاسم</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">{{$item->name}}</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">البريد</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">{{$item->email}}</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">الجوال</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">{{$item->jawal}}</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Mobile</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">(098) 765-4321</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Address</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card mb-4 mb-md-0">
                                                    <div class="card-body">
                                                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status</p>
                                                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                                        <div class="progress rounded" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                                        <div class="progress rounded" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                                        <div class="progress rounded" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                                        <div class="progress rounded" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                                        <div class="progress rounded mb-2" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card mb-4 mb-md-0">
                                                    <div class="card-body">
                                                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status</p>
                                                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                                        <div class="progress rounded" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                                        <div class="progress rounded" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                                        <div class="progress rounded" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                                        <div class="progress rounded" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                                        <div class="progress rounded mb-2" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
@endforeach
@endsection






