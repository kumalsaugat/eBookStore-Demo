@extends('eBookStore.adminPanel.layout')

@section('body')
{{-- addBookModal --}}
<div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Books</h5>
        <button type="button" class="btn-close rounded" data-bs-dismiss="modal" aria-label="Close">close</button>
      </div>
      <div class="modal-body">
        @if(session('message'))
            <div class="alert alert-warning">
                {{session('message')}}
            </div>
            @endif
            <ul id="saveForm_errlist"></ul>
            <div id="success_message"></div>
        <form id="bookForm" method="POST" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label>Select Category</label>
                <select class="category_id form-control">
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label>Book Title</label>
                <input type="text" name="title" class="title form-control" placeholder="Enter Book's title">
            </div>
            <div class="form-group mb-3">
                <label>Book Description</label>
                <textarea type="text" name="description" class="description form-control" rows="5" cols="10" placeholder="Enter Book's description"></textarea>
                <!-- <input type="text" name="description" class="description form-control" placeholder="Enter Book's description"> -->
            </div>
            <div class="form-group mb-3">
                <label>Book author</label>
                <input type="text" name="author" class="author form-control" placeholder="Enter Book's author">
            </div>
            <div class="form-group mb-3">
                <label>Book Price</label>
                <input type="text" name="price" class="price form-control" placeholder="Enter Book's price">
            </div>
            <div class="form-group mb-3">
                <label>Book image</label>
                <input type="file" name="image" class="image form-control">
            </div>
            <div class="form-group mb-3">
                <label>Book rating</label>
                <input type="text" name="rating" class="rating form-control" placeholder="Enter Book's rating">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary addBook">Save</button>
          </div>
      </form>
    </div>
  </div>
</div>
{{-- End- addBookModal --}}


<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Books Details
                        <a href="{{ url('/AdminDashboard/Category/Create')}}" class="btn btn-primary float-right rounded">Add Category</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addBookModal" class="btn btn-primary float-right rounded mr-2">Add Book</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','.addBook', function(event){
            event.preventDefault();
            // Setting the 'Saving' text when saving the data into db
            $(this).text("Saving");

            var formData = new FormData(); // Create a FormData object

            // Append form data to the FormData object
            formData.append('category_id', $('.category_id').val());
            formData.append('title', $('.title').val());
            formData.append('description', $('.description').val());
            formData.append('author', $('.author').val());
            formData.append('price', $('.price').val());
            formData.append('image', $('.image')[0].files[0]); // Append the file object directly
            formData.append('rating', $('.rating').val());

            // var formData ={
            //     'category_id': $('.category_id').val(),
            //     'title': $('.title').val(),
            //     'description': $('.description').val(),
            //     'author': $('.author').val(),
            //     'price': $('.price').val(),
            //     'image': $('.image')[0].files[0],
            //     'rating': $('.rating').val(),
            // }
            // console.log(formData);

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                type: "post",
                url: "/AdminDashboard/Book/Store",
                datatype: "json",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response){
                    console.log(response);
                    if(response.status == 400){
                        $('#saveForm_errlist').html("");
                        $('#saveForm_errlist').addClass('alert alert-danger');
                        $.each(response.error, function(key, err_values) {
                            $('#saveForm_errlist').append('<li>'+ err_values + '</li>');
                        });
                    }
                    else{
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.success);
                        $('#addBookModal').modal('hide');
                        $('.bookForm').find('input').val("");
                    }
                }
            })
        });
    });
</script>
@endsection









