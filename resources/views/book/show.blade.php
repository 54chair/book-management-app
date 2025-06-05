@php
    dd(session('element'));
@endphp

@if (!isset($element["volumeInfo"]["imageLinks"]["thumbnail"]))
    <div>
        <div style="border: 1px solid black; padding: 10px; margin-bottom: 10px;">
            <p>No Image</p>
            <p>{{ $element["volumeInfo"]["title"] }}</p>
            <p>{{ $element["volumeInfo"]["authors"][0] ?? 'Unknown Author' }}</p>
            <p>{{ $element["volumeInfo"]["publishedDate"] ?? 'Unknown Date' }}</p>
            <p>{{ $element["volumeInfo"]["description"] ?? 'No Description' }}</p>
            <a class="button" href="{{ route('book.show', ['id' => $element["volumeInfo"]["industryIdentifiers"][1]["identifier"]]) }}">詳細を見る</a>
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
        </div>
    </div>
@endif
