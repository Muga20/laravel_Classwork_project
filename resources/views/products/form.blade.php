



<div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Product name</label>
      <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter product name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Product price</label>
      <input type="number" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter product price" min="1">
    </div>
    <div class="form-group">
      <label>Product category</label>

      <select class="form-control select2" style="width: 100%;" name="category_id">
        @foreach ($categories as $category)

        <option value="{{$category->id}}">{{$category->category_name}}</option>
  
        @endforeach
      </select>

      <div class="form-group">
        <label for="exampleInputEmail1">Product description </label>
        <input type="text" value="product_description" name="product_description" class="form-control" id="exampleInputEmail1" placeholder="Enter product description">
      </div>

    </div>
    <label for="exampleInputFile">Product image</label>
    <div class="input-group">
      <div class="custom-file">
        <input name ="file" type="file" class="custom-file-input" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
      </div>
      <div class="input-group-append">
        <span class="input-group-text">Upload</span>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <!-- <button type="submit" class="btn btn-success">Submit</button> -->
    <input type="submit" class="btn btn-success" value="Save">
  </div>