<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>


@foreach($names as $name)

<ul> 

<li> {{ $name }} </li>

</ul>

@endforeach


</body>
</html>