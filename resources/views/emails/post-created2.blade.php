<x-mail::message>
{{-- H1 --}}
# Correo por aprobar
{{-- p --}}
<x-mail::panel>
Se ha creado un nuevo post que necesita ser aprobado
</x-mail::panel>
<x-mail::button : url="{{ route('posts.show', $post) }}">
Ver Post
</x-mail::button>
</x-mail::message>
