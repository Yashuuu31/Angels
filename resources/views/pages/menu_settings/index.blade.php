@extends('layout.master')
@section('title')
    {{ $moduleName ?? '' }}
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row mx-2">
                <h3 class="col">{{ $moduleName ?? '' }}</h3>
                <button class="btn btn-primary" data-toggle="modal"
                    data-target="#addMenuSettings">{{ $moduleName ?? '' }}</button>
            </div>
            <hr>

            <!-- Add MenuSetting Form Start -->
            <div class="modal fade" id="addMenuSettings" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row mx-2">
                                <h3 class="col">Add {{ $moduleName ?? '' }}</h3>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add MenuSetting Form End -->

            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered">
                    <thead>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>Sequence</th>
                        <th>Master</th>
                        <th>Action</th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script>
        $('#dataTable').DataTable();

    </script>
@endsection
