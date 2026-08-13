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

        <!-- <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
        </div> -->

        @if($resultado["imc"] != "Aguardando valores" && $resultado["faixa"] != "Aguardando valores")
     

        <form method="post" action="{{route('imc.salvar')}}" enctype="multipart/form-data">
            @csrf
            <input type="hiden" name="imc" value="{{$resultado['imc']}}">
            <input type="hiden" name="faixa" value="{{$resultado['faixa']}}">
            <input type="hiden" name="peso" value="{{$resultado['peso']}}">
            <input type="hiden" name="altura" value="{{$resultado['altura']}}">

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div><br><br>

            <div>
                <label for="formFile" class="form-label">Mande sua foto</label>
                <input class="form-control" type="file" name="image" id="formFile">
            </div>



        </form>
        
        @endif

        @if($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach($error->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif



    </div>
</x-layout>
