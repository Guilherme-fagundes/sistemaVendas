@extends('dash.layout.template')

@section('main')
    <section class="mainRelatorios">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-sm-6">
                    <h4><i class="fas fa-filter"></i>Relatório de vendas</h4>

                </div>

            </div>

            <div class="row">
                <div class="col-12">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Data da venda</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Cidade</th>
                            <th>Bairro</th>
                            <th>complemento</th>
                            <th>Logradouro</th>
                            <th>Número</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($readVendas as $relatorio)
                                <tr>
                                    <td>{{ $relatorio->Item }}</td>
                                    <td>{{ date('d-m-Y H:i', strtotime($relatorio->created_at)) }}</td>
                                    <td>{{ number_format($relatorio->total, 2, ',', '.') }}</td>
                                    <td>{{ $relatorio->uf }}</td>
                                    <td>{{ $relatorio->cidade }}</td>
                                    <td>{{ $relatorio->bairro }}</td>
                                    <td>{{ $relatorio->complemento }}</td>
                                    <td>{{ $relatorio->logradouro }}</td>
                                    <td>{{ $relatorio->numero }}</td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>
@endsection
