<div class="profile-tabs">
    <div class="wrapper">
        <div class="tab-wrapper">
            <button id="defaultOpen" class="md-btn tab-btn" onclick="openTab(event, 'MeusDados')">Meus dados</button>
            <button class="md-btn tab-btn" onclick="openTab(event, 'Servicos')">Serviços</button>
            <button class="md-btn tab-btn" onclick="openTab(event, 'Solicitacoes')">Solicitações</button>
        </div>
    </div>
</div>

<div class="wrapper">
    <div id="MeusDados" class="tab-content">
        <form>
            <div class="form-left">
                <label class="profile-photo-upload" style="--background: url(<?=FILE_INPUT_PLACEHOLDER?>);">
                    <input type="file" name="profileImage" class="fileInput">
                </label>
            </div>
            <div class="form-right">
                <h2>Meus dados pessoais</h2>
                <div class="form-section">
                    <div class="inp-column">
                        <div class="inp-group">
                            <label for="nome">Nome</label>
                            <div class="icon-group">
                                <span class="icon icon-input-id"></span>
                                <input class="bg-icon-input gray-input" type="text" name="nome" placeholder="Seu nome aqui...">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="sobrenome">Sobrenome</label>
                            <div class="icon-group">
                                <span class="icon icon-input-id"></span>
                                <input class="bg-icon-input gray-input" type="text" name="sobrenome" placeholder="Seu sobrenome aqui...">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="email">Email</label>
                            <div class="icon-group">
                                <span class="icon icon-input-arroba"></span>
                                <input class="bg-icon-input gray-input" type="email" name="email" placeholder="email@exemplo.com">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="datanasc">Data de nascimento</label>
                            <div class="icon-group">
                                <span class="icon icon-input-data"></span>
                                <input class="bg-icon-input gray-input" type="date" name="datanasc">
                            </div>
                        </div>
                    </div>
                    <div class="inp-column">
                        <div class="inp-group">
                            <label for="cpf">CPF</label>
                            <div class="icon-group">
                                <span class="icon icon-input-id"></span>
                                <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="rg">RG</label>
                            <div class="icon-group">
                                <span class="icon icon-input-id"></span>
                                <input class="bg-icon-input gray-input" type="text" name="rg" placeholder="__.___.___-__">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="contato">Contato</label>
                            <div class="icon-group">
                                <span class="icon icon-input-telefone"></span>
                                <input class="bg-icon-input gray-input" type="tel" name="contato" placeholder="(__) __ _____-____">
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Meu endereço</h2>
                <div class="form-section">
                    <div class="inp-column">
                        <div class="inp-group">
                            <label for="rua">Rua</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="rua" placeholder="Ex: Rua do Jucá">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="bairro">Bairro</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="bairro" placeholder="Ex: Lagoa Azul">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="estado">Estado</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="estado" placeholder="Ex: RN">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="cep">CEP</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="cep" placeholder="Ex: 59135-210">
                            </div>
                        </div>
                    </div>
                    <div class="inp-column">
                        <div class="inp-group">
                            <label for="num">Número</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="number" name="num" placeholder="Ex: 432">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="cidade">Cidade</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="cidade" placeholder="Ex: Natal">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="complemento">Complemento</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="complemento" placeholder="Ex: Casa/Prédio/Condomínio">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="bg-btn filled-blue-btn">Salvar alterações</button>
            </div>
        </form>
    </div>
    
    <div id="Servicos" class="tab-content">
        <h1>Serviços</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis.</p>
    </div>
    
    <div id="Solicitacoes" class="tab-content">
        <h1>Solicitações</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis.</p>
    </div>
</div>