@extends('wbxadmin.layout')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/slugify"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
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
        </div>
      </div>
      <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}' >
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card">
              <div class="card-body p-5">
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">
                    Product information
                  </h2>
                </div>
                <div class="form-colum">
                  <div class="mb-4">
                      <label for="name" class="form-label">News Title @error('name') <span class="text-danger"> * {{ $message }}</span> @enderror</label>
                      <input type="text" placeholder="News Title" class="form-control" id="titleInput" name="name" value="{{ old('name') }}" />
                  </div>
                  <div class="row" id="pagefields" style="display:block;">
                    <div class="mb-4">
                      <label for="form-product/slug" class="form-label">Slug @error('link') <span class="text-danger"> * {{ $message }}</span> @enderror</label>
                      <div class="input-group input-group--sa-slug">
                        <span class="input-group-text" id="form-product/slug-addon" >{{ $settings->values }}/news/</span >
                        <input type="text" class="form-control" id="slugOutput" name="link" aria-describedby="form-product/slug-addon form-product/slug-help" value="{{ old('link') }}"/>
                      </div>
                      <div id="form-product/slug-help" class="form-text">
                        Unique human-readable news identifier. No longer
                        than 255 characters.
                      </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="meta-tittle" class="form-label">Meta Title @error('meta_title') <span class="text-danger"> * {{ $message }}</span> @enderror</label>
                        <input type="text" placeholder="Meta Title" class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title') }}" />
                    </div>
                    <div class="mb-4">
                        <label for="meta-keywords" class="form-label ">Meta Keywords @error('meta_keyword') <span class="text-danger"> * {{ $message }}</span> @enderror</label>
                            <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_keyword" name="meta_keyword">{{ old('meta_keyword') }}</textarea> 
                    </div>
                    <div class="mb-3">
                        <label for="meta-keywords" class="form-label">Meta Description @error('meta_description') <span class="text-danger"> * {{ $message }}</span> @enderror</label>
                        <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_description" name="meta_description">{{ old('meta_description') }}</textarea> 
                    </div>   
                    
                    <div class="mb-4">
                        <label for="first-name" class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_description" id="editor1" cols="43" rows="5" class="textarea" tabindex="5" onkeydown="limitText(this.form.short_desc,this.form.countdown1,5000);"
                          onkeyup="limitText(this.form.product_desc,this.form.countdown1,5000);">{{ old('short_description') }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="first-name" class="form-label">Description @error('long_description') <span class="text-danger"> * {{ $message }}</span> @enderror</label>
                        <textarea class="form-control" name="long_description" id="editor2" cols="43" rows="5" class="textarea" tabindex="5" onkeydown="limitText(this.form.short_desc,this.form.countdown1,5000);"
                          onkeyup="limitText(this.form.product_desc,this.form.countdown1,5000);">{{ old('long_description') }}</textarea>
                    </div>

                  </div>

                  <div class="row">
                    <div class="mb-4">
                        <label for="first-name" class="form-label">News Type @error('news_type') <span class="text-danger"> * {{ $message }}</span> @enderror</label>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="mb-4">
                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="news_type" id="radio-image" value="I" checked>
                                <span class="form-check-label">Image News</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="mb-4">
                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="news_type" id="radio-video" value="V">
                                <span class="form-check-label">Video News</span>
                            </label>
                        </div>
                    </div>
                </div>

                
                  
                  <div class="row">    
                    <div class="mb-3">
                        <label for="meta-tittle" class="form-label">@error('images') <span class="text-danger"> * {{ $message }}</span> @enderror </label>
                        <label for="meta-tittle" class="form-label">@error('videos') <span class="text-danger"> * {{ $message }}</span> @enderror </label>
                    </div> 
                  </div>
                </div>
              </div>
              <div class="mt-n5">
                <div class="sa-divider"></div>
                <div class="table-responsive">
                <table class="sa-table" id="myTable">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Preview</th>
                      <th>Select </th>
                      <th class="min-w-10x">Alt text</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr class="image-row">
                      <td>1</td>
                      <input type="hidden" name="order[]" class="form-control" value="1" />
                      <td>
                          <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                              <img src="{{ url('sample/imgpreview.png') }}" width="40" height="40" alt="">
                          </div>
                      </td>
                      <td>
                          <input type="file" name="images[]" class="form-control" onchange="previewImage(this)">
                      </td>
                      <td>
                          <input type="text" name="alt[]" class="form-control"/>
                      </td>
                  </tr>
                  <tr class="video-row">
                      <td>1</td>
                      <td>
                          <div id="preview-container" class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                              <img id="preview-image" src="{{ url('sample/imgpreview.png') }}" width="40" height="40" alt="">
                          </div>
                      </td>
                      <td>
                          <input type="text" name="videos" class="form-control" onchange="previewVideo(this)">
                      </td>
                      <td>
                          <input type="text" name="alt[]" class="form-control"/>
                      </td>
                  </tr>
                  </tbody>
                </table>
                </div>
                <div class="sa-divider"></div>
              </div>
              <div class="card-body p-5">
                <div class="form-colum">
                  <div class=" d-flex justify-content-end mt-5">
                    <input type="submit" class="btn btn-secondary me-3" name="Save"/>
                    <a href="#" class="btn btn-primary">Cancel</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sa-entity-layout__sidebar">
            <div class="card w-100">
              <div class="card-body p-5">
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">Visibility Status</h2>
                </div>
                <div class="mb-4">
                  <label class="form-check">
                    <input type="radio" class="form-check-input" name="status" value="Y" checked /><span class="form-check-label" >Publish</span ></label ><label class="form-check" >
                    <input type="radio" class="form-check-input" name="status" value="N" /><span class="form-check-label" >Draft</span ></label ><label class="form-check mb-0">
                </div>
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">News Categories </h2>
                </div>
                <div class="mb-4">
                    <label for="first-name" class="form-label">Select Category @error('category') <span class="text-danger"> * {{ $message }}</span> @enderror</label>
                    <div class="sa-example" style="max-height: 300px; overflow-y: auto;">
                      <div class="sa-example__body">
                        <div class="row">
                          <div class="col">
                            {!! $ProdCategoriesChkbox !!}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="card w-100 mt-5">
                <div class="card-body p-5">
                  <div class="mb-5">
                    <h2 class="mb-0 fs-exact-18">Tags</h2>
                  </div>
                  <select class="sa-select2 form-select" name="selectTags[]" data-tags="true" multiple="">
                      @foreach($tags as $tag)
                          <option value="{{ $tag->id }}" {{ in_array($tag->id, old('selectTags', [])) ? 'selected' : '' }}>
                              {{ $tag->name }}
                          </option>
                      @endforeach
                  </select>

                </div>
              </div>

            
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
    function generateSlug() {
        var titleInput = document.getElementById('titleInput');
        var slug = slugify(titleInput.value);
        document.getElementById('slugOutput').value = slug;
    }
    document.getElementById('titleInput').addEventListener('input', generateSlug);
</script>
<script>
  $(document).ready(function() {
  $('#note1').summernote();
  $('#note2').summernote();
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to show/hide rows based on selected radio button
        function updateRows() {
            const selectedType = document.querySelector('input[name="news_type"]:checked').value;
            const imageRows = document.querySelectorAll('.image-row');
            const videoRows = document.querySelectorAll('.video-row');

            // Clear inputs in hidden rows
            function clearInputs(rows) {
                rows.forEach(row => {
                    row.querySelectorAll('input').forEach(input => {
                        if (input.type !== 'hidden') {
                            input.value = '';
                        }
                    });
                });
            }

            if (selectedType === 'I') {
                imageRows.forEach(row => row.style.display = '');
                videoRows.forEach(row => {
                    row.style.display = 'none';
                    clearInputs([row]); // Clear inputs in hidden rows
                });
            } else if (selectedType === 'V') {
                imageRows.forEach(row => {
                    row.style.display = 'none';
                    clearInputs([row]); // Clear inputs in hidden rows
                });
                videoRows.forEach(row => row.style.display = '');
            }
        }

        // Initial update
        updateRows();

        // Event listeners for radio buttons
        document.querySelectorAll('input[name="news_type"]').forEach(radio => {
            radio.addEventListener('change', updateRows);
        });
    });
</script>


<script>
    function previewVideo(input) {
        var url = input.value;
        var previewImage = document.getElementById('preview-image');
        
        // Reset to default image if input is empty
        if (!url) {
            previewImage.src = '{{ url('sample/imgpreview.png') }}';
            return;
        }

        // Check if the URL is a YouTube link
        var youtubeRegex = /(?:https?:\/\/)?(?:www\.)?youtube\.com\/(?:watch\?v=|embed\/|v\/|.+\?v=|.+\/videos\/|.+\/watch\?v=|.+\/videos\/)?([a-zA-Z0-9_-]{11})/;
        var match = url.match(youtubeRegex);

        if (match) {
            var videoId = match[1];
            // Set the YouTube thumbnail URL
            previewImage.src = 'https://img.youtube.com/vi/' + videoId + '/hqdefault.jpg';
        } else {
            // If not a YouTube link, reset to default image
            previewImage.src = '{{ url('sample/imgpreview.png') }}';
        }
    }
</script>



<script>
        document.addEventListener('DOMContentLoaded', function () {
            var table = document.getElementById('myTable').getElementsByTagName('tbody')[0];
            new Sortable(table, {
                handle: '.sortable-handle',
                animation: 150,
                onEnd: function (evt) {
                    updateOrder();
                }
            });
        });
    
        function addTableRow() {
            var table = document.getElementById("myTable");
            var lastRow = table.querySelector("tbody tr:last-child");
            var newRow = lastRow.cloneNode(true);
    
            // Find the order input in the cloned row
            var orderInput = newRow.querySelector("input[name='order[]']");
    
            if (orderInput) {
                // Get the current value and increment by 1
                var currentValue = parseInt(orderInput.value, 10) || 0;
                orderInput.value = currentValue + 1;
            }
            var slnoCell = newRow.querySelector("#slno");
            var currentSlno = parseInt(slnoCell.textContent);
            slnoCell.textContent = currentSlno + 1;
    
            // Clear other input values in the new row
            var inputs = newRow.querySelectorAll("input:not([name='order[]'])");
            inputs.forEach(function (input) {
                input.value = "";
            });

            
    
            // Append the new row to the table
            table.querySelector("tbody").appendChild(newRow);
        }

        function previewImage(input) {
            var reader = new FileReader();
            var preview = input.parentElement.previousElementSibling.querySelector("img");

            reader.onload = function (e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    
        function deleteRow(button) {
            var table = document.getElementById("myTable");
            var rows = table.querySelectorAll("tbody tr");
            if (rows.length > 1) {
                var row = button.closest("tr");
                row.remove();
                updateOrder();
            } else {
                alert("At least one row is required.");
            }
        }
    
        function updateOrder() {
            var rows = document.querySelectorAll('.sortable-row');
            rows.forEach(function (row, index) {
                var orderInput = row.querySelector("input[name='order[]']");
                if (orderInput) {
                    orderInput.value = index + 1;
                }
            });
            // Update slno values
            var slnoCells = document.querySelectorAll('.sortable-row #slno');
            slnoCells.forEach(function(cell, index) {
                cell.textContent = index + 1;
            });
        }
</script>


@endsection
