<?php if( $params['Tipo']==='Bloco'){ ?>
    <div class="widget<?php if($params['conteudo_tipo']==='abas'){ ?> tabbable<?php } ?> <?php echo TEMA_COLOR; ?>"<?php echo $params['div_ext']; ?>>
        <div class="widget-title">
            <h4<?php echo $params['titulo_ext']; ?>><?php echo $params['titulo']; ?></h4>
            <?php if(isset($params['Id'])){ ?>
                <span class="tools">
                    <a id="<?php echo $params['Id']; ?>_max" class="glyphicon-chevron-<?php if(isset($params['opc_fechada']) && $params['opc_fechada']===true) echo 'up'; else echo 'down'; ?>" href="javascript:;"></a>
                    <!--<a class="glyphicon-remove" href="javascript:;"></a>-->
                </span>
                <?php 
            }
            /*BOTAO EXTRA*/
            if($params['btn_extra']!==false){ ?>
                <?php if(is_array($params['btn_extra'])){ ?>
                    <div class="update-btn">
                        <a class="btn btn-default lajax" href="<?php echo $params['btn_extra']['link']; ?>" class="lajax" acao=""><i class="glyphicon-<?php echo $params['btn_extra']['icon']; ?>"></i> <?php echo $params['btn_extra']['nome']; ?></a>
                    </div>
                <?php }else{ ?>
                    <div class="update-btn">
                        <a class="btn btn-default" href="#" onClick="<?php echo $params['btn_extra']; ?>" class="lajax" acao=""><i class="glyphicon-repeat"></i> Salvar</a>
                    </div>
                <?php }
            } ?>
        </div>
        <?php if($params['conteudo']!=''){ ?>
        <div class="widget-body"<?php if(isset($params['opc_fechada']) && $params['opc_fechada']===true)  echo ' style="display: none;"'; ?>>
            <?php echo $params['conteudo']; ?>
        </div>
        <?php } ?>
    </div>
<?php }else{ ?>
    <div class="row">
    <?php foreach($params['tamanho'] as $indice=>$span){ ?>
        <div class="col-md-<?php echo $span; ?>">
              <?php echo $params['conteudo'][$indice];  ?>
        </div>
    <?php } ?>
    </div>
<?php } ?>