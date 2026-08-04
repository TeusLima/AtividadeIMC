@vite(['resources/css/btn.css'])

@props([
'nomeBotao' => 'Confirmar',
'cor' => '#28a745'
])

<button class="btn-confirmar" style="background-color: {{$cor}}">{{$nomeBotao}}</button>