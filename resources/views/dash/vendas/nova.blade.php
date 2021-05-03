@extends('dash.layout.template')

@section('main')
    <section class="mainVendas">
        <div class="container">
            <div class="row my-3">
                <div class="col-12 col-sm-6" style="border-right: 1px solid rgba(0,0,0,.1)">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Fornecedor</th>
                                <th>Preço</th>

                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($preVendaData as $dataPV)
                                <tr style="">
                                    <td>{{ $dataPV->nome }}</td>
                                    <td>{{ $dataPV->forn_nome }}</td>
                                    <td>{{ number_format($dataPV->preco, 2, ',', '.') }}</td>
                                    <td>
                                        <a href="{{ route('pvenda.del', ['id' => $dataPV->id]) }}" class="btn btn-sm rounded-0" style="background-color: indianred; color: #f1f1f1;"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>

                            @endforeach
                            @php
                                $calc = new \App\helpers\Calc();
                                $calc->setdata($preVendaData);
                            @endphp
                            <tr style="background-color: #eee;">
                                <td colspan="2"><b>Total:</b></td>
                                <td>{{ number_format($calc->getFullTotal(), 2, ',', '.') }}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-12 col-sm-6">
                    <h4 class="text-center" style="font-weight: 300">Nova venda</h4>

                    <div class="row mt-3">
                        <div class="col-12">
                            <form method="post" action="{{ route('venda.searchProd') }}">
                                @csrf
                                <fieldset>
                                    <legend style="font-weight: 300">Dados da venda</legend>
                                    <div class="form-group">
                                        <label for="prodName">Produto</label>
                                        <input type="text" name="prodName" class="form-control form-control-sm rounded-0" id="prodName" placeholder="Pesquise pelo nome do produto ou referencia">
                                    </div>
                                </fieldset>
                                <button class="btn btn-sm mt-3 rounded-0" type="submit" style="background-color: darkseagreen; color: #f1f1f1;">Buscar</button>

                            </form>
                            <form method="post" class="mt-3" action="{{ route('venda.finaliza.post') }}">
                                @csrf

                                @if($errors->all())
                                    @if($errors->all()[0] == 'error')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $errors->all()[1] }}
                                        </div>
                                    @else
                                        <div class="alert alert-success" role="alert">
                                            {{ $errors->all()[1] }}
                                        </div>
                                    @endif
                                @endif

                                <fieldset class="mt-3">
                                    <legend style="font-weight: 300">Endereço de entrega</legend>
                                    <input type="hidden" name="total" value="{{ $calc->getFullTotal() }}">
                                    <div class="form-group">
                                        <label for="cep">Cep</label>
                                        <input name="cep" type="text" class="form-control form-control-sm rounded-0" id="cep" placeholder="Informe o cep de entrega">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="ur">Estado / UF</label>
                                        <input name="uf" type="text" class="form-control form-control-sm rounded-0" id="uf" placeholder="Informe o estado">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="city">cidade</label>
                                        <input name="cidade" type="text" class="form-control form-control-sm rounded-0" id="city" placeholder="Informe sua cidade">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="bairro">Bairro</label>
                                        <input name="bairro" type="text" class="form-control form-control-sm rounded-0" id="bairro" placeholder="Informe seu bairro">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="complemento">Complemento</label>
                                        <input name="complemento" type="text" class="form-control form-control-sm rounded-0" id="complemento" placeholder="Informe seu complemento">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="logradouro">Logradouro</label>
                                        <input name="logradouro" type="text" class="form-control form-control-sm rounded-0" id="logradouro" placeholder="Informe seu logradouro">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="numero">Numero</label>
                                        <input name="numero" type="text" class="form-control form-control-sm rounded-0" id="numero" placeholder="Informe o úmero da residencia">
                                    </div>
                                </fieldset>
                                <button type="submit" class="btn btn-sm rounded-0 mt-3" style="background-color: #0078FF; color: #f1f1f1;">Concluir venda</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
