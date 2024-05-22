@props(['sort', 'field', 'direction'])

@if ($sort == $field)
    @if ($direction == 'asc')
        <i class="fa-solid fa-arrow-up-a-z"></i>
    @else
        <i class="fa-solid fa-arrow-down-a-z"></i>
    @endif
@else
    <i class="fa-solid fa-sort"></i>
@endif
