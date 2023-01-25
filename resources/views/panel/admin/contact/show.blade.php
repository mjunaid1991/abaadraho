@extends('panel.layouts.master1')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Subheader-->
  <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
      <!--begin::Details-->
      <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Contact Inquiry</h5>
        <!--end::Title-->
        <!--begin::Separator-->
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
        <!--end::Separator-->
        <!--begin::Search Form-->
        <div class="d-flex align-items-center" id="kt_subheader_search">
          <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">
            Contact Inquiry Details
          </span>
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
          <h2 class="card-title text-uppercase">Contact Inquiry Details</h2>
        </div>

        <table class="table table-bordered">
          <thead class="zohho_interested_form">
            <tr>
              <th scope="col">Colums</th>
              <th scope="col">Values</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Name</th>
              <td>{{ $contact->name }}</td>

            </tr>
            <tr>
              <th scope="row">Email</th>
              <td>{{ $contact->email }}</td>

            </tr>

            <tr>
              <th scope="row">Phone</th>
              <td>{{ $contact->phone }}</td>
            </tr>

            <tr>
              <th scope="row">Subject</th>
              <td>{{ $contact->subject }}</td>
            </tr>

            <tr>
              <th scope="row">Message</th>
              <td>{{ $contact->message }}</td>
            </tr>

          </tbody>
        </table>

        {{--<div class="col-md-12 text-center" style="margin-bottom: 20px;">
          <a href="/admin/manage_users" type="reset" class="btn btn-danger">Cancel</a>
        </div> --}}
      </div>
      <!--end::Card-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::Entry-->
</div>
@endsection

@section('header')
<!--begin::Page Custom Styles(used by this page)-->
{{-- <link href="{{ asset('assets/css/pages/wizard/wizard-1.css') }}" rel="stylesheet" type="text/css" /> --}}
<!--end::Page Custom Styles-->
<style>
  .datatable.datatable-default>.datatable-table>.datatable-head .datatable-row>.datatable-cell:nth-child(1)>span,
  .datatable.datatable-default>.datatable-table>.datatable-body .datatable-row>.datatable-cell:nth-child(1)>span {
    width: 20px !important;
  }
</style>
@endsection

@section('footer')
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/custom/projects/add-project.js"></script>
<script src="assets/js/pages/crud/ktdatatable/base/html-table.js"></script>
<!--end::Page Scripts-->
@endsection