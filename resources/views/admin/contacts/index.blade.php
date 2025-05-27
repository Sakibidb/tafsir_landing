@extends('admin.app')
@section('content')
        <div class="col-12">
            <div class="db-card">
                <div class="db-card-header border-none">
                    <h3 class="db-card-title">Contact List</h3>
                    <div class="db-card-filter">
                        <button class="db-card-filter-btn table-filter-btn">
                            <i class="fa-solid fa-filter"></i>
                            <span>filter</span>
                        </button>
                        <div class="dropdown-group">
                            <button class="db-card-filter-btn dropdown-btn">
                                <i class="fa-solid fa-file-export"></i>
                                <span>export</span>
                            </button>
                            <div class="dropdown-list db-card-filter-dropdown-list">
                                <a href="#" class="db-card-filter-dropdown-menu"><i
                                        class="fa-solid fa-print"></i>print</a>
                                <a href="#" class="db-card-filter-dropdown-menu"><i
                                        class="fa-solid fa-file-csv"></i>csv</a>
                                <a href="#" class="db-card-filter-dropdown-menu"><i
                                        class="fa-solid fa-file-pdf"></i>pdf</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-filter-div">
                    <form class="p-5 mb-8">
                        <div class="row">
                            <div class="col-12 sm:col-6">
                                <label class="db-field-title">name</label>
                                <input type="text" placeholder="---" class="db-field-control">
                            </div>
                            <div class="col-12 sm:col-6">
                                <label class="db-field-title">email</label>
                                <input type="email" placeholder="---" class="db-field-control">
                            </div>
                            <div class="col-12">
                                <div class="flex flex-wrap gap-3 mt-4">
                                    <button class="db-btn py-2 text-white bg-primary">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        <span>search</span>
                                    </button>
                                    <button class="db-btn py-2 text-white bg-gray-600">
                                        <i class="fa-solid fa-xmark"></i>
                                        <span>clear</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <div class="db-table-responsive">
                        <table id="maintable" data-url="{{ route('admin.contacts.list') }}" class="table table-bordered">
                            <thead class="db-table-head">
                                <tr class="db-table-head-tr">
                                    <th class="db-table-head-th">Name</th>
                                    <th class="db-table-head-th">Email</th>
                                    <th class="db-table-head-th">Note</th>
                                    <th class="db-table-head-th">action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection


@push('css')
    <link rel="stylesheet" href="{{ asset('backend/datatable/css/dataTables.tailwindcss.css') }}">
@endpush

@push('js')
    <script src="{{ asset('backend/datatable/js/dataTables.js') }}"></script>
    <script src="{{ asset('backend/datatable/js/dataTables.tailwindcss.js') }}"></script>
    <script src="{{ asset('backend/datatable/js/tailwindcss.js') }}"></script>
    <script src="{{ asset('backend/js/contacts/index.js') }}"></script>
@endpush
