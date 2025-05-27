@extends('admin.app')

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="db-breadcrumb">
                <ul class="db-breadcrumb-list">
                    <li class="db-breadcrumb-item"><a class="db-breadcrumb-link" href="">home</a></li>
                    <li class="db-breadcrumb-item"><a class="db-breadcrumb-link" href="">dashboard</a></li>
                    <li class="db-breadcrumb-item">Contact View</li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="db-card">
                <div class="db-card-header">
                    <h3 class="db-card-title">Contact Details</h3>
                </div>
                <div class="db-card-body">
                    <ul class="db-list multiple">
                        <li class="db-list-item">
                            <span class="db-list-item-title">Name</span>
                            <span class="db-list-item-text">{{ $contact->name }}</span>
                        </li>
                        <li class="db-list-item">
                            <span class="db-list-item-title">Email</span>
                            <span class="db-list-item-text">{{ $contact->email }}</span>
                        </li>
                        <li class="db-list-item">
                            <span class="db-list-item-title">Note</span>
                            <span class="db-list-item-text">{{ $contact->note }}</span>
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
