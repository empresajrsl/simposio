<?php 

include("funcoesmysql.php");

// conta quantos cadastros existem
$busca = select("count(id_artigo) as total","sl_artigo","categoria = 'Resumo expandido'" );
$totalresumo = $busca[0]['total'];

$busca2 = select("count(id_artigo) as total","sl_artigo","categoria = 'Relato técnico'" );
$totalrelato = $busca2[0]['total'];

$busca3 = select("count(id_artigo) as total","sl_artigo","categoria = 'Artigo completo'" );
$totalartigo = $busca3[0]['total'];


?> 



<script type="text/javascript"> 
    
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

    var data = [
        {
            value: totalresumo,
            color:"#32CD32",
            highlight: "#00FF00",
            label: "Reusmo"
        },
        {
            value: totalrelato,
            color: "#FF6347",
            highlight: "#FF0000",
            label: "relato técnico"
        },
        {
            value: totalartigo,
            color: "#00008B",
            highlight: "#0000FF",
            label: "Artigo completo"
        }
    ]

    var data2 = [
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
            label: "relato técnico"
        },
        {
            value: 15,
            color: "#00008B",
            highlight: "#0000FF",
            label: "Artigo completo"
        }
    ]

    var data3 = [
        {
            value: 35,
            color:"#32CD32",
            highlight: "#00FF00",
            label: "Reusmo"
        },
        {
            value: 50,
            color: "#FF6347",
            highlight: "#FF0000",
            label: "relato técnico"
        },
        {
            value: 15,
            color: "#00008B",
            highlight: "#0000FF",
            label: "Artigo completo"
        }
    ]

</script>
    
    
    

   
