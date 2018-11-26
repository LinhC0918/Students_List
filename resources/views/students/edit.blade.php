@extends('home')
@section('title', 'Chỉnh sửa học sinh')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa học sinh</h1>
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
                <form method="post" action="{{ route('students.update', $students->id) }}"
{{--                <form method="post" action="{{ route('sendEmail') }}"--}}
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên học sinh</label>
                        <input type="text" class="form-control " name="name" value="{{$students->name}}" >
                    </div>
                    <div class="form-group">
                        <label>Tuổi</label>
                        <input type="text" class="form-control" name="age" value="{{$students->age}}" >
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <select class="form-control" name="gender" value="{{$students->gender}}">
                            <option value='Nam'>Nam</option>
                            <option value='Nữ'>Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$students->email}}" required>
                    </div>
                    <div class="form-group">
                        <label>Lớp</label>
                        <input type="text" class="form-control" name="class" value="{{$students->class}}">
                    </div>
                    <div class="form-group">
                        <label>Trường</label>
                        <input type="text" class="form-control" name="school" value="{{$students->school}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Ảnh đại diện</label>
                        <input type="file" name="image" value="{{$students->image}}" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="date" class="form-control" value="{{$students->dayOfBirth}}" name="dayOfBirth">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" name="phoneNumber" value="{{$students->phoneNumber}}">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="{{$students->address}}">
                    </div>
                    <div class="form-group">
                        <label>Sở thích</label>
                        <input type="text" class="form-control" name="hobbies" value="{{$students->hobbies}}">
                    </div>
                    <div class="form-group">
                        <label>Môn học yêu thích</label>
                        <input type="text" class="form-control"
                               name="favouriteSubject" value="{{$students->favouriteSubject}}">
                    </div>
                    <div class="form-group">
                        <label>Món ăn yêu thích</label>
                        <input type="text" class="form-control"
                               name="favouriteDish" value="{{$students->favouriteDish}}">
                    </div>
                    <div class="form-group">
                        <label>Bài hát yêu thích</label>
                        <input type="text" class="form-control"
                               name="favouriteSong" value="{{$students->favouriteSong}}">
                    </div>
                    <div class="form-group">
                        <label>Mô tả bản thân</label>
                        <textarea type="text" class="form-control"
                                  name="description">{{$students->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Họ tên Cha</label>
                        <input type="text" class="form-control" name="nameOfDad" value="{{$students->nameOfDad}}">
                    </div>
                    <div class="form-group">
                        <label>Họ tên Mẹ</label>
                        <input type="text" class="form-control" name="nameOfMom" value="{{$students->nameOfMom}}">
                    </div>
                    <div class="form-group">
                        <label>Quốc tịch</label>
                        <input type="text" class="form-control" name="nationality" value="{{$students->nationality}}">
                    </div>
                    <div class="form-group">
                        <label>Thần tượng</label>
                        <input type="text" class="form-control"
                               name="idol" value="{{$students->idol}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
