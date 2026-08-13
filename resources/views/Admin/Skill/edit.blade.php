@extends('layouts.adminLayout')

@section('main')
    <div class="app-content">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="card card-primary card-outline mb-4">
                        <div class="card-header">
                            <div class="card-title">Edit Skill</div>
                        </div>

                        <form action="{{ route('skills.update', $skill->id) }}" method="POST">
                            @csrf
                            <div class="card-body">

                                <!-- Skill Name -->
                                <div class="mb-3">
                                    <label class="form-label">Skill Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $skill->name) }}">
                                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Track Selection -->
                                <div class="mb-3">
                                    <label class="form-label">Track</label>
                                    <select name="track" class="form-select @error('track') is-invalid @enderror">
                                        <option value="A" {{ old('track', $skill->track) == 'A' ? 'selected' : '' }}>Track A — Video & Motion</option>
                                        <option value="B" {{ old('track', $skill->track) == 'B' ? 'selected' : '' }}>Track B — Web & Software</option>
                                    </select>
                                    @error('track') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Clip Class -->
                                <div class="mb-3">
                                    <label class="form-label">Clip Class (HTML Dynamic Class)</label>
                                    <input type="text" name="clip_class" class="form-control @error('clip_class') is-invalid @enderror" value="{{ old('clip_class', $skill->clip_class) }}">
                                    <small class="form-text text-muted">Outputs: <code>&lt;div class="clip [your-class]"&gt;</code></small>
                                    @error('clip_class') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update Skill</button>
                                <a href="{{ route('skills.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
