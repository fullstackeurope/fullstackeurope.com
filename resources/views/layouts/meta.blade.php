@php($title = $edition->pageTitle($pageTitle ?? ''))

<meta itemprop="name" content="{{ $title }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:site" content="@fullstackeu">

<meta name="og:title" content="{{ $title }}">
<meta name="og:url" content="{{ route('home', $edition) }}">
<meta name="og:site_name" content="{{ config('app.name') }}">
<meta name="og:type" content="website">

@if ($description = $edition->meta_description)
    <meta name="description" content="{{ $description }}">
    <meta itemprop="description" content="{{ $description }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="og:description" content="{{ $description }}">
@endif

@if ($image = $image ?? $edition->metaImage())
    <meta name="image" content="{{ $image }}">
    <meta itemprop="image" content="{{ $image }}">
    <meta name="twitter:image" content="{{ $image }}">
    <meta name="og:image" content="{{ $image }}">
    <meta name="image" property="og:image" content="{{ $image }}">
@endif
