<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/kiemtra/public/update/{{$kiemtra->id}}">
    @method('PATCH')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="id" value="{{ $kiemtra->id }}">
    <p>
        <label for="title">Tên ảnh</label><br>
        <input type="text" name="name" value="{{ $kiemtra->name }}">
    </p>

    <p>
        <label for="email">Giá ảnh</label><br>
        <input type="text" name="price" value="{{ $kiemtra->price }}">
    </p>

    <p>
        <label for="description">Đường dẫn ảnh</label><br>
        <input type="text" name="image" value="{{ $kiemtra->image }}">
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
</form>
</body>
</html>