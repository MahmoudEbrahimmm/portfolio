@extends('layouts.dashboard')
@section('content')
    <div class="container mt-2 pt-2">
        <div class="row">
            <div class="col-md-10 m-auto text-center">
                <h3 class="mb-5">تعديل مشروع <br>
                    {{ $project->name }}</h3>
                <td>
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->id }}" width="80" height="80"
                        style="object-fit: cover; border-radius: 5px;">
                </td>
                <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <input type="text" name="name" value="{{ old('name') ?? $project->name }}"
                            class="form-control @error('name') is-invalid @enderror " placeholder="ادخل اسم المشروع">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="وصف المشروع">{{ old('descrition') ?? $project->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="link" value="{{ old('link') ?? $project->link }}"
                            class="form-control @error('link') is-invalid @enderror" placeholder="ادخل لينك المشروع">

                        @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-success w-100">تحديث</button>

                </form>
            </div>
        </div>
    </div>
@endsection
