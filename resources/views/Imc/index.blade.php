<x-layout title="IMC">
    <div class="container">

        <form method="post" action="{{route('imc.calculaimc')}}">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">PESO</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="peso" name="peso">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">ALTURA</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="altura" name="altura">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>

            <br><br><br>
        </form>

        <label id="result">RESULTADO: </label><br>
        <label id="result">IMC: {{$resultado["imc"]}} </label><br>
        <label id="result">Faixa: {{$resultado["faixa"]}} </label><br>

        <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
        </div>




    </div>
</x-layout>
