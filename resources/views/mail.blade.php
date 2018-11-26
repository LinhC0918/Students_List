<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <b>Bạn đã cập nhật thông tin</b><br>
    <b>id:</b> {{request()->id}}<br>
    <b>Tên học sinh:</b> {{request()->name}}<br>
    <b>Tuổi:</b> {{request()->age}}<br>
    <b>Giới tính:</b> {{request()->gender}}<br>
    <b>Email:</b> {{request()->email}}<br>
    <b>Lớp:</b> {{request()->class}}<br>
    <b>Trường:</b> {{request()->school}}<br>
    <b>Ngày sinh:</b> {{request()->dayOfBirth}}<br>
    <b>Số điện thoại:</b> {{request()->phoneNumber}}<br>
    <b>Địa chỉ:</b> {{request()->address}}<br>
    <b>Sở thích:</b> {{request()->hobbies}}<br>
    <b>Môn học yêu thích:</b> {{request()->favouriteSubject}}<br>
    <b>Món ăn yêu thích:</b> {{request()->favouriteDish}}<br>
    <b>Bài hát yêu thích:</b> {{request()->favouriteSong}}<br>
    <b>Mô tả bản thân:</b> {{request()->description}}<br>
    <b>Họ tên Cha:</b> {{request()->nameOfDad}}<br>
    <b>Họ tên Mẹ:</b> {{request()->nameOfMom}}<br>
    <b>Quốc tịch:</b> {{request()->nationality}}<br>
    <b>Thần tượng:</b> {{request()->idol}}
</body>
</html>


