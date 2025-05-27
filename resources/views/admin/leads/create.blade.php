@extends('admin.app')
@section('content')

<div class="row">

    <div class="col-12">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li class="db-breadcrumb-item"><a class="db-breadcrumb-link" href="../../index.html">home</a></li>
                <li class="db-breadcrumb-item"><a class="db-breadcrumb-link" href="dashboard.html">dashboard</a></li>
                <li class="db-breadcrumb-item">Leads Create</li>
            </ul>
        </div>
    </div>

    <div class="col-12">
        <div class="db-card">
        <div class="db-card-header">
            <h3 class="db-card-title">create leads</h3>
        </div>
        
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="db-card-body">
        <form action="{{ route('leads.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-col-12 sm:form-col-6 md:form-col-4">
                    <label class="db-field-title required">Name</label>
                    <input type="name" name="name" placeholder="name" class="db-field-control invalid">
                </div>
                <div class="form-col-12 sm:form-col-6 md:form-col-4">
                    <label class="db-field-title required">email</label>
                    <input type="email" name="email" placeholder="email" class="db-field-control invalid">
                </div>
                <div class="form-col-12 sm:form-col-6 md:form-col-4">
                    <label class="db-field-title required">phone</label>
                    <input type="phone" name="phone" placeholder="phone" class="db-field-control invalid">
                </div>
                <div class="col-12">
                    <button class="db-btn text-white bg-primary">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>save</span>
                    </button>
                </div>
            </div>
        </form>
 
            </div>
        </div>
    </div>

</div>
@endsection


