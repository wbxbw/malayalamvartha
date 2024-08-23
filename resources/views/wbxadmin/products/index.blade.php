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
            <a href="{{ route('products.create') }}" class="btn btn-primary">Add News</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="p-4">
          <input
            type="text"
            placeholder="Start typing to search for news"
            class="form-control form-control--search mx-auto"
            id="table-search"
          />
        </div>
        <div class="sa-divider"></div>
        <form id="orderForm" method="POST" action="{{ route('updateOrderNews') }}">
        @csrf
        <table
          class="sa-datatables-init"
          data-sa-search-input="#table-search" id="myTable">
          <thead>
            <tr>
              <th class="w-min" data-orderable="false">No</th>
              <th class="min-w-20x">News Title</th>
              <th>Categories</th>
              <th>Tags</th>
              <th class="w-min">Status</th>
              <th>Published</th>
              <th class="w-min" data-orderable="false"></th>
              <th class="">#</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($products as $product)
            <tr class="sortable-row">
              <td class="slno">{{ $loop->iteration }}</td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="{{ route('products.edit',Crypt::encrypt($product['id']))}}" class="me-4"><div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg" >
                    @if($product->images->isNotEmpty())
                      <img src="{{ url('img/articles/products/'.$product->images->first()->image)}}" width="40" height="40" alt=""/>
                    @else
                      <img src="{{ url('sample/imgpreview.png') }}" width="40" height="40" alt=""/>
                    @endif

                    </div></a> 
                  <div>
                    <a href="{{ route('products.edit',Crypt::encrypt($product['id']))}}" class="text-reset">{{ $product['name'] }}</a>
                    <div class="sa-meta mt-0">
                      <ul class="sa-meta__list">
                        <li class="sa-meta__item">
                          Published: <span class="st-copy">{{ date('d-M-Y', strtotime($product['created_at'])) }}</span>
                        </li>
                        <li class="sa-meta__item">
                          Updated: <span class="st-copy">{{ date('d-M-Y', strtotime($product['updated_at'])) }}</span>
                        </li>
                      </ul>
                    </div>
                  </div> 
                </div>
              </td>
              <input type="hidden" name="order[]" value="{{ $product['id'] }}" data-id="{{ $product['id'] }}">
              <td><a href="#" class="text-reset">{{ $product->categories }}</a></td>
              <td><a href="#" class="text-reset-sa-danger">{{ $product->tags }}</a></td>
              <td>
                @if($product['status'] == 'N')
                <div class="badge badge-sa-danger">Disabled</div>
                @endif
                @if($product['status'] == 'Y')
                 <div class="badge badge-sa-success">Active</div>
                @endif
              </td>
              <td>
                <div class="sa-price">
                  <span class="sa-price__integer">{{ date('d-M-Y', strtotime($product['created_at'])) }}</span>
                </div>
              </td>
              <!-- <td>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-view-list" viewBox="0 0 16 16">
                    <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z" />
                  </svg>
                </a>
              </td> -->
              <td>
                <div class="dropdown">
                  <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                      <path d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"></path>
                    </svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="customer-context-menu-0">
                    <li>
                      <a class="dropdown-item" href="{{ route('products.edit',Crypt::encrypt($product['id']))}}">Edit</a>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="#">Duplicate</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </li> -->
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
