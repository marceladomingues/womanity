<div class="row form_inicial">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        <form role="form" action="" method="post" class="f1">

            <h3>Cadastro Womanity Ecossistema<br>Organizaçāo</h3>
            <p>Preencha os campos obrigatórios *</p>
            <div class="f1-steps">
                <div class="f1-progress">
                    <div class="f1-progress-line" data-now-value="8" data-number-of-steps="5" style="width: 8%;"></div>
                </div>
                <div class="f1-step step-5 active">
                    <div class="f1-step-icon"><i class="fa fa-address-card-o"></i></div>
                    <p>Dados Pessoais</p>
                </div>
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    <p>Organizaçāo</p>
                </div>   
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-map-marker"></i></div>
                    <p>Endereço</p>
                </div>
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-desktop"></i></div>
                    <p>Redes Sociais</p>
                </div>
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-hand-o-right"></i></div>
                    <p>Indicação</p>
                </div>              
            </div>



        <!-- Formulário: Tipo Organizaçāo -->


          <fieldset>
                <h4>Dados Pessoais Contato 1:</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="f1-last-name" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="text" name="f1-last-name" placeholder="E-mail" value="<?php echo $_SESSION['usuario_email']; ?>" class="f1-last-name form-control" id="f1-last-name">
                    
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="text" name="f1-last-name" placeholder="Telefone" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="text" name="f1-last-name" placeholder="Celular" class="f1-last-name form-control" id="f1-last-name">
                </div>

                 <h4>Dados Pessoais Contato 2:</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="f1-last-name" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="text" name="f1-last-name" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">
                    
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="text" name="f1-last-name" placeholder="Telefone" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="text" name="f1-last-name" placeholder="Celular" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="f1-buttons">
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
          
             <!--Etapa 2 Formulário: Organizaçāo -->

        <fieldset>
                <h5>A sua iniciativa está dentro de uma organização juridicamente constituída?*</h5>
                <h6><em>Se, sim a inserção do CNPJ é opcional xx.xxx.xxxx/xxxx-xx</em></h6>
                <div class="form-group">  
                   <div class="input-group">
                     <span class="input-group-addon">                                   
                    <label class="radio-inline">
                        <input type="radio" aria-label="..." name="organizacao-ong" value="sim" class="form-control-radio">Sim
                     </span>
                          <input type="text" class="form-control" aria-label="...">
                    </label>
                  </div>

                    <label class="radio">
                        <input type="radio" name="organizacao-ong" value="nao" class="form-control-radio"> Não
                    </label>
                </div>

                 <h5>A sua Organizaçāo está localizada na…*</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="organizacao-zona" value="rural" class="form-control-radio"> Zona Rural
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="organizacao-zona" value="urbana" class="form-control-radio"> Zona Urbana
                    </label>
                </div>

                <h5>Nome da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Nome</label>
                    <input type="text" name="organizacao-nome" maxlength="50">
                </div>


                <h5>Sigla da Organizaçāo:</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Sigla</label>
                    <input type="text" name="iorganizacao-sigla" style="text-transform:uppercase">
                </div>

                <h5>Telefone da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Telefone</label>
                    <input type="text" name="organizacao-telefone" placeholder="(xx) xxxxx-xxxx">
                </div>

                <h5>E-mail da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Email</label>
                    <input type="text" name="iniciativa-email">
                </div>

                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>


            <!--Etapa 3 Formulário: Endereço/Organizaçāo -->


            <fieldset>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Região</label>
                    <select id="regiao">
                        <option value="norte">Norte</option>
                        <option value="nordeste">Nordeste</option>
                        <option value="centro-oeste">Centro-Oeste</option>
                        <option value="sul">Sul</option>
                        <option value="sudeste">Sudeste</option>
                    </select> *
                </div>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Estado</label>
                    <select id="estados">
                        <option value=""></option>
                    </select> *
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cidade</label>
                    <select id="cidades"> 
                        <option value=""></option>
                    </select> *
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Bairro</label>
                    <input type="text" name="iniciativa-bairro" placeholder="Bairro...">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-facebook">Rua</label>
                    <input type="text" name="iniciativa-rua" placeholder="Rua/Av...*">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-twitter">Número</label>
                    <input type="text" name="iniciativa-numero" placeholder="Numero...*">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Complemento</label>
                    <input type="text" name="iniciativa-complemento" placeholder="Complemento...*">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cep</label>
                    <input type="text" name="iniciativa-cep" placeholder="CEP...*">
                </div> 

               <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>

            </fieldset>
    
    </form>
</div>
</div>