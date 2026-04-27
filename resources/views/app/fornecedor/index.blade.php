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

    @for($i = 1; isset($fornecedores[$i]); $i++)

        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? ''}}
        <!--
            $variavel testada nao estiver definida (isset)
            ou
            $variavel testada possuir o valor null
        -->
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? ''}}
        <hr>
    @endfor
@endisset
