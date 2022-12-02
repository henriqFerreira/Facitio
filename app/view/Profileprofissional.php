<div class="profile-tabs">
    <div class="wrapper">
        <div class="tab-wrapper">
            <button id="defaultOpen" class="md-btn tab-btn" onclick="openTab(event, 'Servicos')">Meus serviços</button>
            <button class="md-btn tab-btn" onclick="openTab(event, 'Solicitacoes')">Serviços solicitados</button>
            <button class="md-btn tab-btn" onclick="openTab(event, 'MeusDados')">Dados pessoais</button>
        </div>
    </div>
</div>

<div class="wrapper">
    <div id="MeusDados" class="tab-content">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-left">
                <label class="profile-photo-upload" style="--background: url(<?=empty($_SESSION['logged']['Foto']) ? DEFAULT_PHOTO : "data:image/jpg;charset=utf8;base64,".base64_encode($_SESSION['logged']['Foto'])?>);">
                    <input type="file" name="foto" class="fileInput">
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
                                <input class="bg-icon-input gray-input" type="text" name="nome" placeholder="<?=$_SESSION['logged']['Nome']?>">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="sobrenome">Sobrenome</label>
                            <div class="icon-group">
                                <span class="icon icon-input-id"></span>
                                <input class="bg-icon-input gray-input" type="text" name="sobrenome" placeholder="<?=$_SESSION['logged']['Sobrenome']?>">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="email">Email</label>
                            <div class="icon-group">
                                <span class="icon icon-input-arroba"></span>
                                <input class="bg-icon-input gray-input" type="email" name="email" placeholder="<?=$_SESSION['logged']['Email']?>">
                            </div>
                        </div>
                    </div>
                    <div class="inp-column">
                        <div class="inp-group">
                            <label for="datanasc">Data de nascimento</label>
                            <div class="icon-group">
                                <span class="icon icon-input-data"></span>
                                <input class="bg-icon-input gray-input" type="date" name="datanasc" value="<?=$_SESSION['logged']['Datanasc']?>">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="rg">RG</label>
                            <div class="icon-group">
                                <span class="icon icon-input-id"></span>
                                <input class="bg-icon-input gray-input" type="text" name="rg" placeholder="<?=$_SESSION['logged']['Rg']?>">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="contato">Contato</label>
                            <div class="icon-group">
                                <span class="icon icon-input-telefone"></span>
                                <input class="bg-icon-input gray-input" type="tel" name="contato" placeholder="<?=$_SESSION['logged']['Contato']?>">
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
                                <input class="bg-icon-input gray-input" type="text" name="rua" placeholder="<?=$_SESSION['logged']['Rua']?>">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="bairro">Bairro</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="bairro" placeholder="<?=$_SESSION['logged']['Bairro']?>">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="estado">Estado</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="estado" placeholder="<?=$_SESSION['logged']['Estado']?>">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="cep">CEP</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="cep" placeholder="<?=$_SESSION['logged']['Cep']?>">
                            </div>
                        </div>
                    </div>
                    <div class="inp-column">
                        <div class="inp-group">
                            <label for="num">Número</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="number" name="num" placeholder="<?=$_SESSION['logged']['Num']?>">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="cidade">Cidade</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="cidade" placeholder="<?=$_SESSION['logged']['Cidade']?>">
                            </div>
                        </div>
                        <div class="inp-group">
                            <label for="complemento">Complemento</label>
                            <div class="icon-group">
                                <span class="icon icon-input-casa"></span>
                                <input class="bg-icon-input gray-input" type="text" name="complemento" placeholder="<?=$_SESSION['logged']['Complemento']?>">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" name="updateProfile" class="bg-btn filled-blue-btn">Salvar alterações</button>
            </div>
        </form>
    </div>

    <div id="Servicos" class="tab-content">
        <form method="POST" class="add-service">
            <button type="submit" name="newService" class="md-btn filled-blue-btn">+ Adicionar novo serviço</button>
        </form>
        <div class="services-wrapper">
            <?php
            $profile = new \controller\Profile();
            $services = $profile->getProfissionalServices();

            foreach ($services as $service) {
                $foto = empty($service->servico_foto) ? DEFAULT_SERVICE_PHOTO : "data:image/jpg;charset=utf8;base64,".base64_encode($_SESSION['logged']['Foto']);
                echo <<<HTML
                    <div class="card">
                        <div class="card-photo">
                            <img src="{$foto}" alt="Foto do serviço">
                        </div>
                        <div class="card-content">
                            <div class="card-profile">
                                <span class="card-profile-photo" data-image=""></span>
                                <div class="card-title">
                                    <a href="#" class="title-link black-link">{$service->servico_nome}</a>
                                </div>
                            </div>
                            <div class="user-card">
                                <div class="card-item">
                                    <span class="icon icon-dinheiro"></span>
                                    <p>{$service->servico_valor}</p>
                                </div>
                                <div class="card-item">
                                    <span class="icon icon-estrela"></span>
                                    <p>{$service->servico_aval}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                HTML;
            }
            ?>
        </div>
    </div>
</div>