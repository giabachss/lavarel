@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Edit pet
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach($edit_product as $key => $edit_product)
                        <form role="form" action="{{URL::to('/update-product/'.$edit_product->product_id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pet name</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" 
                            value ="{{$edit_product->product_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pet price</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" 
                            value ="{{$edit_product->product_price}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pet image</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" >
                            <img src ="{{URL::to('public/uploads/product/'.$edit_product->product_image)}}" height ="100" width ="100">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Pet description</label>
                            <textarea style="resize:none" class="form-control" name="product_desc" id="exampleInputPassword1"
                           >{{$edit_product->product_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                            @foreach($cate_product as $key => $cate)
                            @if($cate->category_id == $edit_product->category_id)
                                <option selected value ={{$cate->category_id}}>{{$cate->category_name}}</option>
                            @else
                                <option value ={{$cate->category_id}}>{{$cate->category_name}}</option>
                            @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">Hide</option>
                                <option value="1">Show</option>
                            </select>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-info">Submit</button>
                    </form>
                    @endforeach
                    </div>
                </div>
            </section>
    </div>
@endsection