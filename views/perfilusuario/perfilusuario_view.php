<section>
    <!--Caixa de conteúdo-->
    <div id="perfilBox">
        <div id="conteudoEsquerdo">
            <!--Dados do perfil-->
            <div id="dadosPerfil">
                <div id="imagem">
                    <img src="imagens/perfilusuario/user.png" alt="Imagem do Usuário" />
                    <div>TROCAR IMAGEM</div>
                </div>
                <table>
                    <tr>
                        <th>
                            Nome Sobrenome <a href="#"><img src="imagens/perfilusuario/edit.ico" alt="Editar Perfil"></a>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            exemplo@exemplo.com
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Procura viajar para: praia
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tem viajado para: campo
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Você possui <span>100</span> pontos Milhas Travel Fidelidade
                        </td>
                    </tr>
                </table>
            </div>
            <!---->
            <!--Histórico de transações-->
            <div id="historicoBox">
                <table>
                    <tr>
                        <th>Hotel</th>
                        <th>Data Início</th>
                        <th>Data Término</th>
                        <th>Preço</th>
                        <th>Plataforma</th>
                    </tr>
                    <?php
                        $i = 0;
                        while ($i < 25)
                        {
                     ?>
                    <tr>
                        <td>Exemplo</td>
                        <td>13/09/2017</td>
                        <td>14/09/2017</td>
                        <td>R$ 550,00</td>
                        <td>Site</td>
                    </tr>
                    <?php
                        $i += 1;
                        }
                     ?>
                </table>
            </div>
            <!---->
        </div>
        <!--Última viagem-->
        <div id="conteudoDireito">
            <div id="ultimaViagem"><span>Sua última viagem</span></div>
            <div id="imagemUltimaViagem"><img src="imagens/perfilusuario/hotel.jpeg" alt="Última viagem"></div>
            <div id="nomeHotel"><span>Hotel Exemplo</span></div>
            <div id="estrelas">
            <?php
                $qtd = rand(1, 5);
                $cont = 1;
                while ($cont <= $qtd)
                {
                    ?>
                        <img src="imagens/busca/estrela.png" alt="">
                    <?php
                    $cont += 1;
                }
             ?>
            </div>
            <table>
                <tr>
                    <td>Bairro exemplo, Cidade Exemplo-EX</td>
                </tr>
                <tr>
                    <td>Parceiro Exemplo</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Data de Início: 13/09/2017</td>
                </tr>
                <tr>
                    <td>Data de Saída: 14/09/2017</td>
                </tr>
                <tr>
                    <td>Valor: R$ 550,00</td>
                </tr>
            </table>
        </div>
        <!---->
    </div>
    <!---->
</section>
