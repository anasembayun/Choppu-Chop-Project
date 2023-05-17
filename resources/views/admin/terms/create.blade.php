@extends('layouts.admin.template')
@section('title')
<h4>PARTNERSHIP TERMS</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Partnership Terms Data</h4>
            <p class="card-terms">
                Please fill in the following form :
            </p>
            <form class="forms-sample" action="{{route('admin.terms.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered" id="dynamicAddRemove">
                    <tr>
                        <th>Terms</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="addMore[0][terms]" placeholder="Enter Terms" class="form-control" />
                        </td>
                        <td><button type="button" name="add" id="dynamic-ar" class="btn btn-success">Add Terms</button></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        </div>
    </div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMore[' + i +
            '][terms]" placeholder="Enter terms" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endsection