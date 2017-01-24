<?php
App::uses('AppModel', 'Model');
/**
 * Pdf Model
 *
 * @property Comunidade $Comunidade
 */
class Pdf extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

	public function beforeSave($options = array()) {
		//debug($this->data);
		if(!empty($this->data['Pdf']['pdf']['name'])) {
	        $this->data['Pdf']['pdf'] = $this->upload($this->data['Pdf']['pdf']);
	    } else {
	        unset($this->data['Pdf']['pdf']);
	    }
	}

	public function upload($pdf = array(), $dir = 'files') {
	    $dir = WWW_ROOT.$dir.DS;

	    if(($pdf['error']!=0) and ($pdf['size']==0)) {
	        throw new NotImplementedException('Alguma coisa deu errado, o upload retornou erro '.$pdf['error'].' e tamanho '.$pdf['size']);
	    }

	    $pdf = $this->checa_nome($pdf, $dir);

	    $this->move_arquivos($pdf, $dir);

	    return $pdf['name'];
	}

	public function checa_nome($pdf, $dir) {
	    $imagem_info = pathinfo($dir.$pdf['name']);
	    $imagem_nome = $this->trata_nome($imagem_info['filename']).'.'.$imagem_info['extension'];
	    //debug($imagem_nome);
	    $conta = 2;
	    while (file_exists($dir.$imagem_nome)) {
	        $imagem_nome  = $this->trata_nome($imagem_info['filename']).'-'.$conta;
	        $imagem_nome .= '.'.$imagem_info['extension'];
	        $conta++;
	        //debug($imagem_nome);
	    }
	    $pdf['name'] = $imagem_nome;
	    return $pdf;
	}

	public function trata_nome($imagem_nome) {
	    $imagem_nome = strtolower(Inflector::slug($imagem_nome,'-'));
	    return $imagem_nome;
	}

	public function move_arquivos($pdf, $dir) {
	    App::uses('File', 'Utility');
	    $arquivo = new File($pdf['tmp_name']);
	    $arquivo->copy($dir.$pdf['name']);
	    $arquivo->close();
	}
}
