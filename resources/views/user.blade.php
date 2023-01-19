<h1>benvenuto {{ $user['name'] . ' ' . $user['surname'] }}</h1>


 <h2>i tuoi hobby sono: </h2> 

<ul>
    @foreach ($user['hobby'] as $elemento)
    <li>
        {{$elemento}}
    </li>
    @endforeach
</ul>
