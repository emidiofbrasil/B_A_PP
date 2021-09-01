<meta charset="utf-8">

Start BAPP
===

BAPP - Builder Application
---

	Framework PHP minimo de código. Aplica o MVC como metodologia para criação de APPs.

Versões
---

	PHP versão 8


	|Maior|Menor|Correção| Infomação
	|-----|-----|--------|------------
	|  001|  001|     001| Inicio   
	|  001|  001|     002| Note asusLinuxMINT
	|  001|  001|     002| Note asusLinuxMINT save	

Descrições
---

	Gerencia paginas atravéz de rotas ...

Como Fazer
---

	REGRAS:

	Todos scripts com menos de 100 Linhas.
	Colocar Model, scripts regra do negocio, pasta App/Model.
	Colocar Templates, pasta w.
	Colocar Javascript, pasta w/js arquivo main.js.	
	Function PHP, pasta Vendor/controller/func, arquivo php com mesmo no da function.
	Arquivos de midia colocar na pasta Assets		

	Criar uma class.
	Adicionar uma opcao no menu.
	Criar um template.
	Acesso a banco de dados.
	Usar Javascript.
	Instalar no servidor.

	TEMPLATES:

	As palavras que serão reiderizadas, devem estar em maiusculas iniciada pelo
	sinal de igual [=]. Exemplos  =NAME, =SALARY.

	Executar Servidor PHP na pasta do B_A_PP

	php -S localhost:8090

Estrutura  - tree /F /A
---

	|   README.MD
	|
	+---Bussines
	|   |   BuilderAPP.php
	|   |   Bussines.PHP
	|   |   config.php
	|   |   index.php
	|   |
	|   +---Test
	|   \---w
	|       |   Home.html
	|       |   Login.html
	|       |   welcome.html
	|       |
	|       +---css
	|       |       style.css
	|       |
	|       \---js
	|               main.js
	|
	+---Test
	|       test_MySQL.php
	|
	\---Vendor
	    |   Autoload.php
	    |   config.php
	    |
	    +---App
	    |       APP.php
	    |
	    +---controller
	    |   |   Auth.php
	    |   |   BuilderAPP.php
	    |   |   files.php
	    |   |   router.php
	    |   |   _PDO.php
	    |   |
	    |   \---func
	    |           connect.php
	    |           DEBUG.php
	    |           FieldsBlank.php
	    |           getIdenty.php
	    |           insertJavascript.php
	    |           Message.php
	    |           PageBeConstruct.php
	    |           PageNotFound.php
	    |           shwPRE.php
	    |           words.php
	    |           _Htm.php
	    |           _Print.php
	    |
	    +---Model
	    |       History.php
	    |       login.php
	    |       Show.php
	    |
	    +---startFiles
	    |   |   BuilderAPP.php
	    |   |   BUSSINES.PHP
	    |   |   config.php
	    |   |   index.php
	    |   |
	    |   +---alert
	    |   |       badCommand
	    |   |       Leiame
	    |   |       MySQLnotExist
	    |   |       WillBeCreate
	    |   |
	    |   \---w
	    |       |   Home.html
	    |       |   Login.html
	    |       |   welcome.html
	    |       |
	    |       +---css
	    |       |       style.css
	    |       |       stylePHP.css
	    |       |       Table.css
	    |       |
	    |       +---js
	    |       |       classes.js
	    |       |       function.js
	    |       |       Home.html
	    |       |       main.js
	    |       |       ReadME.txt
	    |       |
	    |       \---JSON
	    |               CONTAS.json
	    |               ReadME.txt
	    |
	    \---View
	            view.php
	            View_II.php

Functions / Funcões
---

	function shwPRE: 
	
		Exibe objetos/Array entre tagas PRE.
		function para DEBUG.

	Sintaxe:

	shwPRE([objeto|Array]);

	function DEBUG: 
	
		Exibe um HR e informações sobre arquivo.
		function para DEBUG.

	Sintaxe:

	DEBUG(Pagina|Linha);

	*Use constantes PHP __FILE__ e __LINE__.
	Exemplo: DEBUG(__FILE__,__LINE__);

	function _Htm:

		Recebe tags Html e um valor, converte em documento recursivamente.
		A tag e o valore devem ser array.

	Sintaxe:	

		_Htm( [Tags], [Valore] );

	Exemplo:  _Htm(["li"],["Eu","Tu"]) 	Imprime <li>Eu</li><li>Tu</li>.

	function _Print:

		Imprime string entre tags P:

	Sintaxe:
	
		_Print([Texto]);

	Exemplo:	_Print("Ola") Imprime <p>Ola</p>

	function connect:
	
		Verifica se exite uma sessao, existe permite acesso a manutecao APP.

	Sintaxe:
	
		connect($arg) retorna True existe sessão, False se não.

	function FieldsBlank:
	
		Imprime quadro vermelho informando campos não podem estar em branco.

	Sintaxe:
	
		FieldsBlank([NomeCampo]);

	Function getIdenty:
	
		Retorna array com as linhas começãndo com @.

	Sintaxe:
	
		getIdenty([NomeDoArquivo]);							 

	function PageBeConstruct:
	
		Retorna quadro vermelho informando pagina em construcao.	

	Sintaxe:
	
		PageBeConstruct([NomeDoArquivo]);

	function PageNotFound:		

		Retorna quadro vermelho informando pagina nao encontrada.

	Sintaxe: 
	
		PageNotFound([NomeDoArquivo]);	

	function shwCODE:		

		Recebe string com carcteres HTML transforma em Metacaractes.

	Sintaxe: 
	
		shwCODE([Texto Html]);			

	function words:		

		Extrai todas as palvras, retira duplicidade, Coloca em caixa Alta e ordena Alfa.

	Sintaxe: 
	
		words([NomeDoArquivo]);

Classes
---

	_PDO,

		Permite acessar databases SQLite3 e MySQL.

	AUTH,

		Cria sessao e cookies.

	FILES,

		Cria, grava e le arquivos textos.
		retorna lista de arquivos de uma pasta/diretorio.

	ROUTER,

		Analisa rota para saber se tem
		parametros, indicando qual pagina a abrir.

	HISTORY,

		Acesso a tabela history.

	LOGIN,

		Autenticacao do sistema.		

	MANAGERTASKS,

		Gerencia o acesso e manutenção das tarefas.				

	PEOPLE,

		Visualizar, Alterar e incluir pessoas.				


	PEOPLE,

		Visualizar, Alterar e incluir pessoas.				

	SHOW,

		Monta a pagina a ser exibida.

	VIEW,

		Reiderizacao do Template com valores.

Referencias PHP 
---

	;,

		Finalizador de linhas no PHP.

	$,

		Simbolo identificando variavel, array e objetos.

	-> / ::,

		Operador para acessar metodos e propriedades.

	ARRAY,

		Cria matrizes.

		Sintaxe:

		[Nome] = Array([chave] => [Valor]);

	ARRAY_MERGE,		

		Funsão de array.

		Sintaxe:

		[arr] = array_merge([arr1],[arr2]..[arrN]);


	ARRAY_POP,
	
		Metodo extração ultimo elemento do array.
		Processamento pilha de dados.	

		Sintaxe:

		[UltimoElemento] = array_pop([array]);		

	ARRAY_PUSH,
	
		Insere elemento no final de um array

		Sintaxe:

		array_push([array],[Elemento]);				

	BREAK,

		Interrompe fluxo de comandos.

	CLASS,

		Modela uma classe, para estacia.

		Sintaxe:

		class [nome da class]
		{
			[Propriedades]
			function __construct(arguments)
			{

			}
			function method()
			{

			}
		}

	COUNT,
	
		Retorna o numero de elementos de uma array.

		Sintaxe:

		[Numero] = count([array]);						

	DEFINE,

		Defini constantates no script.

		Sintaxe:

		define([Nome da constante],[Valor da constante]); 

	DIE,

		Termina o processamento do PHP.

		Sintaxe:

		die([Texto]);						

	ECHO, 

		comando Php pra exibir dados na saida padrão.

		Sintaxe:

		echo [Texto|Variavel|Function];

	FCLOSE,
	
		Fecha arquivo aberto com fopen.

		Sintaxe:

		fclose([handler]);	


	FILE_EXISTS,
	
		Confirma se arquivo existe.

		[Verdadeiro|Falso] = file_exists([nome do arquivo]);	 


	FILESIZE,
	
		Informa o tamanho de um arquivo em bytes.

		Numero de bytes = filesize([nome do arquivo]);	

	FOPEN,

		Abre ou criar um arquivo para leitura ou gravação.
		a = para gravação.
		r = Para leitura.

		Sintaxe:

		[handler] = fopen([Nome do arquivo],[a|r]);

	FPUTS,

		Grava informações no arquivo aberto por fopen com [a].

		[Status] = fputs([handler],[informação]);

	FREAD,

		Le dados de um arquivo.

		Sintaxe:

		Texto = fread([handler], filesize[Nome do arquivo]);		

	FUNCTION,

		Defini uma function.

		Sintaxe:

		function [Nome](argumentos)
		{
			[Comandos];

			Return( [Variavel|Array|objeto] );
		}

	PARENT,
	
		Modificar para acesso direto a super classe.	

	PUBLIC,

		Permite que definição seja visto em todo o programa.

	PREG_MATCH_ALL,

		Pesquisa uma regular express, no texto, coloca resultados
		em um array.

		Sintaxe:

		preg_match_all([RegEx],[Texto],[Array]);


	PREG_SPLIT,	

		Retorna array de uma string, aplicando uma 
		regular expression.

		

	NEW,

		Estacia uma class para Objeto.

	REQUIRE, 

		Recupera script PHP e insere. Utilizado para inserir
		configurações e funções criadas como automatizações de código.

		Sintaxe: 

		require([nome do Arquivo absoluto]);

	RETURN,
	
		Retorna para parte do script que foi chamado.	

		Sintaxe:

		return([Valor a retornar]);

	
	SPRINTF,
	
		Funções gera um template.

	SPL_AUTOLOAD_REGISTRER,

		Analisa scripts com classes registrando as na memoria, 
		possibilitando carrega-las em qualquer parte do código. 
		Recebe como argumento uma função. 	

		Sintaxe:

		spl_autoload_register([function(argumento){}]);

	STR_REPLACE,

		Procura em SEARCH em SUBJECT e troca por REPLACE.

		Sintaxe:

		str_replace(SEARCH, REPLACE, SUBJECT);
	
	STRTOUPPER,

		Converte para maiusculo.

		Sintaxe:

		Strtoupper([Texto]);


	TRY..CATCH,

		Captura um erro caso ocorra.

		Sintaxe:

		try {

			[Comando];
		} catch (Exception)  {

			[Comandos];
		}


	SWITCH,

		Chaveia por opções, pode selecionar somente uma, em cada bloco
		de comando finalizado por BREAK ou varias opções seguidas 
		sem o BREAK.			

	THIS,

		Utilizado dentro de modelagem de class para acesso a propriedades.

	USE, 

		Inserir a classe definida com namespace. Caso utilize apenas
		um metodo utilizar modo imediato. Se necess=ario utilizar mais 
		metodos definir estacia.

		Sintaxe:

		use [local e nome namespace];


Referencias BATCH-DOS
---

	CD,

		Muda de diretorio/pasta no disco.

		Sintaxe:

		cd [pasta/diretorio]

	PROMPT,
	
		Modifica a aparecida do prompt de comando.

		Sintaxe:

		prompt [$p|$g|$_|$_]

		$p, apresenta no prompt a pasta.

		$g, apresenta no prompt caractere [>].

		$_, pula uma linha.

	REM, 

		Comentarios em arquivos de lote.

		Sintaxe:

		rem [comentario apresentado.]	


	START,
	
		Inicializa um arquivo associado em modo grafico.

		Sintaxe:

		start [caminho mais o nome do arquivo]	

Referencias HTML5
---

	A,

		No HTML para informar ancora para uma
		nova pagina ou local na mesma pagina.



	ARTICLE,

		Semantica do HTML5, usado para separar informação.

	BODY,

		No HTML para informar corpo da pagina HTML.		

	BR,

		No HTML para informar proxima linha.

	DIV,

		No HTML para informar divisão de informação.

	CLASS,
	
		Na tag HTML para informar class 
		definidas em CSS.			

	CHASERT,
	
		Na tag HTML para informar codificação 
		de caracteres da lingua.

	CONTENT,
	
		Na tag HTML para informar comportament 
		do conteudo da pagina HTML.

	FIELDSET,

		Na HTML para informar um quadro.

	FOOTER,

		Semantica do HTML5, usado informar que 
		se trata do rodape.		

	FOR,
	
		Na tag HTML para informar nome da tag
		relacionada.

	FORM,

		No HTML para informar formulario.

	HEAD,

		No HTML para informar definições para 
		uma pagina HTML.

	H2,H3

		No HTML para informar cabeçario.

	HR,

		No HTML para informar linha divisoria.		

	HREF,
	
		Na tag HTML para informar link a arquivo,
		localização da pagina a carregar.			

	HTML,

		No HTML para informar inicio documento
		HTML.			

	HEADER,

		Semantica do HTML5, usado informar que se
		trata do cabeçario.	

	INPUT,

		No HTML para informar entrada de dados ou
		botão.		

	LABEL,

		No HTML para informar label de informação
		ou titulo.		

	LEGEND,

		No HTML para informar legenda para o
		fieldset.

	LI,

		No HTML para informar paragrafos dentro
		de uma lista [ul].				

	LINK,

		No HTML para informar ligação com arquivo
		CSS.				

	NAME,
	
		Na tag HTML para informar um nome para a
		tag.

	META,

		No HTML para informar apresentação da
		 pagina HTML.			

	P,

		No HTML para informar paragrafo.	

	REL,
	
		Na tag HTML para informar tipo de arquivo
		 relacionado.

	SECTION,	

		Semantica do HTML5, usado informar que se trata seção.	

	SCRIPT,

		No HTML para informar arquivo Javascript a carregar ou comandos.

	SRC,

		Na tag HTML para informar o arquivo javascript a carregar.

	TITLE,

		No HTML para informar titulo da pagina HTML.

	TYPE,
	
		Na tag HTML para informar tipo de input.		

	UL,

		No HTML para informar lista de paragrafos.						


Referencias W3.css
---

	W3-CONTAINER,

		Transforma tag em um container de informações.

	W3-BAR-ITEM,

		Tag se comporta como uma opção de menu,
		 modificando ao mouse sobre ela.

	W3-BORDER,

		Incorpora uma borda na tag.

	W3-BUTTON,

		Transforma a tag para aparencia de um botão.

	W3-CENTER,

		Centraliza a informação dentro da tag.

	W3-COL,

		Transforma a tag em modo tabela.

	W3-LEFT,

		Alinha conteudo da tag a esquerda.

	W3-MOBILE,

		Ajusta a tag para modo mobile,
		 visualização em celular.

	W3-ORANGE,

		Muda o fundo para laranja.

	W3-PAINEL,

		Transforma a tag para aparencia de Painel.

	W3-ROUND-LARGE,

		Muda as bordas para arredondado.

	W3-TEXT,

		Transforma a tag para aparecida de entrada de texto.

	W3-UL,

		Transforma a tag para aparencia em lista
		 tipificada.


Referencias Javascript
---
	
	CONSOLE.LOG,

		Exibe informações no console do browse.

	DOCUMENT,

		Objeto documento javascritp.

	FOR,

		Comando de repetição.

	LENGTH,

		Argumento informando o numero de elementos.

	QUERYSELECTORALL,

		Metodo do Document, para selecionar elementos na pagina html.

	VAR,

		Define uma variavel. 

Referencias MVC
---

	
	MVC, significa Model, View e Controller. Se trata de um designer pathern.
	O Model se trata da regra do negôcio, processos para que o trabalho seja
	executado com o maximo de eficiencia, View se trata da parte de visualização
	em que o usuário utilizará o sistema de trabalho. Controller as classes
	utilizadas para especialização e internacionalização dentro do Model. 


	__View__ é apresentado ao usuário, nele temos __Model__, com a modelagem que
	o usuário entenda o que deve ser feito, as ações disparam o __Controller__ 
	determinado a executar o processo e trabalho com eficacia. 

Referencias Regular Expression
---

	Uso de regular expression, intesivamente na class View. Reiderização de template.

Glossário
---

	APP.PHP, 

		Script inicia a aplicação.

	AUTOLOAD.PHP, 

		Script com o spl_autoload_register.

	AUTH.PHP, 

		Script class auth, autenticação.

	Argumento, 

		Informação passada a function ou methods de uma class

	Absoluto, 

		Referente a sintaxe nome e path do arquivo.

	BUILDERAPP.PHP, 

		Ferramenta para criar scripts.

	Classe, 

		Modelo de codigo para atua dentro da
		 programação orientada a objeto.

	CONFIG.PHP, 

		Script contem as constantes e includes.

	Constantes, 

		Definições que não pode ser alteradas.

	DEBUG.PHP, 

		Script exibe cabecario DEBUG.

	DESIGNER PATTERN,
	
		São padrões a serem seguidos determinando um processo já conhecido e  várias vezes 
		 utilizados. 

	EFICACIA,

		Executar um processo com eficiencia de uma forma continua. Gerando um designer 
		pattern.

	EFICIENCIA,

		Executar um processo ou trabalho de uma forma organizada e com o minimo de tempo 
		possivel sem perder a qualidade.

	ESPECIALIZAÇÃO,

		Tornar um processo apto a executar um determininado trabalho sem que saia do 
		seu objetivo. Ele deverá fazer o que se propoe e nada mais.

	INTERNACIONALIZAÇÃO,

		Possibilidade de cada sub-processo ser parte de um processo, passando os 
		recursos, suas vantagens de utilização, de um modo a grupo funcionalidade ao 
		processo.		

	ISFILE.PHP, 

		Script function confirma se e arquivo para o BAPP.

	Estancia, 

		Criar um objeto apartir de uma classe.


	FILES.PHP, 

		Script com class file.

	ROUTER.PHP, 

		Script com a rota a ser exibida.

	FOOTER.PHP, 

		Script com rotape pagina HTML5.

	Function, 

		Agrupar comandos para retutiliza-los.

	Handler, 

		Referencia ao arquivo aberto.

	HEADER.PHP, 

		Script contem cabecario HTML5.

	Linux, 

		Sistema operacional de uso livre. Importante Linux é o Kernel onde a base 
		do sistema é programado.

	MAIN.JS, 

		Script contendo codigo Javascript.

	Methods, 

		Para de uma class com agrupamento de codigos.

	Modelar, 

		Criar uma classe de acordo com os requisitos.

	Modo imediato, 
	
		Estaciar a class sem criar um objeto, executando o metodo com operador ->.	

	namespace, 

		Recurso que possibilita separar as classes em organização de pastas. 
		Igualmente a organização do sistema	operacional Linux.

	NAV.PHP, 

		Script para gerenciar menu.

	LOGIN.PHP, 

		Script para fazer login no sistema.

	Path, 

		Local no harddisk ou servidor onde o arquivo está o arquivo.

	Kernel, 

		Sistema inicializavel com comandos suficientes para prover a 
		operacionalidade de um computador.

	Reiderização,

		Processo de refazer as paginas com os dados do BAPP.

	Saida padão, 

		A saida habilidatada para exibir os dados.

	SHOW.PHP, 

		Script com class show, montagem da pagina HTML5 a exibir.

	shwPRE, 

		Script com function exibe print_r entre tags PRE.

	Sistema operacional,

		Parte computacional que possibilita um computador ser utilizado para executar
		  trabalhos.

	Status, 

		Informa qual foi resultado do comando.

	STRUCTURE.HTML, ... 

	Super classe, 

		Significa a class que foi definida no extends, a classe que originou	

	Template, 

		Modelo de como será a estrutura.

	Texto, 

		Informação que pode ser exibida na saida 
		padrão.

	Variavel, 

		Local da memoria para armazernar 
		informações.

	VIEW.PHP, 

		Script com class view.

	_PDO.PHP, 

		Script com class PDO extendida.


Comandos Github
---

echo "# B_A_PP" >> README.md

git init

git add README.md

git commit -m "first commit"

git branch -M main

git remote add origin https://github.com/emidiofbrasil/B_A_PP.git

git push -u origin main

…or push an existing repository from the command line

git remote add origin https://github.com/emidiofbrasil/B_A_PP.git

git branch -M main

git push -u origin main
