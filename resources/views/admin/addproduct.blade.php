@extends('adminPage')

@section('title', 'Thêm sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
   
<div class="addproduct">
    <h3>Thêm sản phẩm</h3>

    <form action="{{ URL::to('/save-product') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}


        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Tiêu đề sản phẩm - Mã sản phẩm.</div>
            </div>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option selected>Danh mục sản phẩm: </option>
                @foreach ($cate_product as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->category_name }}</option>
                @endforeach

            </select>

            <select class="form-select" aria-label="Default select example" name="brand_id">
                <option selected>Thương hiệu sản phẩm: </option>
                @foreach ($brand_product as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                @endforeach

            </select>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mô tả sản phẩm</label>
                <input name="desc" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Giá</label>
                <input name="price" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Thêm ảnh </label>
                <input name="image" class="form-control" type="file" id="formFile">
                
            </div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nội dung sản phẩm</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>
    </form>
</div>

@endsection