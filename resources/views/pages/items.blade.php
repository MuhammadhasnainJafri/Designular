@extends('layouts.app')

@section('content')
    
    
     <!-- Header -->
        <div class="header bg-primary pb-6  pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                    
                                    <li class="breadcrumb-item active" aria-current="page">Items</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="#" class="btn btn-sm btn-neutral">New</a>
                            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">All Items</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">ID</th>
                                        <th scope="col" class="sort" data-sort="budget">Item Code</th>
                                        <th scope="col" class="sort" data-sort="status">Description</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col" class="sort" data-sort="completion">Actions</th>
                                        <th scope="col"></th>
                                    </tr>
                                    
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <th scope="row">
                                           1
                                        </th>
                                        <td class="budget">
                                            CO-201
                                        </td>
                                        <td>
                                            Lorem ipsum dolor ...
                                        </td>
                                        <td>
                                            200
                                            
                                        </td>
                                       
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item text-info" href="#">Edit</a>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                           2
                                        </th>
                                        <td class="budget">
                                            CO-202
                                        </td>
                                        <td>
                                            Lorem ipsum dolor ...
                                        </td>
                                        <td>
                                            200
                                            
                                        </td>
                                       
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item text-info" href="#">Edit</a>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                           3
                                        </th>
                                        <td class="budget">
                                            CO-203
                                        </td>
                                        <td>
                                            Lorem ipsum dolor ...
                                        </td>
                                        <td>
                                            200
                                            
                                        </td>
                                       
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item text-info" href="#">Edit</a>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                           4
                                        </th>
                                        <td class="budget">
                                            CO-204
                                        </td>
                                        <td>
                                            Lorem ipsum dolor ...
                                        </td>
                                        <td>
                                            200
                                            
                                        </td>
                                       
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item text-info" href="#">Edit</a>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                           5
                                        </th>
                                        <td class="budget">
                                            CO-205
                                        </td>
                                        <td>
                                            Lorem ipsum dolor ...
                                        </td>
                                        <td>
                                            200
                                            
                                        </td>
                                       
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item text-info" href="#">Edit</a>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                           6
                                        </th>
                                        <td class="budget">
                                            CO-206
                                        </td>
                                        <td>
                                            Lorem ipsum dolor ...
                                        </td>
                                        <td>
                                            200
                                            
                                        </td>
                                       
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item text-info" href="#">Edit</a>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                            <i class="fas fa-angle-left"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-angle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
           
            
        </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush