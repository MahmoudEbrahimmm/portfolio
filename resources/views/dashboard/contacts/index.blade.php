@extends('layouts.dashboard')
@section('content')
    <h3 class="mt-4">رسائل المتابعين</h3>
    <x-breadcrumb title="رسائل المتابعين" />

    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto text-center">
                <h3 class="mb-3">رسائل المتابعين</h3>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>البريد</th>
                            <th>الوصف</th>
                            <th>التاريخ</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td> {{ $contact->name }}</td>
                                <td> {{ $contact->email }}</td>
                                <td> {{ $contact->description }}</td>
                                <td> {{ $contact->created_at->format('d-n-y h:i a') }}</td>
                                <td>
                                    <form action="{{ route('dashboard.contacts.destroy', $contact->id) }}" method="post"
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
