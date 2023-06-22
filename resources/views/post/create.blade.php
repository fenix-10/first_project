@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    value="{{ old('title') }}"

                    type="text" name="title" class="form-control" id="title" placeholder="Title">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="content" placeholder="Content">{{ old('content') }}</textarea>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image"
                       value="{{ old('image') }}">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{ old('category_id') == $category->id ? 'selected': '' }}

                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="tags">Tags</label>
                <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </div>
        </form>
    </div>
@endsection
