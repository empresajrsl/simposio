<?php 


// conta quantos cadastros existem por categoria
$busca = select("count(id_artigo) as total","sl_artigo","categoria = 'Resumo expandido'" );
$totalresumo = $busca[0]['total'];

$busca2 = select("count(id_artigo) as total","sl_artigo","categoria = 'Relato técnico'" );
$totalrelato = $busca2[0]['total'];

$busca3 = select("count(id_artigo) as total","sl_artigo","categoria = 'Artigo completo'" );
$totalartigo = $busca3[0]['total'];


// Conta Quantos cadastros existem por area

$areabusca = select("count(id_artigo) as total","sl_artigo","area = 'Gestão de Pessoas e Estudos Organizacionais'" );
$gestao = $areabusca[0]['total'];

$areabusca2 = select("count(id_artigo) as total","sl_artigo","area = 'Desenvolvimento e Gestão'" );
$desenvolvimento = $areabusca2[0]['total'];

$areabusca3 = select("count(id_artigo) as total","sl_artigo","area = 'Economia e Finanças'" );
$economia = $areabusca3[0]['total'];

$areabusca4 = select("count(id_artigo) as total","sl_artigo","area = 'Empreendedorismo, Inovação e Tecnologia'" );
$empreendedorismo = $areabusca4[0]['total'];

$areabusca5 = select("count(id_artigo) as total","sl_artigo","area = 'Estratégia, Planejamento e Governança'" );
$estrategia = $areabusca5[0]['total'];

$areabusca6 = select("count(id_artigo) as total","sl_artigo","area = 'Logísticas e Operações'" );
$logisticas = $areabusca6[0]['total'];

$areabusca7 = select("count(id_artigo) as total","sl_artigo","area = 'Marketing e Mercados'" );
$marketing = $areabusca7[0]['total'];

$areabusca8 = select("count(id_artigo) as total","sl_artigo","area = 'Sustentabilidade e Responsabilidade Sócio Ambiental'" );
$sustentabilidade = $areabusca8[0]['total'];


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

    console.log(totalresumo+"-----"+totalrelato+"-----"+totalartigo);
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
            color:"#32CD32",
            highlight: "#00FF00",
            label: "Gestão de Pessoas e Estudos Organizacionais"
        },
        {
            value: desenvolvimento,
            color: "#FF6347",
            highlight: "#FF0000",
            label: "Desenvolvimento e Gestão"
        },
        {
            value: economia,
            color: "#00008B",
            highlight: "#0000FF",
            label: "Economia e Finanças"
        },
          {
            value: empreendedorismo,
            color:"#32CD32",
            highlight: "#00FF00",
            label: "Empreendedorismo, Inovação e Tecnologia"
        },
        {
            value: estrategia,
            color: "#FF6347",
            highlight: "#FF0000",
            label: "Estratégia, Planejamento e Governança"
        },
        {
            value: logisticas,
            color: "#00008B",
            highlight: "#0000FF",
            label: "Logísticas e Operações"
        },
          {
            value: marketing,
            color:"#32CD32",
            highlight: "#00FF00",
            label: "Marketing e Mercados"
        },
        {
            value: sustentabilidade,
            color: "#FF6347",
            highlight: "#FF0000",
            label: "Sustentabilidade e Responsabilidade Sócio Ambiental"
        }
    ]

    var data3 = [
        {
            value: 35,
            color:"#32CD32",
            highlight: "#00FF00",
            label: "Resumo"
        },
        {
            value: 50,
            color: "#FF6347",
            highlight: "#FF0000",
            label: "Relato Técnico"
        },
        {
            value: 15,
            color: "#00008B",
            highlight: "#0000FF",
            label: "Artigo Completo"
        }
    ]

</script>
    
    
    

   
