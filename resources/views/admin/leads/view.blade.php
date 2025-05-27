@extends('admin.app')

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="db-breadcrumb">
                <ul class="db-breadcrumb-list">
                    <li class="db-breadcrumb-item"><a class="db-breadcrumb-link" href="../../index.html">home</a></li>
                    <li class="db-breadcrumb-item"><a class="db-breadcrumb-link" href="dashboard.html">dashboard</a></li>
                    <li class="db-breadcrumb-item">Leads View</li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="db-card">
                <div class="db-card-header">
                    <h3 class="db-card-title">Lead Details</h3>
                </div>
                <div class="db-card-body">
                    <ul class="db-list multiple">
                        <li class="db-list-item">
                            <span class="db-list-item-title">Name</span>
                            <span class="db-list-item-text">{{ $lead->name }}</span>
                        </li>
                        <li class="db-list-item">
                            <span class="db-list-item-title">Email</span>
                            <span class="db-list-item-text">{{ $lead->email }}</span>
                        </li>
                        <li class="db-list-item">
                            <span class="db-list-item-title">Phone</span>
                            <span class="db-list-item-text">{{ $lead->phone }}</span>
                        </li>
                        <li class="db-list-item">
                            <span class="db-list-item-title">Status</span>
                            <span class="db-list-item-text">
                                <span class="db-badge green">Active</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
