<x-layout>
    <h1>Edit</h1>
    <form action="{{ route('update', compact('article')) }}" method="POST" enctype="multipart/form-data" class="p-3">
        @method('PUT')
        @csrf
        <div class="col-12 d-flex flex-column">
            <label for="title" class="form-label ">Titolo:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $article->title }}">
        </div>
        <div class="col-12 d-flex flex-column">
            <label for="description" class="form-label ">Descrizione:</label>
            <textarea type="text" id="description" name="description" class="form-control">{{ $article->description }}"</textarea>
        </div>
        <div class="col-12 d-flex flex-column mt-2">
            <div class="col-12">
                <label class="form-check-label" for="">Categorie:</label>
            </div>
            <div class="col-12">
                @foreach ($categories as $category)
                    <div class="form-check form-check-inline">
                        <label class="form-check-label"
                            for="{{ $category['name'] }}-azione">{{ $category['name'] }}</label>
                        <input class="form-check-input" type="checkbox" id="{{ $category['name'] }}-azione"
                            name="categories[]" value="{{ $category['id'] }}"
                            {{ isset($article) && $article->categories->contains($category->id) ? 'checked' : '' }}>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-12 d-flex flex-column mt-3 mb-0">
            <label class="form-label" for="img">Immagine di copertina</label>
            <input type="file" id="img" class="form-control" name="img">
        </div>
        <div class="row ">
            <div class="col-12 d-flex justify-content-between">
                <div class="col-6 mt-4 d-flex justify-content-end bu">
                    <button class="button-hero" type="submit " id="insertButton">Modifica</button>
                </div>
            </div>
        </div>
    </form>
</x-layout>
