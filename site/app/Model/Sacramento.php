<?php
App::uses('AppModel', 'Model');
/**
 * Sacramento Model
 *
 */
class Sacramento extends AppModel {

	public function beforeSave($options = array()) {
		//debug($this->data);
		if(!empty($this->data['Sacramento']['foto']['name'])) {
	        $this->data['Sacramento']['foto'] = $this->upload($this->data['Sacramento']['foto']);
	    } else {
	        unset($this->data['Sacramento']['foto']);
	    }
	}

	public function upload($foto = array(), $dir = 'img') {
	    $dir = WWW_ROOT.$dir.DS;

	    if(($foto['error']!=0) and ($foto['size']==0)) {
	        throw new NotImplementedException('Alguma coisa deu errado, o upload retornou erro '.$foto['error'].' e tamanho '.$foto['size']);
	    }

	    $foto = $this->checa_nome($foto, $dir);

	    $this->move_arquivos($foto, $dir);

	    return $foto['name'];
	}

	public function checa_nome($foto, $dir) {
	    $imagem_info = pathinfo($dir.$foto['name']);
	    $imagem_nome = $this->trata_nome($imagem_info['filename']).'.'.$imagem_info['extension'];
	    //debug($imagem_nome);
	    $conta = 2;
	    while (file_exists($dir.$imagem_nome)) {
	        $imagem_nome  = $this->trata_nome($imagem_info['filename']).'-'.$conta;
	        $imagem_nome .= '.'.$imagem_info['extension'];
	        $conta++;
	        //debug($imagem_nome);
	    }
	    $foto['name'] = $imagem_nome;
	    return $foto;
	}

	public function trata_nome($imagem_nome) {
	    $imagem_nome = strtolower(Inflector::slug($imagem_nome,'-'));
	    return $imagem_nome;
	}

	public function move_arquivos($foto, $dir) {
	    App::uses('File', 'Utility');
	    $arquivo = new File($foto['tmp_name']);
	    $arquivo->copy($dir.$foto['name']);
	    $arquivo->close();
	}
}
