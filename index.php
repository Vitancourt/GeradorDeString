$tamanho_min = 5;

$tamanho_max = 50;

$tamanho = mt_rand(5,50);

$all_str = "abcdefghijlkmnopqrstuvxyzwABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";

$quantidade_para_gerar = 500;

for ($j = 0; $j < $quantidade_para_gerar; $j ++) {

    $nome = "";

    for ($i = 0;$i <= $tamanho;$i++){

        $nome .= $all_str[mt_rand(0,61)];

    }

    echo $nome."<br>";

}
