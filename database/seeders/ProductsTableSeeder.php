<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            'name' => 'CardioReport',
            'slug' => 'CARDIOLOGÍA',
            'details' => '',
            'price' => 24.99,
            'shipping_cost' => 2.99,
            'description' => 'Genere y manipule gráficas e indicadores, imprima revisiones pre-operatorias, resultados de ecografías, récipes, constancias, referencias, informes médicos, etc.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cardioreport_0.jpg'
        ]);

        Product::create([
            'name' => 'DermaReport',
            'slug' => 'DERMATOLOGÍA',
            'details' => '',
            'price' => 24.99,
            'shipping_cost' => 2.99,
            'description' => 'Imprima recetas, informes médicos, visualice y compare las imágenes de sus pacientes. Lleve el control de las intervenciones quirúrgicas y centralice la gestión de las historias clínicas.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'dermoreport.jpg'
        ]);

        Product::create([
            'name' => 'EcoReport',
            'slug' => 'ECOGRAFÍA',
            'details' => '',
            'price' => 24.99,
            'shipping_cost' => 2.99,
            'description' => 'Incorpore a sus reportes todos los formatos que produzca el ultrasonido, maneje las citas, genere estadísticas y ejecute tareas de administración propias de la operación del consultorio.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'ecoreport.jpg'
        ]);

        Product::create([
            'name' => 'EstheticReport',
            'slug' => 'MEDICINA ESTÉTICA',
            'details' => '',
            'price' => 24.99,
            'shipping_cost' => 2.99,
            'description' => 'Incorpore a sus reportes todos los formatos que produzca el ultrasonido, maneje las citas, genere estadísticas y ejecute tareas de administración propias de la operación del consultorio.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'estheticreport.jpg'
        ]);

        Product::create([
            'name' => 'GinecoReport',
            'slug' => 'GINECOLOGÍA',
            'details' => '',
            'price' => 24.99,
            'shipping_cost' => 2.99,
            'description' => 'Lleve el control pre-natal, imprima el reporte de exámenes especializados como ecos y colposcopias, emita con comodidad recetas, constancias, informes médicos, etc.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'ginecoreport.jpg'
        ]);

        Product::create([
            'name' => 'MedicReport',
            'slug' => 'MEDICINA INTERNA',
            'details' => '',
            'price' => 24.99,
            'shipping_cost' => 2.99,
            'description' => 'Genere gráficas de indicadores, maneje la información de cada paciente, imprima evaluaciones pre-operatorias, recetas, constancias, informes médicos, etc.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'medicalreport.jpg'
        ]);

        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 2499.99,
            'shipping_cost' => 29.99,
            'description' => 'MackBook Pro',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'macbook-pro.png'
        ]);

        Product::create([
            'name' => 'Dell Vostro 3557',
            'slug' => 'vostro-3557',
            'details' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 1499.99,
            'shipping_cost' => 19.99,
            'description' => 'Dell Vostro 3557',
            'category_id' => 2,
            'brand_id' => 2,
            'image_path' => 'dell-v3557.png'
        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'slug' => 'iphone-11-pro',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 649.99,
            'shipping_cost' => 14.99,
            'description' => 'iPhone 11 Pro',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'iphone-11-pro.png'
        ]);

        Product::create([
            'name' => 'Remax 610D Headset',
            'slug' => 'remax-610d',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 8.99,
            'shipping_cost' => 1.89,
            'description' => 'Remax 610D Headset',
            'category_id' => 2,
            'brand_id' => 3,
            'image_path' => 'remax-610d.jpg'
        ]);

        Product::create([
            'name' => 'Samsung LED TV',
            'slug' => 'samsung-led-24',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'shipping_cost' => 12.59,
            'description' => 'Samsung LED TV',
            'category_id' => 2,
            'brand_id' => 4,
            'image_path' => 'samsung-led-24.png'
        ]);
    }
}
