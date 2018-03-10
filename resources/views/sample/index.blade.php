<!DOCTYPE html>
<html>
<head>
<title>Sample</title>
</head>
<body>
@foreach($samples as $sample)
<div>
    <div>{{{ $sample->id }}}</div>
    <div>{{{ $sample->title }}}</div>
    <div>{{{ $sample->body }}}</div>
    <div>{{{ $sample->username }}}</div>
    <div>{{{ $sample->created_at }}}</div>
    <div>{{{ $sample->updated_at }}}</div>
</div>
<hr>
@endforeach
</body>
</html>
