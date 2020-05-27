  @foreach($categories as $i => $category)
    <small>{{ $category->ancestors->count() ? implode(' > ', $category->ancestors->pluck('category')->toArray()) : 'Top Level' }}</small><hr>
    {{ $category->category }}
@endforeach  
