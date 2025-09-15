@extends('layouts.dashboard')
@section('content')
    <h3 class="mt-4">مهاراتي</h3>
    <x-breadcrumb title="مهاراتي" />
    <a href="{{ route('dashboard.tools.create') }}" class="btn btn-primary">اضافة مهارة جديد</a>

    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto text-center">
                <h3 class="mb-3">المهارات</h3>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>التاريخ</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tools as $tool)
                            <tr>

                                <td> {{ $tool->name }}</td>
                                <td> {{ $tool->created_at->format('d-m-y h:i a') }}</td>
                                <td>

                                    <a href="{{ route('dashboard.tools.edit', $tool->id) }}" class="btn btn-success px-2"><i
                                            class="fa-solid fa-pen-to-square"></i></a>

                                    <form action="{{ route('dashboard.tools.destroy', $tool->id) }}" method="post"
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
