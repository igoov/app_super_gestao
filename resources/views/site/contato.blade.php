@extends('site.layouts.basico')

@section('conteudo')
    <div class="topo">
        <div class="logo">
            <div class="logo-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#74c69d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                </svg>
            </div>
            <span class="logo-nome" style="color: var(--cor-texto-escuro); margin-left: 10px; font-weight: bold;">Super Gestão</span>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('site.index') }}">Principal</a></li>
                <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
            </ul>
        </div>
    </div>

    <div class="conteudo-destaque">
        <div class="esquerda">
            <div class="informacoes">
                <div class="badge-online">
                    <div class="badge-dot"></div>
                    Sistema Online
                </div>
                <h1>Entre em contato conosco</h1>
                <p class="hero-desc">
                    Temos a solução ideal para a gestão do seu negócio. Preencha o formulário e fale com um consultor.
                </p>

                <div class="hero-features">
                    <div class="feature-item">
                        <div class="feature-content" style="border-left: 3px solid var(--cor-acento); padding-left: 15px;">
                            <span class="feature-title">Suporte 24/7</span>
                            <span class="feature-desc">Sempre disponíveis para você.</span>
                        </div>
                    </div>
                    <div class="feature-item" style="margin-top: 20px;">
                        <div class="feature-content" style="border-left: 3px solid var(--cor-acento); padding-left: 15px;">
                            <span class="feature-title">Alta Performance</span>
                            <span class="feature-desc">Otimize seus resultados.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Fale Conosco</h1>
                <p>Responderemos o mais breve possível.</p>
                
                <form action="{{ route('site.contato') }}" method="POST">
                    @csrf
                    <input name="nome" type="text" placeholder="Seu Nome">
                    <input name="telefone" type="text" placeholder="Seu Telefone">
                    <input name="email" type="text" placeholder="Seu E-mail">
                    
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
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes Sociais</h2>
            <div class="redes-icones">
                <a href="#">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                </a>
                <a href="#">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                </a>
            </div>
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span><br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <div style="margin-top: 10px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <span>São Paulo, SP</span>
        </div>
    </div>
@endsection