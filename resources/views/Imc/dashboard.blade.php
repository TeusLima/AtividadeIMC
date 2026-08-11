<x-layout title="Dashboard" nomePage="Dashboard">
    <div class="titulo">
        <h1>Historico de IMC</h1>
    </div>

    <table class="table">

        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Peso</th>
                <th scope="col">Altura</th>
                <th scope="col">Faixa</th>
                <th scope="col">Ações</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
            @foreach($showImc as $imc)
            <tr>
                <th scope="row">{{$imc->id}}</th>
                <td>{{$imc->peso}}</td>
                <td>{{$imc->altura}}</td>
                <td>{{$imc->categoria}}</td>
            </tr>
            @endforeach

        </tbody>

    </table>
</x-layout>