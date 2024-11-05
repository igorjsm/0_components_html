<!DOCTYPE html>
<html lang="en" height="100%">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 0 - UMA NOVA ESPERANÇA</title>
    <style>
        html,
        body {
            height: 100%;
        }
    </style>
</head>

<body>
    <marquee>
        <?php
        $frase1 = 'Há muito tempo';
        $frase2 = 'numa sala de aula muito distante...';
        $frase3 = 'PROGRAMAÇÃO WEB - UMA NOVA ESPERANÇA';

        echo $frase1 . ', ' . $frase2 . ' ' . $frase3;
        ?>
    </marquee>
    <!-- <table border="1px" width="100%" height="100%">
        <tr>
            <td>
                <table border="1px" width="800px" height="100%" style="margin: 0 auto;">
                    <tr width="100%" height="15%">
                        <td colspan="2">
                            <img src="karl_marx_banner.png" alt="karl_marx_banner" style="width: 100%; height: 100%; object-fit: contain;">
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="20%">
                            <p><b>Capítulo I.</b> Burgueses e Proletários</p>
                            <p><b>Capítulo II.</b> Proletários e Comunistas</p>
                            <p><b>Capítulo III.</b> Literatura Socialista e Comunista</p>
                            <p><b>Capítulo IV.</b> Posição dos Comunistas para com os Diversos Partidos Oposicionistas</p>
                        </td>
                        <td style="text-align: justify;">
                            <p>Anda um espectro pela Europa — o espectro do Comunismo. Todos os poderes da velha Europa se aliaram para uma santa caçada a este espectro, o papa e o tsar, Metternich e Guizot, radicais franceses e polícias alemães.</p>
                            <p>Onde está o partido de oposição que não tivesse sido vilipendiado pelos seus adversários no governo como comunista, onde está o partido de oposição que não tivesse arremessado de volta, tanto contra os oposicionistas mais progressistas como contra os seus adversários reaccionários, a recriminação estigmatizante do comunismo?</p>
                            <p>Deste facto concluem-se duas coisas.</p>
                            <p>O comunismo já é reconhecido por todos os poderes europeus como um poder.</p>
                            <p>Já é tempo de os comunistas exporem abertamente perante o mundo inteiro o seu modo de ver, os seus objectivos, as suas tendências, e de contraporem à lenda do espectro do comunismo um Manifesto do próprio partido.</p>
                            <p>Com este objectivo reuniram-se em Londres comunistas das mais diversas nacionalidades e delinearam o Manifesto seguinte, que é publicado em inglês, francês, alemão, italiano, flamengo e dinamarquês.</p>
                        </td>
                    </tr>
                    <tr width="100%" height="10%">
                        <td colspan="2" style="text-align: center;">
                            <q>Se a classe operária tudo produz, a ela tudo pertence.</q>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table> -->
    <!-- Abaixo um formulário de cliente -->
    <form name="frmCadastro" action="processa.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="hddCodigo" value="345678" />
        <table border="1px">
            <tr>
                <td colspan="2"> Cadastro de Cliente </td>
            </tr>
            <tr>
                <td width="15%">C&oacute;digo:</td>
                <td>
                    <input type="text" name="txtCodigo" value="12346" readonly="true" />
                </td>
            </tr>
            <tr>
                <td width="15%">Nome:</td>
                <td>
                    <input type="text" name="txtNome" value="" placeholder="Insira aqui o nome" size="100" maxlength="80" />
                </td>
            </tr>
            <tr>
                <td width="15%">Senha:</td>
                <td>
                    <input type="password" name="txtSenha" value="123456" maxlength="6" disabled="true" />
                </td>
            </tr>
            <tr>
                <td width="15%">Email:</td>
                <td>
                    <input type="email" name="txtEmail" placeholder="Insira aqui o email" size="100" maxlength="100" />
                </td>
            </tr>
            <tr>
                <td width="15%">Data de Nascimento:</td>
                <td>
                    <input type="date" name="txtDataNasc" />
                </td>
            </tr>
            <tr>
                <td width="15%">Carregue sua foto:</td>
                <td>
                    <input type="file" name="txtArquivo" />
                </td>
            </tr>
            <tr>
                <td width="15%">Renda:</td>
                <td>
                    <input type="radio" name="rdbRenda" id="rdbPobre" value="1" checked="true" />
                    <label for="rdbPobre">Pobre</label><br>
                    <input type="radio" name="rdbRenda" id="rdbMuitoPobre" value="2" />
                    <label for="rdbPobre">Muito Pobre</label><br>
                    <input type="radio" name="rdbRenda" id="rdbMiseravel" value="3" />
                    <label for="rdbPobre">Miser&aacute;vel</label><br>
                </td>
            </tr>
            <tr>
                <td width="15%">Escolha seus macacos favoritos:</td>
                <td>
                    <input type="checkbox" name="chkGorila" value="gorila" /> Gorila <br>
                    <input type="checkbox" name="chkOrangotango" value="orangotango" /> Orangotango <br>
                    <input type="checkbox" name="chkChimpaze" value="chimpaze" /> Chimpaz&eacute; <br>
                    <input type="checkbox" name="chkBonobo" value="bonobo" /> Bonobo <br>
                </td>
            </tr>
            <tr>
                <td width="15%">Digite a sua mensagem:</td>
                <td>
                    <textarea name="txaMensagem" rows="5" cols="60"></textarea>
                    <br>
                </td>
            </tr>
            <tr>
                <td width="15%">O quanto voc&ecirc; gosta de F1?</td>
                <td>
                    <select name="slcF1" size="1">
                        <option value="muito" selected="true">Muito</option>
                        <option value="medio">Mais ou menos</option>
                        <option value="pouco">Pouco</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="15%">Qual sua equipe favorita?</td>
                <td>
                    <select name="slcEquipe" size="3">
                        <option value="Red Bull" selected="true">Red Bull</option>
                        <option value="McLaren">McLaren</option>
                        <option value="Ferrari">Ferrari</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="15%">Quais são seus pilotos favoritos?</td>
                <td>
                    <select name="slcListaDePilotos[]" size="9" multiple="true">
                        <optgroup label="Red Bull">
                            <option value="verstappen">Verstappen</option>
                            <option value="perez">Perez</option>
                        </optgroup>
                        <optgroup label="McLaren">
                            <option value="norris">Norris</option>
                            <option value="piastri">Piastri</option>
                        </optgroup>
                        <optgroup label="Ferrari">
                            <option value="leclerc">Leclerc</option>
                            <option value="sainz">Sainz</option>
                        </optgroup>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="15%">Quem voc&ecirc; acha que ganhar&aacute; o compeonato de...</td>
                <td>
                    <fieldset>
                        <legend>Pilotos</legend>
                        <input type="radio" name="rdbPilotos" id="rdbVerstappen" value="verstappen">
                        <label for="rdbVerstappen">Verstappen</label><br>
                        <input type="radio" name="rdbPilotos" id="rdbNorris" value="norris">
                        <label for="rdbNorris">Norris</label><br>   
                    </fieldset>
                    <fieldset>
                        <legend>Construtores</legend>
                        <input type="radio" name="rdbConstrutores" id="rdbMcLaren" value="mcLaren">
                        <label for="rdbMcLaren">McLaren</label><br>
                        <input type="radio" name="rdbConstrutores" id="rdbFerrari" value="ferrari">
                        <label for="rdbFerrari">Ferrari</label><br>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td align="right" colspan="2">
                    <input type="reset" name="btnLimpar" value="Limpar" />
                    <input type="submit" name="btnSalvar" value="Salvar" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>