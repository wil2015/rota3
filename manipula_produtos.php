
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Cadastrar Produto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button  data-toggle="modal" data-target="#add_new_record_modal" class="btn btn-info" >Adicionar Produtos</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Produtos:</h3>

            <div id="registros_sera" class="records_content"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" > 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Novo Produto</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="produto">Produto</label>
                    <input type="text" id="produto" placeholder="Nome do Produto" class="form-control"  required  />
              
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" id="descricao" placeholder="Descrição" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="valor">Valor/R$</label>
                    <input type="text" id="valor" placeholder="Valor" class="form-control"/>
                </div>
                
                 <div class="form-group">
                    <label for="peso">Peso/Kg</label>
                    <input type="text" id="peso" placeholder="Peso" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" id="quantidade" placeholder="Quantidade" class="form-control"/>
                </div>
                  <div class="form-group">
                    <label for="categoria" >Categoria do Produto </label>
                  <select class="form-control" id="a1_title">
                     <option>Inicial</option>
                    </select>
                </div>
                
				
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancela</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Adiciona Produto</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Atualiza</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_produto">Produto</label>
                    <input type="text" id="update_produto" placeholder="Produto" class="form-control" disabled="disabled"/>
                </div>

                <div class="form-group">
                    <label for="update_descricao">Descrição</label>
                    <input type="text" id="update_descricao" placeholder="Desrição" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_valor">Valor/R$</label>
                    <input type="text" id="update_valor" placeholder="Valor" class="form-control"/>
                </div>
                
                <div class="form-group">
                    <label for="update_peso">Peso/Kg</label>
                    <input type="text" id="update_peso" placeholder="Peso" class="form-control"/>
                </div>
                 <div class="form-group">
                    <label for="update_quantidade">Quantidade</label>
                    <input type="text" id="update_quantidade" placeholder="Quantidade" class="form-control"/>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Salva</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>


