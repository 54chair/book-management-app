<form method="GET" action="{{route('book.search')}}">
    @csrf
    <input type="search" name="search">
    <input type="submit" value="検索">
</form>

{{-- @php
    dd(session('result'));
@endphp --}}

@if (isset($result))
    @foreach ($result as $element)
        @if (!isset($element["volumeInfo"]["imageLinks"]["thumbnail"]))
            <div>
                <div style="border: 1px solid black; padding: 10px; margin-bottom: 10px;">
                    <p>No Image</p>
                    <p>{{ $element["volumeInfo"]["title"] }}</p>
                    <p>{{ $element["volumeInfo"]["authors"][0] ?? 'Unknown Author' }}</p>
                    <p>{{ $element["volumeInfo"]["publishedDate"] ?? 'Unknown Date' }}</p>
                    <p>{{ $element["volumeInfo"]["description"] ?? 'No Description' }}</p>
                    <a class="button" href="{{ route('book.show', ['id' => $element["volumeInfo"]["industryIdentifiers"][0]["identifier"]]) }}">詳細を見る</a>
                </div>
            </div>

        @else
            <div>
                <div style="border: 1px solid black; padding: 10px; margin-bottom: 10px;">
                    <img src="{{ $element["volumeInfo"]["imageLinks"]["thumbnail"] }}">
                    <p>{{ $element["volumeInfo"]["title"] }}</p>
                    <p>{{ $element["volumeInfo"]["authors"][0] ?? 'Unknown Author' }}</p>
                    <p>{{ $element["volumeInfo"]["publishedDate"] ?? 'Unknown Date' }}</p>
                    <p>{{ $element["volumeInfo"]["description"] ?? 'No Description' }}</p>
                    <a class="button" href="{{ route('book.show', ['id' => $element["volumeInfo"]["industryIdentifiers"][0]["identifier"]]) }}">詳細を見る</a>
                </div>
            </div>
        @endif
    @endforeach
@endif
