{{-- Este es un componente de clase --}}
{{-- Se busca que se tenga el menor codigo php posible --}}
{{-- Aqui una clase va a poder ser accedida desde la vista --}}
<div {{ $attributes->merge(['class' => 'border-t border-b px-4 py-3 ' . $class]) }} role="alert">
    {{-- Operador ?? Si el valor de la izquierda es null o undefined, se devuelve el valor de la derecha --}}
    <p class="font-bold">{{ $title ?? 'Info Alert' }}</p>
    <p class="text-sm">{{ $slot }}</p>
</div>
