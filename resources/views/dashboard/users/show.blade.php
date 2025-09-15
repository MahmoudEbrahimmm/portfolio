@extends('layouts.dashboard')
@section('title-page', 'عرض تفاصيل المستخدم');
@section('content')
    <x-breadcrumb title="{{ $item->name }}" />
    <div class="container">
        <div class="row">
            <div class="col-md-11 m-auto text-center">
                <table class="table text-center">
                    <thead>
                        <th>الاسم</th>
                        <th>البريد</th>
                        <th>الهاتف</th>
                        <th>الصلاحية</th>
                        <th>الرقم القومي</th>
                        <th>العنوان</th>
                        <th>الانشاء</th>
                        <th>التحديث</th>
                        <th colspan="3">العمليات</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>
                                @if ($item->role == 'admin')
                                    <span class="badge bg-primary">مدير</span>
                                @elseif($item->role == 'staff')
                                    <span class="badge bg-dark">موظف</span>
                                @else
                                    <span class="badge bg-secondary">مستخدم</span>
                                @endif
                            </td>
                            <td>{{ $item->national }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td class="d-flex flex-wrap gap-2 justify-content-center">
                                <a href="{{ route('dashboard.users.index') }}" class="btn btn-primary px-2"><i
                                        class="fa-solid fa-house"></i></a>

                                <a href="{{ route('dashboard.users.edit', $item->id) }}" class="btn btn-success px-2"><i
                                        class="fa-solid fa-pen-to-square"></i></a>

                                <form action="{{ route('dashboard.users.destroy', $item->id) }}" method="post"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger px-2"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
