<h3>Fornecedor</h3>

{{--Fica o comentario que sera descartadoo peo interpretador do blade--}}

    @php
        /*
        if  (empty($variavel)) {} //retornar true se a variavel estiver vazia
        - ''
        - 0
        - 0.0
        -'0'
        -Null
        -false
        -array()
        -$var
        */
    @endphp  

@isset($fornecedores)

    @foreach($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        @php $fornecedor['nome'] = 'Outro nome para o fornecedor' @endphp 
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? ''}}
        <!--
            $variavel testada nao estiver definida (isset)
            ou
            $variavel testada possuir o valor null
        -->
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        <hr>
    @endforeach
@endisset
