@extends('layouts.dashboard')
@section('content')
    <h3 class="mt-4">مشاريعي</h3>
    <x-breadcrumb title="مشاريعي" />
    <a href="{{ route('dashboard.projects.create') }}" class="btn btn-primary">اضافة مشروع جديد</a>

    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto text-center">
                <h3 class="mb-3">المشاريع النهائية</h3>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>صورة</th>
                            <th>الاسم</th>
                            <th>الوصف</th>
                            <th>التاريخ</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->id }}"
                                        width="180" height="180" style="object-fit: cover; border-radius: 5px;">
                                </td>

                                <td> {{ $project->name }}</td>
                                <td> {{ $project->description }}</td>
                                <td> {{ $project->created_at->format('d-n-y h:i a') }}</td>
                                <td>

                                    <a href="{{ route('dashboard.projects.edit', $project->id) }}"
                                        class="btn btn-success px-2"><i class="fa-solid fa-pen-to-square"></i></a>

                                    <form action="{{ route('dashboard.projects.destroy', $project->id) }}" method="post"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger px-2"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
