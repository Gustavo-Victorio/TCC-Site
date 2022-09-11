{{-- extender o arquivo de layout app.blade.php que esta na pasta resources/layout --}}
@extends('layout.app')
@extends('rodape.app')

@section('conteudo')
@extends('conteudo2')
    {{--aqui vai o texto  que eu pretendo modificar --}}
    <h1>CATALOGAÇÃO DE ARTISTAS DA REGIÃO DE JARDIM</h1>
@endsection
