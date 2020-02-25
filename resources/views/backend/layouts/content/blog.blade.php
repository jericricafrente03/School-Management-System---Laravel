@extends('backend.app')

@section('title')
	Blog
@endsection

@section('content')
	
<div class="content">
  <div class="row">
    <div class="col-md-8">
      <form action="/save" method="post" id="cashout">
        @csrf            
      <div class="card">
        <div class="card-header">
          <h3 class="title">Make a blog</h3>
        </div>
        <div class="card-body">

            <div class="row">
              <div class="col-md-5 pr-md-1">
                <div class="form-group">
                  <label>Company</label>
                  <input type="text" class="form-control" placeholder="Company">
                </div>
              </div>
              <div class="col-md-3 px-md-1">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Username" required data-parsley-trigger="keyup" data-parsley-length="[3, 40]" data-parsley-group="block2">
                </div>
              </div>
              <div class="col-md-4 pl-md-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="Email Address
                  "required data-parsley-type="email" data-parsley-trigger="keyup">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-md-1">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="Company" required  data-parsley-length="[4, 20]" data-parsley-group="block-1">
                </div>
              </div>
              <div class="col-md-6 pl-md-1">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name" required data-parsley-length="[4, 20]" data-parsley-group="block-1">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" placeholder="Address"
                  required data-parsley-trigger="keyup" data-parsley-length="[8, 40]" data-parsley-group="block2">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label>Create A Post</label>
                <textarea rows="6" cols="100" class="form-control" placeholder="Description"></textarea>
              </div>
            </div>
        
        </div>
        <div class="card-footer">
          <input type="submit" name="" value="Create New Post" class="btn btn-fill btn-secondary">
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-user">
         <div class="card-header">
          <h3 class="title">Post Details</h3>
        </div>
        <div class="card-body">
            <label>URL Slug</label>
            <input type="text" name="productname" class="form-control" placeholder="Slug">
            <div class="form-group">
              <label>Post Status</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Published</option>
                <option>Draft</option>
                <option>Pending</option>
              </select>
            </div>
            <div class="form-group">
              <label>Post Status</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Category 1</option>
                <option>Category 2</option>
              </select>
            </div>
        </div>           
        </div>

        <div class="card card-user" style="height: 150px;">
         <div class="card-header">
          <h3 class="title">Post Image</h3>
        </div>
        <div class="card-body">
              <input type="file" name="file" id="file">
          </div>           
        </div>

      <div class="card card-user">
         <div class="card-header">
          <h3 class="title">SEO Content</h3>
        </div>
        <div class="card-body">
            <label>Meta Description</label>
            <textarea rows="4" cols="80" class="form-control" placeholder="Meta Description">
            </textarea>
            <label>Meta Keywords</label>
            <textarea rows="4" cols="80" class="form-control" placeholder="Meta Keywords">
            </textarea>
            <label>SEO Title</label>
            <input type="text" class="form-control" name="seotitle" placeholder="SEO Title">

        </div>           
        </div>

        </div>        
      </div>
      


    </div>
  </div>
</div>
@endsection

