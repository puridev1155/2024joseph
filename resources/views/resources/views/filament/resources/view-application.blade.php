@extends('filament::resources.pages.view-record')

@section('content')
    @parent

    <div class="mt-8">
        <h2 class="text-xl font-semibold">첨부 파일</h2>
        <ul>
            @foreach (json_decode($record->my_images, true) as $file)
                <li>
                    <a href="{{ Storage::disk('s3')->url($file) }}" target="_blank" class="text-blue-500 underline">
                        다운로드
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection