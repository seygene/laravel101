<p> 1. Hi </p>
@extends('layouts.master')

<p> 2. Welcome </p>

@section('content')
    <p>This is 'content' section in the child view.</p>
    @include('partials.footer')
    <p>This is 'content' section in the child view.</p>
@endsection

@section('script')
    <script>
        alert("저는 child view의 script입니다.");
    </script>
@endsection
<p> 3. Bye </p>
