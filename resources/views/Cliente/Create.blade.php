@extends('template')
@section('conteudo')
<div class="col-12">
    <div class="base">
        <div class="titulo completo border center-middle justify-content-space-between border-w-2">
            <div class="d-flex center-middle">
                <span>Adicionar novo cadastro</span>
            </div>
            <div class="d-flex center-middle pr-3">
                <a href="lista.html" class="ml-3 text-escuro d-flex center-middle" title="Ir para lista">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                    <small class="d-block text-uppercase ml-1">
                        voltar
                    </small>
                </a>
            </div>
        </div>
        <div class="base mt-3">
            <section class="caixa">
                <div class="base-form">
                    <div class="caixa-form p-3">
                        <form action="" method="">
                            <div class="rows">
                                <div class="col-12 mb-3">
                                    <label class="text-label">Nome</label>
                                    <input name="nome" value="" type="text" placeholder="Insira um nome"
                                        class="form-campo" />
                                </div>
                                <div class="col-2 mb-3">
                                    <label class="text-label">Cep</label>
                                    <input name="cep" value="" type="text" placeholder="Insira seu CEP"
                                        class="form-campo" />
                                </div>
                                <div class="col-8 mb-3">
                                    <label class="text-label">Endereço</label>
                                    <input name="endereco" value="" type="text"
                                        placeholder="Insira seu endereço" class="form-campo" />
                                </div>
                                <div class="col-2 mb-3">
                                    <label class="text-label">Número</label>
                                    <input name="numero" value="" type="text" placeholder="Insira seu CEP"
                                        class="form-campo" />
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label">Complemento</label>
                                    <input name="complemento" value="" type="text"
                                        placeholder="Insira sua cidade" class="form-campo" />
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Cidade</label>
                                    <input name="cidade" value="" type="text" placeholder="Insira sua cidade"
                                        class="form-campo" />
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Bairro</label>
                                    <input name="bairro" value="" type="text" placeholder="Insira seu bairro"
                                        class="form-campo" />
                                </div>

                                <div class="col-1 mb-3">
                                    <label class="text-label">Uf</label>
                                    <input name="uf" value="" type="text" placeholder="Insira seu bairro"
                                        class="form-campo" />
                                </div>

                                <div class="col-3 mb-3">
                                    <label class="text-label">celular</label>
                                    <input name="celular" value="" type="text"
                                        placeholder="Insira seu telefone" class="form-campo" />
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label">sexo</label>
                                    <select name="sexo" class="form-campo">
                                        <option value="M">
                                            Masculino
                                        </option>
                                        <option value="F">
                                            Feminino
                                        </option>
                                    </select>
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label">nascimento</label>
                                    <input name="nascimento" value="" type="date" placeholder="Insira a data"
                                        class="form-campo" />
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">CPF</label>
                                    <input name="cpf" value="" type="text"
                                        placeholder="Insira seu Site" class="form-campo" />
                                </div>
                                <div class="col-8 mb-3">
                                    <label class="text-label">Email</label>
                                    <input name="email" value="" type="text"
                                        placeholder="Insira um email" class="form-campo" />
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="text-label">Observação</label>
                                    <textarea rows="10" name="observacao" class="form-campo"></textarea>
                                </div>
                                <div class="col-12 mb-4 text-center">
                                    <input type="submit" value="Cadastrar" class="btn btn-azul d-block m-auto" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
