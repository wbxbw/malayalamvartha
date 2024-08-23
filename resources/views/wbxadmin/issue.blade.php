@extends('layout')
@section('title','Issue Books || Library App')
@section('content')
<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-30 p-t-30">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="media-body">
                            <h2><span class="menu-icon"><i
                                        class="icon-placeholder text-success mdi mdi-book"></i></span> Issue Books
                            </h2>
                            <i class="icon h2 mdi mdi-arrow-right-bold-box"></i>
                            <!-- <button type="button" id="exampleModalLabel" class="btn m-b-15 ml-2 mr-2 btn-success modal-title "><a href="#" data-toggle="modal" data-target="#AddMemberModal">Add Book</a></button> -->
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-danger"><a
                                    href="{{ route('books.index')}}">Return Books</a></button>
                            <!-- <button type="button" class="btn m-b-15 ml-2 mr-2 btn-secondary"><a href="#">List Active Members</a></button> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-white text-md-right p-b-30">
                    <div class="media">
                        <div class="media-body m-auto">

                            <h5 class="mt-0" id="show_name">Customer Name</h5>
                            <div class="opacity-75" id="show_details">Library ID | Contact</div>
                        </div>
                        <div class="avatar mr-3  avatar-xl" style="margin-left:20px;">
                            <img id="display_image" src="{{ url('images/male.jpg') }}" alt="..."
                                class="avatar-img rounded-circle">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container  pull-up">
        <div class="row">
            <div class="col-lg-12">
                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            <i class="mdi mdi-checkbox-intermediate text-success"></i> Member details
                        </h5>
                    </div>
                    <!-- line separator -->
                    <hr>
                    <!-- line separator -->
                    @if($borrowings->isEmpty())
                    <form action="{{ route('borrowings.store')}}" method="post" name="frmCms" id="frmCms">
                        @csrf
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Member Name</label>
                                    <!-- <label class="float-right text-danger"><i class="mdi mdi-plus"></i><a href="#"
                                            data-toggle="modal" data-target="#AddCategory">Add new
                                            category</a></label> -->
                                    <select name="customer_select" id="customer_select" onchange="MemberFunction()"
                                        class="form-control js-select2" required>
                                        <option value="">Select Member</option>
                                        @foreach($members as $member)
                                        <?php
                                        $startDate = \Carbon\Carbon::parse(today());
                                        $endDate = \Carbon\Carbon::parse($member->end_date);
                                        $dateDiff = $startDate->diffInDays($endDate);
                                        ?>
                                        <option value="{{ $member['id'] }}"
                                            data-name="{{ $member['first_name'] }} {{ $member['last_name'] }}"
                                            data-library="{{ $member['library_id'] }}"
                                            data-section="{{ $member['section'] }}" data-phone="{{ $member['phone'] }}"
                                            data-image="{{ $member['image'] }}"
                                            data-start="{{ date('d-M-Y', strtotime($member['start_date'])) }}"
                                            data-end="{{ date('d-M-Y', strtotime($member['end_date']))  }}"
                                            data-due="{{ $dateDiff }}">
                                            {{ $member['first_name'] }} {{ $member['last_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Member Class</label>
                                    <input type="text" class="form-control" name="section" id="section"
                                        placeholder="Class" value="NIL" disabled>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Member ID</label>
                                    <input type="text" class="form-control text-success" name="library_id"
                                        id="library_id" placeholder="ID" value="NIL" disabled>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"
                                        value="NIL" disabled>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Subscription Date</label>
                                    <input type="text" class="form-control text-success" name="start_date"
                                        id="start_date" value="NIL" disabled>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>End Date</label>
                                    <input type="text" class="form-control text-danger" name="end_date" id="end_date"
                                        value="NIL" disabled>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Due Days</label>
                                    <input type="text" class="form-control" name="due_days" id="due_days" value="NIL"
                                        disabled>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" name="btn_submit" id="btn_submit"
                                        class="btn btn-success float-right">Submit</button>
                                    <!-- <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#modalConfirmation">Delete Member</button> -->
                                </div>
                            </div>

                            <!-- <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" ></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" ></div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" ></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" ></div>
                            </div> -->
                        </div>
                    </form>
                    @else
                    @foreach($borrowings as $borrowingsdet)
                    <form action="{{ route('borrowings.destroy', $borrowingsdet['id'])}}" method="post" name="frmCms" id="frmCms">
                        @csrf
                        @method('DELETE')
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Member Name</label>
                                <input type="text" class="form-control" name="section" id="section" placeholder="Class"
                                    value="{{ $borrowingsdet['member_name']}}" disabled>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Member Class</label>
                                <input type="text" class="form-control" name="section" id="section" placeholder="Class"
                                    value="{{ $borrowingsdet['section']}}" disabled>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Member ID</label>
                                <input type="text" class="form-control text-success" name="library_id" id="library_id"
                                    placeholder="ID" value="{{ $borrowingsdet['library_id']}}" disabled>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"
                                    value="{{ $borrowingsdet['phone']}}" disabled>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Subscription Date</label>
                                <input type="text" class="form-control text-success" name="start_date" id="start_date"
                                    value="{{ date('d-M-Y', strtotime($borrowingsdet['borrow_date']))  }}" disabled>
                            </div>
                            <div class="form-group col-md-3">
                                <label>End Date</label>
                                <input type="text" class="form-control text-danger" name="end_date" id="end_date"
                                    value="{{ date('d-M-Y', strtotime($borrowingsdet['return_date']))  }}" disabled>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Due Days</label>
                                <input type="text" class="form-control" name="due_days" id="due_days" value="NIL"
                                    disabled>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-danger float-right" name="remove_btn" id="remove_btn">Remove</button>
                            </div>
                        </div>
                    </div>
                    </form>
                    @endforeach
                    @endif
                    @if(!$borrowings->isEmpty())
                    <div class="card-body ">
                        <hr>
                        <h5 class="m-b-0">
                            <i class="mdi mdi-checkbox-intermediate text-success"></i> Add Books
                        </h5>
                        <hr>

                        <form action="" method="post" name="PurchaseAddProductForm" id="PurchaseAddProductForm">
                            <div class="form-row">
                                <input type="hidden" name="purchase_id" id="purchase_id" value="" />
                                <div class="form-group col-md-3">
                                    <label>Item Select</label>
                                    <select name="book_detail" id="book_detail" class="form-control js-select2"
                                        onchange="BookDetailFunction();">
                                        <option value="">Select Book</option>
                                        @foreach($books as $book)
                                        <option value="{{ $book['id'] }}" data-code="{{ $book['book_id'] }}"
                                            data-author="{{ $book['author'] }}" data-category="{{ $book['category'] }}"
                                            data-language="{{ $book['language'] }}">
                                            {{ $book['title'] }} - {{ $book['title_regional'] }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Book Code</label>
                                    <input disabled class="form-control" name="book_id" id="book_id" value="NIL"
                                        required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Category</label>
                                    <input disabled class="form-control" name="category" id="category" value="NIL"
                                        required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Author</label>
                                    <input disabled class="form-control" name="author_name" id="author_name" value="NIL"
                                        required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Language</label>
                                    <input disabled class="form-control" name="language" id="language" value="NIL"
                                        required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label>Action</label>
                                    <button type="submit" name="btn_prd_submit" id="btn_prd_submit"
                                        class="btn btn-success">Add</button>
                                </div>
                            </div>
                        </form>
                        <hr>


                        <div class="table-responsive p-t-10">
                            <table id="" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Book Name</th>
                                        <th>Code</th>
                                        <th>Category</th>
                                        <th>Language</th>
                                        <th>Author</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($borrowedbooks as $borrowedbook)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>Book Name</td>
                                        <td>66</td>
                                        <td>66</td>
                                        <td>66</td>
                                        <td>66</td>
                                        <td>66</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Total</th>
                                        <th>---</th>
                                        <th>Book Name</th>
                                        <th>Book Name</th>
                                        <th>Book Name</th>
                                        <th>Book Name</th>
                                        <th>------</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
            <!--widget card ends-->
        </div>
    </div>



</section>
<script>
$(function() {
    $('.summernote').summernote();
});
</script>

<script>
function MemberFunction() {
    var select = document.getElementById("customer_select");
    var index = document.getElementById("customer_select").selectedIndex;
    var name = document.getElementById("customer_select").options[index].getAttribute("data-name");
    var library = document.getElementById("customer_select").options[index].getAttribute("data-library");
    var section = document.getElementById("customer_select").options[index].getAttribute("data-section");
    var phone = document.getElementById("customer_select").options[index].getAttribute("data-phone");
    var image = document.getElementById("customer_select").options[index].getAttribute("data-image");
    var start = document.getElementById("customer_select").options[index].getAttribute("data-start");
    var end = document.getElementById("customer_select").options[index].getAttribute("data-end");
    var due = document.getElementById("customer_select").options[index].getAttribute("data-due");

    const show_name = document.getElementById("show_name");
    const show_image = document.getElementById("show_image");
    const show_details = document.getElementById("show_details");


    const myImage = document.getElementById("display_image");
    const imageUrl = "{{ url('images') }}/" + image;
    myImage.setAttribute("src", imageUrl);



    show_name.innerText = name;
    show_details.innerText = library + ' | ' + phone;

    document.getElementsByName("library_id")[0].value = library;
    document.getElementsByName("section")[0].value = section;
    document.getElementsByName("phone")[0].value = phone;
    document.getElementsByName("start_date")[0].value = start;
    document.getElementsByName("end_date")[0].value = end;
    document.getElementsByName("due_days")[0].value = due;

    if (select.value === null || select.value === "") {
        document.getElementsByName("library_id")[0].value = "NIL";
        document.getElementsByName("section")[0].value = "NIL";
        document.getElementsByName("phone")[0].value = "NIL";
        document.getElementsByName("start_date")[0].value = "NIL";
        document.getElementsByName("end_date")[0].value = "NIL";
        document.getElementsByName("due_days")[0].value = "NIL";
        myImage.setAttribute("src", "{{ url('images/male.jpg') }}");
        show_name.innerText = 'Customer Name';
        show_details.innerText = 'Library ID | Contact';
    }

    if (image === null || image === "") {
        myImage.setAttribute("src", "{{ url('images/male.jpg') }}");
    }

}

function BookDetailFunction() {
    var select = document.getElementById("book_detail");
    var index = document.getElementById("book_detail").selectedIndex;
    var code = document.getElementById("book_detail").options[index].getAttribute("data-code");
    var author = document.getElementById("book_detail").options[index].getAttribute("data-author");
    var category = document.getElementById("book_detail").options[index].getAttribute("data-category");
    var language = document.getElementById("book_detail").options[index].getAttribute("data-language");

    document.getElementsByName("book_id")[0].value = code;
    document.getElementsByName("author_name")[0].value = author;
    document.getElementsByName("category")[0].value = category;
    document.getElementsByName("language")[0].value = language;

    if (select.value === null || select.value === "") {
        document.getElementsByName("book_id")[0].value = "NIL";
        document.getElementsByName("author_name")[0].value = "NIL";
        document.getElementsByName("category")[0].value = "NIL";
        document.getElementsByName("language")[0].value = "NIL";
    }

}
</script>
<!-- <script src="{{ url('cjbundle/summernote/bundles/4d1a036b76aac76cf6eb934f143fb4fb9f41835e.js') }}"></script>
<script src="{{ url('cjbundle/summernote/bundles/9556cd6744b0b19628598270bd385082cda6a269.js') }}"></script> -->
@endsection