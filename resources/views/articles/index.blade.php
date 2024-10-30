<x-layout>
    <h1>Index</h1>
    <a href="{{ route('create') }}">Crea Articolo</a>

    @foreach ($articles as $article)
        <div class="col-12">
            <h1>{{ $article->title }}</h1>

            <p>{{ $article->description }}</p> <!-- Mostra la descrizione una sola volta -->

            <div>
                <strong>Categorie:</strong>
                @foreach ($article->categories as $category)
                    <span>{{ $category->name }}</span> <!-- Mostra il nome di ogni categoria associata -->
                @endforeach
            </div>
            <a href="{{ route('show', compact('article')) }}">Dettaglio</a>
            <a href="{{ route('edit', compact('article')) }}">Modifica</a>
            <form action="{{ route('destroy', $article) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-revised-delete">Elimina</button>
            </form>
        </div>
    @endforeach
</x-layout>
