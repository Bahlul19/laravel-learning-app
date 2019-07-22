<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>


@foreach($names as $name)

<ul> 

<li>
    <a href="/tasks/ {{ $name->id }}">
    
 {{ $name->name }}
 
  </li>

  </a>

</ul>

@endforeach


</body>
</html>