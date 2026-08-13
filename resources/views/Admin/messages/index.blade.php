@extends('layouts.adminLayout')

@section('main')
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Contact Messages</h3>
                            <span class="badge bg-primary">
                            Total: {{ $messages->count() }}
                        </span>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th style="width: 50px;" class="text-center">#</th>
                                        <th>Status</th>
                                        <th>Sender</th>
                                        <th>Subject</th>
                                        <th>Snippet</th>
                                        <th>Date Received</th>
                                        <th style="width: 100px;" class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($messages as $key => $msg)
                                        <tr class="{{ !$msg->is_read ? 'fw-bold bg-light' : '' }}">
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td>
                                                @if($msg->is_read)
                                                    <span class="badge bg-secondary">Read</span>
                                                @else
                                                    <span class="badge bg-danger">Unread</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div>{{ $msg->name }}</div>
                                                <small class="text-muted fw-normal">{{ $msg->email }}</small>
                                            </td>
                                            <td>
                                                {{ $msg->subject ?: 'No Subject' }}
                                            </td>
                                            <td class="text-muted fw-normal">
                                                {{ Str::limit($msg->message, 40) }}
                                            </td>
                                            <td class="fw-normal">
                                                {{ $msg->created_at ? $msg->created_at->format('M d, Y h:i A') : 'N/A' }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('messages.show', $msg->id) }}" class="btn btn-primary btn-sm" title="View Message">
                                                    <i class="bi bi-eye"></i> Open
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center py-4 text-muted">
                                                <i class="bi bi-inbox display-6 d-block mb-2"></i>
                                                No contact messages received yet.
                                            </td>
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
    </div>
@endsection
