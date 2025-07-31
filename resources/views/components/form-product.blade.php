<div class="container">
    <div class="row text-center mt-5">
        <h1>{{ $title }}</h1>
    </div>

    <form method="POST" action="{{ $route }}" class="row justify-content-center">
        @csrf
        @method('PUT')
        <div class="col-3">
            <div class="row">

                <label for="imgUrl">Url image :</label>
                <input
                    class="form-control {{ $errors->has('img_url') ? 'is-invalid' : (old('img_url') ? 'is-valid' : '')}}"
                    type="text" name="img_url" value="{{ old('img_url') ?? $product->img_url }}" />
                @error('img_url')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mt-2">
                <img src="{{ old('img_url') ?? $product->img_url }}" class="img-fluid" alt="image du livre" />
            </div>
        </div>
        <div class="col-9">

            <label for="title">Titre :</label>
            <input class="form-control {{ $errors->has('title') ? 'is-invalid' : (old('title') ? 'is-valid' : '')}}"
                id="title" type="text" name="title" value="{{ old('title') ?? $product->title }}" />
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror


            <label for="author">Auteur :</label>
            <input class="form-control {{ $errors->has('author') ? 'is-invalid' : (old('author') ? 'is-valid' : '')}}"
                id="author" type="text" name="author" value="{{ old('author') ?? $product->author }}" />
            @error('author')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="tag">Tag(s) :</label>
            @foreach($product->tags as $tag)
                    <span class="badge bg-primary">{{ $tag->name }}</span>
            @endforeach
            <select class="form-select {{ $errors->has('tag_id') ? 'is-invalid' : (old('tag_id') ? 'is-valid' : '') }}"
                id="tag" name="tag_id[]" multiple aria-label="Multiple select example">
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">
                    {{ $tag->name }}
                </option>
                @endforeach
            </select>
            @error('tag')
            <div class="text-danger">{{ $message }}</div>
            @enderror


            <label for="description">Description :</label>
            <textarea
                class="form-control {{ $errors->has('description') ? 'is-invalid' : (old('description') ? 'is-valid' : '')}}"
                id="description" name="description" cols="100"
                rows="6">{{ old('description') ?? $product->description}}</textarea>

            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="row">
                <div class="col-6">

                    <label for="price">Prix :</label>
                    <input
                        class="form-control {{ $errors->has('price') ? 'is-invalid' : (old('price') ? 'is-valid' : '')}}"
                        id="price" type="text" name="price" value="{{ old('price') ?? $product->price }}" />
                    @error('price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">

                    <label for="stock">Stock :</label>
                    <input
                        class="form-control {{ $errors->has('stock') ? 'is-invalid' : (old('stock') ? 'is-valid' : '')}}"
                        id="stock" type="number" name="stock" value="{{ old('stock') ?? $product->stock }}" />
                    @error('stock')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-evenly mt-3">
                <button type="submit" class="col-4 btn btn-success">{{ $textButton}}</button>
                <button type="reset" class="col-4 btn btn-warning">Reset</button>
            </div>
        </div>
    </form>

</div>