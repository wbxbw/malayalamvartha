@extends('wbxadmin.layout')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
<div id="top" class="sa-app__body">
  <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
    <div class="container">
      <div class="py-5">
        <div class="row g-4 align-items-center">
          <div class="col">
            <nav class="mb-2" aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-sa-simple">
                <li class="breadcrumb-item">
                <a href="route('wbxadmin')">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $moduleDetails->name }}</li>
              </ol>
            </nav>
            <h1 class="h3 m-0">{{ $pageDetails->name }}</h1>
          </div>
          <div class="col-auto d-flex">
            <a href="{{ route('categories.sectioncreate',['parent' => Crypt::encrypt($parentDetails->id)])}}" class="btn btn-primary"
              >New Section</a
            >
          </div>
        </div>
      </div>
      <div class="card">
        <div class="p-4">
        <div class="mb-5">
            <h2 class="mb-0 fs-exact-18">{{ $parentDetails->name }} / Sections</h2>
        </div>
        </div>
        <div class="sa-divider"></div>
        <form id="orderForm" method="POST" action="{{ route('updateCatOrderRoute') }}">
        @csrf
        <table
          class="sa-datatables-init"
          data-sa-search-input="#table-search" id="myTable"
              >
          <thead>
          <tr>
              <th class="w-min" data-orderable="false">No</th>
              <th class="" data-orderable="false">Section Name</th>
              <th class="" data-orderable="false">Section Type</th>
              <th data-orderable="false">Order</th>
              <th class="w-min" data-orderable="false">Status</th>
              <th class="w-min" data-orderable="false">Action</th>
              <th class="">#</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($sections as $section)
            <tr class="sortable-row">
              <td class="slno">{{ $loop->iteration }}</td>
              <td><a href="{{ route('categories.sectionedit',Crypt::encrypt($section['id']))}}" class="text-reset">{{ $section['name'] }}</a></td>
              <td>
                    @if ($section['function_ret'] == 'textSection')
                        Text Section
                    @elseif ($section['function_ret'] == 'heroSlider')
                        Hero Banner
                    @elseif ($section['function_ret'] == 'twoSectionSlider' || $section['function_ret'] == 'threeSectionSlider')
                        2 Col Banner - Carousel
                    @elseif ($section['function_ret'] == 'twoSectionSliderFixed' || $section['function_ret'] == 'threeSectionSliderFixed' || $section['function_ret'] == 'fourSectionSliderFixed' || $section['function_ret'] == 'sixSectionSliderFixed')
                        2 Col Banner - Featured
                    @elseif ($section['function_ret'] == 'yellowRoundSlider')
                        9 Col Banner - Yellow
                    @else
                        Field for selected section type not defined.
                    @endif
                </td>
              <input type="hidden" name="order[]" value="{{ $section['id'] }}" data-id="{{ $section['id'] }}">
              <td>{{ $loop->iteration }}</td>
              <td>
                @if($section['status'] == 'N')
                <div class="badge badge-sa-danger">Disabled</div>
                @endif
                @if($section['status'] == 'Y')
                 <div class="badge badge-sa-success">Active</div>
                @endif
              </td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                      <path d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"></path>
                    </svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="customer-context-menu-0">
                    <li>
                      <a class="dropdown-item" href="{{ route('categories.sectionedit',Crypt::encrypt($section['id']))}}">Edit</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </li>
                  </ul>
                </div>
              </td>
              <td class="sortable-handle">&#9776;</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      var table = document.getElementById('myTable').getElementsByTagName('tbody')[0];
      new Sortable(table, {
          handle: '.sortable-handle', // Ensure there's a handle if needed, or remove this line if the whole row is draggable
          animation: 150,
          onEnd: function (evt) {
              updateOrder();
              submitForm();
          }
      });
  });

  function updateOrder() {
    var rows = document.querySelectorAll('#myTable .sortable-row');
    rows.forEach(function (row, index) {
        // Update the displayed number in the No column
        var slnoCell = row.querySelector(".slno");
        slnoCell.textContent = index + 1;

        // Update the hidden input for order
        var orderInput = row.querySelector("input[name='order[]']");
        if (orderInput) {
            orderInput.value = orderInput.dataset.id; // Use the data-id as the value
        }
    });
}
  function submitForm() {
      var form = document.getElementById('orderForm'); // Make sure the ID matches your form
      form.submit(); // Submit the form programmatically
  }
</script>
@endsection
