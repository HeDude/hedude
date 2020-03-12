<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Pasta de administração';
$string['availablelangs'] = 'Pacotes linguísticos disponíveis';
$string['chooselanguagehead'] = 'Selecione um idioma';
$string['chooselanguagesub'] = 'Selecione o idioma a utilizar durante a instalação. Poderá depois selecionar outro(s) idioma(s) para o site e para os utilizadores.';
$string['clialreadyconfigured'] = 'O ficheiro config.php já existe, use admin/cli/install_database.php para instalar o Moodle para este site.';
$string['clialreadyinstalled'] = 'O ficheiro config.php já existe, use admin/cli/install_database.php para atualizar o Moodle para este site.';
$string['cliinstallheader'] = 'Programa para instalação do Moodle <b>{$a}</b> através da linha de comandos';
$string['databasehost'] = 'Servidor da base de dados';
$string['databasename'] = 'Nome da base de dados';
$string['databasetypehead'] = 'Escolha o <i>driver</i> da base de dados';
$string['dataroot'] = 'Pasta de dados';
$string['datarootpermission'] = 'Permissões da diretoria de dados';
$string['dbprefix'] = 'Prefixo das tabelas';
$string['dirroot'] = 'Pasta do Moodle';
$string['environmenthead'] = 'A verificar sistema...';
$string['environmentsub2'] = 'Cada nova versão do Moodle tem pré-requisitos mínimos relativamente à versão do PHP e extensões necessárias para o seu correto funcionamento. Estes pré-requisitos são verificados sempre que o Moodle é instalado ou atualizado. Contacte o administrador do servidor caso seja necessário atualizar a versão do PHP ou instalar novas extensões.';
$string['errorsinenvironment'] = 'A verificação do sistema falhou!';
$string['installation'] = 'Instalação';
$string['langdownloaderror'] = 'Não foi possível descarregar o idioma <b>{$a}</b> . O processo de instalação continuará em Inglês.';
$string['memorylimithelp'] = '<p>O limite de memória para o PHP definido atualmente no servidor é <b>{$a}</b>.</p><p>Um número elevado de módulos em utilização ou de utilizadores registados pode fazer com que o Moodle apresente problemas de falta de memória.</p><p>É recomendado que o PHP seja configurado com um limite de memória de pelo menos 40MB. Esta configuração pode ser definida de diversas formas:</p><ol><li>Compilação do PHP com o parâmetro <b>--enable-memory-limit</b>. Esta definição permitirá ao próprio Moodle definir o valor a utilizar.</li><li>Alteração do parâmetro <b>memory_limit</b> no ficheiro de configuração do PHP para um valor igual ou superior a 40MB.</li><li>Criação de um ficheiro <b>.htaccess</b> na raiz da pasta do Moodle com a linha <b>php_value memory_limit 40M</b><p><strong>Atenção</strong>: Em alguns servidores esta configuração impedirá o funcionamento de <b>todas</b> as páginas PHP. Nestes casos, não poderá ser utilizado o ficheiro <b>.htaccess</b>.</p></li></ol>';
$string['paths'] = 'Caminhos';
$string['pathserrcreatedataroot'] = 'O programa de instalação não conseguiu criar a pasta de dados <b>{$a->dataroot}</b>.';
$string['pathshead'] = 'Confirmar caminhos';
$string['pathsrodataroot'] = 'A pasta de dados não tem permissões de escrita.';
$string['pathsroparentdataroot'] = 'A pasta ascendente <b>{$a->parent}</b> não tem permissões de escrita. O programa de instalação não conseguiu criar a pasta <b>{$a->dataroot}</b>.';
$string['pathssubadmindir'] = 'Alguns servidores Web utilizam a pasta <strong>admin</strong> em URLs especiais de acesso a funcionalidades especiais, como é o caso de painéis de controlo. Algumas situações podem criar conflitos com a localização normal das páginas de administração do Moodle. Estes problemas podem ser resolvidos renomeando a pasta <strong>admin</strong> na instalação do Moodle e indicando aqui o novo nome a utilizar. Por exemplo:<br /><br /><b>moodleadmin</b><br /><br />Esta ação resolverá os problemas de acesso das hiperligações para as funcionalidades de administração do Moodle.';
$string['pathssubdataroot'] = '<p>Uma diretoria em que o Moodle irá armazenar todo o conteúdo de ficheiros enviados pelos utilizadores.</p>
<p>Esta diretoria deve ser legível e gravável pelo utilizador do servidor web (geralmente \'www-data\', \'nobody\', ou \'apache\').</p>
<p>Não deve ser diretamente acessível através da web.</p>
<p> Se a diretoria não existir atualmente, o processo de instalação tentará criá-la.</p>';
$string['pathssubdirroot'] = 'Caminho completo para a diretoria que contém o código Moodle.';
$string['pathssubwwwroot'] = 'Endereço web completo de acesso ao Moodle. Não é possível aceder ao Moodle usando mais do que um endereço. Se o site tiver mais do que um endereço público, devem ser configurados redirecionamentos permanentes em todos eles, à exceção deste. Se o site pode ser acedido a partir da Internet e de Intranet, use o endereço público aqui. Se o endereço atual não está correto, altere o endereço indicado na barra de endereço do seu navegador e reinicie a instalação.';
$string['pathsunsecuredataroot'] = 'A localização da pasta de dados não é segura';
$string['pathswrongadmindir'] = 'A pasta <b>admin</b> não existe';
$string['phpextension'] = 'Extensão <b>{$a}</b> do PHP';
$string['phpversion'] = 'Versão do PHP';
$string['phpversionhelp'] = '<p>A instalação do Moodle só é possível se no servidor estiver instalada, pelo menos, a versão 5.6.5 do PHP (a versão 7.0.x tem algumas limitações).</p>
<p>A versão atualmente instalada é {$a}.</p>
<p>É necessário atualizar a versão do PHP ou migrar para um servidor com a referida versão.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'A apresentação desta página confirma a correta instalação e ativação do pacote <strong>{$a->packname} {$a->packversion}</strong> no servidor.';
$string['welcomep30'] = 'Esta versão do pacote <strong>{$a->installername}</strong> inclui as aplicações necessárias para o correto funcionamento do  <strong>Moodle</strong>, nomeadamente:';
$string['welcomep40'] = 'Este pacote inclui o lançamento <strong>{$a->moodlerelease} do Moodle ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'A utilização de todas as aplicações incluídas neste pacote é limitada pelas respetivas licenças. O pacote completo <strong>{$a->installername}</strong> é <ahref="http://www.opensource.org/docs/definition_plain.html">código aberto</a> e é distribuído nos termos da licença <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'As páginas seguintes irão levá-lo através de alguns passos simples para
     configurar e definir o <strong>Moodle</strong> no seu computador. Você pode aceitar as configurações predefinidas ou, opcionalmente, alterá-las para atender às suas próprias necessidades.';
$string['welcomep70'] = 'Clique no botão "Seguinte" para continuar a configuração do <strong>Moodle</strong>.';
$string['wwwroot'] = 'Endereço web';
