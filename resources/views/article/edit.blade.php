@extends('layouts.app')

@section("title") Edit Article @endsection

@section('content')
    <x-bread-crumb>
        <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Article List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Article</li>
    </x-bread-crumb>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">
                        <i class="feather-plus-circle"></i>
                        Edit Article
                    </h4>
                    <form action="{{ route('article.update',$article->id) }}" id="editArticle" method="post">
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="mb-0">
                        <label for="">Select Category</label>
                        <select name="category" form="editArticle" class="form-select form-select-lg @error('category') is-invalid @enderror " id="">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category',$article->category_id) ==$category->id ? 'selected' :'' }}>{{ $category->title }}</option>
                            @endforeach
                        </select>
                        @error("category")
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">Article Title</label>
                        <input type="text" name="title" form="editArticle" value="{{ old('title',$article->title) }}" class="form-control @error('title') is-invalid @enderror form-control-lg">
                        @error("title")
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Article Description</label>
                        <textarea type="text" name="description" form="editArticle" rows="15" class="form-control @error('description') is-invalid @enderror form-control-lg">{{ old('description',$article->description) }}</textarea>
                        @error("description")
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="mb-0">
                        <button class="btn btn-primary btn-lg w-100 " form="editArticle">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
