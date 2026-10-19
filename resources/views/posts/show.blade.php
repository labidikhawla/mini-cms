<x-layout>
    <x-slot:title>{{ $post->title }} - Mini-CMS</x-slot:title>

    <x-page-header :title="$post->title" />

    @if ($post->excerpt)
        <p class="text-lg text-gray-600 mb-6">{{ $post->excerpt }}</p>
    @endif

    <div class="text-gray-800 leading-relaxed whitespace-pre-line">
        {{ $post->body }}
    </div>

    <div class="mt-8 flex flex-wrap items-start gap-4">
        <a href="{{ route('posts.edit', $post) }}" class="rounded-md border border-indigo-600 px-4 py-2 text-sm font-medium text-indigo-600 hover:bg-indigo-50">Modifier</a>

        <details>
            <summary class="cursor-pointer rounded-md border border-red-600 px-4 py-2 text-sm font-medium text-red-700 hover:bg-red-50">Supprimer</summary>

            <form method="POST" action="{{ route('posts.destroy', $post) }}" class="mt-3 rounded-md border border-red-200 bg-red-50 p-4">
                @csrf
                @method('DELETE')

                <p class="mb-3 text-sm text-red-900">Cette action est définitive : l'article sera effacé de la base.</p>
                <button type="submit" class="rounded-md bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-red-700">Confirmer la suppression</button>
            </form>
        </details>
    </div>
</x-layout>