@extends('layouts.adminLayout')

@section('main')
    <div class="app-content">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="card card-primary card-outline mb-4">
                        <div class="card-header">
                            <div class="card-title">Create Portfolio</div>
                        </div>

                        <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <!-- Title -->
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="e.g. Short Film — 'Origins'" value="{{ old('title') }}">
                                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Category (Filter) -->
                                <div class="mb-3">
                                    <label class="form-label">Category (For JS Filter)</label>
                                    <select name="category" class="form-select @error('category') is-invalid @enderror">
                                        <option value="video" {{ old('category') == 'video' ? 'selected' : '' }}>Video</option>
                                        <option value="motion" {{ old('category') == 'motion' ? 'selected' : '' }}>Motion</option>
                                        <option value="web" {{ old('category') == 'web' ? 'selected' : '' }}>Web</option>
                                    </select>
                                    @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Type (Display Badge) -->
                                <div class="mb-3">
                                    <label class="form-label">Type (Badge Text)</label>
                                    <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" placeholder="e.g. Narrative, Commercial, Motion" value="{{ old('type') }}">
                                    @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Link -->
                                <div class="mb-3">
                                    <label class="form-label">View Button Link (URL)</label>
                                    <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" placeholder="https://example.com" value="{{ old('link') }}">
                                    @error('link') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4" placeholder="Description">{{ old('description') }}</textarea>
                                    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Image -->
                                <div class="mb-3">
                                    <label class="form-label">Portfolio Image</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage(event)">
                                    @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror

                                    <img id="imagePreview" src="" style="display:none; margin-top:10px; width:120px; height:80px; object-fit:cover; border-radius:6px;">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save Portfolio</button>
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
