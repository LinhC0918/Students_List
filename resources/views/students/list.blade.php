@extends('home')
@section('title', 'Danh sách học sinh')

@section('content')
    <div class="col-12">
        @if (Session::has('success'))
            <p class="text-success">
                <i class="fa fa-check" aria-hidden="true"></i>
                {{ Session::get('success') }}
            </p>
        @endif
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên học sinh</th>
            <th scope="col">Tuổi</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Email</th>
            <th scope="col">Lớp</th>
            <th scope="col">Trường</th>
            <th scope="col">Ảnh đại diện</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Sở thích</th>
            <th scope="col">Môn học yêu thích</th>
            <th scope="col">Món ăn yêu thích</th>
            <th scope="col">Bài hát yêu thích</th>
            <th scope="col">Mô tả bản thân</th>
            <th scope="col">Họ tên Cha</th>
            <th scope="col">Họ tên Mẹ</th>
            <th scope="col">Quốc tịch</th>
            <th scope="col">Thần tượng</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($students) == 0)
            <tr>
                <td colspan="7" class="text-center">Không có dữ liệu</td>
            </tr>
        @else
            @foreach($students as $key => $student)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->school }}</td>
                    <td>
                        @if($student->image)
                            <img src="{{ 'upload/images/' . $student->image }}" alt=""
                                 style="width: 200px; height: 200px">
                        @else
                            {{'Chưa có ảnh'}}
                        @endif
                    </td>
                    <td>{{ $student->dayOfBirth }}</td>
                    <td>{{ $student->phoneNumber }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->hobbies }}</td>
                    <td>{{ $student->favouriteSubject }}</td>
                    <td>{{ $student->favouriteDish }}</td>
                    <td>{{ $student->favouriteSong }}</td>
                    <td>{{ $student->description }}</td>
                    <td>{{ $student->nameOfDad }}</td>
                    <td>{{ $student->nameOfMom }}</td>
                    <td>{{ $student->nationality }}</td>
                    <td>{{ $student->idol }}</td>
                    <td><a href="{{ route('students.edit', $student->id) }}">sửa</a></td>
                    <td><a href="{{ route('students.destroy', $student->id) }}" class="text-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-primary"  href="{{ route('students.create') }}">Thêm mới</a>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('students.export') }}">Export</a>
            </div>
        </div>
    </div>


@endsection