<section id="sectionConteudo">
    <div id="conteudo">
        <div id="tituloPagina">
            Cadastro de hotel
        </div>
        <form name="frmHotel" action="" method="" enctype="multipart/form-data"> 
            <div id="containerEsquerda">
                <table id="tableEsquerda" border="0">
                    <tr>
                        <td><label>Nome do Hotel</label></td>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="txtNomeHotel" placeholder="Digite o nome do hotel"></td>
                    </tr>
                    
                    <tr>
                        <td><label>Horário de check-in</label></td>
                    </tr>
                    
                    <tr>
                        <td><input type="time" name="txtNomeHotel"></td>
                    </tr>
                    
                    <tr>
                        <td><label>Horário de Check-out</label></td>
                    </tr>
                    
                    <tr>
                        <td><input type="time" name="txtNomeHotel"></td>
                    </tr>
                    
                    <tr>
                        <td><label>Tipo de Estadia</label></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <select name="sltEstadia" >
                                <option value="Hotel">Hotel</option>
                                <option value="Pousada">Pousada</option>
                                <option value="Resort">Resort</option>
                                <option value="Chalé">Chalé</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Quantidade de Estrelas</label></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <select name="sltEstrela" >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Imagens do Hotel (Máx. 10)</label><img title="Adicionar imagem" alt="" src="imagens/cadastrohotel/plusgreen.svg"></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <input id="inputFile" type="file" name="fileFoto">
                        </td>
                    </tr>
                    
                </table>
            </div>
            <div id="containerDireita">
                <table id="tableEsquerda">
                    <tr>
                        <td><label>Descrição do Hotel (Máx. 300 caracteres)</label></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <textarea maxlength="300" placeholder="Digite a descrição do hotel"></textarea>
                        </td>
                    </tr>
                </table>

                <div id="btnSalvar">
                    <h1>Cadastrar</h1>
                </div>
            </div>
            
        </form>    
    </div>    
</section>