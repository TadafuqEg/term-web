@extends('dashboard.layouts.app')
@push('page_title')
Quotation Forms
@endpush
@section('content')
<!--begin::Tables Widget 9-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Quotation Forms List</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-50px">#</th>
                        <th class="min-w-150px">Name</th>
                        <th class="min-w-150px">Email</th>
                        <th class="min-w-150px">Phone Number</th>
                        <th class="min-w-150px">action</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    @foreach ($clientIntakeForms as $clientIntakeForm)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6">{{$clientIntakeForm->id}}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6">{{$clientIntakeForm->name}}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6">{{$clientIntakeForm->email}}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6">{{$clientIntakeForm->phone}}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6"><a href="{{route('dashboard.client-intake-form.show',$clientIntakeForm->id)}}" class="btn btn-sm btn-info">view Details</a></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                    
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
            {{ $clientIntakeForms->links() }}
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Tables Widget 9-->
@endsection