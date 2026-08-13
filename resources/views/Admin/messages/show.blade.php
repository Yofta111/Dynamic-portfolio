@extends('layouts.adminLayout')

@section('main')
    <div class="app-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="card card-primary card-outline mb-4">
                        <!-- Header -->
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Message Details</h3>
                            <a href="{{ route('messages.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-arrow-left"></i> Back to Messages
                            </a>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Sender Metadata -->
                            <div class="border-bottom pb-3 mb-4">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="text-muted small">From:</label>
                                        <h5 class="mb-0 fw-bold">{{ $message->name }}</h5>
                                        <a href="mailto:{{ $message->email }}" class="text-decoration-none">
                                            {{ $message->email }}
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-md-end">
                                        <label class="text-muted small">Received At:</label>
                                        <p class="mb-0 fw-semibold text-dark">
                                            {{ $message->created_at ? $message->created_at->format('F d, Y - h:i A') : 'N/A' }}
                                        </p>
                                        <small class="text-muted">
                                            ({{ $message->created_at ? $message->created_at->diffForHumans() : '' }})
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <!-- Subject -->
                            <div class="mb-4">
                                <label class="text-muted small">Subject:</label>
                                <h4 class="fw-bold text-primary">{{ $message->subject ?: 'No Subject Provided' }}</h4>
                            </div>

                            <!-- Message Content -->
                            <div class="mb-4">
                                <label class="text-muted small">Message:</label>
                                <div class="p-3 bg-light border rounded-3" style="white-space: pre-line; min-height: 150px;">
                                    {{ $message->message }}
                                </div>
                            </div>
                        </div>

                        <!-- Footer Actions -->
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="{{ route('messages.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>

                            <a href="mailto:{{ $message->email }}?subject=Re: {{ urlencode($message->subject ?? 'Your Inquiry') }}" class="btn btn-primary">
                                <i class="bi bi-reply"></i> Reply via Email
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
