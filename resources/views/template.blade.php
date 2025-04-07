<!doctype html>
<html language="pt-br">
<meta charset="utf-8">
<thead>
    <title>mjailton</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/grade.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auxiliar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/componentes/css/style_Componente.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/datatables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/datatables/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/DataTables_boot.css') }}">
</thead>

<body>
    <!--chamando o cabeçalho-->
    @include('cabecalho')

    </div>
    <div class="Conteudo">
        <div class="site rows  mt-3 mb-3">
            
			<!--chamando o menu-->
			@include('menu')

                <!--chamando o conteudo-->
            @yield('conteudo')

            
        </div>

    </div>



    <div class="window load" id="carregar">
        <span class="text-load">Carregando</span>
    </div>

    <!--Fundo Preto-->
    <div id="fundo_preto"></div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/componentes/js/js_modal.js') }}"></script>
    <script src="{{ asset('assets/componentes/js/js_util.js') }}"></script>
    <script src="{{ asset('assets/componentes/js/js_util.js') }}"></script>
    <script src="{{ asset('assets/js/kit-awesome.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('assets/js/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assetsjs/datatables/js/jquery.dataTables.min.js') }}"></script>
</body>

</html>
