@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Produtos - Listar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('produto.create')}}">Novo</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 20px;">

                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>ID</th>

                            <th>Comprimento</th>
                            <th>Altura</th>
                            <th>Largura</th>

                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                
                                <th>{{ $produto->comprimento ?? '' }}</th>
                                <th>{{ $produto->altura ?? '' }}</th>
                                <th>{{ $produto->largura ?? '' }}</th>


                                <td><a href="{{ route('produto.show', ['produto' => $produto->id ]) }}">Visualizar</a></td>

                                <td>
                                    <form id="form_{{$produto->id}}" method="POST" action="{{ route('produto.destroy', ['produto' => $produto->id ]) }}">
                                        @method("DELETE")
                                        @csrf
                                        <a href="#" onclick="document.getElementById('form_{{$produto->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                                
                                <td><a href="{{ route('produto.edit', ['produto' => $produto->id ]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $produtos->appends($request)->links() }}
                
            </div>
        </div>

    </div>

@endsection
