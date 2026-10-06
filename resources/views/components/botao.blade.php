@props(['link', 'titulo' => 'Meu valor padrão'])

<a class="btn btn-xl btn-outline-light" href="{{ $link }}">
    <i class="fas fa-download me-2"></i>
    {{ $titulo }}
</a>