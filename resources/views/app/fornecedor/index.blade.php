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

    @php $i = 1 @endphp
    @while(isset($fornecedores[$i]))
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
        @php $i++ @endphp
    @endwhile
    
@endisset
