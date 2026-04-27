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

    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? ''}}
    <!--
        $variavel testada nao estiver definida (isset)
        ou
        $variavel testada possuir o valor null
    -->
    <br>
    Telefone: ({{ $fornecedores[1]['ddd'] ?? ''}}) {{ $fornecedores[1]['telefone'] ?? ''}}
    @switch($fornecedores[1]['ddd'])
        @case ('11')
            Sao Paulo - SP
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @case ('89')
            Picos - PI
            @break
        @default
            Estado nao indentificado
    @endswitch

@endisset