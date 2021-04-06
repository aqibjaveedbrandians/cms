<div>
    <h1>This Is Header Component</h1>
    <h3>Hello {{$name}}</h3>
    <h3>Fruits Are:</h3>
    <ul>
        @foreach($fruits as $fruit)
        <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>