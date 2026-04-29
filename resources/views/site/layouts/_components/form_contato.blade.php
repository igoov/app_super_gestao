<div class="form-contato">
    <form action="{{ route('site.contato') }}" method="POST">
        @csrf
        <input name="nome" type="text" placeholder="Seu Nome">
        <input name="telefone" type="text" placeholder="Seu Telefone">
        <input name="email" type="email" placeholder="Seu E-mail">

        <select name="motivo_contato">
            <option value="">Qual o motivo?</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>

        <textarea name="mensagem" placeholder="Sua mensagem aqui..."></textarea>
        <button type="submit">ENVIAR AGORA</button>
    </form>
</div>
