<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Perfil</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Editar'), ['controller' => 'Users', 'action' => 'editPerfil'], ['class' => 'btn btn-outline-warning btn-sm']) ?>

            <?= $this->Html->link(__('Editar Senha'), ['controller' => 'Users', 'action' => 'editSenhaPerfil'], ['class' => 'btn btn-outline-danger btn-sm']) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                <?= $this->Html->link(__('Editar'), ['controller' => 'Users', 'action' => 'editSenhaPerfil'], ['class' => 'dropdown-item']) ?>        

                <?= $this->Html->link(__('Editar Senha'), ['controller' => 'Users', 'action' => 'editSenha'], ['class' => 'dropdown-item']) ?>                         
            </div>
        </div>
    </div>
</div><hr>
<?= $this->Flash->render() ?>
<dl class="row">

    <dt class="col-sm-3">Foto</dt>
    <dd class="col-sm-9">
        <div class="img-perfil">
            <?php if(!empty($user->imagem)){ ?>
                <?= $this->Html->image('../files/user/'.$user->id.'/'.$user->imagem, ['class' => 'rounded-circle', 'width' => '120', 'height' => '120']) ?>&nbsp;
                
                <div class="edit">
                    <?= $this->Html->link(
                        '<i class="fas fa-pencil-alt"></i>',
                        [
                            'controller' => 'Users',
                            'action' => 'alterarFotoPerfil'
                        ],
                        [
                            'escape'=> false
                        ]
                    ); ?>
                </div>

            <?php } else { ?>
                <?= $this->Html->image('../files/user/icone_usuario.png', ['class' => 'rounded-circle', 'width' => '120', 'height' => '120']) ?>&nbsp;

                <div class="edit">
                    <?= $this->Html->link(
                        '<i class="fas fa-pencil-alt"></i>',
                        [
                            'controller' => 'Users',
                            'action' => 'alterarFotoPerfil'
                        ],
                        [
                            'escape'=> false
                        ]
                    ); ?>
                </div>
            <?php } ?>
        </div>        
    </dd>

    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $user->id ?></dd>

    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= $user->name ?></dd>

    <dt class="col-sm-3">E-mail</dt>
    <dd class="col-sm-9"><?= $user->email ?></dd>

    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9"><?= $user->username ?></dd>

</dl>
