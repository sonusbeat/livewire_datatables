<div class="container my-5">
    <h1 class="text-center m-4">Datatables</h1>

    <div class="row">
        <div class="col-12 col-lg-4">
            <input wire:model.debounce.500ms="search" class="form-control mb-4" type="text" placeholder="Buscar ...">
        </div>

        <div class="col-12 col-lg-4">
            <select wire:model="perPage" name="perPage" id="perPage" class="form-control">
                <option value="2">2 Resultados</option>
                <option value="4">4 Resultados</option>
                <option value="8">8 Resultados</option>
            </select>
        </div>

        <div class="col-12 col-lg-4">
            <button wire:click="deletePosts" type="button" class="btn btn-block btn-danger">Eliminar</button>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>&nbsp;</th>

                <th class="cursor-pointer" wire:click="sortBy('id')" width="100">
                    ID <span class="{{ $sortBy == 'id' && $ascSort ? 'up' : 'down' }}-arrow">&laquo;</span>
                </th>

                <th class="cursor-pointer" wire:click="sortBy('title')">
                    Título
                    <span class="{{ $sortBy == 'title' && $ascSort ? 'up' : 'down' }}-arrow">&laquo;</span>
                </th>

                <th class="cursor-pointer" wire:click="sortBy('content')">
                    Contenido
                    <span class="{{ $sortBy == 'content' && $ascSort ? 'up' : 'down' }}-arrow">&laquo;</span>
                </th>

                <th class="cursor-pointer" wire:click="sortBy('image')">
                    Imagen
                    <span class="{{ $sortBy == 'image' && $ascSort ? 'up' : 'down' }}-arrow">&laquo;</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td class="align-middle">
                    <input wire:model.lazy="selected" type="checkbox" class="checkbox" value="{{ $post->id }}">
                </td>
                <td class="align-middle">{{ $post->id }}</td>
                <td class="align-middle">{{ $post->title }}</td>
                <td class="align-middle">{{ $post->content }}</td>
                <td class="align-middle">
                    <img class="img-fluid" src="{{ asset("images/{$post->image}") }}" alt="{{ $post->title }}" width="200">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <section class="d-flex justify-content-center">
        {{ $posts->links() }}
    </section>
    @if($posts->total())
    <p class="text-center">Mostrando del {{ $posts->firstItem() }} al {{ $posts->lastItem() }} de {{ $posts->total() }} resultados</p>
    @else
    <p class="text-center">{{ $posts->total() }} resultados</p>
    @endif
</div>
