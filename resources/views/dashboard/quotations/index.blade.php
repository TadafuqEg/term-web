@extends('dashboard.layouts.app')
@push('page_title')
Quotations
@endpush
@section('content')
<div class="card card-flush h-lg-100" id="kt_contacts_main">
    <!--begin::Card header-->
    <div class="card-header pt-7" id="kt_chat_contacts_header">
        <!--begin::Card title-->
        <div class="card-title">

            <h2>Modify Quotation</h2>
        </div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-5">
        <!--begin::Form-->
        <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">

            <!--begin::Input group-->
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Title</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" name="name" value="">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Input group-->

            <!--begin::Separator-->
            <div class="separator mb-6"></div>
            <!--end::Separator-->
            <!--begin::Action buttons-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                    <span class="indicator-label">Save</span>
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
            <!--end::Action buttons-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card body-->
</div>
@endsection