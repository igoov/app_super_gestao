@extends('site.layouts.basico')
@section('conteudo')

{{-- TOPO --}}
<div class="topo">
    <div class="logo">
        <div class="logo-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#74c69d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
            </svg>
        </div>
        <span class="logo-nome">Super Gestão</span>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('site.index') }}">Principal</a></li>
            <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
        </ul>
    </div>
</div>

{{-- HERO --}}
<div class="conteudo-destaque">
    <div class="esquerda">
        <div class="informacoes">
            <div class="badge-online">
                <span class="badge-dot"></span>
                Sistema online
            </div>
            <h1>Sistema Super Gestão</h1>
            <p class="hero-desc">Software para gestão empresarial ideal para sua empresa.</p>
            <div class="hero-features">
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#74c69d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div>
                        <div class="feature-title">Gestão Completa</div>
                        <div class="feature-desc">Controle total do seu negócio</div>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#74c69d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                        </svg>
                    </div>
                    <div>
                        <div class="feature-title">Tempo Real</div>
                        <div class="feature-desc">Dados atualizados ao vivo</div>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#74c69d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"/>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
                        </svg>
                    </div>
                    <div>
                        <div class="feature-title">Na Nuvem</div>
                        <div class="feature-desc">Acesse de qualquer lugar</div>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#74c69d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="feature-title">Seguro</div>
                        <div class="feature-desc">Seus dados protegidos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FORMULÁRIO --}}
    <div class="direita">
        <div class="contato">
            <h1>Contato</h1>
            <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.</p>
            <form action="{{ route('site.contato') }}" method="POST">
                @csrf
                <input type="text" name="nome" placeholder="Nome" class="borda-branca" required>
                <input type="tel" name="telefone" placeholder="Telefone" class="borda-branca">
                <input type="email" name="email" placeholder="E-mail" class="borda-branca" required>
                <select name="motivo" class="borda-branca" required>
                    <option value="">Qual o motivo do contato?</option>
                    <option value="duvida">Dúvida</option>
                    <option value="elogio">Elogio</option>
                    <option value="reclamacao">Reclamação</option>
                </select>
                <textarea name="mensagem" class="borda-branca" rows="4" placeholder="Preencha aqui a sua mensagem" required></textarea>
                <button type="submit">ENVIAR</button>
            </form>
        </div>
    </div>
</div>

{{-- RODAPÉ --}}
<div class="rodape">
    <div class="redes-sociais">
        <div class="rodape-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
            </svg>
        </div>
        <h2>Redes Sociais</h2>
        <span>Siga a gente</span>
        <div class="redes-icones">
            <a href="#" title="Facebook">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                </svg>
            </a>
            <a href="#" title="LinkedIn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                    <rect x="2" y="9" width="4" height="12"/>
                    <circle cx="4" cy="4" r="2"/>
                </svg>
            </a>
            <a href="#" title="YouTube">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/>
                    <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="area-contato">
        <div class="rodape-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6 19.79 19.79 0 0 1 1.61 5a2 2 0 0 1 1.84-2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 10.4a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
        </div>
        <h2>Contato</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localizacao">
        <div class="rodape-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                <circle cx="12" cy="10" r="3"/>
            </svg>
        </div>
        <h2>Localização</h2>
        <span>São Paulo, SP</span>
    </div>
</div>

<script>
    window.addEventListener('scroll', function () {
        const topo = document.querySelector('.topo');
        if (window.scrollY > 50) {
            topo.classList.add('visivel');
        } else {
            topo.classList.remove('visivel');
        }
    });
</script>

@endsection