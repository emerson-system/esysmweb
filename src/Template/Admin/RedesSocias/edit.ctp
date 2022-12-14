<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Rede Social</h2>
    </div>
        <div class="p-2">
            <span class="d-none d-md-block">
                <?= $this->Html->link(__('Listar'), ['controller' => 'RedesSocias', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>

                <?= $this->Html->link(__('Visualizar'), ['controller' => 'RedesSocias', 'action' => 'view', $redesSocia->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'RedesSocias', 'action' => 'delete', $redesSocia->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Relamente deseja apagar a rede social # {0}?', $redesSocia->id)]) ?>
            </span>
            <div class="dropdown d-block d-md-none">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                    <?= $this->Html->link(__('Listar'), ['controller' => 'RedesSocias', 'action' => 'index'], ['class' => 'dropdown-item']) ?>

                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'RedesSocias', 'action' => 'view', $redesSocia->id], ['class' => 'dropdown-item']) ?>

                    <?= $this->Form->postLink(__('Apagar'), ['controller' => 'RedesSocias', 'action' => 'delete', $redesSocia->id], ['class' => 'dropdown-item', 'confirm' => __('Relamente deseja apagar a rede social # {0}?', $redesSocia->id)]) ?>                                    
                </div>
            </div>
        </div>
</div><hr>
<?= $this->Flash->render() ?>

<?= $this->Form->create($redesSocia) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Titulo</label>
        <?= $this->Form->control('titulo', ['class' => 'form-control', 'placeholder' => 'Titulo da rede social', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Link</label>
        <?= $this->Form->control('link', ['class' => 'form-control', 'placeholder' => 'Link da rede social', 'label' => false]) ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Ícone</label>
        <?= $this->Form->control('icone', ['class' => 'form-control', 'placeholder' => 'Ícone da rede social', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Situação</label>
        <?= $this->Form->control('situation_id', ['options' => $situations, 'class' => 'form-control', 'label' => false]) ?> 
    </div> 
</div>

<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
<?= $this->Form->end() ?>
