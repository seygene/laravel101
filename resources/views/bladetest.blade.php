{{-- comment --}}
<h1>{{ $greeting or 'Hello' }} {{ $name or 'tt' }} </h1>

@if($name == 'admin')
    <p>I am admin. {{ count($item) }}</p>
@else
    <p>I am nothing</p>
@endif

<ul>
    @foreach($item as $i)
        <li>{{ $i }}</li>
    @endforeach
</ul>

<ul>
    @forelse($drink as $i)
        <li>{{ $i }}</li>
    @empty
        <li>There is nothing!!!</li>
    @endforelse
</ul>

