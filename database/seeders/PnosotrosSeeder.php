<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pnosotros;

class PnosotrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Pnosotros = Pnosotros::create([
            'texto' => 'El Centro de Capacitación “Tecnobots” tiene como Visión convertirse en un mediano plazo en una institución educativa líder en la capacitación a adolescentes mayores de 14 años con una educación de calidad con carácter científico, humanístico y técnico, dispuestos a vencer retos en el campo educativo y laboral.',
            'texto2' => 'Mejorar en nuestros estudiantes sus capacidades cognitivas a partir de sus saberes previos y de sus experiencias de vida, orientados a la conducción de aprendizajes significativos y utilitarios con la práctica de valores y actitudes positivas que los conduzcan a mejorar su relación con su medio social y laboral en el ámbito local, región y nacional.',
            'texto3' => 'Formar al estudiante con conocimientos de alto nivel y que su formación se base en temas Humanísticos, científicos y técnicos, respetando las leyes, practicando valores morales y buenas costumbres.Contribuir a la  permanente actualización de los educados que laboran   en  las  diferentes estructuras  empresariales del país.Propiciar  el  desarrollo    de   la   Pequeña,  mediana empresa y de Cooperativas'
        ]);
    }
}
