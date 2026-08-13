@extends('layouts.adminLayout')

@section('main')
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">All Skills</h3>
                            <a href="{{ route('skills.create') }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle"></i> Add Skill
                            </a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-hover align-middle">
                                <thead>
                                <tr>
                                    <th style="width: 60px">#</th>
                                    <th>Skill Name</th>
                                    <th>Track</th>
                                    <th>Clip Class (`clip_class`)</th>
                                    <th style="width: 140px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($skills as $key => $skill)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $skill->name }}</td>
                                        <td>
                                            <span class="badge {{ $skill->track == 'A' ? 'bg-primary' : 'bg-info text-dark' }}">
                                                Track {{ $skill->track }}
                                            </span>
                                        </td>
                                        <td><code>clip {{ $skill->clip_class }}</code></td>
                                        <td>
                                            <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-info btn-sm" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{ route('skills.delete', $skill->id) }}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Delete this skill?')">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">No skills found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
