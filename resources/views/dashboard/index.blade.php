@extends('layouts.dashboard')

@section('content')
    <main>


        <h3 class="mt-4">Dashboard</h3>

        <x-breadcrumb title="Dashboard" />

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">المستخدمين</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="nav-link small text-white" href="{{ route('dashboard.users.index') }}">
                            اجمالي عدد المستخدمين: {{ \App\Models\User::count() }}
                        </a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">المشاريع</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="nav-link small text-white" href="{{ route('dashboard.projects.index') }}">
                            اجمالي عدد المشاريع: {{ \App\Models\Project::count() }}
                        </a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">المهارات</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="nav-link small text-white" href="{{ route('dashboard.tools.index') }}">
                            اجمالي عدد المهارات: {{ \App\Models\Tool::count() }}
                        </a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">الرسائل</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="nav-link small text-white" href="{{ route('dashboard.contacts.index') }}">
                            اجمالي عدد الرسائل: {{ \App\Models\Contact::count() }}
                        </a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            {{-- Message --}}
            <div class="row">

                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fa-solid fa-message"></i>
                            احدث الرسائل
                        </div>
                        <div class="card-body">
                            <div width="100%" height="40">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>الاسم</th>
                                            <th>البريد</th>
                                            <th>التاريخ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                            <tr>
                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->created_at->format('h:i a') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fa-solid fa-hands-holding-circle"></i>
                            احدث المشاريع
                        </div>
                        <div class="card-body">
                            <div width="100%" height="40">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>الصورة</th>
                                            <th>الاسم</th>
                                            <th>التاريخ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('storage/' . $project->image) }}"
                                                        style="width:100px;" alt="">
                                                </td>
                                                <td>{{ $project->name }}</td>
                                                <td>{{ $project->created_at->format('h:i a') }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </main>
@endsection
