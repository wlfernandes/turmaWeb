<?php
/**
 * Created by PhpStorm.
 * User: Welin
 * Date: 26/09/2017
 * Time: 21:18
 */


# Faz com que apenas erros fatais sejam lançados
ini_set('display_errors',1);
error_reporting(E_ERROR);


# Setando configurações locais de ambiente
date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_ALL, NULL);
setlocale(LC_ALL, 'pt_BR');

// Definição das constantes do sistema
define('ROOT',$_SERVER['DOCUMENT_ROOT']); # caminho/completo/da/raiz/do/site
define('BASE',$_SERVER['REQUEST_SCHEME'].'//'.$_SERVER['SERVER_NAME']); # http://exemplo.exp
define('DS',DIRECTORY_SEPARATOR); # Separador de diretórios tanto pra windows e linux
define('PATH_MODELS',ROOT.DS.'app'.DS.'Models');
define('PATH_VIEWS',ROOT.DS.'app'.DS.'Views');
define('PATH_CONTROLLERS',ROOT.DS.'app'.DS.'Controllers');
define('ADM','painel');
define('TPL','bootstrap');
define('TPL_ADM','panel');
define('BASE_ADM','/'.ADM);

// Banco de dados
define('DB_HOST','localhost'); # Endereço do servidor
define('DB_TYPE','mysql'); # Tipo de Banco de dados
define('DB_USER','root'); # usuário do banco de dados
define('DB_PASS',''); # Senha para o usuário
define('DB_NAME','quality'); # Banco onde a apliação irá trabalhar
define('DB_PORT','3306'); # Porta do mysql
