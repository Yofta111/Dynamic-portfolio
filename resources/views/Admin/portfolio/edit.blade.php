@extends('layouts.adminLayout')

@section('main')
    <div class="app-content">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="card card-primary card-outline mb-4">
                        <div class="card-header">
                            <div class="card-title">Edit Portfolio</div>
                        </div>

                        <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <!-- Title -->
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $portfolio->title) }}">
                                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Category (Filter) -->
                                <div class="mb-3">
                                    <label class="form-label">Category (For JS Filter)</label>
                                    <select name="category" class="form-select @error('category') is-invalid @enderror">
                                        <option value="video" {{ old('category', $portfolio->category) == 'video' ? 'selected' : '' }}>Video</option>
                                        <option value="motion" {{ old('category', $portfolio->category) == 'motion' ? 'selected' : '' }}>Motion</option>
                                        <option value="web" {{ old('category', $portfolio->category) == 'web' ? 'selected' : '' }}>Web</option>
                                    </select>
                                    @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Type (Display Badge) -->
                                <div class="mb-3">
                                    <label class="form-label">Type (Badge Text)</label>
                                    <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type', $portfolio->type) }}">
                                    @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Link -->
                                <div class="mb-3">
                                    <label class="form-label">View Button Link (URL)</label>
                                    <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('link', $portfolio->link) }}">
                                    @error('link') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description', $portfolio->description) }}</textarea>
                                    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Image -->
                                <div class="mb-3">
                                    <label class="form-label">Portfolio Image</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage(event)">
                                    @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror

                                    @if($portfolio->image)
                                        <div class="mt-2">
                                            <p class="mb-1 text-muted">Current Image</p>
                                            <img src="{{ asset($portfolio->image) }}" alt="Current Image" style="width:120px; height:80px; object-fit:cover; border-radius:6px;">
                                        </div>
                                    @endif

                                    <img id="imagePreview" src="" style="display:none; margin-top:10px; width:120px; height:80px; object-fit:cover; border-radius:6px;">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update Portfolio</button>
                                <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('imagePreview');
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.style.display = 'block';
        }
    </script>
@endsection
