@extends('layout')
@section('title','Member Lists || Library App')
@section('content')
<section class="admin-content">
  <div class="bg-dark m-b-30">
    <div class="container">
      <div class="row p-b-30 p-t-30">
        <div class="col-md-8 text-white p-b-30">
          <div class="media">
            <div class="media-body">
              <h2><span class="menu-icon"><i class="icon-placeholder text-success mdi mdi-book"></i></span> Members Management - Members List</h2>
              <i class="icon h2 mdi mdi-arrow-right-bold-box"></i>
              <button type="button" id="exampleModalLabel" class="btn m-b-15 ml-2 mr-2 btn-success modal-title "><a href="#" data-toggle="modal" data-target="#AddMemberModal">Add Member</a></button>
              <button type="button" class="btn m-b-15 ml-2 mr-2 btn-secondary"><a href="#">List Active Members</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-2 text-center m-b-30 ml-auto">
          <div class="rounded text-white bg-white-translucent">
            <div class="p-all-15">
              <div class="row">
                <div class="col-md-12 my-2 m-md-0">
                  <div class="text-overline opacity-75">Total Members</div>
                  <h3 class="m-0 text-success">1</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 text-center m-b-30 ml-auto">
          <div class="rounded text-white bg-white-translucent">
            <div class="p-all-15">
              <div class="row">
                <div class="col-md-12 my-2 m-md-0">
                  <div class="text-overline opacity-75">Active Members</div>
                  <h3 class="m-0 text-success">1</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="AddMemberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-align-top-left  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-checkbox-intermediate text-success"></i> Add Member</h5>
        <button type="button" class="close" data-dismiss="modal"
        aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="" method="post" name="MemberForm" id="MemberForm">
        <div class="card-body ">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Member Name <i class="text-danger">*</i></label>
              <input type="text" name="member_name" id="member_name" class="form-control" placeholder="Member Name" required>
            </div>
            <div class="form-group col-md-6">
              <label>Address <i class="text-danger">*</i></label>
              <input type="text" name="member_address" id="member_address" class="form-control" placeholder="Address" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Date of Birth<i class="text-danger">*</i></label>
              <input type="text" name="member_phone" id="member_phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="form-group col-md-4">
              <label>Phone<i class="text-danger">*</i></label>
              <input type="text" name="member_phone" id="member_phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="form-group col-md-4">
              <label>Email </label>
              <input type="text" name="member_email" id="member_email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="form-row" for="idOptions" >
            <div class="form-group col-md-6">
              <label>Select Any ID </label>
              <select name="idtype" id="idOptions" class="form-control">
                <option value="VotersID">Voters ID</option>
                <option value="Adhar">Adhar</option>
                <option value="DrivingLicence">Driving Licence</option>
                <option value="PassportNumber">Passport Number</option>
                <option value="selectid">Select ID</option>
              </select>
            </div>
            <div class="form-row" id="id_type_options">
              <div class="form-group col-md-12">
                <label>Enter your ID</label>
                <input type="text" name="id_number" id="id_number" class="form-control"  placeholder="ID Number" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Close
            </button>
            <button type="submit" name="btn_supplier_submit" id="btn_supplier_submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<div class="container  pull-up">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5 class="m-b-0">
            <i class="mdi mdi-checkbox-intermediate text-success"></i> Members list
          </h5>
        </div>
        <!-- line separator -->
        <hr>
        <!-- line separator -->
        <div class="card-body">
          <div class="table-responsive p-t-10">
            <table id="example" class="table   " style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone No</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Member A</td>
                  <td>Address A</td>
                  <td>9658415412 </td>
                  <td class="align-middle"><span class=" text-danger"><i class="mdi mdi-close-circle "></i><a href="#">Idle</a></span></td>
                  <td class="align-middle">
                    <div class="input-group ">
                      <div class="input-group-prepend">
                        <a href='edit_member.html?enc_uid=VFZFOVBRPT0=&url=' class='btn btn-white'>Edit</a>
                        <button type="button"class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="edit_member.html?enc_uid=VFZFOVBRPT0=&url=">Edit</a>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Member B</td>
                  <td>Address B</td>
                  <td>9856231456</td>
                  <td class="align-middle"><span class=" text-success"><i class="mdi mdi-check-circle "></i><a href="#"> Active</a></span></td>
                  <td class="align-middle">
                    <div class="input-group ">
                      <div class="input-group-prepend">
                        <a href='edit_member.html?enc_uid=VFZFOVBRPT0=&url=' class='btn btn-white'>Edit</a>
                        <button type="button"
                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                        data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="edit_member.html?enc_uid=VFZFOVBRPT0=&url=">Edit</a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>



            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone No</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
@endsection
@section('scripts')
<script>
$("#idOptions").change(function() {
  if ($(this).val() == "selectid") {
    $('#id_type_options').hide();
  } else {
    $('#id_type_options').show();
  }
});
$("#idOptions").trigger("change");
</script>
@endsection
