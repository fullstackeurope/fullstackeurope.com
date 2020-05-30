@php($title = $edition->pageTitle($pageTitle ?? ''))
@php($description = $edition->meta_description)
@php($image = asset('storage/' . $edition->meta_image))

<meta name="description" content="{{ $description }}">
<meta name="image" content="{{ $image }}">

<meta itemprop="name" content="{{ $title }}">
<meta itemprop="description" content="{{ $description }}">
<meta itemprop="image" content="{{ $image }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:site" content="@fullstackeu">
<meta name="twitter:image" content="{{ $image }}">

<meta name="og:title" content="{{ $title }}">
<meta name="og:description" content="{{ $description }}">
<meta name="og:image" content="{{ $image }}">
<meta name="og:url" content="{{ route('home', $edition) }}">
<meta name="og:site_name" content="Full Stack Europe">
<meta name="og:type" content="website">
