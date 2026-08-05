@vite(['resources/css/btn.css'])

@props([
'nomeBotao' => 'Confirmar',
'cor' => '#28a745'
])

@if($nomeBotao == "Salvar")
    <h4>Atenção ao Salvar</h4>
@else
    <h4>Conteudo Aleatorio</h4>
@endif

<button class="btn-confirmar" style="background-color: {{$cor}}">{{$nomeBotao}}</button>