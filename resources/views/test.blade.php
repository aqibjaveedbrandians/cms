@include('headers')

<h1>Test Template</h1>

@php
 $name = 'Jennifer';
 $fruits = array('Mango', 'Apple', 'Banana', 'Pineapple');
 $age = 17;
@endphp

<h2>{{$name}}</h2>

@foreach($fruits as $fruit)
<ul>
    <li>{{$fruit}}</li>
</ul>
@endforeach
<br/>
@for($i=1; $i<=10; $i++)
{{$i}}<br/>
@endfor

@if(count($fruits)==1)
    Single Fruit
@elseif(count($fruits)>1)
    More than one Fruit
@else
    No Fruit
@endif
<br/>
{{ $age >=18 ? 'You are adult' : 'You are not adult' }}