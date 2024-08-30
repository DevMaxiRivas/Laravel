{{-- Este es un componente anonimo porque no depende de ningun otro tipo de clase --}}

{{-- Obtenemos el tipo de alerta --}}
{{-- @props(['type']) --}}

{{-- Obtenemos el tipo de alerta y si no esta definido, se define el tipo por defecto --}}
@props(['type' => 'info'])
@php
    switch ($type) {
        case 'info':
            $class = 'bg-blue-100 border-blue-500 text-blue-700';
            break;
        case 'danger':
            $class = 'bg-red-100 border-red-500 text-red-700';
            break;
        case 'success':
            $class = 'bg-green-100 border-green-500 text-green-700';
            break;
        case 'warning':
            $class = 'bg-yellow-100 border-yellow-500 text-yellow-700';
            break;
        case 'dark':
            $class = 'bg-grey-100 border-grey-500 text-grey-700';
            break;
        default:
            $class = 'bg-blue-100 border-blue-500 text-blue-700';
            break;
    }
@endphp
{{-- Supongamos que quiero obtener los atributos de la etiqueta x-alert para ello usamos la variable $attributes --}}
{{-- Y supongamos que exista otra clase en la etiqueta para poder concatenar la clase al siguiente ejemplo  --}}
{{-- <div class="border-t border-b px-4 py-3 {{ $class }}" role="alert"> --}}
{{-- Es recomendable hacerlo de la siguiente manera --}}
<div {{ $attributes->merge(['class' => 'border-t border-b px-4 py-3 ' . $class]) }} role="alert">
    {{-- Operador ?? Si el valor de la izquierda es null o undefined, se devuelve el valor de la derecha --}}
    <p class="font-bold">{{ $title ?? 'Info Alert' }}</p>
    <p class="text-sm">{{ $slot }}</p>
</div>
