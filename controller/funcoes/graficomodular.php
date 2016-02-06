<?php 


// conta quantos cadastros existem por categoria
$busca = select("count(id_artigo) as total","sl_artigo","categoria = 'Resumo expandido'" );
$totalresumo = $busca[0]['total'];

$busca2 = select("count(id_artigo) as total","sl_artigo","categoria = 'Relato técnico'" );
$totalrelato = $busca2[0]['total'];

$busca3 = select("count(id_artigo) as total","sl_artigo","categoria = 'Artigo completo'" );
$totalartigo = $busca3[0]['total'];


// Conta Quantos cadastros existem por area

//$areabusca = select("count(id_artigo) as total","sl_artigo","area = 'Gestão de Pessoas e Estudos Organizacionais'" );
$areabusca = select("count(id_artigo) as total","sl_artigo","area = 'Gestão de Pessoas e '" );
$gestao = $areabusca[0]['total'];

//$areabusca2 = select("count(id_artigo) as total","sl_artigo","area = 'Desenvolvimento e Gestão'" );
$areabusca2 = select("count(id_artigo) as total","sl_artigo","area = 'Desenvolvimento e Ge'" );
$desenvolvimento = $areabusca2[0]['total'];

$areabusca3 = select("count(id_artigo) as total","sl_artigo","area = 'Economia e Finanças'" );
$economia = $areabusca3[0]['total'];

//$areabusca4 = select("count(id_artigo) as total","sl_artigo","area = 'Empreendedorismo, Inovação e Tecnologia'" );
$areabusca4 = select("count(id_artigo) as total","sl_artigo","area = 'Empreendedorismo, In'" );
$empreendedorismo = $areabusca4[0]['total'];

//$areabusca5 = select("count(id_artigo) as total","sl_artigo","area = 'Estratégia, Planejamento e Governança'" );
$areabusca5 = select("count(id_artigo) as total","sl_artigo","area = 'Estratégia, Planejam'" );
$estrategia = $areabusca5[0]['total'];

//$areabusca6 = select("count(id_artigo) as total","sl_artigo","area = 'Logísticas e Operações'" );
$areabusca6 = select("count(id_artigo) as total","sl_artigo","area = 'Logísticas e Operaçõ'" );
$logisticas = $areabusca6[0]['total'];

$areabusca7 = select("count(id_artigo) as total","sl_artigo","area = 'Marketing e Mercados'" );
$marketing = $areabusca7[0]['total'];

//$areabusca8 = select("count(id_artigo) as total","sl_artigo","area = 'Sustentabilidade e Responsabilidade Sócio Ambiental'" );
$areabusca8 = select("count(id_artigo) as total","sl_artigo","area = 'Sustentabilidade e R'" );
$sustentabilidade = $areabusca8[0]['total'];

// conta quantos trbalhos foram aprovados por categoria

$resumo = select('count(id_artigo) as total','sl_artigo'," categoria = 'Resumo Expandido' AND status = 1 ");
$resumoAprovado = $resumo[0]['total'];

$relato = select('count(id_artigo) as total','sl_artigo'," categoria = 'Relato Técnico' AND status = 1 ");
$relatoAprovado = $relato[0]['total'];

$artigo = select('count(id_artigo) as total','sl_artigo'," categoria = 'Artigo Completo' AND status = 1 ");
$artigoAprovado = $artigo[0]['total'];


?> 



<script type="text/javascript"> 
     //grafico da categoria
    var totalresumo = <?php echo "'$totalresumo'"; ?>;
    var totalrelato = <?php echo "'$totalrelato'"; ?>;
    var totalartigo = <?php echo "'$totalartigo'"; ?>;
    var soma = totalresumo+totalrelato+totalartigo;
    var porcentagem = 100/soma;

    totalresumo = totalresumo/100*100;
    totalrelato = totalrelato/100*100;
    totalartigo = totalartigo/100*100;

    
    var options = {
        responsive:true        
    };

    //grafico da area

    var gestao = <?php echo "'$gestao'"; ?>;
    gestao = gestao/100*100;
    var desenvolvimento = <?php echo "'$desenvolvimento'"; ?>;
    desenvolvimento = desenvolvimento/100*100;
    var economia = <?php echo "'$economia'"; ?>;
    economia = economia/100*100;
    var empreendedorismo = <?php echo "'$empreendedorismo'"; ?>;
    empreendedorismo = empreendedorismo/100*100;
    var estrategia = <?php echo "'$estrategia'"; ?>;
    estrategia = estrategia/100*100;
    var logisticas = <?php echo "'$logisticas'"; ?>;
    logisticas = logisticas/100*100;
    var marketing = <?php echo "'$marketing'"; ?>;
    marketing = marketing/100*100;
    var sustentabilidade = <?php echo "'$sustentabilidade'"; ?>;
    sustentabilidade = sustentabilidade/100*100;

    var resumoAprovado = <?php echo "'$resumoAprovado'"; ?>;
    var relatoAprovado = <?php echo "'$relatoAprovado'"; ?>;
    var artigoAprovado = <?php echo "'$artigoAprovado'"; ?>;

        resumoAprovado = resumoAprovado/100*100;
        relatoAprovado = relatoAprovado/100*100;
        artigoAprovado = artigoAprovado/100*100;

    var data = [
        {
            value: totalresumo,
            color:"#32CD32",
            highlight: "#00FF00",
            label: "Resumo"
        },
        {
            value: totalrelato,
            color: "#FF6347",
            highlight: "#FF0000",
            label: "Relato Técnico"
        },
        {
            value: totalartigo,
            color: "#00008B",
            highlight: "#0000FF",
            label: "Artigo Completo"
        }
    ]

    var data2 = [
        {
            value: gestao,
            color:"#990000",
            highlight: "#FF0000",
            label: "Gestão de Pessoas"
        },
        {
            value: desenvolvimento,
            color: "#009900",
            highlight: "#00FF00",
            label: "Desenvolvimento e Gestão"
        },
        {
            value: economia,
            color: "#000099",
            highlight: "#0000ff",
            label: "Economia e Finanças"
        },
          {
            value: empreendedorismo,
            color:"#999900",
            highlight: "#ffff00",
            label: "Empreendedorismo"
        },
        {
            value: estrategia,
            color: "#990099",
            highlight: "#ff00ff",
            label: "Estratégia, Planejamento"
        },
        {
            value: logisticas,
            color: "#009999",
            highlight: "#00ffff",
            label: "Logísticas e Operações"
        },
          {
            value: marketing,
            color:"#999999",
            highlight: "#cccccc",
            label: "Marketing e Mercados"
        },
        {
            value: sustentabilidade,
            color: "#000000",
            highlight: "#0f0f0f",
            label: "Sustentabilidade"// e Responsabilidade"
        }
    ]

    var data3 = [
        {
            value: resumoAprovado,
            color:"#32CD32",
            highlight: "#00FF00",
            label: "Resumo"
        },
        {
            value: relatoAprovado,
            color: "#FF6347",
            highlight: "#FF0000",
            label: "Relato Técnico"
        },
        {
            value: artigoAprovado,
            color: "#00008B",
            highlight: "#0000FF",
            label: "Artigo Completo"
        }
    ]

</script>
    
    
    

   
