@extends('layouts.app')

@section('template_title')
    {{ $incidence->name ?? 'Show Incidence' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Incidence</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('incidences.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Username:</strong>
                            {{ $incidence->userName }}
                        </div>
                        <div class="form-group">
                            <strong>Category:</strong>
                            {{ $incidence->category }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $incidence->area }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $incidence->location }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $incidence->description }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $incidence->state }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
