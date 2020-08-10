<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>トップ</title>
</head>

<body>
	@foreach($tests as $test)
	<p>{{ $test->id }}</p>
	<a href="{{ route('top.show', ['id' => $test->id]) }}">{{ $test->title }}</a>
	@endforeach
</body>

</html>