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
                        <tr>
                            <th>Item</th>
                            <th>Data da venda</th>
                            <th>total</th>
                        </tr>
                    </table>
                </div>

            </div>

        </div>
    </section>
@endsection
