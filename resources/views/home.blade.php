<!--usa o templete-->
@extends('template')

@section('conteudo')

<div class="col-12">
    <div class="base">
        <div class="rows">
            <div class="col-12">
                <div class="">
                    <div class="rows">
                        <div class="col-4 d-flex mb-3">
                            <div class="caixa width-100" style="background:#6100FF">
                                <div class="cx-user p-3 py-5 d-flex center-middle justify-content-center">
                                    <div class="text-center">
                                        <h1 class="h1 mb-0 fw-300">5000</h1>
                                        <div class="grupo-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="#0098ac"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                                class="w-6 h-6 cloud">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="#0098ac"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                                class="w-6 h-6 chec">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>

                                        <span class="d-block">Cadastros completos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex mb-3">
                            <div class="caixa width-100" style="background:#0033FE">
                                <div class="cx-user p-3 py-5 d-flex center-middle justify-content-center">
                                    <div class="text-center">
                                        <h1 class="h1 mb-0 fw-300">100</h1>
                                        <div class="grupo-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#0098ac"
                                                class="w-6 h-6" style="height:1.8rem">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </div>
                                        <span class="d-block">Cadastros alterados</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex mb-3">
                            <div class="caixa width-100" style="background:#018B94">
                                <div class="cx-user p-3 py-5 d-flex center-middle justify-content-center">
                                    <div class="text-center">
                                        <h1 class="h1 mb-0 fw-300">50</h1>
                                        <div class="grupo-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#0098ac"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <span class="d-block">Cadastros excluídos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex">
                <div class="caixa p-3 width-100">
                    <div class="progresso">
                        <div class="d-block text-center">
                            <span class="d-block mb-1 text-uppercase">Cadastrados</span>
                        </div>
                        <div id="progress">
                            <div id="progbar"><span>0%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rows mt-3">
            <div class="col-12">
                <div class="titulo border center-middle  border-w-2">
                    <span class="d-block  text-center">Últimos contatos cadastrados</span>
                </div>
            </div>
            <div class="col-12">
                <div class="caixa width-100 p-2 pt-0 radius-tx table-responsive">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0"
                        class="tabela">
                        <thead>
                            <tr>
                                <th align="center">Id</th>
                                <th align="center">Nome</th>
                                <th align="center">Email</th>
                                <th align="center">Telefone</th>
                                <th align="center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">0001</td>
                                <td align="center">Manoel Jailton Nascimento</td>
                                <td align="center">mjailton@gmail.com</td>
                                <td align="center">9899924667</td>
                                <td align="center">
                                    <a href="cadastro.html"
                                        class="text-verde fas fa-eye d-inline-block mx-1"
                                        title="Visualizar"></a>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">0002</td>
                                <td align="center">Manoel Jailton Nascimento</td>
                                <td align="center">mjailton@gmail.com</td>
                                <td align="center">9899924667</td>
                                <td align="center">
                                    <a href="cadastro.html"
                                        class="text-verde fas fa-eye d-inline-block mx-1"
                                        title="Visualizar"></a>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">0003</td>
                                <td align="center">Manoel Jailton Nascimento</td>
                                <td align="center">mjailton@gmail.com</td>
                                <td align="center">9899924667</td>
                                <td align="center">
                                    <a href="cadastro.html"
                                        class="text-verde fas fa-eye d-inline-block mx-1"
                                        title="Visualizar"></a>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">0004</td>
                                <td align="center">Manoel Jailton Nascimento</td>
                                <td align="center">mjailton@gmail.com</td>
                                <td align="center">9899924667</td>
                                <td align="center">
                                    <a href="cadastro.html"
                                        class="text-verde fas fa-eye d-inline-block mx-1"
                                        title="Visualizar"></a>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">0005</td>
                                <td align="center">Manoel Jailton Nascimento</td>
                                <td align="center">mjailton@gmail.com</td>
                                <td align="center">9899924667</td>
                                <td align="center">
                                    <a href="cadastro.html"
                                        class="text-verde fas fa-eye d-inline-block mx-1"
                                        title="Visualizar"></a>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">0006</td>
                                <td align="center">Manoel Jailton Nascimento</td>
                                <td align="center">mjailton@gmail.com</td>
                                <td align="center">9899924667</td>
                                <td align="center">
                                    <a href="cadastro.html"
                                        class="text-verde fas fa-eye d-inline-block mx-1"
                                        title="Visualizar"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection