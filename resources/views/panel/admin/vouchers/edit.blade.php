@extends('panel.layouts.master1')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Subheader-->
  <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
      <!--begin::Details-->
      <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Update Voucher</h5>
        <!--end::Title-->
        <!--begin::Separator-->
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
        <!--end::Separator-->
        <!--begin::Search Form-->
        <div class="d-flex align-items-center" id="kt_subheader_search">
          <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Update vouchers details and
            submit</span>
        </div>
        <!--end::Search Form-->
      </div>
      <!--end::Details-->
    </div>
  </div>
  <!--end::Subheader-->
  <!--begin::Entry-->
  <div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
            
      <!--begin::Card-->
      <div class="card card-custom gutter-b example example-compact">
        <div class="card-header" style="padding: 1rem 1.25rem;">
          <h2 class="card-title text-uppercase">Update Voucher</h2>
        </div>
        <!--begin::Form-->

        <!-- enctype="multipart/form-data" remove by Shahbaz raza -->

        <form class="form mt-5" method="POST" action="/admin/voucher/{{ $voucher->id }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="col-xl-12">
            <div class="form-group fv-plugins-icon-container">
              <label>Voucher Code <span class="text-red">*</span></label>
              <input type="text" class="form-control form-control-lg" name="code" readonly value="{{$voucher->code}}" required>
              <span class="form-text text-muted">Customer Voucher Code</span>
              @error('code')
              <div class="fv-plugins-message-container text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group fv-plugins-icon-container">
              <label>Customer Name<span class="text-red">*</span></label>
              <input type="text" class="form-control form-control-lg" name="data" readonly value="{{$voucher->data->get('user_full_name')}}" required>
              <span class="form-text text-muted">Please enter Customer Name</span>
              @error('data')
              <div class="fv-plugins-message-container text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group fv-plugins-icon-container">
              <label>Customer Phone<span class="text-red">*</span></label>
              <input type="text" class="form-control form-control-lg" name="data" readonly value="{{$voucher->data->get('user_phone')}}" required>
              <span class="form-text text-muted">Please enter Customer Phone</span>
              @error('data')
              <div class="fv-plugins-message-container text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group fv-plugins-icon-container">
              <label>Customer Email<span class="text-red">*</span></label>
              <input type="text" class="form-control form-control-lg" name="data" readonly value="{{$voucher->data->get('user_email')}}" required>
              <span class="form-text text-muted">Please enter Customer Email</span>
              @error('data')
              <div class="fv-plugins-message-container text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group fv-plugins-icon-container">
              <label>Project Name<span class="text-red">*</span></label>
              <input type="text" class="form-control form-control-lg" name="data" readonly value="{{$voucher->data->get('project_name')}}" required>
              <span class="form-text text-muted">Project Name</span>
              @error('data')
              <div class="fv-plugins-message-container text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group fv-plugins-icon-container">
              <label>Project Discount Price<span class="text-red">*</span></label>
              <input type="text" class="form-control form-control-lg" name="data" readonly value="{{$voucher->data->get('project_discount')}}" required>
              <span class="form-text text-muted">Project Discount Price</span>
              @error('data')
              <div class="fv-plugins-message-container text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group fv-plugins-icon-container">
              <label>Expiry<span class="text-red">*</span></label>
              <input type="data" class="form-control form-control-lg" name="expires_at" value="{{$voucher->expires_at}}" required readonly>
              <span class="form-text text-muted">Voucher Expiry</span>
              @error('expires_at')
              <div class="fv-plugins-message-container text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-xl-12">
                <div class="form-group fv-plugins-icon-container">
                  <label>Status</label>
                  <select name="status"  class="form-control form-control-lg" required>
                    <option disabled selected hidden value="">{{ $status[$voucher->status - 1] }}</option>
                    <option value="1" {{ $voucher->status == 1 ? 'selected' : '' }}>Active
                    </option>
                    <option value="2" {{ $voucher->status == 0 ? 'selected' : '' }}>
                      Redeemed
                    </option>
                  </select>
                  <span class="form-text text-muted">Please specify the status of the voucher.</span>
                  <div class="fv-plugins-message-container"></div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-6 col-lg-6 text-left">
                  <a href="/admin/voucher" class="btn btn-secondary">Cancel</a>
                </div>
                <div class="col-6 col-lg-6 text-right">
                  <button type="submit" class="btn admin_ad_btn mr-2">Save</button>
                </div>
              </div>
            </div>
          </form>
        <!--end::Form-->
      </div>
      <!--end::Card-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::Entry-->
</div>
@endsection

<!-- <div class="col-md-8" style="line-height: 26px; font-size: 16px; color:#4d4a49; font-family: 'Open Sans', sans-serif"> -->

@section('header')
<!--begin::Page Custom Styles(used by this page)-->
<link href="assets/css/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
<!--end::Page Custom Styles-->
@endsection

@section('footer')
<!--begin::Page Scripts(used by this page)-->
<!-- <script src="assets/js/pages/crud/forms/editors/summernote.js"></script> -->
<!-- <script src="assets/js/pages/custom/projects/add-project.js"></script> -->
<script src="assets/js/pages/crud/forms/widgets/select2.js"></script>
<!--end::Page Scripts-->
<!--begin::Page Vendors(used by this page)-->
<script src="assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
<script src="assets/js/pages/crud/forms/editors/ckeditor-classic.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<!--end::Page Scripts-->
<script src="assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js"></script>
@endsection