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
                                    
                                    <li class="breadcrumb-item active" aria-current="page">Delivery Notes</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="new/DelivertNote" class="btn btn-sm btn-neutral">New</a>
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
                            <h3 class="mb-0">All Invoices</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">ID</th>
                                        <th scope="col" class="sort" data-sort="budget">Number</th>
                                        <th scope="col" class="sort" data-sort="status">Reference</th>
                                        <th scope="col">supplier</th>
                                         <th scope="col" class="sort" data-sort="status">Date Renewed</th>
                                         <th scope="col" class="sort" data-sort="status">Delivery Date</th>

                                        <th scope="col" class="sort" data-sort="completion">Actions</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                 <?php
                       $i=1;
                       ?>
                                 @foreach ($deliverynote as $note)


                            <tr>
                                <th scope="row">
                                    {{$i++}}
                                </th>
                                <td class="name">
                                    {{$note->orderNumber }}
                                </td>
                                <td class="email">
                                    {{$note->reference  }}
                                </td>
                                <td class="address">
                                    {{$note->attention }}..
                                </td>
                                <td class="address">
                                    {{$note->orderdDate }}
                                </td>
                                <td class="address">
                                    {{$note->deliveryDate }}
                                </td>

                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item text-success" href="note/send/{{$note->id }}">Send</a>
                                            <a class="dropdown-item text-info" href="note/edit/{{$note->id }}">Edit</a>
                                            <a class="dropdown-item text-muted" href="note/print/{{$note->id }}">Print</a>
                                            
                                            <a class="dropdown-item text-danger" href="note/delete/{{$note->id}}">Delete</a>
                                            {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                     {!! $deliverynote->links() !!}
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