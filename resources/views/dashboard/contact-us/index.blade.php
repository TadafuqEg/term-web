@extends('dashboard.layouts.app')
@push('page_title')
Contact
@endpush
@section('content')
<!--begin::Tables Widget 9-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Contact Us</span>
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
                        <th class="min-w-150px">Company</th>
                        <th class="min-w-150px">Phone Number</th>
                        <th class="min-w-200px">message</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    @foreach ($contactUs as $contact)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6">{{$contact->id}}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6">{{$contact->name}}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6">{{$contact->email}}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6">{{$contact->company}}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6">{{$contact->phone_number}}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <div class="text-dark fw-bold text-hover-primary fs-6">{{$contact->message}}</div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                    
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
            {{ $contactUs->links() }}
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Tables Widget 9-->
@endsection