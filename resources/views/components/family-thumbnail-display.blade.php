@php
    // Access the protected 'original' property
    $original = isset($record) ? $record->getAttributes() : null;
    $myThumbnail = $original['my_family_thumbnail'] ?? null;

    // Decode the JSON to get the actual image path
    $thumbnailData = json_decode($myThumbnail, true);
    $thumbnailUrl = $thumbnailData ? Storage::disk('s3')->url(reset($thumbnailData)) : null;

    $defaultImagePath = asset('images/default_file.png');
@endphp

@if ($thumbnailUrl)
    @php
            $extension = pathinfo($thumbnailUrl, PATHINFO_EXTENSION);
    @endphp
    @if (in_array($extension, ['pdf', 'hwp', 'docx', 'doc']))
    <div class="thumbnail-preview">
        <p>가족증명서</p>
        <img src="{{ $defaultImagePath }}" alt="Default Thumbnail" style="max-height: 100px">
        <a href="{{ $thumbnailUrl }}" download>  이미지 보기 및 다운로드
        </a>
    </div>
    @else
    <div class="thumbnail-preview">
        <p>가족증명서</p>
        <img src="{{ $thumbnailUrl }}" alt="Thumbnail" style="max-height: 250px; max-width: 100%;">
        <a href="{{ $thumbnailUrl }}" download>  이미지 보기 및 다운로드
        </a>
    </div>
    @endif
@else
    <p>이미지가 없음</p>
@endif