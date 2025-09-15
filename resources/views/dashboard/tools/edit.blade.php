@extends('layouts.dashboard')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-10 m-auto text-center">
                <h3 class="mb-5">تحديث مشروع <br>
                    {{ $tool->name }}</h3>
                <form action="{{ route('dashboard.tools.update',$tool->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <input type="text" name="name" value="{{ old('name') ?? $tool->name }}"
                            class="form-control @error('name') is-invalid @enderror " placeholder="ادخل اسم المشروع">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100">تحديث</button>

                </form>
            </div>
        </div>
    </div>
@endsection
