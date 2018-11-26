@extends('home')
@section('title', 'Thêm mới học sinh')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới học sinh</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                <form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên học sinh</label>
                        <input type="text" class="form-control " name="name">
                    </div>
                    <div class="form-group">
                        <label>Tuổi</label>
                        <input type="text" class="form-control" name="age">
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <select class="form-control" name="gender">
                            <option value='Nam'>Nam</option>
                            <option value='Nữ'>Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Lớp</label>
                        <input type="text" class="form-control" name="class">
                    </div>
                    <div class="form-group">
                        <label>Trường</label>
                        <input type="text" class="form-control" name="school">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Ảnh đại diện</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="date" class="form-control" name="dayOfBirth">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" name="phoneNumber">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label>Sở thích</label>
                        <input type="text" class="form-control" name="hobbies">
                    </div>
                    <div class="form-group">
                        <label>Môn học yêu thích</label>
                        <input type="text" class="form-control" name="favouriteSubject">
                    </div>
                    <div class="form-group">
                        <label>Món ăn yêu thích</label>
                        <input type="text" class="form-control" name="favouriteDish">
                    </div>
                    <div class="form-group">
                        <label>Bài hát yêu thích</label>
                        <input type="text" class="form-control" name="favouriteSong">
                    </div>
                    <div class="form-group">
                        <label>Mô tả bản thân</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Họ tên Cha</label>
                        <input type="text" class="form-control" name="nameOfDad">
                    </div>
                    <div class="form-group">
                        <label>Họ tên Mẹ</label>
                        <input type="text" class="form-control" name="nameOfMom">
                    </div>
                    <div class="form-group">
                        <label>Quốc tịch</label>
                        <input type="text" class="form-control" name="nationality">
                    </div>
                    <div class="form-group">
                        <label>Thần tượng</label>
                        <input type="text" class="form-control" name="idol">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
