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
                                <th>Preço</th>
                                <th>Fornecedor</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="col-12 col-sm-6">
                    <h4 class="text-center" style="font-weight: 300">Nova venda</h4>

                    <div class="row mt-3">
                        <div class="col-12">
                            <form method="post" action="">
                                <fieldset>
                                    <legend style="font-weight: 300">Dados da venda</legend>
                                    <div class="form-group">
                                        <label for="prodName">Produto</label>
                                        <input type="email" class="form-control form-control-sm" id="prodName" placeholder="Pesquise pelo nome do produto">
                                    </div>
                                </fieldset>

                            </form>
                            <form method="post" action="">
                                <fieldset class="mt-3">
                                    <legend style="font-weight: 300">Endereço de entrega</legend>
                                    <div class="form-group">
                                        <label for="cep">Cep</label>
                                        <input type="email" class="form-control form-control-sm" id="cep" placeholder="Informe o cep de entrega">
                                    </div>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
