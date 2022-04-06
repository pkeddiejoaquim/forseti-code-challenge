<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Juridico\texto;

class TextoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Texto::create([
            'nm_arquivo'=>'Procuração Ad-Judicia',
            'descricao'=>'PROCURAÇÃO AD JUDICIA ET EXTRA'
        ]);
        Texto::create([
            'nm_arquivo'=>'Pericia Informatica',
            'descricao'=>'LAUDO PERICIAL DE INFORMATICA'
        ]);
        Texto::create([
            'nm_arquivo'=>'Pericia Grafotecnica',
            'descricao'=>'LAUDO PERICIAL DE GRAFOTECNICA'
        ]);
        Texto::create([
            'nm_arquivo'=>'AÇÃO DE COBRANÇA',
            'descricao'=>'AÇÃO DE COBRANÇA CPC'
        ]);
        Texto::create([
            'nm_arquivo'=>'Honorarios Advocaticios - Trabalhista',
            'descricao'=>'Contrato de Honorarios Advocaticios - Trabalhista'
        ]);
        Texto::create([
            'nm_arquivo'=>'Inquerito Judicial - Trabalhista',
            'descricao'=>'Inquerito Judicial Trabalhista'
        ]);
        Texto::create([
            'nm_arquivo'=>'AÇÃO BENEFICIO PREVIDENCIARIO',
            'descricao'=>'Ação de Concessão de Benefício Previdenciário (Geral)'
        ]);
        Texto::create([
            'nm_arquivo'=>'Ação de Obrigação de Fazer - Sentença',
            'descricao'=>'Ação de Obrigação de Fazer (Execução de Sentença)'
        ]);
        Texto::create([
            'nm_arquivo'=>'Ação Maus Tratos a Animais',
            'descricao'=>'Ação Maus Tratos a Animais - Direitto Ambiental'
        ]);
        Texto::create([
            'nm_arquivo'=>'HABEAS CORPUS',
            'descricao'=>'Habeas Corpus - Direito Penal'
        ]);
        Texto::create([
            'nm_arquivo'=>'CONTESTAÇÂO - TRABALHISTA',
            'descricao'=>'Contestação Trabalhista'
        ]);
    }
}
